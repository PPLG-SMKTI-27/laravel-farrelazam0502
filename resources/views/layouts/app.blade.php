<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- SEO & META TAGS -->
    <meta name="description" content="Farrel Azam - Web Developer Portfolio. Pelajar SMK TI Airlangga dengan ketertarikan besar di dunia teknologi dan pengembangan web modern.">
    <meta name="keywords" content="Farrel Azam, Web Developer, Portfolio, Laravel, Tailwind CSS, Frontend, Backend">
    <meta name="author" content="Farrel Azam">
    
    <!-- OPEN GRAPH / SOCIAL SHARE -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Farrel Azam | Web Developer">
    <meta property="og:description" content="Eksplorasi perjalanan karir, keahlian, dan proyek web development saya.">
    <meta property="og:image" content="/profile.png">
    
    <!-- FAVICON -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22 font-family=%22sans-serif%22 font-weight=%22bold%22 fill=%22%23115e59%22>F</text></svg>">
    
    <!-- GOOGLE FONTS: Premium Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Dancing+Script:wght@400..700&family=Inter:wght@100..900&family=JetBrains+Mono:wght@100..800&display=swap" rel="stylesheet">

    <title>Farrel Azam | Portfolio</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <!-- THEME MANAGER: Premium Global Theme Control -->
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            // Default to 'light' if no preference is set
            const theme = savedTheme || 'light';
            
            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }

            // Sync localStorage if it was empty
            if (!savedTheme) localStorage.setItem('theme', 'light');
        })();
    </script>

