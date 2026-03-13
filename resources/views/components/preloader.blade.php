<div id="preloader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-[#020617] transition-opacity duration-1000">
    <canvas id="preloader-canvas" class="absolute inset-0 w-full h-full"></canvas>
    
    {{-- Central Black Hole Singularity --}}
    <div id="preloader-core" class="relative z-10 w-4 h-4 rounded-full bg-black border border-white/20 shadow-[0_0_20px_rgba(255,255,255,0.1),inset_0_0_15px_rgba(255,255,255,0.2)] opacity-0 scale-0 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-purple-600/20 animate-spin"></div>
    </div>
    
    {{-- Big Bang Flash Overlay --}}
    <div id="preloader-flash" class="absolute inset-0 bg-white opacity-0 pointer-events-none z-20"></div>
</div>

<style>
    #preloader-canvas {
        background: radial-gradient(circle at center, #0f172a 0%, #020617 100%);
    }
</style>

<script>
// Check if preloader already played in this session BEFORE anything else
if (sessionStorage.getItem('preloader_played')) {
    document.getElementById('preloader').style.display = 'none';
    document.body.classList.remove('overflow-hidden');
}

document.addEventListener('DOMContentLoaded', () => {
    // If skipped, don't run the rest of the initialization
    if (sessionStorage.getItem('preloader_played')) return;

    const preloader = document.getElementById('preloader');
    const canvas = document.getElementById('preloader-canvas');
    const ctx = canvas.getContext('2d');
    const core = document.getElementById('preloader-core');
    const flash = document.getElementById('preloader-flash');
    
    let particles = [];
    const isMobile = window.innerWidth < 768;
    const particleCount = isMobile ? 1200 : 2200;
    let width, height;
    let animationId;
    let phase = 'suction'; // suction, compression, explosion, formation
    let targetPixels = [];
    
    const fov = 400;

    function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        canvas.width = width * window.devicePixelRatio;
        canvas.height = height * window.devicePixelRatio;
        ctx.scale(window.devicePixelRatio, window.devicePixelRatio);
    }

    window.addEventListener('resize', resize);
    resize();

    function getTargetPixels() {
        const offCanvas = document.createElement('canvas');
        const offCtx = offCanvas.getContext('2d');
        offCanvas.width = width;
        offCanvas.height = height;
        offCtx.fillStyle = "white";
        
        // Responsive Font Size
        const fontSize = isMobile ? Math.min(width * 0.2, 80) : 130;
        offCtx.font = `900 ${fontSize}px 'Instrument Sans', sans-serif`;
        
        offCtx.textAlign = "center";
        offCtx.textBaseline = "middle";
        offCtx.fillText("FARREL", width / 2, height / 2);
        
        const imageData = offCtx.getImageData(0, 0, width, height).data;
        const coords = [];
        const step = isMobile ? 6 : 4; // Faster sampling on mobile
        
        for (let y = 0; y < height; y += step) {
            for (let x = 0; x < width; x += step) {
                if (imageData[(y * width + x) * 4 + 3] > 128) {
                    coords.push({ x, y });
                }
            }
        }
        return coords;
    }

    targetPixels = getTargetPixels();

    class Particle {
        constructor(id) {
            this.id = id;
            this.init();
        }

        init() {
            // Randomly distributed at start
            this.x = (Math.random() - 0.5) * width * 2;
            this.y = (Math.random() - 0.5) * height * 2;
            this.z = (Math.random() - 0.5) * 1000;
            
            this.size = Math.random() * 1.5 + 0.5;
            this.color = this.getRandomColor();
            this.alpha = 0; // Fade in at start
            
            // Explosion physics (pre-calculated)
            const theta = Math.random() * Math.PI * 2;
            const phi = Math.acos((Math.random() * 2) - 1);
            const speed = Math.random() * 35 + 15;
            this.evx = Math.sin(phi) * Math.cos(theta) * speed;
            this.evy = Math.sin(phi) * Math.sin(theta) * speed;
            this.evz = Math.cos(phi) * speed;
            
            // Current velocities
            this.vx = 0; this.vy = 0; this.vz = 0;
            
            // Targeted formation pos
            const tIdx = this.id % targetPixels.length;
            this.targetX = targetPixels[tIdx].x - width/2;
            this.targetY = targetPixels[tIdx].y - height/2;
            this.targetZ = 0;

            this.friction = 0.94;
        }

        getRandomColor() {
            const colors = ['#60a5fa', '#3b82f6', '#8b5cf6', '#ffffff', '#06b6d4', '#f472b6'];
            return colors[Math.floor(Math.random() * colors.length)];
        }

        update() {
            if (phase === 'suction') {
                this.alpha = Math.min(1, this.alpha + 0.02);
                // Gravity toward center
                const dx = -this.x;
                const dy = -this.y;
                const dz = -this.z;
                const dist = Math.sqrt(dx*dx + dy*dy + dz*dz) || 1;
                
                const force = 1200 / dist;
                this.vx += (dx / dist) * force;
                this.vy += (dy / dist) * force;
                this.vz += (dz / dist) * force;
                
                this.x += this.vx;
                this.y += this.vy;
                this.z += this.vz;
                this.vx *= 0.85; this.vy *= 0.85; this.vz *= 0.85;

                // If super close to center, hide them
                if (dist < 5) this.alpha = 0;

            } else if (phase === 'compression') {
                this.alpha = 0; // All particles inside the core
            } else if (phase === 'explosion') {
                if (this.alpha === 0) {
                    this.x = 0; this.y = 0; this.z = 0;
                    this.vx = this.evx; this.vy = this.evy; this.vz = this.evz;
                    this.alpha = 1;
                }
                this.x += this.vx;
                this.y += this.vy;
                this.z += this.vz;
                this.vx *= this.friction;
                this.vy *= this.friction;
                this.vz *= this.friction;
            } else if (phase === 'formation') {
                const dx = this.targetX - this.x;
                const dy = this.targetY - this.y;
                const dz = this.targetZ - this.z;
                this.x += dx * 0.18;
                this.y += dy * 0.18;
                this.z += dz * 0.18;
                this.alpha = 1;
            }
        }

        draw() {
            if (this.alpha <= 0) return;
            const scale = fov / (fov + this.z);
            const px = (this.x * scale) + width / 2;
            const py = (this.y * scale) + height / 2;
            const rSize = this.size * scale;

            if (px < 0 || px > width || py < 0 || py > height || scale < 0) return;

            ctx.save();
            ctx.globalAlpha = this.alpha;
            ctx.beginPath();
            ctx.arc(px, py, Math.max(0.1, rSize), 0, Math.PI * 2);
            ctx.fillStyle = this.color;
            ctx.fill();
            if (rSize > 1.2 && phase === 'formation') {
                ctx.shadowBlur = 10 * scale;
                ctx.shadowColor = this.color;
            }
            ctx.restore();
        }
    }

    for (let i = 0; i < particleCount; i++) particles.push(new Particle(i));

    function animate() {
        ctx.clearRect(0, 0, width, height);
        particles.forEach(p => { p.update(); p.draw(); });
        animationId = requestAnimationFrame(animate);
    }

    const tl = gsap.timeline({
        onComplete: () => {
            cancelAnimationFrame(animationId);
            preloader.classList.add('opacity-0');
            sessionStorage.setItem('preloader_played', 'true');
            setTimeout(() => {
                preloader.style.display = 'none';
                document.body.classList.remove('overflow-hidden');
            }, 800);
        }
    });

    document.body.classList.add('overflow-hidden');
    animate();

    // PHASE 1: BLACK HOLE SUCKING (Singularity)
    tl.to(core, { opacity: 1, scale: 1, duration: 1.2, ease: "power2.inOut", onStart: () => { phase = 'suction'; } })
      .to(core, { 
          scale: 0.2, 
          duration: 0.6, 
          ease: "power4.in",
          onStart: () => {
              // Accelerate intake
              gsap.to(core, { boxShadow: "0 0 100px rgba(59,130,246,0.5)", duration: 0.5 });
          }
      })
      
    // PHASE 2: HYPER-COMPRESSION (Tension)
      .to({}, { 
          duration: 0.4, 
          onStart: () => { phase = 'compression'; } 
      })

    // PHASE 3: THE BIG BANG (Duar!)
      .to(flash, {
          opacity: 1,
          duration: 0.05,
          onStart: () => {
              phase = 'explosion';
              core.style.display = 'none';
          }
      })
      .to(flash, { opacity: 0, duration: 0.6, ease: "power2.out" })

    // PHASE 4: LOGO SNAP
      .to({}, { 
          duration: 0.8,
          onStart: () => {
              setTimeout(() => { phase = 'formation'; }, 300);
          }
      })
      .to(preloader, {
          opacity: 0,
          duration: 0.8,
          ease: "power2.inOut",
          delay: 0.6
      });
});
</script>
