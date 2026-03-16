<section id="project"
    class="relative min-h-screen flex items-center justify-center px-6 overflow-hidden py-20">

    <!-- Background handled globally by Starry Sky Canvas -->
    

    <!-- CONTENT -->
    <div class="relative z-10 max-w-6xl w-full">

        <h2 class="text-3xl md:text-4xl font-bold text-center mb-14 pb-2
            bg-gradient-to-r from-emerald-400 to-blue-400
            bg-clip-text text-transparent">
            Project
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10 w-full pb-8">

            @foreach($projects as $index => $p)
                <div class="project-card group relative bg-slate-900/40 backdrop-blur-xl rounded-[2rem] border border-white/5 hover:border-emerald-500/30 transition-all duration-500 flex flex-col h-full overflow-hidden shadow-2xl">
                    
                    <!-- Visual Header / Thumbnail Placeholder -->
                    <div class="relative h-48 w-full overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 via-blue-500/20 to-purple-500/20 group-hover:scale-110 transition-transform duration-700"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-30 group-hover:opacity-60 transition-opacity">
                            <i class="fa-solid fa-rocket text-6xl text-white"></i>
                        </div>
                        <!-- Glass Overlay on Thumbnail -->
                        <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-slate-950 to-transparent"></div>
                        
                        <!-- Tech Badges -->
                        <div class="absolute top-4 left-4 flex flex-wrap gap-2 z-20">
                            <span class="px-3 py-1 bg-emerald-500/20 backdrop-blur-md border border-emerald-500/30 rounded-full text-[10px] font-bold text-emerald-400 tracking-tighter uppercase">Laravel</span>
                            <span class="px-3 py-1 bg-blue-500/20 backdrop-blur-md border border-blue-500/30 rounded-full text-[10px] font-bold text-blue-400 tracking-tighter uppercase">Tailwind</span>
                        </div>
                    </div>

                    <!-- Content Body -->
                    <div class="p-8 flex flex-col flex-grow relative">
                        <!-- Number Watermark (Strategically Placed) -->
                        <div class="absolute bottom-4 right-6 text-8xl font-black text-white/[0.03] group-hover:text-emerald-500/10 transition-all duration-700 pointer-events-none tracking-tighter">
                            0{{ $index + 1 }}
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-emerald-400 transition-colors duration-300">
                            {{ $p->title }}
                        </h3>

                        <p class="text-slate-400 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">
                            {{ $p->description }}
                        </p>
                    </div>

                    <!-- Card Glow Effect (Hover) -->
                    <div class="absolute -inset-px bg-gradient-to-br from-emerald-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
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
