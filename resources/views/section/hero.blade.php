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
            <h1 class="hero-title text-[4rem] md:text-[5.5rem] lg:text-[6.5rem] font-black mb-6 leading-[0.9] tracking-tight font-playfair flex flex-col">
                <span class="hero-part-1 text-[#413123] dark:text-slate-100 mb-1 leading-tight flex flex-wrap justify-center lg:justify-start gap-[0.2em]">
                    @foreach(explode(' ', __('Halo, saya')) as $word)
                        <span class="flex">
                            @foreach(str_split($word) as $char)
                                <span class="pixar-char inline-block origin-bottom">{{ $char }}</span>
                            @endforeach
                        </span>
                    @endforeach
                </span>
                <span class="hero-part-2 text-[#215a49] dark:text-emerald-400 italic flex flex-wrap justify-center lg:justify-start">
                    @foreach(str_split("Farrel") as $char)
                        <span class="pixar-char inline-block origin-bottom">{{ $char }}</span>
                    @endforeach
                </span>
                <span class="hero-part-3 text-[#215a49] dark:text-emerald-400 italic flex flex-wrap justify-center lg:justify-start">
                    @foreach(str_split("Azam") as $char)
                        <span class="pixar-char inline-block origin-bottom">{{ $char }}</span>
                    @endforeach
                </span>
            </h1>

            <!-- Subtitle -->
            <p class="hero-subtitle text-[#413123]/70 dark:text-slate-400 text-base md:text-[1.1rem] font-light max-w-lg mb-10 leading-[1.7]">
                {{ __('Seorang Web Developer yang menciptakan pengalaman digital dengan') }} <span class="text-[#413123] dark:text-white font-semibold">{{ __('performa tinggi') }}</span> 
                {{ __('dan visual yang memukau dengan') }} 
                <span class="italic font-dancing text-[#286050] dark:text-emerald-400 text-[1.5rem] font-medium leading-none inline-block">{{ __('sentuhan premium') }}.</span>
            </p>

            <!-- CTA Buttons -->
            <div class="hero-cta flex flex-wrap justify-center lg:justify-start gap-4 mb-14 w-full">
                <a href="#project" class="group relative px-8 py-3.5 rounded-full bg-[#286050] dark:bg-[#1e5c4a] text-white font-semibold transition-all duration-300 hover:scale-[1.03] shadow-[0_12px_25px_rgba(40,96,80,0.25)] hover:shadow-[0_15px_30px_rgba(40,96,80,0.35)] flex items-center justify-center gap-2">
                    {{ __('Lihat Projek Saya') }} <i class="fa-solid fa-arrow-right text-[10px] transition-transform group-hover:translate-x-1"></i>
                </a>
                
                <a href="#contact" class="px-8 py-3.5 rounded-full bg-[#fdfcf8]/80 dark:bg-slate-800/50 backdrop-blur-xl border border-[#4b3621]/10 dark:border-white/10 text-[#413123] dark:text-white font-semibold hover:bg-white dark:hover:bg-slate-800 transition-all duration-300 shadow-sm flex items-center justify-center hover:shadow-md">
                    {{ __('Hubungi Saya') }}
                </a>
            </div>

            {{-- Stats Row --}}
            <div class="hero-stats flex flex-wrap sm:flex-nowrap items-center justify-center sm:justify-start gap-5 sm:gap-6 md:gap-8 px-6 md:px-10 py-5 rounded-[1.5rem] md:rounded-[1.8rem] bg-white/80 dark:bg-slate-800/60 backdrop-blur-xl border border-white dark:border-white/10 shadow-[0_8px_30px_rgba(65,49,35,0.06)] w-fit mx-auto lg:mx-0">
                
                <!-- Projects -->
                <div class="flex items-baseline gap-1.5">
                    <span class="text-[1.8rem] sm:text-[2.2rem] font-black text-[#215a49] dark:text-emerald-400 leading-none">{{ $totalProjects }}</span>
                    <span class="text-[11px] sm:text-[12px] font-medium text-[#413123]/70 dark:text-slate-400">{{ __('Projek') }}</span>
                </div>
                
                <div class="hidden sm:block w-[1px] h-10 bg-[#413123]/15 dark:bg-white/10 mx-1"></div>
                
                <!-- Certificates -->
                <div class="flex items-baseline gap-1.5">
                    <span class="text-[1.8rem] sm:text-[2.2rem] font-black text-[#215a49] dark:text-emerald-400 leading-none">{{ $totalCertificates }}</span>
                    <span class="text-[11px] sm:text-[12px] font-medium text-[#413123]/70 dark:text-slate-400">{{ __('Sertifikat') }}</span>
                </div>
                
                <div class="hidden sm:block w-[1px] h-10 bg-[#413123]/15 dark:bg-white/10 mx-1"></div>

                <!-- Years -->
                <div class="flex items-center gap-1.5">
                    <span class="text-[1.8rem] sm:text-[2.2rem] font-black text-[#215a49] dark:text-emerald-400 leading-none">2+</span>
                    <span class="text-[11px] sm:text-[12px] font-medium text-[#413123]/70 dark:text-slate-400 leading-[1.2]">{{ __('Tahun Pengalaman') }}</span>
                </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

            </div>
        </div>

        <!-- RIGHT: VISUAL FRAME -->
        <div class="hero-visual hidden lg:flex relative items-center justify-center min-h-[660px] z-10 w-[45%] lg:pr-6">
            
            <!-- Premium 3D Phone Mockup Frame (Increased Z-Index for clickability) -->
            <div data-tilt data-tilt-max="8" data-tilt-speed="400" data-tilt-perspective="1000" data-tilt-glare="true" data-tilt-max-glare="0.2" class="relative w-[320px] h-[550px] rounded-[3.5rem] bg-gradient-to-br from-[#d4d4d4] via-[#f5f5f5] to-[#a3a3a3] dark:from-[#3a3a3a] dark:via-[#5c5c5c] dark:to-[#222222] p-[4px] shadow-[0_30px_60px_rgba(65,49,35,0.2)] dark:shadow-[0_20px_60px_rgba(0,0,0,0.6)] z-40 group cursor-pointer hover:shadow-[0_40px_80px_rgba(0,0,0,0.3)] transition-all duration-500" id="hero-photo-trigger" style="transform-style: preserve-3d;">
                
                <!-- Phone Side Buttons (Metallic) -->
                <div class="absolute top-28 -left-[2px] w-[3px] h-10 bg-[#a3a3a3] dark:bg-[#333] rounded-l-md shadow-sm"></div>
                <div class="absolute top-44 -left-[2px] w-[3px] h-10 bg-[#a3a3a3] dark:bg-[#333] rounded-l-md shadow-sm"></div>
                <div class="absolute top-32 -right-[2px] w-[3px] h-14 bg-[#a3a3a3] dark:bg-[#333] rounded-r-md shadow-sm"></div>

                <!-- Black Screen Bezel -->
                <div class="relative w-full h-full rounded-[3.2rem] bg-black p-[8px] shadow-[inset_0_0_10px_rgba(255,255,255,0.05)] border border-black/20">
                    
                    <!-- Inner Screen -->
                    <div class="relative w-full h-full rounded-[2.8rem] overflow-hidden bg-slate-900">
                        <!-- Dynamic Island / Notch -->
                        <div class="absolute top-1.5 left-1/2 -translate-x-1/2 w-28 h-[26px] bg-black rounded-[1.2rem] z-40 flex items-center justify-between px-3 shadow-[0_2px_10px_rgba(0,0,0,0.5)]">
                            <div class="w-2.5 h-2.5 rounded-full bg-[#1b1b1b] border border-white/5 relative overflow-hidden">
                                <div class="absolute top-0.5 right-0.5 w-1 h-1 bg-blue-500/30 rounded-full blur-[1px]"></div>
                            </div>
                            <div class="w-1.5 h-1.5 rounded-full bg-emerald-500 shadow-[0_0_8px_#10b981]"></div>
                        </div>

                        <!-- Photo with Warm/Cinematic Overlay -->
                        <img src="/profile.png?v=2" alt="Farrel" class="w-full h-full object-cover object-[center_20%] transition-transform duration-1000 group-hover:scale-[1.03]" />
                        <div class="absolute inset-0 bg-gradient-to-tr from-amber-500/10 via-transparent to-transparent pointer-events-none mix-blend-overlay"></div>
                        
                        <!-- Camera UI Overlay -->
                        <div class="absolute inset-x-0 top-11 px-6 flex justify-between items-center z-30 pointer-events-none opacity-90 transition-transform duration-500 group-hover:translate-z-10" style="transform: translateZ(10px);">
                            <span class="text-white text-[10px] tracking-widest font-semibold drop-shadow-md">30mm</span>
                            <div class="flex gap-2.5 text-white/90 items-center drop-shadow-md">
                                <i class="fa-solid fa-wifi text-[9px]"></i>
                                <i class="fa-solid fa-battery-full text-[11px]"></i>
                            </div>
                        </div>

                        <!-- Bottom Camera Controls -->
                        <div class="absolute inset-x-0 bottom-6 flex justify-center z-30 pointer-events-none transition-transform duration-500 group-hover:translate-z-20" style="transform: translateZ(20px);">
                            <div class="bg-black/30 backdrop-blur-xl rounded-[2rem] px-5 py-3.5 flex items-center gap-6 border border-white/10 text-white shadow-2xl">
                                <div class="flex flex-col items-center opacity-80 hover:opacity-100 transition-opacity">
                                    <i class="fa-solid fa-circle-half-stroke text-[11px]"></i>
                                    <span class="text-[8px] mt-1 font-mono">30</span>
                                </div>
                                <div class="w-[38px] h-[38px] rounded-full border-[2.5px] border-white/90 flex items-center justify-center p-0.5">
                                    <div class="w-full h-full bg-white rounded-full"></div>
                                </div>
                                <div class="flex flex-col items-center opacity-80 hover:opacity-100 transition-opacity">
                                    <div class="w-[12px] h-[12px] rounded border-[1.5px] border-white flex items-center justify-center">
                                        <div class="w-0.5 h-0.5 bg-white rounded-full"></div>
                                    </div>
                                    <span class="text-[8px] mt-1 font-mono">0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Expand Icon (Always Visible) -->
                        <div class="absolute bottom-[80px] right-6 z-30 w-8 h-8 flex items-center justify-center bg-black/40 backdrop-blur-md rounded-full border border-white/20 shadow-lg transition-all duration-300 hover:bg-black/60 hover:scale-110" style="transform: translateZ(30px);">
                            <i class="fa-solid fa-expand text-white text-[10px]"></i>
                        </div>

                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10 pointer-events-none"></div>
                    </div>
                </div>
            </div>

            <!-- FLOATING BADGES (with orbital movement) -->

            <!-- GitHub (Top Left) -->
            <a href="https://github.com/farrelazam" target="_blank" rel="noopener noreferrer" class="hero-float-badge absolute top-[16%] left-[-8%] w-14 h-14 rounded-[1rem] backdrop-blur-md flex items-center justify-center z-30 border border-white/20 hover:scale-110 transition-transform duration-300" style="background-color: #24292e; box-shadow: 0 15px 30px rgba(36,41,46,0.4); animation: orbit1 8s ease-in-out infinite;">
                <i class="fa-brands fa-github text-white text-2xl"></i>
            </a>

            <!-- WhatsApp (Middle Left) -->
            <a href="https://wa.me/6285123456789" target="_blank" rel="noopener noreferrer" class="hero-float-badge absolute top-[48%] left-[-4%] w-14 h-14 rounded-[1rem] backdrop-blur-md flex items-center justify-center z-30 border border-white/30 hover:scale-110 transition-transform duration-300" style="background-color: #25D366; box-shadow: 0 15px 30px rgba(37,211,102,0.4); animation: orbit2 10s ease-in-out infinite 0.5s;">
                <i class="fa-brands fa-whatsapp text-white text-2xl"></i>
            </a>

            <!-- Brown Briefcase "2+ Years Experience" (Bottom Left) - KEPT -->
            <div class="hero-float-badge absolute bottom-[20%] left-[-18%] pl-2 pr-6 py-2 rounded-full bg-[#f1ebd8] dark:bg-amber-900/40 backdrop-blur-md shadow-[0_15px_30px_rgba(65,49,35,0.1)] flex items-center gap-3 z-10 border border-white" style="animation: orbit3 12s ease-in-out infinite 1s;">
                <div class="w-8 h-8 rounded-full bg-[#b89574] flex items-center justify-center text-white text-[11px] shadow-sm"><i class="fa-solid fa-briefcase"></i></div>
                <div class="flex flex-col mt-0.5">
                    <span class="text-[#413123] dark:text-white font-bold text-[13px] leading-tight">{{ __('2+ Tahun') }}</span>
                    <span class="text-[#413123]/70 dark:text-slate-300 text-[11px] leading-tight">{{ __('Pengalaman') }}</span>
                </div>
            </div>

            <!-- LinkedIn (Top Right) -->
            <a href="https://linkedin.com/in/farrelazam" target="_blank" rel="noopener noreferrer" class="hero-float-badge absolute top-[16%] right-[-12%] w-14 h-14 rounded-[1.2rem] backdrop-blur-md flex items-center justify-center z-20 border border-white/30 hover:scale-110 transition-transform duration-300" style="background-color: #0A66C2; box-shadow: 0 15px 30px rgba(10,102,194,0.4); animation: orbit4 9s ease-in-out infinite 0.3s;">
                <i class="fa-brands fa-linkedin-in text-white text-2xl"></i>
            </a>

            <!-- Instagram (Mid Right) -->
            <a href="https://instagram.com/farrelazam" target="_blank" rel="noopener noreferrer" class="hero-float-badge absolute top-[52%] right-[-7%] w-14 h-14 rounded-[1.2rem] backdrop-blur-md flex items-center justify-center z-20 border border-white/30 hover:scale-110 transition-transform duration-300" style="background: linear-gradient(135deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); box-shadow: 0 15px 30px rgba(225,48,108,0.4); animation: orbit5 11s ease-in-out infinite 0.8s;">
                <i class="fa-brands fa-instagram text-white text-2xl"></i>
            </a>

            <!-- Light Folder "Completed Projects" (Bottom Right) - KEPT -->
            <div class="hero-float-badge absolute bottom-[16%] right-[-18%] pl-2 pr-6 py-2 rounded-[1.5rem] bg-[#f8f6f0] dark:bg-slate-800 backdrop-blur-md shadow-[0_20px_40px_rgba(65,49,35,0.12)] flex items-center gap-3 z-30 border border-white" style="animation: orbit6 13s ease-in-out infinite 1.5s;">
                <div class="w-10 h-10 rounded-[1rem] bg-[#dfb85b]/20 flex items-center justify-center text-[#d3a647] text-[20px] shadow-inner"><i class="fa-solid fa-folder"></i></div>
                <div class="flex flex-col mt-0.5">
                    <span class="text-[#413123] dark:text-white font-black text-[15px] font-playfair leading-tight">{{ $totalProjects }}</span>
                    <span class="text-[#413123]/70 dark:text-slate-400 text-[12px] font-medium leading-tight mt-0.5">{{ __('Projek') }}</span>
                </div>
            </div>

            <!-- SCROLL INDICATOR -->
            <div class="absolute -bottom-24 left-0 right-0 flex justify-center z-20 pr-6 opacity-0" id="hero-scroll">
                <div class="flex flex-col items-center gap-2">
                    <div class="w-[24px] h-[38px] rounded-full border-[2px] border-[#4b3621]/20 dark:border-white/20 flex justify-center pt-[5px] shadow-sm bg-[#F8F5EC]/60 dark:bg-black/20 backdrop-blur-sm">
                        <div class="w-[3px] h-[6px] bg-[#4b3621]/60 dark:bg-white/60 rounded-full animate-[mouse-dot_2s_infinite]"></div>
                    </div>
                    <span class="text-[9px] text-[#4b3621]/50 dark:text-slate-500 uppercase tracking-[0.2em] font-bold mt-1">{{ __('GULIR UNTUK LIHAT LAGI') }}</span>
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

