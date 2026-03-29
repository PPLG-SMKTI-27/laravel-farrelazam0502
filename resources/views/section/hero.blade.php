<section id="home" 
    class="min-h-screen relative flex items-center justify-center overflow-hidden pt-24 pb-16 px-6 transition-colors duration-700 bg-transparent dark:bg-transparent">
    
    <!-- Elegant Background Elements (Light Mode Only) -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-0 flex items-center justify-center dark:hidden">
        <!-- Thin Dotted Orbital Lines -->
        <svg class="absolute w-[200%] h-[200%] md:w-[150%] md:h-[150%] lg:w-[120%] lg:h-[120%] stroke-[#4b3621]/10 fill-none" style="stroke-dasharray: 4 6; stroke-width: 0.6;">
            <circle cx="50%" cy="50%" r="22%" />
            <circle cx="50%" cy="50%" r="35%" />
            <circle cx="50%" cy="50%" r="48%" />
        </svg>
        
        <!-- Soft Organic Blobs -->
        <div class="absolute top-[-10%] left-[-10%] w-[60%] h-[70%] bg-[#e5eee2]/50 blur-[130px] rounded-[100%]"></div>
        <div class="absolute top-[20%] left-[-10%] w-[70%] h-[80%] bg-[#eedebf]/40 blur-[150px] rounded-[100%]"></div>
        <div class="absolute bottom-[-10%] left-[20%] w-[50%] h-[60%] bg-[#e5ece5]/50 blur-[120px] rounded-[100%]"></div>
        <div class="absolute top-[5%] right-[-10%] w-[50%] h-[70%] bg-[#f2e2be]/40 blur-[140px] rounded-[100%]"></div>

        <!-- Bottom Cream Wave -->
        <svg class="absolute bottom-0 left-0 w-full h-[30%] opacity-100" viewBox="0 0 1440 500" preserveAspectRatio="none" fill="none">
            <path d="M-100,500 L-100,350 C50,300 200,380 350,340 C500,300 550,250 750,280 C950,310 1050,350 1200,320 C1350,290 1450,340 1550,350 L1550,500 Z" fill="#e8dfc8" fill-opacity="0.30"/>
            <path d="M-100,500 L-100,400 C100,360 250,420 400,380 C550,340 700,390 850,370 C1000,350 1150,410 1300,380 C1450,350 1550,390 1600,400 L1600,500 Z" fill="#d6cfb8" fill-opacity="0.20"/>
        </svg>
    </div>

    <!-- MAIN CONTENT CONTAINER -->
    <div class="relative z-10 max-w-7xl w-full flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16 mx-auto mt-6">
        
        <!-- LEFT: TYPOGRAPHY & CTA -->
        <div class="hero-content text-center lg:text-left flex flex-col items-center lg:items-start z-20 w-full lg:w-[55%] relative">

            <!-- Title -->
            <h1 class="hero-title text-[4rem] md:text-[5.5rem] lg:text-[6.5rem] font-black mb-6 leading-[0.9] tracking-tight font-playfair flex flex-col opacity-0 translate-y-6">
                <span class="text-[#413123] dark:text-slate-100 mb-1">Hello, I'm</span>
                <span class="text-[#215a49] dark:text-emerald-400 italic">Farrel</span>
                <span class="text-[#215a49] dark:text-emerald-400 italic">Azam</span>
            </h1>

            <!-- Subtitle -->
            <p class="hero-subtitle text-[#413123]/70 dark:text-slate-400 text-base md:text-[1.1rem] font-light max-w-lg mb-10 leading-[1.7] opacity-0 translate-y-4">
                A Web Developer crafting <span class="text-[#413123] dark:text-white font-semibold">high-performance</span>, 
                visually stunning digital experiences with a 
                <span class="italic font-dancing text-[#286050] dark:text-emerald-400 text-[1.5rem] font-medium leading-none inline-block">premium touch.</span>
            </p>

            <!-- CTA Buttons -->
            <div class="hero-cta flex flex-wrap justify-center lg:justify-start gap-4 mb-14 w-full opacity-0 translate-y-6">
                <a href="#project" class="group relative px-8 py-3.5 rounded-full bg-[#286050] dark:bg-[#1e5c4a] text-white font-semibold transition-all duration-300 hover:scale-[1.03] shadow-[0_12px_25px_rgba(40,96,80,0.25)] hover:shadow-[0_15px_30px_rgba(40,96,80,0.35)] flex items-center justify-center gap-2">
                    View My Projects <i class="fa-solid fa-arrow-right text-[10px] transition-transform group-hover:translate-x-1"></i>
                </a>
                
                <a href="#contact" class="px-8 py-3.5 rounded-full bg-[#fdfcf8]/80 dark:bg-slate-800/50 backdrop-blur-xl border border-[#4b3621]/10 dark:border-white/10 text-[#413123] dark:text-white font-semibold hover:bg-white dark:hover:bg-slate-800 transition-all duration-300 shadow-sm flex items-center justify-center hover:shadow-md">
                    Hire Me
                </a>
            </div>

            {{-- Stats Row --}}
            <div class="hero-stats flex flex-wrap sm:flex-nowrap items-center justify-center sm:justify-start gap-5 sm:gap-6 md:gap-8 px-6 md:px-10 py-5 rounded-[1.5rem] md:rounded-[1.8rem] bg-white/80 dark:bg-slate-800/60 backdrop-blur-xl border border-white dark:border-white/10 shadow-[0_8px_30px_rgba(65,49,35,0.06)] w-fit mx-auto lg:mx-0 opacity-0 translate-y-6">
                
                <!-- Projects -->
                <div class="flex items-baseline gap-1.5">
                    <span class="text-[1.8rem] sm:text-[2.2rem] font-black text-[#215a49] dark:text-emerald-400 leading-none">{{ $totalProjects }}</span>
                    <span class="text-[11px] sm:text-[12px] font-medium text-[#413123]/70 dark:text-slate-400">Projects</span>
                </div>
                
                <div class="hidden sm:block w-[1px] h-10 bg-[#413123]/15 dark:bg-white/10 mx-1"></div>
                
                <!-- Certificates -->
                <div class="flex items-baseline gap-1.5">
                    <span class="text-[1.8rem] sm:text-[2.2rem] font-black text-[#215a49] dark:text-emerald-400 leading-none">{{ $totalCertificates }}</span>
                    <span class="text-[11px] sm:text-[12px] font-medium text-[#413123]/70 dark:text-slate-400">Certificates</span>
                </div>
                
                <div class="hidden sm:block w-[1px] h-10 bg-[#413123]/15 dark:bg-white/10 mx-1"></div>

                <!-- Years -->
                <div class="flex items-center gap-1.5">
                    <span class="text-[1.8rem] sm:text-[2.2rem] font-black text-[#215a49] dark:text-emerald-400 leading-none">2+</span>
                    <span class="text-[11px] sm:text-[12px] font-medium text-[#413123]/70 dark:text-slate-400 leading-[1.2]">Years<br>Experience</span>
                </div>

            </div>
        </div>

        <!-- RIGHT: VISUAL FRAME -->
        <div class="hero-visual hidden lg:flex relative items-center justify-center min-h-[600px] z-10 w-[45%] lg:pr-6 opacity-0 scale-95 translate-y-10">
            
            <!-- Central Profile Frame -->
            <div class="relative w-[340px] h-[520px] rounded-[3.5rem] bg-[#fbfaf5] dark:bg-slate-800 border-[8px] border-white dark:border-slate-700 shadow-[0_30px_60px_rgba(65,49,35,0.15)] dark:shadow-[0_20px_50px_rgba(0,0,0,0.4)] overflow-hidden z-20 group cursor-pointer" id="hero-photo-trigger">
                <img src="/profile.png?v=2" alt="Farrel" class="w-full h-full object-cover object-[center_20%] transition-transform duration-1000 group-hover:scale-105" />
                <span class="absolute top-6 left-6 text-[8px] font-mono text-[#4b3621]/40 dark:text-emerald-400/80 tracking-widest uppercase">V.2026</span>
            </div>

            <!-- FLOATING BADGES -->

            <!-- Pink </> (Top Left) -->
            <div class="absolute top-[16%] left-[-8%] w-14 h-14 rounded-[1rem] bg-[#eab7b8] dark:bg-pink-500/20 backdrop-blur-md shadow-[0_15px_30px_rgba(234,183,184,0.4)] flex items-center justify-center z-30 animate-[float_4s_ease-in-out_infinite] border border-white/60">
                <span class="text-white font-mono font-bold text-lg">&lt;/&gt;</span>
            </div>

            <!-- Teal HTML (Middle Left, Overlapping) -->
            <div class="absolute top-[48%] left-[-4%] px-4 py-3 rounded-[1rem] bg-[#76b0ab] dark:bg-teal-500/20 backdrop-blur-md shadow-[0_15px_30px_rgba(118,176,171,0.4)] flex items-center justify-center z-30 animate-[float_5s_ease-in-out_infinite_reverse] border border-white/60">
                <span class="text-white font-bold text-sm tracking-widest">HTML</span>
            </div>

            <!-- Brown Briefcase "2+ Years Experience" (Bottom Left) -->
            <div class="absolute bottom-[20%] left-[-18%] pl-2 pr-6 py-2 rounded-full bg-[#f1ebd8] dark:bg-amber-900/40 backdrop-blur-md shadow-[0_15px_30px_rgba(65,49,35,0.1)] flex items-center gap-3 z-10 animate-[float_6s_ease-in-out_infinite_0.5s] border border-white">
                <div class="w-8 h-8 rounded-full bg-[#b89574] flex items-center justify-center text-white text-[11px] shadow-sm"><i class="fa-solid fa-briefcase"></i></div>
                <div class="flex flex-col mt-0.5">
                    <span class="text-[#413123] dark:text-white font-bold text-[13px] leading-tight">2+ Years</span>
                    <span class="text-[#413123]/70 dark:text-slate-300 text-[11px] leading-tight">Experience</span>
                </div>
            </div>

            <!-- Blue {} (Top Right) -->
            <div class="absolute top-[16%] right-[-12%] w-14 h-14 rounded-[1.2rem] bg-[#60aadd] dark:bg-blue-500/20 backdrop-blur-md shadow-[0_15px_30px_rgba(96,170,221,0.4)] flex items-center justify-center z-30 animate-[float_4.5s_ease-in-out_infinite_1s] border border-white/60">
                <span class="text-white font-mono font-bold text-xl">{ }</span>
            </div>

            <!-- Yellow JS (Bottom Right) -->
            <div class="absolute top-[52%] right-[-7%] w-14 h-14 rounded-[1.2rem] bg-[#d3a647] dark:bg-yellow-500/20 backdrop-blur-md shadow-[0_15px_30px_rgba(211,166,71,0.4)] flex items-center justify-center z-30 animate-[float_5s_ease-in-out_infinite_0.2s] border border-white/60">
                <span class="text-white font-bold text-xl">JS</span>
            </div>

            <!-- Light Folder "Completed Projects" (Bottom Overlap, Dynamic) -->
            <div class="absolute bottom-[16%] right-[-18%] pl-2 pr-6 py-2 rounded-[1.5rem] bg-[#f8f6f0] dark:bg-slate-800 backdrop-blur-md shadow-[0_20px_40px_rgba(65,49,35,0.12)] flex items-center gap-3 z-30 animate-[float_5.5s_ease-in-out_infinite_0.7s] border border-white">
                <div class="w-10 h-10 rounded-[1rem] bg-[#dfb85b]/20 flex items-center justify-center text-[#d3a647] text-[20px] shadow-inner"><i class="fa-solid fa-folder"></i></div>
                <div class="flex flex-col mt-0.5">
                    <span class="text-[#413123] dark:text-white font-black text-[15px] font-playfair leading-tight">{{ $totalProjects }}</span>
                    <span class="text-[#413123]/70 dark:text-slate-400 text-[12px] font-medium leading-tight mt-0.5">Projects</span>
                </div>
            </div>

            <!-- SCROLL INDICATOR -->
            <div class="absolute -bottom-16 left-0 right-0 flex justify-center z-20 pr-6" id="hero-scroll">
                <div class="flex flex-col items-center gap-2">
                    <div class="w-[24px] h-[38px] rounded-full border-[2px] border-[#4b3621]/20 dark:border-white/20 flex justify-center pt-[5px] shadow-sm bg-[#F8F5EC]/60 dark:bg-black/20 backdrop-blur-sm">
                        <div class="w-[3px] h-[6px] bg-[#4b3621]/60 dark:bg-white/60 rounded-full animate-[mouse-dot_2s_infinite]"></div>
                    </div>
                    <span class="text-[9px] text-[#4b3621]/50 dark:text-slate-500 uppercase tracking-[0.2em] font-bold mt-1">SCROLL FOR MORE</span>
                    <i class="fa-solid fa-arrow-down text-[10px] text-[#386e5e] dark:text-emerald-500 animate-bounce mt-[-4px]"></i>
                </div>
            </div>

        </div>
    </div>

