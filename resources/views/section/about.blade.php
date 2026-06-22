<!-- ===================== TENTANG SAYA & KARIR: PRECISE SCREENSHOT ALIGNMENT ===================== -->
<section id="tentang-saya" class="relative py-24 px-5 md:px-8 overflow-hidden transition-colors duration-700 bg-transparent dark:bg-transparent">
    
    <div class="relative z-20 max-w-7xl mx-auto">
        
        <!-- ABOUT ME: THREE HANGING CARDS -->
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-10 items-start justify-center mb-32 lg:mb-[360px] w-full overflow-visible">
            
            <!-- COLUMN 1: Kisah Saya & Stats Lanyard (Hanging) -->
            <div class="w-full lg:w-[36%] flex flex-col items-center">
                <div class="relative w-full flex flex-col items-center mt-20 lg:mt-32 mb-12 group overflow-visible z-20 hanging-card-wrapper" style="perspective: 2500px;">
                    <!-- LANYARD SVG -->
                    <svg class="absolute pointer-events-none overflow-visible z-[-1] dark:hidden lanyard-svg" 
                            style="top: -2000px; left: 50%; width: 1000px; height: 3000px; transform: translateX(-50%);">
                        <path class="lanyard-path" d="" fill="none" stroke="#4b3621" stroke-width="4.5" stroke-linecap="round" opacity="0.6" />
                        <path class="lanyard-path-shadow" d="" fill="none" stroke="rgba(0,0,0,0.1)" stroke-width="5.5" stroke-linecap="round" filter="blur(4.5px)" />
                    </svg>
                    <svg class="absolute pointer-events-none overflow-visible z-[-1] hidden dark:block lanyard-svg-dark" 
                            style="top: -2000px; left: 50%; width: 1000px; height: 3000px; transform: translateX(-50%);">
                        <path class="lanyard-path-dark" d="" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" opacity="0.25" />
                    </svg>

                    <div class="hanging-card relative transition-shadow duration-300 preserve-3d select-none z-25 h-fit cursor-grab active:cursor-grabbing w-[300px] md:w-[340px] lg:w-[360px]" style="touch-action: none;">
                        <!-- MATCHING POLAROID CARD FRAME -->
                        <div class="relative w-full h-auto lg:aspect-[3/4.2] bg-[#fbfaf5] dark:bg-slate-900/60 dark:backdrop-blur-2xl rounded-[3rem] p-3 border border-[#4b3621]/15 dark:border-emerald-500/30 z-20 overflow-hidden transform-style-3d shadow-[0_20px_60px_rgba(75,54,33,0.3)] dark:shadow-[0_0_40px_rgba(16,185,129,0.15)] pointer-events-auto animate-float">
                            <!-- Inner Sheet -->
                            <div class="w-full h-auto lg:h-full relative rounded-[2.2rem] overflow-hidden border border-[#4b3621]/10 dark:border-white/10 bg-white dark:bg-slate-800 p-5 flex flex-col justify-between gap-6">
                                <!-- Background watermark -->
                                <div class="absolute inset-0 pointer-events-none opacity-[0.03] dark:opacity-[0.02]" 
                                     style="background-image: radial-gradient(#4b3621 1px, transparent 1px); background-size: 20px 20px;"></div>

                                <div>
                                    <!-- Header -->
                                    <div class="relative z-10 flex items-center gap-2.5 text-[#4b3621] dark:text-white border-b border-[#4b3621]/10 dark:border-white/10 pb-3 mb-3">
                                        <i class="fa-solid fa-book-open text-[#115e59] dark:text-emerald-400 text-sm"></i>
                                        <h3 class="text-base font-black font-playfair tracking-tight">{{ __('Kisah Saya') }}</h3>
                                    </div>

                                    <!-- Biography Paper Sheet -->
                                    <div class="relative z-10 p-4 rounded-xl bg-[#fbfaf5] dark:bg-slate-955/40 border border-[#4b3621]/5 dark:border-white/5 shadow-inner">
                                        <div class="space-y-3 text-[#4b3621]/80 dark:text-slate-300 text-sm sm:text-base leading-relaxed font-light italic">
                                            <p>
                                                {!! __('bio_paragraph') !!}
                                            </p>
                                        </div>
                                        <div class="mt-4 flex justify-end items-center gap-2">
                                            <div class="text-right">
                                                <p class="font-dancing text-xl text-[#115e59] dark:text-emerald-400 leading-none">Farrel Azam</p>
                                                <p class="text-[9px] uppercase tracking-widest text-[#4b3621]/40 dark:text-slate-500 font-mono mt-0.5">Signature Verified</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Stats Badge Stamps -->
                                <div class="relative z-10 grid grid-cols-3 gap-2 border-t border-[#4b3621]/10 dark:border-white/10 pt-3">
                                    <div class="p-2.5 rounded-xl bg-[#fbfaf5] dark:bg-slate-955/30 border border-[#4b3621]/10 dark:border-emerald-500/10 flex flex-col items-center justify-center text-center shadow-sm relative overflow-hidden">
                                        <div class="absolute inset-0.5 border border-dashed border-[#4b3621]/10 dark:border-white/10 rounded-lg pointer-events-none"></div>
                                        <span class="text-xl md:text-2xl font-black text-[#115e59] dark:text-emerald-400 mb-1">2+</span>
                                        <span class="text-[9px] md:text-[10px] font-mono uppercase tracking-widest leading-tight text-[#4b3621]/60 dark:text-slate-400">{!! __('Tahun<br/>Pengalaman') !!}</span>
                                    </div>
                                    <div class="p-2.5 rounded-xl bg-[#fbfaf5] dark:bg-slate-955/30 border border-[#4b3621]/10 dark:border-emerald-500/10 flex flex-col items-center justify-center text-center shadow-sm relative overflow-hidden">
                                        <div class="absolute inset-0.5 border border-dashed border-[#4b3621]/10 dark:border-white/10 rounded-lg pointer-events-none"></div>
                                        <span class="text-xl md:text-2xl font-black text-[#115e59] dark:text-emerald-400 mb-1">{{ $totalProjects }}</span>
                                        <span class="text-[9px] md:text-[10px] font-mono uppercase tracking-widest leading-tight text-[#4b3621]/60 dark:text-slate-400">{!! __('Projek<br/>Selesai') !!}</span>
                                    </div>
                                    <div class="p-2.5 rounded-xl bg-[#fbfaf5] dark:bg-slate-955/30 border border-[#4b3621]/10 dark:border-emerald-500/10 flex flex-col items-center justify-center text-center shadow-sm relative overflow-hidden">
                                        <div class="absolute inset-0.5 border border-dashed border-[#4b3621]/10 dark:border-white/10 rounded-lg pointer-events-none"></div>
                                        <span class="text-xl md:text-2xl font-black text-[#115e59] dark:text-emerald-400 mb-1">{{ $totalCertificates }}</span>
                                        <span class="text-[9px] md:text-[10px] font-mono uppercase tracking-widest leading-tight text-[#4b3621]/60 dark:text-slate-400">{{ __('Sertifikasi') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COLUMN 2: Profile Photo Card (Hanging in Center) -->
            <div class="w-full lg:w-[28%] flex flex-col items-center">
                <div class="relative w-full flex flex-col items-center mt-20 lg:mt-32 mb-12 group overflow-visible z-30 hanging-card-wrapper" style="perspective: 2500px;">
                    <!-- LANYARD SVG -->
                    <svg class="absolute pointer-events-none overflow-visible z-[-1] dark:hidden lanyard-svg" 
                            style="top: -2000px; left: 50%; width: 1000px; height: 3000px; transform: translateX(-50%);">
                        <path class="lanyard-path" d="" fill="none" stroke="#4b3621" stroke-width="4.5" stroke-linecap="round" opacity="0.6" />
                        <path class="lanyard-path-shadow" d="" fill="none" stroke="rgba(0,0,0,0.1)" stroke-width="5.5" stroke-linecap="round" filter="blur(4.5px)" />
                    </svg>
                    <svg class="absolute pointer-events-none overflow-visible z-[-1] hidden dark:block lanyard-svg-dark" 
                            style="top: -2000px; left: 50%; width: 1000px; height: 3000px; transform: translateX(-50%);">
                        <path class="lanyard-path-dark" d="" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" opacity="0.25" />
                    </svg>

                    <div class="hanging-card relative transition-shadow duration-300 preserve-3d select-none z-25 h-fit cursor-grab active:cursor-grabbing" style="touch-action: none;">
                        <!-- ID BADGE CARD -->
                        <div class="relative w-[300px] md:w-[340px] lg:w-[360px] aspect-[3/4.2] bg-[#fbfaf5] dark:bg-slate-900/60 dark:backdrop-blur-2xl rounded-[3rem] p-3 border border-[#4b3621]/15 dark:border-emerald-500/30 z-20 overflow-hidden transform-style-3d shadow-[0_20px_60px_rgba(75,54,33,0.3)] dark:shadow-[0_0_40px_rgba(16,185,129,0.15)] pointer-events-auto">
                            <div class="w-full h-full relative rounded-[2.2rem] overflow-hidden border border-[#4b3621]/10 dark:border-white/10 bg-white dark:bg-slate-800 pointer-events-none">
                                <img src="/profile.png?v=2" alt="Farrel" class="w-full h-full object-cover object-[center_35%] select-none pointer-events-none" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COLUMN 3: Identitas Diri & Kontak Lanyard (Hanging) -->
            <div class="w-full lg:w-[36%] flex flex-col items-center">
                <div class="relative w-full flex flex-col items-center mt-20 lg:mt-32 mb-12 group overflow-visible z-20 hanging-card-wrapper" style="perspective: 2500px;">
                    <!-- LANYARD SVG -->
                    <svg class="absolute pointer-events-none overflow-visible z-[-1] dark:hidden lanyard-svg" 
                            style="top: -2000px; left: 50%; width: 1000px; height: 3000px; transform: translateX(-50%);">
                        <path class="lanyard-path" d="" fill="none" stroke="#4b3621" stroke-width="4.5" stroke-linecap="round" opacity="0.6" />
                        <path class="lanyard-path-shadow" d="" fill="none" stroke="rgba(0,0,0,0.1)" stroke-width="5.5" stroke-linecap="round" filter="blur(4.5px)" />
                    </svg>
                    <svg class="absolute pointer-events-none overflow-visible z-[-1] hidden dark:block lanyard-svg-dark" 
                            style="top: -2000px; left: 50%; width: 1000px; height: 3000px; transform: translateX(-50%);">
                        <path class="lanyard-path-dark" d="" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" opacity="0.25" />
                    </svg>

                    <div class="hanging-card relative transition-shadow duration-300 preserve-3d z-25 h-fit cursor-grab active:cursor-grabbing w-[300px] md:w-[340px] lg:w-[360px]" style="touch-action: none;">
                        <!-- MATCHING POLAROID CARD FRAME -->
                        <div class="relative w-full h-auto lg:aspect-[3/4.2] bg-[#fbfaf5] dark:bg-slate-900/60 dark:backdrop-blur-2xl rounded-[3rem] p-3 border border-[#4b3621]/15 dark:border-emerald-500/30 z-20 overflow-hidden transform-style-3d shadow-[0_20px_60px_rgba(75,54,33,0.3)] dark:shadow-[0_0_40px_rgba(16,185,129,0.15)] pointer-events-auto animate-float">
                            <!-- Inner Sheet -->
                            <div class="w-full h-auto lg:h-full relative rounded-[2.2rem] overflow-hidden border border-[#4b3621]/10 dark:border-white/10 bg-white dark:bg-slate-800 p-5 flex flex-col justify-between gap-6">
                                <!-- Background watermark -->
                                <div class="absolute inset-0 pointer-events-none opacity-[0.03] dark:opacity-[0.02]" 
                                     style="background-image: radial-gradient(#4b3621 1px, transparent 1px); background-size: 20px 20px;"></div>

                                <div>
                                    <!-- Header: Name Tag -->
                                    <div class="relative z-10 flex flex-col border-b border-[#4b3621]/10 dark:border-white/10 pb-3 mb-3">
                                        <span class="inline-block bg-[#115e59]/10 dark:bg-emerald-400/10 text-[#115e59] dark:text-emerald-400 text-[10px] font-black uppercase tracking-widest px-2.5 py-0.5 rounded-full mb-1 w-fit">
                                            DOSSIER NO. 27 // PROFILE
                                        </span>
                                        <h2 class="text-2xl font-black text-[#4b3621] dark:text-white font-playfair tracking-tight">Farrel Azam</h2>
                                        <p class="text-[#115e59] dark:text-emerald-400 text-[11px] font-bold tracking-widest mt-0.5">
                                            {{ __('Pelajar') }} &bull; {{ __('Web Developer') }} &bull; Laravel
                                        </p>
                                    </div>

                                    <!-- Metadata Identity Items -->
                                    <div class="relative z-10 flex flex-col gap-2">
                                        <!-- Nama Lengkap -->
                                        <div class="p-2.5 rounded-xl bg-[#fbfaf5] dark:bg-slate-950/40 border border-[#4b3621]/5 dark:border-white/5 flex items-center gap-3 hover:bg-[#eeeae0]/30 dark:hover:bg-white/5 transition-all">
                                            <div class="w-8 h-8 rounded-lg bg-[#115e59]/10 dark:bg-emerald-400/10 flex items-center justify-center text-[#115e59] dark:text-emerald-400">
                                                <i class="fa-solid fa-user text-[12px]"></i>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <span class="text-[9px] uppercase tracking-widest font-black text-[#4b3621]/40 dark:text-slate-500 block mb-0.5 leading-none">{{ __('Nama Lengkap') }}</span>
                                                <span class="text-[13px] sm:text-sm font-bold text-[#4b3621] dark:text-slate-100 truncate block">Farrel Azam Kahupati</span>
                                            </div>
                                        </div>

                                        <!-- Lahir -->
                                        <div class="p-2.5 rounded-xl bg-[#fbfaf5] dark:bg-slate-950/40 border border-[#4b3621]/5 dark:border-white/5 flex items-center gap-3 hover:bg-[#eeeae0]/30 dark:hover:bg-white/5 transition-all">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500/10 flex items-center justify-center text-blue-500">
                                                <i class="fa-solid fa-cake-candles text-[12px]"></i>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <span class="text-[9px] uppercase tracking-widest font-black text-[#4b3621]/40 dark:text-slate-500 block mb-0.5 leading-none">{{ __('Lahir:') }}</span>
                                                <span class="text-[13px] sm:text-sm font-bold text-[#4b3621] dark:text-slate-100 truncate block">Samarinda, 05/07/2009</span>
                                            </div>
                                        </div>

                                        <!-- Pendidikan -->
                                        <div class="p-2.5 rounded-xl bg-[#fbfaf5] dark:bg-slate-950/40 border border-[#4b3621]/5 dark:border-white/5 flex items-center gap-3 hover:bg-[#eeeae0]/30 dark:hover:bg-white/5 transition-all">
                                            <div class="w-8 h-8 rounded-lg bg-purple-500/10 flex items-center justify-center text-purple-500">
                                                <i class="fa-solid fa-graduation-cap text-[12px]"></i>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <span class="text-[9px] uppercase tracking-widest font-black text-[#4b3621]/40 dark:text-slate-500 block mb-0.5 leading-none">{{ __('Pendidikan') }}</span>
                                                <span class="text-[13px] sm:text-sm font-bold text-[#4b3621] dark:text-slate-100 truncate block">SMK TI Airlangga</span>
                                            </div>
                                        </div>

                                        <!-- Lokasi -->
                                        <div class="p-2.5 rounded-xl bg-[#fbfaf5] dark:bg-slate-950/40 border border-[#4b3621]/5 dark:border-white/5 flex items-center gap-3 hover:bg-[#eeeae0]/30 dark:hover:bg-white/5 transition-all">
                                            <div class="w-8 h-8 rounded-lg bg-pink-500/10 flex items-center justify-center text-pink-500">
                                                <i class="fa-solid fa-location-dot text-[12px]"></i>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <span class="text-[9px] uppercase tracking-widest font-black text-[#4b3621]/40 dark:text-slate-500 block mb-0.5 leading-none">{{ __('Lokasi:') }}</span>
                                                <span class="text-[13px] sm:text-sm font-bold text-[#4b3621] dark:text-slate-100 truncate block">Samarinda, Kaltim</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hanging Keychains/Charms at the Bottom -->
                        <div class="absolute -bottom-16 left-0 right-0 flex justify-center gap-4 z-30 pointer-events-auto">
                            <!-- Charm 1: Email -->
                            <div class="flex flex-col items-center animate-[sway_3s_ease-in-out_infinite]">
                                <!-- Connecting thread/chain -->
                                <div class="w-[2px] h-6 bg-[#4b3621] dark:bg-emerald-400 opacity-60 animate-pulse"></div>
                                <!-- Circular Charm Button -->
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=farrelazam64@gmail.com" target="_blank" 
                                   class="w-12 h-12 rounded-full bg-[#fbfaf5] dark:bg-slate-800 border-2 border-[#4b3621]/20 dark:border-emerald-500/30 flex items-center justify-center text-[#4b3621] dark:text-slate-200 shadow-lg hover:scale-110 hover:bg-[#115e59] hover:text-white transition-all" title="Email">
                                    <i class="fa-solid fa-envelope text-base"></i>
                                </a>
                            </div>
                            <!-- Charm 2: WhatsApp -->
                            <div class="flex flex-col items-center animate-[sway_3s_ease-in-out_infinite_0.4s]">
                                <div class="w-[2px] h-6 bg-[#4b3621] dark:bg-emerald-400 opacity-60 animate-pulse"></div>
                                <a href="https://wa.me/6281351408541" target="_blank" 
                                   class="w-12 h-12 rounded-full bg-[#fbfaf5] dark:bg-slate-800 border-2 border-[#4b3621]/20 dark:border-emerald-500/30 flex items-center justify-center text-[#4b3621] dark:text-slate-200 shadow-lg hover:scale-110 hover:bg-[#115e59] hover:text-white transition-all" title="WhatsApp">
                                    <i class="fa-brands fa-whatsapp text-lg"></i>
                                </a>
                            </div>
                            <!-- Charm 3: GitHub -->
                            <div class="flex flex-col items-center animate-[sway_3s_ease-in-out_infinite_0.8s]">
                                <div class="w-[2px] h-6 bg-[#4b3621] dark:bg-emerald-400 opacity-60 animate-pulse"></div>
                                <a href="https://github.com/PPLG-SMKTI-27/laravel-farrelazam0502" target="_blank" 
                                   class="w-12 h-12 rounded-full bg-[#fbfaf5] dark:bg-slate-800 border-2 border-[#4b3621]/20 dark:border-emerald-500/30 flex items-center justify-center text-[#4b3621] dark:text-slate-200 shadow-lg hover:scale-110 hover:bg-[#115e59] hover:text-white transition-all" title="GitHub">
                                    <i class="fa-brands fa-github text-lg"></i>
                                </a>
                            </div>
                            <!-- Charm 4: Instagram -->
                            <div class="flex flex-col items-center animate-[sway_3s_ease-in-out_infinite_1.2s]">
                                <div class="w-[2px] h-6 bg-[#4b3621] dark:bg-emerald-400 opacity-60 animate-pulse"></div>
                                <a href="https://instagram.com/farctyl" target="_blank" 
                                   class="w-12 h-12 rounded-full bg-[#fbfaf5] dark:bg-slate-800 border-2 border-[#4b3621]/20 dark:border-emerald-500/30 flex items-center justify-center text-[#4b3621] dark:text-slate-200 shadow-lg hover:scale-110 hover:bg-[#115e59] hover:text-white transition-all" title="Instagram">
                                    <i class="fa-brands fa-instagram text-base"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PERJALANAN KARIR: SYMMETRICAL REVERT -->
        <div class="relative mb-20 text-center">
            <h2 class="text-4xl md:text-6xl font-black mb-6 text-[#4b3621] dark:text-slate-100 tracking-tight leading-tight font-playfair animate-on-scroll">
                {{ __('Perjalanan') }} <span class="text-[#115e59] dark:text-emerald-400 italic font-medium">{{ __('pendidikan') }}</span>
            </h2>
            <p class="text-[#4b3621]/40 dark:text-slate-400 max-w-2xl mx-auto text-sm md:text-base font-light tracking-wide px-4">
                {{ __('Melihat kembali lintasan pendidikan saya selama 11 tahun terakhir melalui Digital Star-Log.') }}
            </p>
        </div>

        <!-- FLIGHT JOURNEY TIMELINE CONTAINER -->
        <div class="relative max-w-5xl mx-auto py-16 px-4 md:px-0 timeline-container overflow-visible">
            
            <!-- SVG FLIGHT PATH -->
            <div class="absolute inset-0 w-full h-full pointer-events-none z-10 overflow-visible svg-path-container">
                <svg class="w-full h-full overflow-visible" viewBox="0 0 100 1000" preserveAspectRatio="none">
                    <!-- Path shadow for realistic hand-drawn look -->
                    <path class="flight-path-shadow" d="" fill="none" stroke="rgba(0,0,0,0.05)" stroke-width="4" stroke-linecap="round" stroke-dasharray="6,6" filter="blur(2px)" />
                    <!-- Winding flight path -->
                    <path id="flight-path" d="" fill="none" stroke="#4b3621" stroke-width="2.5" stroke-linecap="round" stroke-dasharray="6,6" opacity="0.4" class="dark:stroke-emerald-400/40" />
                </svg>
            </div>

            <!-- DYNAMIC PAPER PLANE -->
            <div id="paper-plane" class="absolute pointer-events-none z-30 transition-all duration-100 ease-out w-9 h-9 md:w-[46px] md:h-[46px]" style="left: 0; top: 0; transform: translate3d(0,0,0) rotate(0deg); transform-origin: center; display: none;">
                <svg viewBox="0 0 24 24" class="w-full h-full text-[#115e59] dark:text-emerald-400 drop-shadow-[0_4px_8px_rgba(17,94,89,0.35)] dark:drop-shadow-[0_4px_8px_rgba(16,185,129,0.35)]" fill="currentColor">
                    <path d="M2 21l21-9L2 3v7l15 2-15 2v7z" />
                </svg>
            </div>

            <div class="relative space-y-24 md:space-y-36">
                @foreach($educations as $index => $edu)
                @php
                    $isEven = $index % 2 === 0;
                @endphp
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-8 items-center group relative education-row overflow-visible pl-12 md:pl-0">
                    
                    @if($isEven)
                        <!-- LEFT: LOGO (Desktop) / TOP: LOGO (Mobile) -->
                        <div class="col-span-1 md:col-span-5 flex justify-center md:justify-end animate-on-scroll">
                            <div class="relative w-24 h-24 md:w-52 md:h-52 rounded-full bg-white dark:bg-slate-800 backdrop-blur-xl border border-[#4b3621]/40 dark:border-white/10 overflow-hidden flex items-center justify-center shadow-xl transition-all duration-500 group-hover:border-emerald-500/40">
                                <img src="{{ Str::startsWith($edu->logo, 'http') || Str::startsWith($edu->logo, 'Screenshot') ? '/' . $edu->logo : Storage::url($edu->logo) }}" class="w-full h-full object-cover scale-[1.3] group-hover:scale-[1.4] transition-all duration-500" alt="{{ $edu->name }}" />
                            </div>
                        </div>

                        <!-- CENTER: STATION POINT NODE -->
                        <div class="absolute left-[8px] top-1/2 -translate-x-1/2 -translate-y-1/2 md:relative md:left-auto md:top-auto md:translate-x-0 md:translate-y-0 z-20 flex md:col-span-2 md:justify-center">
                            <div class="station-node w-6 h-6 rounded-full bg-[#115e59] dark:bg-emerald-400 border-4 border-[#fbfaf5] dark:border-slate-900 shadow-lg transform transition-all duration-300 relative">
                                <div class="absolute inset-0 rounded-full bg-emerald-400 opacity-0 transition-opacity duration-300 active-pulse"></div>
                                <div class="absolute inset-0 rounded-full bg-[#115e59] dark:bg-emerald-400 animate-ping opacity-30 default-ping"></div>
                            </div>
                        </div>

                        <!-- RIGHT: BOARDING PASS CARD -->
                        <div class="col-span-1 md:col-span-5 timeline-card-wrapper animate-on-scroll">
                            <div class="ticket-card relative p-8 md:p-10 rounded-[2.5rem] bg-white/50 dark:bg-slate-900/50 backdrop-blur-xl border border-[#4b3621]/10 dark:border-white/10 shadow-lg transition-all duration-500 group-hover:translate-x-2 group-hover:shadow-2xl overflow-visible">
                                <span class="block text-[#115e59] dark:text-emerald-400 text-xs font-black tracking-widest uppercase mb-4">{{ $edu->year }}</span>
                                <h4 class="text-2xl md:text-3xl font-black text-[#4b3621] dark:text-white mb-4 tracking-tight font-playfair leading-tight">{{ $edu->name }}</h4>
                                <p class="text-[#4b3621]/60 dark:text-slate-400 text-sm md:text-base leading-relaxed font-light">
                                    {{ __($edu->desc) }}
                                </p>
                            </div>
                        </div>
                    @else
                        <!-- LEFT: BOARDING PASS CARD (Desktop) / BOTTOM: CARD (Mobile) -->
                        <div class="col-span-1 md:col-span-5 order-2 md:order-1 timeline-card-wrapper animate-on-scroll">
                            <div class="ticket-card relative p-8 md:p-10 rounded-[2.5rem] bg-white/50 dark:bg-slate-900/50 backdrop-blur-xl border border-[#4b3621]/10 dark:border-white/10 shadow-lg transition-all duration-500 group-hover:-translate-x-2 group-hover:shadow-2xl overflow-visible">
                                <span class="block text-[#115e59] dark:text-emerald-400 text-xs font-black tracking-widest uppercase mb-4">{{ $edu->year }}</span>
                                <h4 class="text-2xl md:text-3xl font-black text-[#4b3621] dark:text-white mb-4 tracking-tight font-playfair leading-tight">{{ $edu->name }}</h4>
                                <p class="text-[#4b3621]/60 dark:text-slate-400 text-sm md:text-base leading-relaxed font-light">
                                    {{ __($edu->desc) }}
                                </p>
                            </div>
                        </div>

                        <!-- CENTER: STATION POINT NODE -->
                        <div class="absolute left-[8px] top-1/2 -translate-x-1/2 -translate-y-1/2 md:relative md:left-auto md:top-auto md:translate-x-0 md:translate-y-0 z-20 flex md:col-span-2 md:justify-center order-2">
                            <div class="station-node w-6 h-6 rounded-full bg-[#115e59] dark:bg-emerald-400 border-4 border-[#fbfaf5] dark:border-slate-900 shadow-lg transform transition-all duration-300 relative">
                                <div class="absolute inset-0 rounded-full bg-emerald-400 opacity-0 transition-opacity duration-300 active-pulse"></div>
                                <div class="absolute inset-0 rounded-full bg-[#115e59] dark:bg-emerald-400 animate-ping opacity-30 default-ping"></div>
                            </div>
                        </div>

                        <!-- RIGHT: LOGO (Desktop) / TOP: LOGO (Mobile) -->
                        <div class="col-span-1 md:col-span-5 flex justify-center md:justify-start order-1 md:order-3 animate-on-scroll">
                            <div class="relative w-24 h-24 md:w-52 md:h-52 rounded-full bg-white dark:bg-slate-800 backdrop-blur-xl border border-[#4b3621]/15 dark:border-white/10 overflow-hidden flex items-center justify-center shadow-xl transition-all duration-500 group-hover:border-emerald-500/40">
                                <img src="{{ Str::startsWith($edu->logo, 'http') || Str::startsWith($edu->logo, 'Screenshot') ? '/' . $edu->logo : Storage::url($edu->logo) }}" class="w-full h-full object-cover scale-[1.3] group-hover:scale-[1.4] transition-all duration-500" alt="{{ $edu->name }}" />
                            </div>
                        </div>
                    @endif

                </div>
                @endforeach
            </div>

        </div>

    </div>
</section>

<style>
.preserve-3d { transform-style: preserve-3d; }
.transform-style-3d { transform-style: preserve-3d; }
@keyframes sway {
    0%, 100% { transform: rotate(-6deg); }
    50% { transform: rotate(6deg); }
}


/* Active flight station landing effects */
.station-node.active-station {
    transform: scale(1.4);
    border-color: #10b981 !important; /* glows emerald in both light/dark */
    box-shadow: 0 0 25px rgba(16, 185, 129, 0.75);
}
.station-node.active-station .active-pulse {
    opacity: 0.6;
    animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
}
.station-node.active-station .default-ping {
    display: none;
}

.ticket-card {
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.ticket-card.active-ticket {
    border-color: #115e59 !important;
    box-shadow: 0 15px 40px rgba(17, 94, 89, 0.18) !important;
    transform: scale(1.025);
    background-color: rgba(255, 255, 255, 0.8) !important;
}
.dark .ticket-card.active-ticket {
    border-color: #10b981 !important;
    box-shadow: 0 15px 40px rgba(16, 185, 129, 0.25) !important;
    background-color: rgba(15, 23, 42, 0.8) !important;
}

.active-logo {
    border-color: #115e59 !important;
    box-shadow: 0 15px 40px rgba(17, 94, 89, 0.18) !important;
    transform: scale(1.03);
}
.dark .active-logo {
    border-color: #10b981 !important;
    box-shadow: 0 15px 40px rgba(16, 185, 129, 0.25) !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Intersection Observer for career items entrance animation
    const observerOptions = {
        threshold: 0.2
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.career-item').forEach(item => {
        observer.observe(item);
    });

    // General Physics-based Pendulum Swinging for Hanging Cards
    const wrappers = Array.from(document.querySelectorAll('.hanging-card-wrapper'));
    const cardStates = wrappers.map(() => ({
        currentX: 0,
        currentY: 0,
        height: 0
    }));

    // Cache for vertical distances between wrappers on mobile
    let deltas = { d12: 0, d23: 0 };
    const updateDeltas = () => {
        if (wrappers.length >= 3) {
            const rect1 = wrappers[0].getBoundingClientRect();
            const rect2 = wrappers[1].getBoundingClientRect();
            const rect3 = wrappers[2].getBoundingClientRect();
            deltas.d12 = rect2.top - rect1.top;
            deltas.d23 = rect3.top - rect2.top;
        }
    };
    window.addEventListener('resize', updateDeltas);
    window.addEventListener('scroll', updateDeltas);
    updateDeltas();
    setTimeout(updateDeltas, 100);
    setTimeout(updateDeltas, 500);
    setTimeout(updateDeltas, 1500);

    wrappers.forEach((wrapper, index) => {
        const card = wrapper.querySelector('.hanging-card');
        const lanyardPath = wrapper.querySelector('.lanyard-path');
        const lanyardPathShadow = wrapper.querySelector('.lanyard-path-shadow');
        const lanyardPathDark = wrapper.querySelector('.lanyard-path-dark');
        
        if (!card) return;

        let isDragging = false;
        let startX, startY;
        let pX = 0, pY = 0; // Previous position to derive velocity
        
        // Staggered initial positions on desktop/mobile
        const isMobileInit = window.innerWidth < 1024;
        let currentX = 0;
        let currentY = isMobileInit 
            ? (index === 0 ? 120 : 100) 
            : 130;
            
        let vX = 0, vY = 0;
        let time = Math.random() * 20; // Phase offset for asynchronous swaying
        
        // Pendulum settings
        const gravity = 1.0; 
        const friction = 0.96; 
        const bounce = 0.12; 
        
        const updatePhysics = () => {
            const isDark = document.documentElement.classList.contains('dark');
            const isMobile = window.innerWidth < 1024;
            time += 0.015;
 
            // Recalculate deltas if they are still 0 on mobile
            if (isMobile && deltas.d12 === 0) {
                updateDeltas();
            }
 
            // Determine anchors and string length dynamically
            let currentAnchorX = 0;
            let currentAnchorY = -2000;
            let currentStringLen = 2000 + 130; // Default desktop length (all cards aligned horizontally)

            if (isMobile) {
                if (index === 0) {
                    currentAnchorX = 0;
                    currentAnchorY = -2000;
                    currentStringLen = 2000 + 120; // First card hangs 120px below its top
                } else {
                    const parentIndex = index - 1;
                    const parentState = cardStates[parentIndex];
                    const distY = index === 1 ? deltas.d12 : deltas.d23;
                    
                    currentAnchorX = parentState.currentX;
                    currentAnchorY = parentState.currentY + parentState.height - distY;
                    currentStringLen = 100; // Short connection thread
                }
            }

            const currentFriction = isMobile ? 0.94 : friction;
            const currentBounce = isMobile ? 0.08 : bounce;

            if (!isDragging) {
                if (isDark && !isMobile) {
                    // Dark Mode: Floating Space Effect (Desktop only)
                    const floatX = Math.sin(time * 0.35) * 25 + Math.sin(time * 0.9) * 8;
                    const floatY = Math.cos(time * 0.25) * 15;
                    
                    const ax = (floatX - currentX) * 0.012;
                    const ay = (floatY - currentY) * 0.012;
                    vX += ax; vY += ay;
                    vX *= 0.97; vY *= 0.97;
                    currentX += vX; currentY += vY;
                } else {
                    // Light Mode (Desktop) or Mobile (Light & Dark)
                    vY += gravity; 
                    
                    let nextX = currentX + vX;
                    let nextY = currentY + vY;
                    
                    const dx = nextX - currentAnchorX;
                    const dy = nextY - currentAnchorY;
                    const dist = Math.sqrt(dx*dx + dy*dy);
                    
                    if (dist > currentStringLen) {
                        const overstretch = dist - currentStringLen;
                        const nx = dx / dist;
                        const ny = dy / dist;
                        
                        vX -= nx * overstretch * currentBounce;
                        vY -= ny * overstretch * currentBounce;
                        
                        if (dist > currentStringLen + 50) {
                            nextX = currentAnchorX + nx * (currentStringLen + 50);
                            nextY = currentAnchorY + ny * (currentStringLen + 50);
                        }
                    } 
                    
                    vX *= currentFriction; vY *= currentFriction;
                    vX += Math.sin(time * 1.2) * 0.025; // Organic slight wind draft
                    currentX = nextX;
                    currentY = nextY;
                }
                pX = currentX;
                pY = currentY;
            } else {
                // Dragging: Derive throw force on release
                vX = currentX - pX;
                vY = currentY - pY;
                pX = currentX;
                pY = currentY;
            }

            // Save state for child cards to anchor to
            cardStates[index].currentX = currentX;
            cardStates[index].currentY = currentY;
            cardStates[index].height = card.offsetHeight || 420;

            // Calculations for realistic card rotations during sway
            const rotY = (vX * 0.8) + (currentX * 0.015);
            const rotX = (vY * 0.2) - (currentY * 0.015); 
            const rotZ = (vX * 0.15) - (currentX * 0.015);
            
            card.style.transform = `translate3d(${currentX}px, ${currentY}px, 0) rotateX(${rotX}deg) rotateY(${rotY}deg) rotateZ(${rotZ}deg)`;
            
            // Draw Lanyard SVG
            const endX = 500 + currentX;
            const endY = 2000 + currentY; 
            const startX_svg = 500 + currentAnchorX;
            const startY_svg = 2000 + currentAnchorY;
            
            let pathData;
            if (!isMobile || index === 0) {
                const cpX = 500 + (currentX * 0.12); 
                const cpY = endY * 0.5;
                pathData = `M ${startX_svg} ${startY_svg} Q ${cpX} ${cpY} ${endX} ${endY}`;
            } else {
                // Short connection curve
                const cpX = (startX_svg + endX) * 0.5;
                const cpY = (startY_svg + endY) * 0.5;
                pathData = `M ${startX_svg} ${startY_svg} Q ${cpX} ${cpY} ${endX} ${endY}`;
            }

            if (!isDark && lanyardPath) {
                lanyardPath.setAttribute('d', pathData);
                if (lanyardPathShadow) {
                    lanyardPathShadow.setAttribute('d', pathData);
                    lanyardPathShadow.setAttribute('transform', `translate(${vX * 0.4 + 6}, 6)`);
                }
            } else if (isDark && lanyardPathDark) {
                lanyardPathDark.setAttribute('d', pathData);
            }
            
            requestAnimationFrame(updatePhysics);
        };
        
        const startDrag = (e) => {
            isDragging = true;
            const pos = e.type.includes('touch') ? e.touches[0] : e;
            startX = pos.clientX - currentX;
            startY = pos.clientY - currentY;
            pX = currentX;
            pY = currentY;
            wrapper.classList.add('grabbing');
        };

        const onDrag = (e) => {
            if (!isDragging) return;
            const pos = e.type.includes('touch') ? e.touches[0] : e;
            currentX = pos.clientX - startX;
            currentY = pos.clientY - startY;
        };

        const stopDrag = () => {
            isDragging = false;
            wrapper.classList.remove('grabbing');
        };

        card.addEventListener('mousedown', startDrag);
        window.addEventListener('mousemove', onDrag);
        window.addEventListener('mouseup', stopDrag);

        card.addEventListener('touchstart', startDrag, { passive: false });
        window.addEventListener('touchmove', onDrag, { passive: false });
        window.addEventListener('touchend', stopDrag);
        
        requestAnimationFrame(updatePhysics);
    });

    // Paper Plane Flight Animation
    const flightPath = document.querySelector('#flight-path');
    const flightPathShadow = document.querySelector('.flight-path-shadow');
    const paperPlane = document.querySelector('#paper-plane');
    const timelineContainer = document.querySelector('.timeline-container');
    const svgPathContainer = document.querySelector('.svg-path-container');

    if (flightPath && paperPlane && timelineContainer) {
        let yPositions = [];
        let totalLength = 0;

        const updatePathD = () => {
            const containerHeight = timelineContainer.offsetHeight;
            const containerWidth = timelineContainer.offsetWidth;
            const cx = containerWidth / 2;
            
            const svg = svgPathContainer.querySelector('svg');
            svg.setAttribute('viewBox', `0 0 ${containerWidth} ${containerHeight}`);
            
            const rows = Array.from(document.querySelectorAll('.education-row'));
            const containerRect = timelineContainer.getBoundingClientRect();
            
            yPositions = rows.map(row => {
                const rect = row.getBoundingClientRect();
                return (rect.top - containerRect.top) + (rect.height / 2);
            });
            
            const offset = 45; // horizontal wave offset
            let d = '';

            if (yPositions.length === 0) {
                if (window.innerWidth < 768) {
                    d = `M 24 0 L 24 ${containerHeight}`;
                } else {
                    d = `M ${cx} 0 L ${cx} ${containerHeight}`;
                }
            } else {
                if (window.innerWidth < 768) {
                    // Mobile: Jalur vertikal dinamis bergelombang halus melewati semua node
                    const lx = 24;
                    d = `M ${lx} 0 L ${lx} ${yPositions[0]}`;
                    for (let i = 1; i < yPositions.length; i++) {
                        const prevY = yPositions[i - 1];
                        const currY = yPositions[i];
                        const controlY = (prevY + currY) / 2;
                        const direction = i % 2 === 1 ? 1 : -1;
                        d += ` C ${lx + (direction * 6)} ${controlY}, ${lx - (direction * 6)} ${controlY}, ${lx} ${currY}`;
                    }
                    d += ` L ${lx} ${containerHeight}`;
                } else {
                    // Desktop: Jalur meliuk dinamis melewati SETIAP titik node secara presisi
                    d = `M ${cx} 0 L ${cx} ${yPositions[0]}`;
                    for (let i = 1; i < yPositions.length; i++) {
                        const prevY = yPositions[i - 1];
                        const currY = yPositions[i];
                        const controlY = (prevY + currY) / 2;
                        const direction = i % 2 === 1 ? 1 : -1;
                        d += ` C ${cx + (direction * offset)} ${controlY}, ${cx + (direction * offset)} ${controlY}, ${cx} ${currY}`;
                    }
                    d += ` L ${cx} ${containerHeight}`;
                }
            }
            
            flightPath.setAttribute('d', d);
            if (flightPathShadow) {
                flightPathShadow.setAttribute('d', d);
            }
            
            totalLength = flightPath.getTotalLength();
        };

        window.addEventListener('resize', updatePathD);
        updatePathD();
        // Recalculate paths on content reveal and load transitions
        setTimeout(updatePathD, 500);
        setTimeout(updatePathD, 1500);

        // Show paper plane on trigger activation
        paperPlane.style.display = 'block';

        gsap.to({}, {
            scrollTrigger: {
                trigger: timelineContainer,
                start: 'top 65%',
                end: 'bottom 50%',
                scrub: 1.2,
                onUpdate: (self) => {
                    const progress = self.progress;
                    const currentLength = progress * totalLength;
                    
                    // Current coordinates
                    const pos = flightPath.getPointAtLength(currentLength);
                    
                    // Coordinates slightly ahead to calculate trajectory angle
                    const nextPos = flightPath.getPointAtLength(Math.min(currentLength + 4, totalLength));
                    
                    const dx = nextPos.x - pos.x;
                    const dy = nextPos.y - pos.y;
                    
                    // Angle in degrees
                    let angle = Math.atan2(dy, dx) * 180 / Math.PI;
                    
                    // Center the plane over the coordinates
                    gsap.set(paperPlane, {
                        x: pos.x,
                        y: pos.y,
                        rotation: angle,
                        xPercent: -50,
                        yPercent: -50
                    });

                    // Check proximity to each station node for stopover activation
                    const rows = document.querySelectorAll('.education-row');
                    const planeY = pos.y;
                    
                    rows.forEach((row, i) => {
                        const nodeY = yPositions[i];
                        if (nodeY !== undefined) {
                            // Plane is within 60px vertically of the station center
                            const isNear = Math.abs(planeY - nodeY) < 65;
                            
                            const node = row.querySelector('.station-node');
                            const ticket = row.querySelector('.ticket-card');
                            const logo = row.querySelector('.rounded-full');
                            
                            if (node) {
                                if (isNear) {
                                    node.classList.add('active-station');
                                } else {
                                    node.classList.remove('active-station');
                                }
                            }
                            if (ticket) {
                                if (isNear) {
                                    ticket.classList.add('active-ticket');
                                } else {
                                    ticket.classList.remove('active-ticket');
                                }
                            }
                            if (logo) {
                                if (isNear) {
                                    logo.classList.add('active-logo');
                                } else {
                                    logo.classList.remove('active-logo');
                                }
                            }
                        }
                    });
                }
            }
        });

        // Trigger dynamic card entrances as the paper plane passes them
        document.querySelectorAll('.education-row').forEach((row) => {
            gsap.from(row.querySelectorAll('.animate-on-scroll'), {
                opacity: 0,
                y: 50,
                scale: 0.95,
                duration: 0.8,
                stagger: 0.2,
                scrollTrigger: {
                    trigger: row,
                    start: 'top 80%',
                    toggleActions: 'play none none none'
                }
            });
        });
    }
});
</script>
