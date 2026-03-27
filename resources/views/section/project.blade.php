<section id="project"
    class="relative min-h-screen flex items-center justify-center px-6 overflow-hidden py-20 transition-colors duration-700 bg-transparent dark:bg-transparent">

    <!-- Background handled globally by Starry Sky Canvas -->
    

    <!-- CONTENT -->
    <div class="relative z-10 max-w-6xl w-full">

        <h2 class="text-3xl md:text-4xl font-bold text-center mb-14 pb-2 text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400">
            Project
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10 w-full pb-8">

            @foreach($projects as $index => $p)
                <div class="project-card group relative bg-white/60 dark:bg-slate-900/40 backdrop-blur-xl rounded-[2rem] border border-[#4b3621]/10 dark:border-white/5 hover:border-[#115e59]/40 dark:hover:border-emerald-500/30 transition-all duration-500 flex-col h-full overflow-hidden shadow-2xl {{ $index > 0 ? 'hidden md:flex' : 'flex' }}">
                    
                    <!-- Visual Header / Thumbnail (Ultra-Minimalist Elegant) -->
                    <div class="relative h-64 w-full overflow-hidden bg-[#fbfaf5] dark:bg-slate-900/80">
                        <!-- Softer Gradient Background -->
                        <div class="absolute inset-0 bg-gradient-to-br from-[#4b3621]/5 to-transparent dark:from-white/5 dark:to-transparent opacity-50 group-hover:opacity-100 transition-opacity duration-700"></div>
                        
                        <!-- Elegant Geometric Centerpiece -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-24 h-24 rounded-full border border-[#4b3621]/10 dark:border-white/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-700 ease-out">
                                <div class="w-16 h-16 rounded-full bg-[#4b3621]/5 dark:bg-white/5 backdrop-blur-md flex items-center justify-center group-hover:bg-[#4b3621]/10 dark:group-hover:bg-white/10 transition-colors duration-700">
                                    <i class="fa-solid fa-arrow-up-right-from-square text-lg text-[#4b3621]/40 dark:text-white/40 group-hover:text-[#4b3621] dark:group-hover:text-white transition-colors duration-500"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Tech Badges (Minimalist) -->
                        <div class="absolute bottom-5 left-6 flex items-center gap-3 z-20 opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-500">
                            <span class="text-[10px] font-bold text-[#4b3621]/60 dark:text-slate-400 tracking-widest uppercase">Laravel</span>
                            <span class="w-1 h-1 rounded-full bg-[#4b3621]/30 dark:bg-slate-600"></span>
                            <span class="text-[10px] font-bold text-[#4b3621]/60 dark:text-slate-400 tracking-widest uppercase">Tailwind</span>
                        </div>
                    </div>

                    <!-- Content Body (Elegant Typography) -->
                    <div class="p-8 md:p-10 flex flex-col flex-grow relative bg-white/40 dark:bg-slate-900/20">
                        <!-- Super subtle Number Watermark -->
                        <div class="absolute top-8 right-8 text-7xl font-black text-[#4b3621]/[0.02] dark:text-white/[0.02] font-playfair italic pointer-events-none transition-colors duration-700 group-hover:text-[#115e59]/[0.05] dark:group-hover:text-emerald-400/[0.05]">
                            0{{ $index + 1 }}
                        </div>

                        <h3 class="text-2xl font-bold text-[#4b3621] dark:text-white mb-4 group-hover:text-[#115e59] dark:group-hover:text-emerald-400 transition-colors duration-500 tracking-tight leading-tight w-[90%] relative z-10">
                            {{ $p->title }}
                        </h3>

                        <p class="text-[#4b3621]/70 dark:text-slate-400 text-[15px] leading-relaxed mb-10 flex-grow font-light relative z-10 line-clamp-3">
                            {{ $p->description }}
                        </p>
                        
                        <!-- Elegant Action Link -->
                        <div class="mt-auto relative z-10 w-max">
                            <a href="{{ route('project_detail') }}" class="flex items-center gap-4 text-[#4b3621] dark:text-white font-bold text-[11px] uppercase tracking-[0.2em] group/link cursor-pointer">
                                <span class="relative overflow-hidden">
                                    <span class="block group-hover/link:-translate-y-full transition-transform duration-500">View Project</span>
                                    <span class="absolute inset-0 translate-y-full group-hover/link:translate-y-0 text-[#115e59] dark:text-emerald-400 transition-transform duration-500">View Project</span>
                                </span>
                                <div class="w-10 h-[1px] bg-[#4b3621]/20 dark:bg-white/20 relative overflow-hidden group-hover/link:w-16 transition-all duration-500 ease-out">
                                    <div class="absolute inset-0 w-full h-full bg-[#115e59] dark:bg-emerald-400 -translate-x-full group-hover/link:translate-x-0 transition-transform duration-500 delay-100"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Card Glow Effect (Hover) -->
                    <div class="absolute -inset-px bg-gradient-to-br from-emerald-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                </div>
            @endforeach

        </div>

        <!-- ELEGANT BUTTON -->
        <div class="text-center mt-12 mb-12 relative z-20 pb-10 md:pb-0">
            <a href="{{ route('project_detail') }}"
               class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-full border border-[#4b3621]/20 dark:border-white/20 bg-white/50 dark:bg-slate-900/50 backdrop-blur-md text-[#4b3621] dark:text-white font-bold text-sm tracking-widest uppercase hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 hover:border-transparent transition-all duration-500 hover:scale-105 shadow-xl group">
                Lihat Semua Project
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

    </div>

</section>
