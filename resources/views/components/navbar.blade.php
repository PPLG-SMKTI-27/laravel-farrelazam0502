  {{-- NAVBAR --}}
  <nav id="main-nav" class="{{ isset($inline) && $inline ? 'relative' : 'fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[95%] max-w-5xl' }} transition-all duration-500 opacity-100">
      <div class="relative backdrop-blur-xl bg-slate-950/40 border border-white/10 rounded-full {{ isset($inline) && $inline ? 'px-6 py-2' : 'px-5 py-2 md:px-8 md:py-3' }} 
                   flex items-center {{ isset($inline) && $inline ? 'justify-center' : 'justify-between' }} shadow-[0_8px_32px_rgba(0,0,0,0.5)]
                   group hover:bg-slate-950/80 hover:border-white/20 transition-all duration-500">

          {{-- Bottom Glow Line --}}
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-1/3 h-[1px] 
                      bg-gradient-to-r from-transparent via-emerald-400/50 to-transparent 
                      group-hover:w-1/2 group-hover:via-emerald-400 transition-all duration-700"></div>

          {{-- LOGO --}}
          @if(!(isset($inline) && $inline))
          <a href="{{ route('home') }}"
            class="text-2xl font-black
                    bg-gradient-to-r from-emerald-400 to-blue-400
                    bg-clip-text text-transparent hover:scale-105 transition duration-300">
              Farrel
          </a>
          @endif

          {{-- MENU --}}
          <ul class="hidden md:flex items-center gap-7 text-sm font-medium text-slate-300">

              <li>
                <a href="{{ route('home') }}"
                class="hover:text-emerald-400 transition">
                Home
            </a>
            
            </li>


              <li>
                  <a href="{{ route('home') }}#tentang-saya"
                    class="hover:text-emerald-400 transition">
                    Tentang
                  </a>
              </li>

              <li>
                  <a href="{{ route('home') }}#skill"
                    class="hover:text-emerald-400 transition">
                    Skill
                  </a>
              </li>

              <li>
                  <a href="{{ route('home') }}#project"
                    class="hover:text-emerald-400 transition">
                    Project
                  </a>
              </li>

              <li>
                  <a href="{{ route('home') }}#contact"
                    class="hover:text-emerald-400 transition">
                    Kontak
                  </a>
              </li>


              {{-- AUTH --}}
              @guest
                  <li>
                      <a href="{{ route('login') }}"
                        class="px-5 py-2 rounded-full
                                bg-gradient-to-r from-emerald-400 to-blue-400
                                text-slate-900 font-semibold
                                hover:scale-105 hover:shadow-lg
                                hover:shadow-emerald-400/30 transition">
                          Login
                      </a>
                  </li>
              @endguest


              @auth
                  @if(!(isset($inline) && $inline))
                  <li>
                      <a href="{{ route('dashboard') }}"
                        class="hover:text-emerald-400 transition">
                          Dashboard
                      </a>
                  </li>
                  @endif

                  <li class="flex items-center">
                      <form method="POST" action="{{ route('logout') }}" class="m-0 flex items-center">
                          @csrf
                          <button type="submit"
                                class="px-5 py-2 rounded-full
                                      bg-gradient-to-r from-red-500 to-pink-500
                                      text-sm font-semibold text-white
                                      hover:scale-105 transition shadow-lg
                                      flex items-center justify-center leading-none">
                                Logout
                          </button>
                      </form>
                  </li>
              @endauth

          </ul>

          {{-- MOBILE MENU BUTTON --}}
          <button id="menu-toggle" class="md:hidden text-slate-300 hover:text-emerald-400 transition p-2 relative z-50">
              <i class="fa-solid fa-bars text-xl"></i>
          </button>

      </div>

      {{-- MOBILE MENU DROPDOWN --}}
      <div id="mobile-menu" class="hidden md:hidden absolute top-[calc(100%+0.5rem)] left-1/2 -translate-x-1/2 w-[90%] z-50 transition-all duration-300">
          <ul class="backdrop-blur-2xl bg-slate-950/95 border border-white/10 rounded-2xl p-6 flex flex-col gap-4 text-center text-slate-300 font-medium shadow-2xl">
              <li><a href="{{ route('home') }}" class="hover:text-emerald-400 block py-2">Home</a></li>
              <li><a href="{{ route('home') }}#tentang-saya" class="hover:text-emerald-400 block py-2">Tentang Saya</a></li>
              <li><a href="{{ route('home') }}#skill" class="hover:text-emerald-400 block py-2">Skill</a></li>
              <li><a href="{{ route('home') }}#project" class="hover:text-emerald-400 block py-2">Project</a></li>
              <li><a href="{{ route('home') }}#contact" class="hover:text-emerald-400 block py-2">Kontak</a></li>
              @auth
              <li><a href="{{ route('dashboard') }}" class="hover:text-emerald-400 block py-2">Dashboard</a></li>
              @endauth
          </ul>
      </div>
  </nav>

  {{-- SCRIPTS --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', () => {
    // Register GSAP Plugin
    gsap.registerPlugin(ScrollToPlugin);

    // Navbar Elements
    const nav = document.getElementById('main-nav');
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    // Navbar Scroll Effect
    window.addEventListener('scroll', () => {
      if (window.scrollY > 100) {
        nav.classList.remove('opacity-100');
        nav.classList.add('opacity-40', 'hover:opacity-100');
      } else {
        nav.classList.add('opacity-100');
        nav.classList.remove('opacity-40', 'hover:opacity-100');
      }
    });

    // Mobile Menu Toggle
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when ANY link inside is clicked
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
      });
    });

    // Smooth Scroll Logic
    if (typeof gsap !== 'undefined') {
      document.querySelectorAll('a[href*="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          const hash = this.hash;
          if (!hash || hash === '#') return;

          const target = document.querySelector(hash);
          if (!target) return;

          // Normalize paths for comparison (handle subfolders and trailing slashes)
          const normalize = p => p.replace(/\/$/, "") || "/";
          const isSamePage = normalize(this.pathname) === normalize(window.location.pathname);

          if (isSamePage) {
            e.preventDefault();
            
            // Ensure mobile menu is closed
            if (mobileMenu) mobileMenu.classList.add('hidden');

            gsap.to(window, {
              scrollTo: {
                y: target,
                autoKill: true,
                offsetY: 80
              },
              duration: 0.8,
              ease: "power2.inOut"
            });
          }
        });
      });
    }
  });
  </script>
