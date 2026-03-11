<section id="about"
class="relative min-h-[150vh] md:min-h-screen flex flex-col justify-center items-center text-center px-6 overflow-hidden pt-24 pb-20">

<!-- Background handled globally by Starry Sky Canvas -->

<!-- CONTENT -->
<div class="relative z-20">
<h2 class="text-3xl md:text-5xl font-bold mb-6 pb-2 bg-gradient-to-r from-emerald-400 to-blue-400 bg-clip-text text-transparent">
Tentang Saya
</h2>

<p class="text-indigo-200 text-sm md:text-lg max-w-xl leading-relaxed mb-10 px-4">
Saya adalah pelajar yang fokus pada web development modern menggunakan
HTML, CSS, JavaScript, dan Laravel.
</p>
</div>

<!-- FLOATING ICONS -->
<div class="absolute inset-0 pointer-events-none z-20">

<a href="#tk" class="planet planet-mercury">
    <div class="planet-label">
        <div class="line"></div>
        <span>TK</span>
    </div>
</a>
<a href="#sd" class="planet planet-venus">
    <div class="planet-label">
        <div class="line"></div>
        <span>SD</span>
    </div>
</a>
<a href="#smp" class="planet planet-earth">
    <div class="planet-label">
        <div class="line"></div>
        <span>SMP</span>
    </div>
</a>

<a href="#smk" class="planet planet-mars">
    <div class="planet-label">
        <div class="line"></div>
        <span>SMK</span>
    </div>
</a>
<a href="#smp2" class="planet planet-jupiter">
    <div class="planet-label">
        <div class="line"></div>
        <span>SMP2</span>
    </div>
</a>
<a href="#sd2" class="planet planet-saturn">
    <div class="planet-label">
        <div class="line"></div>
        <span>SD2</span>
    </div>
</a>

<a href="#tk2" class="planet planet-uranus">
    <div class="planet-label">
        <div class="line"></div>
        <span>TK2</span>
    </div>
</a>

<a href="https://wa.me/628xxxxxxxxxx" target="_blank" class="planet planet-neptune">
    <div class="planet-label">
        <div class="line"></div>
        <span><i class="fa-brands fa-whatsapp"></i></span>
    </div>
</a>

<a href="https://instagram.com/username" target="_blank" class="planet planet-moon">
    <div class="planet-label">
        <div class="line"></div>
        <span><i class="fa-brands fa-instagram"></i></span>
    </div>
</a>

<a href="mailto:emailkamu@gmail.com" class="planet planet-sun">
    <div class="planet-label">
        <div class="line"></div>
        <span><i class="fa-solid fa-envelope"></i></span>
    </div>
</a>

</div>
</section>

<style>

/* Base Realistic Planet */
.planet {
    position: absolute;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(255,255,255,0.95);
    font-size: 0.8rem;
    font-weight: bold;
    text-shadow: 1px 1px 4px rgba(0,0,0,1), -1px -1px 4px rgba(0,0,0,1);
    pointer-events: auto;
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s;
    text-decoration: none;
    z-index: 10;
    /* Create a 3D Base volume shadow so all planets look like spheres */
    box-shadow: 
        inset -15px -15px 25px rgba(0,0,0,0.9), 
        inset 5px 5px 15px rgba(255,255,255,0.3);
}

/* Sleek Planet Labels */
.planet-label {
    position: absolute;
    top: -20px; /* Position slightly above */
    left: 100%; /* Position to the right */
    display: flex;
    align-items: center;
    gap: 8px;
    opacity: 0.7;
    transition: opacity 0.3s, transform 0.3s;
    pointer-events: none;
    transform: translateX(10px);
}

.planet:hover .planet-label {
    opacity: 1;
    transform: translateX(15px);
}


.planet-label .line {
    width: 30px;
    height: 1px;
    background: linear-gradient(90deg, rgba(255,255,255,0.8), transparent);
}

.planet-label span {
    background: rgba(15, 23, 42, 0.7);
    padding: 4px 10px;
    border-radius: 6px;
    backdrop-filter: blur(4px);
    border: 1px solid rgba(255,255,255,0.1);
    color: #e2e8f0;
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 0.05em;
    white-space: nowrap;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.5);
}

@media (max-width: 768px) {
    .planet-label span {
        font-size: 0.65rem;
        padding: 3px 8px;
    }
}

.planet:hover {
    transform: scale(1.3) !important;
    z-index: 20;
}

