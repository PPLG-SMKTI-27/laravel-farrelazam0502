<section id="project"
    class="relative min-h-screen flex items-center justify-center px-6 overflow-hidden">

    <!-- BACKGROUND IMAGE -->
    <div class="absolute inset-0">
        <div class="w-full h-full bg-cover bg-center bg-no-repeat"
             style="background-image: url('/backgroundproject.png');">
        </div>

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-slate-950/85 backdrop-blur-[2px]"></div>
    </div>


    <!-- CONTENT -->
    <div class="relative z-10 max-w-6xl w-full">

        <h2 class="text-3xl md:text-4xl font-bold text-center mb-14
            bg-gradient-to-r from-emerald-400 to-blue-400
            bg-clip-text text-transparent">
            Project
        </h2>

        <!-- GRID -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($projects as $p)

                <div class="bg-slate-900/80 backdrop-blur-md p-8 rounded-3xl
                            border border-white/10
                            hover:-translate-y-2
                            hover:border-emerald-400/40
                            hover:shadow-xl hover:shadow-emerald-400/20
                            transition duration-300">

                    <h3 class="text-emerald-400 font-semibold mb-2">
                        {{ $p->title }}
                    </h3>

                    <p class="text-slate-300">
                        {{ $p->description }}
                    </p>

                </div>

            @endforeach

        </div>

        <!-- BUTTON -->
        <div class="text-center mt-12">
            <a href="{{ route('project_detail') }}"
               class="px-7 py-3 rounded-full
                      bg-gradient-to-r from-emerald-400 to-blue-400
                      text-slate-900 font-semibold
                      hover:scale-105 hover:shadow-lg
                      transition duration-300">
                Lihat Detail Project
            </a>
        </div>

    </div>

</section>