</head>
<body class="font-sans antialiased bg-[#F8F5EC] dark:bg-slate-950 text-[#4b3621] dark:text-slate-200 overflow-x-hidden transition-colors duration-700 relative">
    
    @include('components.preloader')
    
    <!-- UNIVERSAL PAPER CRAFT TEXTURE (Light Mode Only) -->
    <div class="fixed inset-0 pointer-events-none z-[-1] opacity-50 dark:hidden" 
         style="background-image: 
            linear-gradient(#4b3621 1px, transparent 1px), 
            linear-gradient(90deg, #4b3621 1px, transparent 1px); 
            background-size: 40px 40px;
            opacity: 0.05;">
    </div>
    @include('components.page-transition')
    
    <div id="content-wrapper" class="opacity-0 transition-opacity duration-1000 min-h-screen">
        @if(!Route::is('dashboard'))
            @include('components.navbar')
        @endif

        @isset($header)
            <header class="bg-slate-900 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main>
            @yield('content')
        </main>
        
        @include('components.footer')
    </div>

    <!-- IMMERSIVE PROFILE REVEAL OVERLAY -->
    <div id="photo-reveal-overlay" class="fixed inset-0 z-[99999] bg-black hidden items-center justify-center p-8 md:p-4 overflow-hidden">
        <!-- BOKEH BACKGROUND (Dynamic Blurred Background) -->
        <div class="absolute inset-0 z-0">
            <img src="/profile.png?v=2" class="w-full h-full object-cover scale-110 blur-[80px] opacity-40" />
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-black/80"></div>
        </div>

        <div class="reveal-container relative z-10 w-full h-[80vh] md:h-[75vh] flex items-center justify-center scale-95 opacity-0 transition-all duration-700 ease-out">
            <!-- Left Side (Lyrics) - Desktop Only -->
            <div class="hidden xl:flex flex-1 justify-end pr-16 h-full items-center">
                <div id="lyrics-sidebar" class="flex flex-col w-[320px] h-[70%] bg-white/5 backdrop-blur-xl border border-white/10 rounded-[2.5rem] p-10 overflow-y-auto no-scrollbar shadow-2xl">
                    <h3 class="text-emerald-400 text-[10px] font-bold tracking-[0.4em] uppercase mb-10 opacity-40">Song Lyrics</h3>
                    <div class="space-y-8 text-white/80 text-base font-medium leading-relaxed" id="full-lyrics-list">
                        <!-- Lyrics will be injected here -->
                    </div>
                </div>
            </div>

            <!-- Central Content (Photo) -->
            <div class="flex-none w-full max-w-[340px] h-full flex flex-col items-center">
                <!-- Close Button (Premium) -->
                <div class="close-reveal absolute -top-8 -right-2 md:-right-16 md:top-0 w-12 h-12 bg-white/5 hover:bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 z-50 group shadow-lg">
                    <i class="fa-solid fa-xmark text-2xl group-hover:rotate-90 transition-transform duration-300"></i>
                </div>
                
                <!-- PREMIUM PHOTO FRAME -->
                <div class="reveal-img-wrapper relative w-full h-full rounded-[2.5rem] overflow-hidden border-2 border-white/10 shadow-[0_0_80px_rgba(0,0,0,0.5)] bg-slate-900">
                    <img src="/profile.png?v=2" alt="Full Photo" class="w-full h-full object-cover object-[center_20%] transform transition-transform duration-1000" id="main-profile-img" />
                    
                    <!-- CAMERA UI OVERLAY (Aesthetic) -->
                    <div class="absolute inset-0 pointer-events-none p-6 flex flex-col justify-between z-10">
                        <div class="flex justify-between items-start opacity-60 text-[10px] tracking-[0.2em] font-medium uppercase">
                            <div><i class="fa-solid fa-video mr-2"></i> REC 00:24</div>
                            <div>4K 60FPS</div>
                        </div>
                        
                        <div class="flex justify-between items-end">
                            <div class="bg-black/20 backdrop-blur-md px-3 py-1 rounded-sm text-[10px] opacity-60">ISO 400</div>
                            <div class="flex gap-4 opacity-60">
                                <i class="fa-solid fa-battery-three-quarters text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MUSIC BADGE (Floating) -->
                <div class="reveal-badge mt-8 bg-white/5 backdrop-blur-xl border border-white/10 text-white/80 px-6 py-2.5 rounded-full text-[10px] font-bold tracking-widest uppercase flex items-center gap-3 cursor-pointer hover:bg-white/10 hover:scale-105 transition-all duration-300 shadow-xl" id="reveal-music-badge">
                    <span class="flex gap-1">
                        <span class="music-bar h-3 w-[2px] bg-emerald-500 animate-[music-bar_1s_infinite_0.2s]"></span>
                        <span class="music-bar h-3 w-[2px] bg-emerald-500 animate-[music-bar_1s_infinite_0.4s]"></span>
                        <span class="music-bar h-3 w-[2px] bg-emerald-500 animate-[music-bar_1s_infinite_0.6s]"></span>
                    </span>
                    <span id="music-status-text">Dhruv — Double Take</span>
                </div>
            </div>

            <!-- Right Side (Empty Balance for Centering) -->
            <div class="hidden xl:flex flex-1 pl-16"></div>
        </div>  
    </div>

    <style>
        @keyframes music-bar {
            0%, 100% { height: 4px; }
            50% { height: 12px; }
        }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        #full-lyrics-list p {
            transition: all 0.4s ease;
            cursor: default;
        }
        #full-lyrics-list p:hover {
            color: white;
            transform: translateX(5px);
        }
    </style>

    <!-- Global Audio Player -->
    <audio id="local-music-player" preload="auto" style="display:none;">
        <source src="{{ asset('audio/dhruv  double take (Lyrics).mp3') }}" type="audio/mpeg">
    </audio>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  
    <script>
    const lyricsData = [
        { time: 14.2, text: "I could say I never dare" },
        { time: 16.1, text: "To think about you in that way" },
        { time: 19.4, text: "But I would be lying" },
        { time: 23.5, text: "And I pretend I'm happy for you" },
        { time: 26.1, text: "When you find some dude to take home" },
        { time: 31.2, text: "But I won't deny that" },
        { time: 34.5, text: "In the midst of the crowds" },
        { time: 37.9, text: "In the shapes, in the clouds" },
        { time: 41.1, text: "I don't see nobody but you" },
        { time: 44.2, text: "In my rose-tinted dreams" },
        { time: 51.3, text: "Wrinkled silk on my sheets" },
        { time: 54.5, text: "I don't see nobody but you" },
        { time: 57.6, text: "Boy, you got me hooked onto something" },
        { time: 61.1, text: "Who could say that they saw us coming?" },
        { time: 64.6, text: "Tell me, do you feel the love?" },
        { time: 67.9, text: "Spend a summer or a lifetime with me" }
    ];

    let scrollInterval;
    function startSlowScroll() {
        const sidebar = document.getElementById('lyrics-sidebar');
        if (!sidebar || window.innerWidth < 1280) return;
        
        sidebar.scrollTop = 0;
        let scrollPos = 0;
        
        function scroll() {
            if (!scrollInterval) return;
            scrollPos += 0.100; // Even slower scroll speed as requested
            sidebar.scrollTop = scrollPos;
            requestAnimationFrame(scroll);
        }
        
        scrollInterval = true;
        scroll();
    }

    function stopSlowScroll() {
        scrollInterval = false;
    }

    // Global Modal Functions
    function openProfileModal() {
        const overlay = document.getElementById('photo-reveal-overlay');
        const container = overlay.querySelector('.reveal-container');
        const player = document.getElementById('local-music-player');
        const profileImg = document.getElementById('main-profile-img');

        overlay.classList.remove('hidden');
        overlay.classList.add('flex');
        document.body.style.overflow = 'hidden';

        // GSAP Entrance
        gsap.to(container, {
            opacity: 1,
            scale: 1,
            duration: 0.8,
            ease: "power4.out",
            onComplete: startSlowScroll
        });

        if (profileImg) {
            gsap.fromTo(profileImg, 
                { scale: 1.2 }, 
                { scale: 1, duration: 2, ease: "power2.out" }
            );
        }

        if (player) {
            player.currentTime = 0;
            player.play().catch(err => console.warn("Autoplay blocked:", err));
        }
    }

    function closeProfileModal() {
        const overlay = document.getElementById('photo-reveal-overlay');
        const container = overlay.querySelector('.reveal-container');
        const player = document.getElementById('local-music-player');

        stopSlowScroll();

        gsap.to(container, {
            opacity: 0,
            scale: 0.95,
            duration: 0.4,
            ease: "power2.in",
            onComplete: () => {
                overlay.classList.add('hidden');
                overlay.classList.remove('flex');
                document.body.style.overflow = '';
            }
        });

        if (player) player.pause();
    }

    document.addEventListener('DOMContentLoaded', () => {
        const overlay = document.getElementById('photo-reveal-overlay');
        const closeBtn = document.querySelector('.close-reveal');
        const musicBadge = document.getElementById('reveal-music-badge');
        const player = document.getElementById('local-music-player');
        const lyricsList = document.getElementById('full-lyrics-list');

        // Populate Sidebar Lyrics (Plain Desktop Style)
        if (lyricsList) {
            lyricsList.innerHTML = lyricsData.map(l => 
                `<p class="transition-colors duration-300">${l.text}</p>`
            ).join('');
        }

        if (closeBtn) closeBtn.addEventListener('click', closeProfileModal);
        
        if (overlay) {
            overlay.addEventListener('click', (e) => {
                if (!musicBadge.contains(e.target) && !lyricsList.contains(e.target)) {
                    closeProfileModal();
                }
            });
        }

        if (musicBadge && player) {
            musicBadge.addEventListener('click', (e) => {
                e.stopPropagation();
                if (player.paused) {
                    player.play();
                    startSlowScroll();
                } else {
                    player.pause();
                    stopSlowScroll();
                }
            });
        }

        // Hybrid Lyrics Logic
        if (player) {
            player.addEventListener('timeupdate', () => {
                // DESKTOP SIDEBAR REMAINS 100% STATIC
                // We do NOT call any highlight or scroll logic here for the sidebar anymore
                // Mobile sync removed as requested
            });
        }
    });

    // Reveal page after big bang preloader finishes
    window.addEventListener('load', () => {
        const wrapper = document.getElementById('content-wrapper');
        if (!wrapper) return;
        
        if (sessionStorage.getItem('preloader_played')) {
            wrapper.classList.remove('opacity-0');
        } else {
            setTimeout(() => {
                wrapper.classList.remove('opacity-0');
            }, 3800);
        }
    });

    // Scroll Animations
    gsap.registerPlugin(ScrollTrigger);
    gsap.utils.toArray("section").forEach(section => {
        gsap.from(section, {
            scrollTrigger: {
                trigger: section,
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power2.out"
        });
    });
    </script>
</body>
