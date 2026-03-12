<section id="project"
    class="relative min-h-screen flex items-center justify-center px-6 overflow-hidden">

    <!-- Background handled globally by Starry Sky Canvas -->
    

    <!-- CONTENT -->
    <div class="relative z-10 max-w-6xl w-full">

        <h2 class="text-3xl md:text-4xl font-bold text-center mb-14 pb-2
            bg-gradient-to-r from-emerald-400 to-blue-400
            bg-clip-text text-transparent">
            Project
        </h2>

        <!-- GRID -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 w-full pb-8">

            @foreach($projects as $index => $p)
                <div class="group relative bg-slate-900/60 backdrop-blur-md rounded-3xl p-6 md:p-8 
                            border border-white/5 hover:-translate-y-3 
                            hover:border-emerald-400/50 transition-all duration-500 text-left 
                            hover:shadow-[0_0_30px_rgba(52,211,153,0.15)] overflow-hidden flex flex-col h-full min-h-[250px]">
                    
                    <!-- Subtle Gradient background on hover -->
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-400/10 to-blue-400/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none -z-10"></div>
                    
                    <!-- Decorative Number/Index Watermark -->
                    <div class="absolute top-4 right-6 text-6xl font-black text-slate-800/30 group-hover:text-emerald-500/10 transition-colors pointer-events-none z-0">
                        0{{ $index + 1 }}
                    </div>

                    <h3 class="text-xl md:text-2xl font-bold text-slate-100 group-hover:text-emerald-400 transition duration-300 mb-3 relative z-10 line-clamp-2 mt-4 text-center md:text-left">
                        {{ $p->title }}
                    </h3>

                    <p class="text-indigo-200/80 leading-relaxed text-sm line-clamp-3 md:line-clamp-4 relative z-10 flex-grow text-center md:text-left">
                        {{ $p->description }}
                    </p>

                </div>
            @endforeach

        </div>

        <!-- BUTTON -->
        <div class="text-center mt-8 mb-12 relative z-20 pb-10 md:pb-0">
            <a href="{{ route('project_detail') }}"
               class="inline-block px-7 py-3 md:px-8 md:py-4 rounded-full
                      bg-gradient-to-r from-emerald-400 to-blue-400
                      text-slate-900 font-bold tracking-wide
                      hover:scale-105 hover:shadow-[0_0_30px_rgba(52,211,153,0.4)]
                      transition-all duration-300">
                Lihat Detail Project <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>

    </div>

</section>
