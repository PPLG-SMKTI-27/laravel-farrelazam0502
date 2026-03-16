<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />


    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body class="font-sans antialiased bg-slate-950 text-slate-200 overflow-x-hidden">
    @include('components.preloader')
    @include('components.page-transition')
    
    <div id="content-wrapper" class="opacity-0 transition-opacity duration-1000 min-h-screen bg-slate-950">
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
    </div>

    <!-- GLOBAL PROFILE REVEAL OVERLAY -->
    <div id="photo-reveal-overlay" class="fixed inset-0 z-[99999] bg-black/90 backdrop-blur-xl hidden items-center justify-center p-4">
        <div class="reveal-container relative w-full max-w-[340px] md:max-w-[400px] aspect-[9/16] flex flex-col items-center scale-90 transition-transform duration-500">
            <div class="close-reveal absolute -top-12 right-0 md:-right-12 md:top-0 w-10 h-10 bg-white/10 hover:bg-emerald-500/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300">
                <i class="fa-solid fa-times text-xl"></i>
            </div>
            
            <div class="reveal-img-wrapper w-full h-full rounded-[2.5rem] overflow-hidden border-2 border-emerald-500/30 shadow-[0_0_50px_rgba(16,185,129,0.2)]">
                <img src="/profile.png?v=2" alt="Full Photo" class="w-full h-full object-cover object-[center_20%]" />
            </div>

            <div class="reveal-badge mt-6 bg-emerald-500/20 border border-emerald-500/40 text-emerald-400 px-5 py-2 rounded-full text-sm font-semibold flex items-center gap-2 cursor-pointer hover:scale-105 transition-transform animate-bounce" id="reveal-music-badge">
                <i class="fa-solid fa-music"></i> <span id="music-status-text">Double Take 🎵</span>
            </div>
        </div>  
    </div>

    <!-- Global Audio Player -->
    <audio id="local-music-player" preload="auto" style="display:none;">
        <source src="{{ asset('audio/dhruv  double take (Lyrics).mp3') }}" type="audio/mpeg">
    </audio>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
  
    <script>
    // Global Modal Functions
    function openProfileModal() {
        const overlay = document.getElementById('photo-reveal-overlay');
        const container = overlay.querySelector('.reveal-container');
        const player = document.getElementById('local-music-player');
        const statusText = document.getElementById('music-status-text');

        overlay.classList.remove('hidden');
        overlay.classList.add('flex');
        document.body.style.overflow = 'hidden';

        setTimeout(() => {
            container.classList.remove('scale-90');
            container.classList.add('scale-100');
        }, 10);

        if (player) {
            player.currentTime = 0;
            player.play().catch(err => {
                console.warn("Autoplay blocked:", err);
                if (statusText) statusText.innerHTML = "Tap to Play Music <i class='fa-solid fa-play ml-1'></i>";
            });
        }
    }

    function closeProfileModal() {
        const overlay = document.getElementById('photo-reveal-overlay');
        const container = overlay.querySelector('.reveal-container');
        const player = document.getElementById('local-music-player');

        container.classList.remove('scale-100');
        container.classList.add('scale-90');

        setTimeout(() => {
            overlay.classList.add('hidden');
            overlay.classList.remove('flex');
            document.body.style.overflow = '';
        }, 300);

        if (player) player.pause();
    }

    document.addEventListener('DOMContentLoaded', () => {
        const overlay = document.getElementById('photo-reveal-overlay');
        const closeBtn = document.querySelector('.close-reveal');
        const musicBadge = document.getElementById('reveal-music-badge');
        const player = document.getElementById('local-music-player');

        if (closeBtn) closeBtn.addEventListener('click', closeProfileModal);
        if (overlay) overlay.addEventListener('click', (e) => {
            if (e.target === overlay) closeProfileModal();
        });

        if (musicBadge && player) {
            musicBadge.addEventListener('click', (e) => {
                e.stopPropagation();
                if (player.paused) {
                    player.play();
                    document.getElementById('music-status-text').innerText = "Double Take 🎵";
                }
            });
        }
    });

      // Reveal page after big bang preloader finishes
      window.addEventListener('load', () => {
          const wrapper = document.getElementById('content-wrapper');
          if (!wrapper) return;
          
          if (sessionStorage.getItem('preloader_played')) {
              // Preloader already played, show content immediately
              wrapper.classList.remove('opacity-0');
          } else {
              // Wait for preloader animation (3.8s is the calculated end)
              setTimeout(() => {
                  wrapper.classList.remove('opacity-0');
              }, 3800);
          }
      });

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
