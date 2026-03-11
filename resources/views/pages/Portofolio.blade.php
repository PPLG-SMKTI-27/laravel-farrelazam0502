@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')

<div class="relative text-slate-200 font-sans min-h-screen">

    <!-- Starry Night Background (Fixed) -->
    <div id="starry-sky" class="fixed inset-0 z-0 bg-gradient-to-b from-[#0f172a] to-[#020617] pointer-events-none overflow-hidden">
    </div>

    <!-- Main Content Wrapper (Above Stars) -->
    <div class="relative z-10">
        @include('section.hero')
        @include('section.about')
        @include('section.skill')
        @include('section.project')
        @include('section.contact')

        <footer class="text-center py-8 text-slate-500 border-t border-white/5">
            © {{ date('Y') }} Farrel. All rights reserved.
        </footer>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sky = document.getElementById('starry-sky');
        const numStars = 100;
        
        for (let i = 0; i < numStars; i++) {
            let star = document.createElement("div");
            star.classList.add("absolute", "bg-white", "rounded-full");
            
            let size = Math.random() * 2 + 1; // 1px to 3px
            star.style.width = size + "px";
            star.style.height = size + "px";
            
            star.style.left = Math.random() * 100 + "vw";
            star.style.top = Math.random() * 100 + "vh";
            star.style.opacity = Math.random() * 0.5 + 0.3;
            
            sky.appendChild(star);
            
            // GSAP Twinkling animation
            gsap.to(star, {
                opacity: Math.random() * 0.8 + 0.2, // brighter
                scale: Math.random() * 1.5 + 1,
                duration: Math.random() * 2 + 1,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
                delay: Math.random() * 2
            });

            // GSAP Slow drift
            gsap.to(star, {
                y: "-=30",
                x: "+=" + (Math.random() * 20 - 10),
                duration: Math.random() * 10 + 10,
                repeat: -1,
                ease: "none"
            });
        }
        
    // Ultra-Realistic Light Streak Meteor (Multi-Spawn)
    function spawnMeteors() {
        const count = Math.floor(Math.random() * 2) + 2; // Spawns 2 or 3 meteors
        
        for(let i = 0; i < count; i++) {
            // Subtle delay for each group member
            setTimeout(() => {
                const star = document.createElement("div");
                star.className = "absolute pointer-events-none";
                
                star.style.width = (Math.random() * 100 + 150) + "px";
                star.style.height = "1.5px";
                star.style.background = "linear-gradient(90deg, #fff, transparent)";
                star.style.filter = "drop-shadow(0 0 4px #fff)";
                
                const startX = Math.random() * 80 + 40; 
                const startY = Math.random() * 60 - 20; 
                star.style.left = startX + "vw";
                star.style.top = startY + "vh";
                
                star.style.transform = "rotate(-45deg)";
                star.style.opacity = "0";

                sky.appendChild(star);

                gsap.to(star, {
                    x: "-=1000",
                    y: "+=1000",
                    opacity: 1,
                    duration: 0.6 + Math.random() * 0.4,
                    ease: "power2.in",
                    onComplete: () => star.remove()
                });
            }, i * 600); // 0.6s gap between each meteor in the cluster
        }

        // Trigger next cluster every 5-7 seconds
        setTimeout(spawnMeteors, 5000 + Math.random() * 2000);
    }

    // Initialize shooting star cycle
    setTimeout(spawnMeteors, 2000);
});
</script>

@endsection
