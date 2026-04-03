  {{-- NAVBAR --}}
  <nav id="main-nav" class="{{ isset($inline) && $inline ? 'relative' : 'fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[95%] max-w-5xl' }} transition-all duration-500 opacity-100">
      <div class="relative backdrop-blur-xl bg-[#fbfaf5]/80 dark:bg-slate-950/40 border border-[#4b3621]/10 dark:border-white/10 rounded-full {{ isset($inline) && $inline ? 'px-6 py-2' : 'px-5 py-2 md:px-8 md:py-3' }} 
                   flex items-center {{ isset($inline) && $inline ? 'justify-center' : 'justify-between' }} shadow-[0_8px_32px_rgba(75,54,33,0.05)] dark:shadow-[0_8px_32px_rgba(0,0,0,0.5)]
                   group hover:bg-[#fbfaf5] dark:hover:bg-slate-950/80 hover:border-[#115e59]/20 dark:hover:border-white/20 transition-all duration-500">

          {{-- Bottom Glow Line --}}
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-1/3 h-[1px] 
                      bg-gradient-to-r from-transparent via-emerald-400/50 to-transparent 
                      group-hover:w-1/2 group-hover:via-emerald-400 transition-all duration-700"></div>

          {{-- LOGO --}}
          @if(!(isset($inline) && $inline))
          <a href="{{ route('home') }}"
            class="text-2xl font-black font-playfair italic
                   text-[#4b3621] dark:text-slate-300
                   hover:scale-105 transition duration-300 drop-shadow-sm">
              Farrel
          </a>
          @endif

          {{-- MENU --}}
          <ul class="hidden md:flex items-center gap-7 text-sm font-bold text-[#4b3621] dark:text-slate-300">

              <li>
                <a href="{{ route('home') }}"
                class="hover:text-emerald-400 transition">
                {{ __('Beranda') }}
            </a>
            
            </li>


              <li>
                  <a href="{{ route('home') }}#tentang-saya"
                    class="hover:text-emerald-400 transition">
                    {{ __('Tentang Saya') }}
                  </a>
              </li>

              <li>
                  <a href="{{ route('home') }}#skill"
                    class="hover:text-emerald-400 transition">
                    {{ __('Skill') }}
                  </a>
              </li>

              <li>
                  <a href="{{ route('home') }}#certificate"
                    class="hover:text-emerald-400 transition">
                    {{ __('Sertifikat') }}
                  </a>
              </li>

              <li>
                  <a href="{{ route('home') }}#project"
                    class="hover:text-emerald-400 transition">
                    {{ __('Projek') }}
                  </a>
              </li>

              <li>
                  <a href="{{ route('home') }}#contact"
                    class="hover:text-emerald-400 transition">
                    {{ __('Kontak') }}
                  </a>
              </li>


              {{-- AUTH --}}
              @guest
                  <li>
                      <a href="{{ route('login') }}"
                        class="px-5 py-2 rounded-full
                                bg-[#215a49]/10 dark:bg-emerald-500/10
                                border border-[#215a49]/30 dark:border-emerald-500/30
                                text-[#215a49] dark:text-emerald-400 font-bold text-sm
                                hover:bg-[#215a49] hover:text-[#fbfaf5] dark:hover:bg-emerald-500 dark:hover:text-slate-900
                                hover:scale-105 hover:shadow-md transition-all duration-300">
                          {{ __('Masuk') }}
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
                                      bg-rose-500/10 dark:bg-rose-500/10
                                      border border-rose-500/30
                                      text-rose-600 dark:text-rose-400 text-sm font-bold
                                      hover:bg-rose-600 hover:text-white dark:hover:bg-rose-500 dark:hover:text-white
                                      hover:scale-105 transition-all shadow-sm flex items-center justify-center leading-none">
                                {{ __('Keluar') }}
                          </button>
                      </form>
                  </li>
              @endauth

              {{-- THEME TOGGLE --}}
              <li class="flex items-center ml-4">
                  <button id="theme-toggle" 
                          class="relative w-16 h-8 rounded-full bg-[#4b3621]/20 dark:bg-emerald-500/20 border-2 border-[#115e59]/40 dark:border-emerald-400/40 flex items-center px-1 transition-all duration-500 hover:scale-110 active:scale-95 shadow-lg overflow-hidden group">
                      <!-- Sliding Knob -->
                      <div id="theme-knob" class="absolute w-6 h-6 rounded-full bg-white dark:bg-emerald-400 shadow-md transform transition-all duration-500 ease-spring flex items-center justify-center z-10">
                          <i class="fa-solid fa-moon text-[12px] text-[#115e59] dark:hidden"></i>
                          <i class="fa-solid fa-sun text-[12px] text-slate-900 hidden dark:block"></i>
                      </div>
                      
                      <!-- Track Indicators -->
                      <div class="flex justify-between w-full px-2 opacity-60">
                          <i class="fa-solid fa-moon text-[10px] text-[#115e59]"></i>
                          <i class="fa-solid fa-sun text-[10px] text-yellow-500"></i>
                      </div>
                  </button>
                  <span class="text-[9px] font-bold text-[#115e59] dark:text-emerald-400 ml-2 uppercase tracking-tighter hidden lg:block">{{ __('Tema') }}</span>
              </li>

              {{-- Language Switcher --}}
              <li class="flex items-center ml-4">
                  <div class="flex items-center gap-1.5 bg-[#4b3621]/5 dark:bg-white/5 rounded-full p-0.5 border border-[#4b3621]/10 dark:border-white/10 shadow-inner">
                      <a href="{{ route('lang.switch', 'id') }}" 
                         class="relative w-5 h-5 rounded-full overflow-hidden flex items-center justify-center transition-all duration-500 {{ App::getLocale() == 'id' ? 'ring-1 ring-[#115e59] dark:ring-emerald-400 shadow-md scale-110 z-10' : 'grayscale opacity-40 hover:grayscale-0 hover:opacity-100' }}" 
                         title="Bahasa Indonesia">
                          <img src="https://flagcdn.com/id.svg" alt="ID" class="w-full h-full object-cover">
                      </a>
                      <a href="{{ route('lang.switch', 'en') }}" 
                         class="relative w-5 h-5 rounded-full overflow-hidden flex items-center justify-center transition-all duration-500 {{ App::getLocale() == 'en' ? 'ring-1 ring-[#115e59] dark:ring-emerald-400 shadow-lg scale-110 z-10' : 'grayscale opacity-40 hover:grayscale-0 hover:opacity-100' }}" 
                         title="English">
                          <img src="https://flagcdn.com/us.svg" alt="US" class="w-full h-full object-cover">
                      </a>
                  </div>
              </li>

          </ul>

          {{-- MOBILE ACTIONS --}}
          <div class="flex items-center gap-3 md:hidden relative z-50">
              {{-- Theme Toggle (Mobile) --}}
              <button id="theme-toggle-mobile" 
                      class="relative w-12 h-6 rounded-full bg-[#4b3621]/10 dark:bg-white/10 border border-[#4b3621]/20 dark:border-white/20 flex items-center px-1 transition-all duration-300">
                  <div id="theme-knob-mobile" class="absolute w-4 h-4 rounded-full bg-white dark:bg-emerald-400 shadow-sm transform transition-transform duration-300 flex items-center justify-center">
                      <i class="fa-solid fa-moon text-[8px] text-[#4b3621] dark:hidden"></i>
                      <i class="fa-solid fa-sun text-[8px] text-slate-900 hidden dark:block"></i>
                  </div>
              </button>

              <button id="menu-toggle" class="text-[#4b3621] dark:text-slate-300 hover:text-emerald-400 transition p-2">
                  <i class="fa-solid fa-bars text-xl"></i>
              </button>
          </div>

      </div>

      {{-- MOBILE MENU DROPDOWN --}}
      <div id="mobile-menu" class="hidden md:hidden absolute top-[calc(100%+0.5rem)] left-1/2 -translate-x-1/2 w-[90%] z-50 transition-all duration-300">
          <ul class="backdrop-blur-2xl bg-[#fbfaf5]/95 dark:bg-slate-950/95 border border-[#4b3621]/10 dark:border-white/10 rounded-2xl p-6 flex flex-col gap-4 text-center text-[#4b3621] dark:text-slate-300 font-medium shadow-2xl">
              <li><a href="{{ route('home') }}" class="hover:text-[#115e59] dark:hover:text-emerald-400 block py-2 transition-colors">{{ __('Beranda') }}</a></li>
              <li><a href="{{ route('home') }}#tentang-saya" class="hover:text-[#115e59] dark:hover:text-emerald-400 block py-2 transition-colors">{{ __('Tentang Saya') }}</a></li>
              <li><a href="{{ route('home') }}#skill" class="hover:text-[#115e59] dark:hover:text-emerald-400 block py-2 transition-colors">{{ __('Keahlian') }}</a></li>
              <li><a href="{{ route('home') }}#certificate" class="hover:text-[#115e59] dark:hover:text-emerald-400 block py-2 transition-colors">{{ __('Sertifikat') }}</a></li>
              <li><a href="{{ route('home') }}#project" class="hover:text-[#115e59] dark:hover:text-emerald-400 block py-2 transition-colors">{{ __('Projek') }}</a></li>
              <li><a href="{{ route('home') }}#contact" class="hover:text-[#115e59] dark:hover:text-emerald-400 block py-2 transition-colors">{{ __('Kontak') }}</a></li>
              @auth
              <li><a href="{{ route('dashboard') }}" class="hover:text-[#115e59] dark:hover:text-emerald-400 block py-2 transition-colors">Dashboard</a></li>
              @endauth
              <li class="pt-4 border-t border-[#4b3621]/10 dark:border-white/5 md:hidden">
                  <p class="text-[10px] uppercase tracking-widest text-[#4b3621]/60 dark:text-slate-500 mb-2">{{ __('Ganti Bahasa') }}</p>
                  <div class="flex justify-center gap-3">
                      <a href="{{ route('lang.switch', 'id') }}" class="w-7 h-7 rounded-lg bg-[#4b3621]/5 dark:bg-white/5 overflow-hidden flex items-center justify-center shadow-sm {{ App::getLocale() == 'id' ? 'ring-1 ring-emerald-500 scale-110' : 'grayscale opacity-60' }}">
                          <img src="https://flagcdn.com/id.svg" alt="ID" class="w-full h-full object-cover">
                      </a>
                      <a href="{{ route('lang.switch', 'en') }}" class="w-7 h-7 rounded-lg bg-[#4b3621]/5 dark:bg-white/5 overflow-hidden flex items-center justify-center shadow-sm {{ App::getLocale() == 'en' ? 'ring-1 ring-emerald-500 scale-110' : 'grayscale opacity-60' }}">
                          <img src="https://flagcdn.com/us.svg" alt="US" class="w-full h-full object-cover">
                      </a>
                  </div>
              </li>
              <li class="pt-4 border-t border-[#4b3621]/10 dark:border-white/5 md:hidden">
                  <p class="text-[10px] uppercase tracking-widest text-[#4b3621]/60 dark:text-slate-500 mb-2">{{ __('Tema') }}</p>
                  <div class="flex justify-center gap-4">
                      <button class="w-10 h-10 rounded-xl bg-[#4b3621]/5 dark:bg-white/5 flex items-center justify-center text-yellow-600 dark:text-yellow-400 hover:bg-white dark:hover:bg-white/10 transition-colors shadow-sm" onclick="setTheme('light')"><i class="fa-solid fa-sun"></i></button>
                      <button class="w-10 h-10 rounded-xl bg-[#4b3621]/5 dark:bg-white/5 flex items-center justify-center text-[#115e59] dark:text-blue-400 hover:bg-white dark:hover:bg-white/10 transition-colors shadow-sm" onclick="setTheme('dark')"><i class="fa-solid fa-moon"></i></button>
                  </div>
              </li>
          </ul>
      </div>
  </nav>

  {{-- SCRIPTS --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', () => {
    // Register GSAP Plugin
    if (typeof gsap !== 'undefined' && typeof ScrollToPlugin !== 'undefined') {
        gsap.registerPlugin(ScrollToPlugin);
    }

    // Navbar Elements
    const nav = document.getElementById('main-nav');
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const themeToggle = document.getElementById('theme-toggle');
    const themeToggleMobile = document.getElementById('theme-toggle-mobile');

    // Theme Toggle Logic
    if (themeToggle || themeToggleMobile) {
        const knob = document.getElementById('theme-knob');
        const knobMobile = document.getElementById('theme-knob-mobile');
        
        const updateKnobs = (isDark) => {
            if (knob) knob.style.transform = isDark ? 'translateX(28px)' : 'translateX(0)';
            if (knobMobile) knobMobile.style.transform = isDark ? 'translateX(20px)' : 'translateX(0)';
        };

        const currentIsDark = document.documentElement.classList.contains('dark');
        updateKnobs(currentIsDark);

        const toggleTheme = () => {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            updateKnobs(isDark);
            
            const flash = document.createElement('div');
            flash.className = 'fixed inset-0 z-[9999] pointer-events-none transition-opacity duration-700 bg-white dark:bg-[#020617]';
            flash.style.opacity = '1';
            document.body.appendChild(flash);
            setTimeout(() => {
                flash.style.opacity = '0';
                setTimeout(() => flash.remove(), 700);
            }, 50);
        };

        if (themeToggle) themeToggle.addEventListener('click', toggleTheme);
        if (themeToggleMobile) themeToggleMobile.addEventListener('click', toggleTheme);

        window.setTheme = (theme) => {
            const isDark = theme === 'dark';
            document.documentElement.classList.toggle('dark', isDark);
            localStorage.setItem('theme', theme);
            updateKnobs(isDark);
        };
    }

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
    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

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
