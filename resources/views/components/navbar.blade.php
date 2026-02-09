  {{-- NAVBAR --}}
  <nav class="sticky top-0 z-50 backdrop-blur-md
              bg-slate-950/70 border-b border-white/5">

      <div class="max-w-6xl mx-auto px-8 py-5
                  flex items-center justify-between">

          {{-- LOGO --}}
          <a href="{{ route('home') }}"
            class="text-xl font-bold
                    bg-gradient-to-r from-emerald-400 to-blue-400
                    bg-clip-text text-transparent">
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