/* Orbital animations - each badge has a unique elliptical path */
@keyframes orbit1 {
    0%   { transform: translate(0px, 0px) rotate(0deg); }
    25%  { transform: translate(12px, -8px) rotate(3deg); }
    50%  { transform: translate(-5px, -16px) rotate(-2deg); }
    75%  { transform: translate(-14px, -4px) rotate(4deg); }
    100% { transform: translate(0px, 0px) rotate(0deg); }
}

@keyframes orbit2 {
    0%   { transform: translate(0px, 0px) rotate(0deg); }
    20%  { transform: translate(-10px, 10px) rotate(-3deg); }
    40%  { transform: translate(8px, 18px) rotate(2deg); }
    60%  { transform: translate(16px, 4px) rotate(-4deg); }
    80%  { transform: translate(4px, -8px) rotate(3deg); }
    100% { transform: translate(0px, 0px) rotate(0deg); }
}

@keyframes orbit3 {
    0%   { transform: translate(0px, 0px) rotate(0deg); }
    33%  { transform: translate(14px, -6px) rotate(2deg); }
    66%  { transform: translate(-8px, -14px) rotate(-3deg); }
    100% { transform: translate(0px, 0px) rotate(0deg); }
}

@keyframes orbit4 {
    0%   { transform: translate(0px, 0px) rotate(0deg); }
    25%  { transform: translate(-12px, 10px) rotate(-4deg); }
    50%  { transform: translate(6px, 18px) rotate(2deg); }
    75%  { transform: translate(14px, 6px) rotate(-3deg); }
    100% { transform: translate(0px, 0px) rotate(0deg); }
}