</section>

<style>
@keyframes mouse-dot {
    0% { transform: translateY(0); opacity: 1; }
    50% { opacity: 1; }
    100% { transform: translateY(12px); opacity: 0; }
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-12px); }
}

.font-playfair { font-family: 'Playfair Display', serif; }
.font-dancing { font-family: 'Dancing Script', cursive; }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap !== 'undefined') {
        const tl = gsap.timeline({ defaults: { ease: "power4.out", duration: 1.2 }});

        tl.to(".hero-greeting", { opacity: 1, y: 0, delay: 0.2 })
          .to(".hero-title", { opacity: 1, y: 0 }, "-=0.8")
          .to(".hero-subtitle", { opacity: 1, y: 0 }, "-=1")
          .to(".hero-cta", { opacity: 1, y: 0 }, "-=1.1")
          .to(".hero-stats", { opacity: 1, y: 0 }, "-=1.1")
          .to(".hero-visual", { opacity: 1, y: 0, scale: 1 }, "-=1.2")
          .to("#hero-scroll", { opacity: 1, y: 0 }, "-=0.6");
        
        // Modal Trigger
        const btn = document.getElementById('hero-photo-trigger');
        if (btn) {
            btn.addEventListener('click', () => {
                if (typeof openProfileModal === 'function') openProfileModal();
            });
        }
    }
});
</script>
