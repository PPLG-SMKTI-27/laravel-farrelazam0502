@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')

<div class="relative text-slate-200 font-sans min-h-screen overflow-x-hidden">

    <!-- Starry Night Background (Fixed) -->
    <div id="starry-sky" class="fixed inset-0 z-0 bg-[#F8F5EC] dark:bg-gradient-to-b dark:from-[#0f172a] dark:to-[#020617] pointer-events-none overflow-hidden transition-colors duration-700">
    </div>

    <!-- GLOBAL CREAM BLOBS & EDGE PEBBLES (Visible across ALL sections in Light Mode) -->
    <div class="fixed inset-0 z-[1] pointer-events-none dark:hidden overflow-hidden">
        <!-- Cream Blobs (Persistent across scroll) -->
        <div class="absolute top-[10%] left-[-5%] w-[50%] h-[50%] bg-[#e5eee2]/40 blur-[130px] rounded-[100%]"></div>
        <div class="absolute top-[40%] right-[-10%] w-[45%] h-[50%] bg-[#f2e2be]/35 blur-[140px] rounded-[100%]"></div>
        <div class="absolute bottom-[5%] left-[10%] w-[55%] h-[45%] bg-[#eedebf]/30 blur-[120px] rounded-[100%]"></div>
        <div class="absolute top-[60%] left-[-8%] w-[40%] h-[40%] bg-[#e2e8dd]/35 blur-[110px] rounded-[100%]"></div>

        <!-- Edge Pebbles Left Side -->
        <svg class="fixed left-0 bottom-0 w-[300px] h-[400px] opacity-60" viewBox="0 0 300 400" fill="none">
            <ellipse cx="40" cy="320" rx="70" ry="45" fill="#c8c2a8" fill-opacity="0.50" transform="rotate(-12 40 320)"/>
            <ellipse cx="120" cy="350" rx="55" ry="35" fill="#bdb898" fill-opacity="0.45" transform="rotate(8 120 350)"/>
            <ellipse cx="20" cy="370" rx="45" ry="30" fill="#d1cbb2" fill-opacity="0.40" transform="rotate(-5 20 370)"/>
            <ellipse cx="180" cy="375" rx="40" ry="25" fill="#c5bfa5" fill-opacity="0.35" transform="rotate(15 180 375)"/>
            <ellipse cx="80" cy="390" rx="35" ry="22" fill="#b8b298" fill-opacity="0.45" transform="rotate(-8 80 390)"/>
        </svg>

        <!-- Edge Pebbles Right Side -->
        <svg class="fixed right-0 bottom-0 w-[250px] h-[350px] opacity-40" viewBox="0 0 250 350" fill="none">
            <ellipse cx="200" cy="300" rx="50" ry="32" fill="#c8c2a8" fill-opacity="0.40" transform="rotate(10 200 300)"/>
            <ellipse cx="160" cy="330" rx="40" ry="25" fill="#bdb898" fill-opacity="0.35" transform="rotate(-12 160 330)"/>
            <ellipse cx="220" cy="340" rx="35" ry="20" fill="#d1cbb2" fill-opacity="0.30" transform="rotate(5 220 340)"/>
        </svg>

        <!-- Sparkles (Global) -->
        <div class="absolute top-[15%] left-[8%] w-[5px] h-[5px] bg-white rounded-full shadow-[0_0_15px_rgba(255,255,255,0.8)] animate-pulse"></div>
        <div class="absolute top-[45%] right-[12%] w-[4px] h-[4px] bg-white rounded-full shadow-[0_0_12px_rgba(255,255,255,0.7)] animate-pulse" style="animation-delay: 1.2s;"></div>
        <div class="absolute top-[70%] left-[20%] w-[6px] h-[6px] bg-white rounded-full shadow-[0_0_18px_rgba(255,255,255,0.9)] animate-pulse" style="animation-delay: 0.5s;"></div>
        <div class="absolute top-[30%] right-[25%] w-[3px] h-[3px] bg-white rounded-full shadow-[0_0_10px_rgba(255,255,255,0.6)] animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-[85%] right-[8%] w-[5px] h-[5px] bg-white rounded-full shadow-[0_0_15px_rgba(255,255,255,0.8)] animate-pulse" style="animation-delay: 1.8s;"></div>
    </div>

    <!-- Main Content Wrapper (Above Stars) -->
    <div class="relative z-10">
        @include('section.hero')
        @include('section.about')
        @include('section.skill')
        @include('section.certificate')
        @include('section.project')
        @include('section.contact')
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sky = document.getElementById('starry-sky');
        const numStars = 100;
        
        for (let i = 0; i < numStars; i++) {
            let star = document.createElement("div");
            star.classList.add("absolute", "bg-white", "rounded-full", "hidden", "dark:block");
            
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
                star.className = "absolute pointer-events-none hidden dark:block";
                
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

    // ==========================================
    // CINEMATIC SECTION REVEALS (Varied & Slow)
    // ==========================================
    gsap.registerPlugin(ScrollTrigger);

    // 1. Hero Section Timeline (Immediate & Sequential)
    const heroTl = gsap.timeline({ defaults: { ease: "power4.out", duration: 1.8 }});
    
    heroTl.from(".hero-part-1", { y: 40, opacity: 0, duration: 1.6 })
          .from(".hero-part-2", { y: 40, opacity: 0, duration: 1.6 }, "-=1.2")
          .from(".hero-part-3", { y: 40, opacity: 0, duration: 1.6 }, "-=1.2")
          .from(".hero-subtitle", { y: 20, opacity: 0, duration: 1.4 }, "-=1.0")
          .from(".hero-cta", { y: 20, opacity: 0, duration: 1.4 }, "-=1.2")
          .from(".hero-stats", { y: 20, opacity: 0, duration: 1.4 }, "-=1.2")
          .from(".hero-visual", { y: 40, scale: 0.98, opacity: 0, duration: 2 }, "-=1.4")
          .to("#hero-scroll", { opacity: 1, duration: 1.2 }, "-=0.8");

    // Helper for Section Reveals
    const revealSettings = (trigger, direction = 'x', value = 100) => {
        const config = {
            opacity: 0,
            duration: 1.8,
            ease: "expo.out",
            scrollTrigger: {
                trigger: trigger,
                start: "top 85%",
                once: true
            }
        };
        config[direction] = value;
        return config;
    };

    // 2. About Section: Slide from RIGHT
    if(document.querySelector("#tentang-saya")) {
        gsap.from("#tentang-saya", revealSettings("#tentang-saya", "x", 150));
    }

    // 3. Education Timeline: Slide from LEFT
    if(document.querySelector("#karir")) {
        gsap.from("#karir", revealSettings("#karir", "x", -150));
    }

    // 4. Skills Section: Staggered Fade Up
    if(document.querySelector("#skills-grid")) {
        gsap.from("#skills-grid > div", {
            y: 60,
            opacity: 0,
            duration: 1.5,
            stagger: 0.1,
            ease: "power3.out",
            scrollTrigger: {
                trigger: "#skills-grid",
                start: "top 85%",
                once: true
            }
        });
    }

    // 5. Certificates: Fade Up
    if(document.querySelector("#certCarousel")) {
        gsap.from("#certCarousel", {
            y: 80,
            opacity: 0,
            duration: 1.8,
            ease: "expo.out",
            scrollTrigger: {
                trigger: "#certificate",
                start: "top 80%",
                once: true
            }
        });
    }

    // 6. Projects Section: Slide from RIGHT
    if(document.querySelector("#projectCarousel")) {
        gsap.from("#projectCarousel", {
            x: 150,
            opacity: 0,
            duration: 1.8,
            ease: "power4.out",
            scrollTrigger: {
                trigger: "#project",
                start: "top 80%",
                once: true
            }
        });
    }

    // 7. Contact Section: Zoom Out into View
    if(document.querySelector("#contact")) {
        gsap.from("#contact", {
            scale: 1.05,
            y: 40,
            opacity: 0,
            duration: 2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: "#contact",
                start: "top 85%",
                once: true
            }
        });
    }
});
</script>

@endsection
