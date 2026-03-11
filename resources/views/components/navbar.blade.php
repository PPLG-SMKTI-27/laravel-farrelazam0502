  {{-- NAVBAR --}}
  <nav id="main-nav" class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[95%] max-w-5xl transition-all duration-500 opacity-100">
      <div class="relative backdrop-blur-xl bg-slate-950/40 border border-white/10 rounded-full px-8 py-3 
                  flex items-center justify-between shadow-[0_8px_32px_rgba(0,0,0,0.5)]
                  group hover:bg-slate-950/80 hover:border-white/20 transition-all duration-500">

          {{-- Bottom Glow Line --}}
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-1/3 h-[1px] 
                      bg-gradient-to-r from-transparent via-emerald-400/50 to-transparent 
                      group-hover:w-1/2 group-hover:via-emerald-400 transition-all duration-700"></div>

          {{-- LOGO --}}
          <a href="{{ route('home') }}"
            class="text-2xl font-black
                    bg-gradient-to-r from-emerald-400 to-blue-400
                    bg-clip-text text-transparent hover:scale-105 transition duration-300">
              Farrel
          </a>

          {{-- MENU --}}
          <ul class="flex items-center gap-7 text-sm font-medium text-slate-300">

              <li>
                <a href="{{ route('home') }}"
                class="hover:text-emerald-400 transition">
                Home
            </a>
            
            </li>


              <li>
                  <a href="{{ route('home') }}#about"
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
                  <li>
                      <a href="{{ route('dashboard') }}"
                        class="hover:text-emerald-400 transition">
                          Dashboard
                      </a>
                  </li>

                  <li>
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button
                              class="px-5 py-2 rounded-full
                                    bg-gradient-to-r from-red-500 to-pink-500
                                    text-white font-semibold
                                    hover:scale-105 transition">
                              Logout
                          </button>
                      </form>
                  </li>
              @endauth

          </ul>

      </div>
  </nav>


  <script>
  // Navbar Scroll Logic
  const nav = document.getElementById('main-nav');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
      nav.classList.remove('opacity-100');
      nav.classList.add('opacity-40', 'hover:opacity-100');
    } else {
      nav.classList.add('opacity-100');
      nav.classList.remove('opacity-40', 'hover:opacity-100');
    }
  });

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault(); 

      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        gsap.to(window, {
          scrollTo: {
            y: target,
            offsetY: 120 
          },
          duration: 1, 
          ease: "power2.out"
        });
      }
    });
  });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollToPlugin.min.js"></script>