/* EARTH (Blue marble with atmosphere & land) */
.planet-earth {
    background: 
        radial-gradient(circle at 40% 40%, rgba(255,255,255,0.2) 0%, transparent 40%), /* cloud */
        radial-gradient(circle at 20% 70%, rgba(255,255,255,0.3) 10%, transparent 30%), /* cloud */
        radial-gradient(ellipse at 70% 30%, #2f6a3b 10%, transparent 40%), /* land */
        radial-gradient(ellipse at 30% 60%, #2f6a3b 20%, transparent 50%), /* land */
        #1b5b9c; /* ocean */
    box-shadow: 
        inset -15px -15px 25px rgba(0,0,0,0.9), 
        inset 5px 5px 15px rgba(255,255,255,0.3),
        0 0 20px rgba(79, 172, 254, 0.5); /* blue atmosphere glow */
}

/* MARS (Rusty red with dark spots) */
.planet-mars {
    background: 
        radial-gradient(circle at 60% 40%, rgba(0,0,0,0.3) 10%, transparent 30%),
        radial-gradient(circle at 30% 70%, rgba(0,0,0,0.2) 15%, transparent 40%),
        #bc5e3a; /* rust base */
    box-shadow: 
        inset -15px -15px 25px rgba(0,0,0,0.9), 
        inset 5px 5px 15px rgba(255,255,255,0.3),
        0 0 15px rgba(188, 94, 58, 0.4);
}

/* MOON (Rocky grey) */
.planet-moon {
    width: 50px;
    height: 50px;
    background: 
        radial-gradient(circle at 30% 20%, rgba(0,0,0,0.2) 10%, transparent 20%),
        radial-gradient(circle at 60% 70%, rgba(0,0,0,0.25) 15%, transparent 30%),
        radial-gradient(circle at 70% 30%, rgba(0,0,0,0.2) 8%, transparent 15%),
        #d4d4d4;
    box-shadow: 
        inset -10px -10px 15px rgba(0,0,0,0.9), 
        inset 3px 3px 10px rgba(255,255,255,0.3),
        0 0 15px rgba(255, 255, 255, 0.2);
}

/* JUPITER (Gas giant bands) */
.planet-jupiter {
    width: 85px;
    height: 85px;
    background: repeating-linear-gradient(
        170deg,
        #c3a171 0%, #c3a171 10%,
        #e3cdb0 10%, #e3cdb0 20%,
        #a57c5b 20%, #a57c5b 25%,
        #d1b48c 25%, #d1b48c 35%,
        #8b5a2b 35%, #8b5a2b 40%,
        #e3cdb0 40%, #e3cdb0 50%
    );
    box-shadow: 
        inset -20px -20px 30px rgba(0,0,0,0.9), 
        inset 5px 5px 15px rgba(255,255,255,0.3),
        0 0 20px rgba(195, 161, 113, 0.3);
}

/* SATURN (Gas giant with ring) */
.planet-saturn {
    width: 75px;
    height: 75px;
    background: repeating-linear-gradient(
        160deg,
        #e2c286 0%, #e2c286 15%,
        #d3b071 15%, #d3b071 25%,
        #f4d799 25%, #f4d799 40%
    );
    box-shadow: 
        inset -15px -15px 25px rgba(0,0,0,0.9), 
        inset 5px 5px 15px rgba(255,255,255,0.3),
        0 0 20px rgba(226, 194, 134, 0.3);
    /* Make sure ring stays underneath pseudo-highlight/shadows by using transform-style */
    transform-style: preserve-3d;
}
/* Saturn's Realistic Ring */
.planet-saturn::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 220%;
    height: 30%;
    border-radius: 50%;
    /* Multiple box shadows to create complex ring system */
    box-shadow: 
        inset 0 0 0 5px rgba(192, 172, 126, 0.8),
        inset 0 0 0 10px rgba(220, 201, 154, 0.6),
        inset 0 0 0 15px rgba(154, 132, 90, 0.4),
        0 0 8px rgba(255,255,255,0.2);
    /* Tilted backward */
    transform: translate(-50%, -50%) rotate(-20deg) translateZ(-1px);
    z-index: -1; 
    pointer-events: none;
}

/* NEPTUNE (Deep icy blue gas) */
.planet-neptune {
    width: 80px;
    height: 80px;
    background: linear-gradient(160deg, #3d5afe, #1a237e);
    box-shadow: 
        inset -15px -15px 30px rgba(0,0,0,0.9), 
        inset 5px 5px 20px rgba(128, 208, 199, 0.5),
        0 0 25px rgba(61, 90, 254, 0.5);
}

/* VENUS (Thick glowing clouds) */
.planet-venus {
    background: radial-gradient(circle at 40% 40%, #ffd180, #ffab40);
    box-shadow: 
        inset -15px -15px 25px rgba(0,0,0,0.8), 
        inset 5px 5px 15px rgba(255,255,255,0.4),
        0 0 20px rgba(255, 171, 64, 0.4);
}

/* MERCURY (Small rocky cratered) */
.planet-mercury {
    width: 55px;
    height: 55px;
    background: 
        radial-gradient(circle at 20% 30%, rgba(0,0,0,0.3) 5%, transparent 15%),
        radial-gradient(circle at 70% 60%, rgba(0,0,0,0.4) 10%, transparent 25%),
        radial-gradient(circle at 40% 80%, rgba(0,0,0,0.3) 8%, transparent 20%),
        #8e8e8e;
    box-shadow: 
        inset -12px -12px 20px rgba(0,0,0,0.9), 
        inset 4px 4px 12px rgba(255,255,255,0.3),
        0 0 10px rgba(142, 142, 142, 0.3);
}

/* URANUS (Featureless cyan, sideways tilt) */
.planet-uranus {
    width: 75px;
    height: 75px;
    background: radial-gradient(circle at 40% 40%, #84ffff, #00bada);
    box-shadow: 
        inset -15px -15px 25px rgba(0,0,0,0.9), 
        inset 5px 5px 15px rgba(255,255,255,0.4),
        0 0 20px rgba(132, 255, 255, 0.4);
    transform-style: preserve-3d;
}
/* Faint sideways ring */
.planet-uranus::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 170%;
    height: 6%;
    border-radius: 50%;
    border-top: 2px solid rgba(255,255,255,0.5);
    border-bottom: 2px solid rgba(255,255,255,0.1);
    transform: translate(-50%, -50%) rotate(70deg) translateZ(-1px);
    pointer-events: none;
    z-index: -1;
}

/* SUN (Glowing star, no dark shadows) */
.planet-sun {
    width: 95px;
    height: 95px;
    background: radial-gradient(circle at 50% 50%, #ffffff 0%, #fff176 20%, #ffb300 60%, #ff6f00 100%);
    box-shadow: 
        inset 0 0 20px rgba(255,255,255,0.8),
        0 0 40px 10px rgba(255, 179, 0, 0.6),
        0 0 60px 20px rgba(255, 111, 0, 0.4);
}

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

<script>

const planets = document.querySelectorAll(".planet");
const about = document.querySelector("#about");
let positions = [];

function calculateFormation() {
    const w = about.offsetWidth;
    const h = about.offsetHeight;
    
    // Portrait-friendly ellipse for mobile
    const isMobile = window.innerWidth < 768;
    const rx = isMobile ? w * 0.40 : w * 0.35;
    const ry = isMobile ? h * 0.38 : h * 0.35; // Taller orbit for vertical screens
    
    const cx = w / 2;
    const cy = h / 2;

    planets.forEach((el, i) => {
        const a = (i / planets.length) * Math.PI * 2;
        const elementRadius = el.offsetWidth / 2;
        
        // Even smaller on mobile to feel less cramped
        if (isMobile) {
            el.style.transform = "scale(0.4)"; 
        } else {
            el.style.transform = "scale(1)";
        }

        const l = cx + rx * Math.cos(a) - elementRadius;
        const t = cy + ry * Math.sin(a) - elementRadius;

        positions[i] = { 
            angle: a, 
            left: l, 
            top: t, 
            radius: elementRadius,
            isHovered: false 
        };

        el.style.left = l + "px";
        el.style.top = t + "px";

        // Add Hover Listeners
        el.addEventListener('mouseenter', () => {
            positions[i].isHovered = true;
        });
        el.addEventListener('mouseleave', () => {
            positions[i].isHovered = false;
        });
    });
}

function rotatePlanets() {
    const w = about.offsetWidth;
    const h = about.offsetHeight;

    const isMobile = window.innerWidth < 768;
    const rx = isMobile ? w * 0.40 : w * 0.35;
    const ry = isMobile ? h * 0.38 : h * 0.35;
    
    const cx = w / 2;
    const cy = h / 2;

    planets.forEach((el, i) => {
        if(!positions[i] || positions[i].isHovered) return;
        
        // Slightly faster rotation on mobile to feel more dynamic
        positions[i].angle += isMobile ? 0.0004 : 0.0002;

        const radius = positions[i].radius;
        const l = cx + rx * Math.cos(positions[i].angle) - radius;
        const t = cy + ry * Math.sin(positions[i].angle) - radius;

        gsap.to(el, {
            x: l - positions[i].left,
            y: t - positions[i].top,
            duration: 0.3,
            ease: "none"
        });
    });

    requestAnimationFrame(rotatePlanets);
}

calculateFormation();
rotatePlanets();
window.addEventListener("resize", calculateFormation);

</script>