@keyframes orbit5 {
    0%   { transform: translate(0px, 0px) rotate(0deg); }
    20%  { transform: translate(10px, -12px) rotate(3deg); }
    40%  { transform: translate(-6px, -18px) rotate(-2deg); }
    60%  { transform: translate(-14px, -6px) rotate(4deg); }
    80%  { transform: translate(-4px, 8px) rotate(-3deg); }
    100% { transform: translate(0px, 0px) rotate(0deg); }
}

@keyframes orbit6 {
    0%   { transform: translate(0px, 0px) rotate(0deg); }
    30%  { transform: translate(-10px, -10px) rotate(-2deg); }
    60%  { transform: translate(12px, -6px) rotate(3deg); }
    100% { transform: translate(0px, 0px) rotate(0deg); }
}

.font-playfair { font-family: 'Playfair Display', serif; }
.font-dancing { font-family: 'Dancing Script', cursive; }
</style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Wait for GSAP to be available
    const initPixarAnimation = () => {
        if (typeof gsap === 'undefined') return;

        const chars = document.querySelectorAll('.pixar-char');
        
        const startAnim = () => {
            // Create a persistent timeline for better performance and smoothness
            const tl = gsap.timeline({
                repeat: -1,
                repeatDelay: 0.5
            });

            // Pixar sequence: Jump + Squash & Stretch + Random rotation
            tl.to(chars, {
                duration: 0.8,
                y: (i) => -20 - (Math.random() * 15), // Random jump height
                scaleY: 1.25,
                scaleX: 0.85,
                rotation: () => (Math.random() - 0.5) * 15, // Random tilt
                stagger: {
                    each: 0.08,
                    from: "random" // Randomized sequence
                },
                ease: "elastic.out(1, 0.4)",
                yoyo: true,
                repeat: 1
            });
        };

        if (sessionStorage.getItem('preloader_played')) {
            startAnim();
        } else {
            document.addEventListener('content-revealed', startAnim, { once: true });
        }

        // Add a slight hover response
        chars.forEach(char => {
            char.addEventListener('mouseenter', () => {
                gsap.to(char, {
                    duration: 0.6,
                    y: -25,
                    scaleY: 1.4,
                    scaleX: 0.75,
                    rotation: (Math.random() - 0.5) * 20,
                    ease: "back.out(3)",
                    yoyo: true,
                    repeat: 1,
                    overwrite: "auto"
                });
            });
        });
    };

    // The layout has GSAP with defer, so we wait for window load or check existence
    if (document.readyState === 'complete') {
        initPixarAnimation();
    } else {
        window.addEventListener('load', initPixarAnimation);
    }
});
</script>
@endpush



