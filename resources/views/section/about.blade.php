<!-- ===================== TENTANG SAYA & KARIR: PRECISE SCREENSHOT ALIGNMENT ===================== -->
<section id="tentang-saya" class="relative py-24 px-5 md:px-8 overflow-hidden transition-colors duration-700 bg-transparent dark:bg-transparent">
    
    <div class="relative z-20 max-w-6xl mx-auto">
        
        <!-- ABOUT ME: IMAGE 2 DOSSIER STYLE -->
        <div class="flex flex-col md:flex-row gap-8 md:gap-12 items-start mb-32">
            
            <!-- LEFT COLUMN: Profile & Identity Card -->
            <div class="w-full md:w-[35%] flex flex-col gap-6">
                <!-- MAIN PHOTO CARD -->
                <div class="relative aspect-square rounded-[3rem] overflow-hidden shadow-2xl border-8 border-white dark:border-white/5 group bg-white/10" id="photo-trigger">
                    <img src="/profile.png?v=2" alt="Farrel" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 object-[center_35%]" />
                    <!-- Subtle Scanline for Dark Mode -->
                    <div class="absolute inset-0 pointer-events-none overflow-hidden hidden dark:block">
                        <div class="w-full h-[1px] bg-emerald-400/20 animate-[scan_6s_linear_infinite]"></div>
                    </div>
                </div>

                <!-- NAME & SOCIALS CARD (Separate) -->
                <div class="p-8 rounded-[2.5rem] bg-[#fbfaf5] dark:bg-slate-900/60 backdrop-blur-xl border border-[#4b3621]/10 dark:border-white/10 shadow-xl text-center">
                    <h2 class="text-4xl font-black text-[#4b3621] dark:text-white mb-2 font-playfair tracking-tight">Farrel Azam</h2>
                    <p class="text-[#115e59] dark:text-emerald-400 text-sm font-bold tracking-widest mb-8">Pelajar &bull; Web Developer &bull; Laravel</p>
                    
                    <div class="grid grid-cols-4 gap-3">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=farrelazam64@gmail.com" target="_blank" class="flex flex-col items-center gap-2 group">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center bg-[#4b3621]/5 dark:bg-white/5 border border-[#4b3621]/10 dark:border-white/5 text-[#4b3621] dark:text-slate-400 group-hover:bg-[#115e59] group-hover:text-white transition-all">
                                <i class="fa-solid fa-envelope text-sm"></i>
                            </div>
                            <span class="text-[8px] font-black text-[#4b3621]/40 dark:text-slate-500 uppercase">Email</span>
                        </a>
                        <a href="https://wa.me/6281351408541" target="_blank" class="flex flex-col items-center gap-2 group">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center bg-[#4b3621]/5 dark:bg-white/5 border border-[#4b3621]/10 dark:border-white/5 text-[#4b3621] dark:text-slate-400 group-hover:bg-[#115e59] group-hover:text-white transition-all">
                                <i class="fa-brands fa-whatsapp text-sm"></i>
                            </div>
                            <span class="text-[8px] font-black text-[#4b3621]/40 dark:text-slate-500 uppercase">WA</span>
                        </a>
                        <a href="https://github.com/PPLG-SMKTI-27/laravel-farrelazam0502" target="_blank" class="flex flex-col items-center gap-2 group">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center bg-[#4b3621]/5 dark:bg-white/5 border border-[#4b3621]/10 dark:border-white/5 text-[#4b3621] dark:text-slate-400 group-hover:bg-[#115e59] group-hover:text-white transition-all">
                                <i class="fa-brands fa-github text-sm"></i>
                            </div>
                            <span class="text-[8px] font-black text-[#4b3621]/40 dark:text-slate-500 uppercase">GitHub</span>
                        </a>
                        <a href="https://instagram.com/farctyl" target="_blank" class="flex flex-col items-center gap-2 group">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center bg-[#4b3621]/5 dark:bg-white/5 border border-[#4b3621]/10 dark:border-white/5 text-[#4b3621] dark:text-slate-400 group-hover:bg-[#115e59] group-hover:text-white transition-all">
                                <i class="fa-brands fa-instagram text-sm"></i>
                            </div>
                            <span class="text-[8px] font-black text-[#4b3621]/40 dark:text-slate-500 uppercase">IG</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Stats, Info, Bio (Matching Image 2) -->
            <div class="flex-1 flex flex-col gap-6">
                <!-- TOP STAT CARDS -->
                <div class="grid grid-cols-3 gap-4 md:gap-6">
                    <div class="p-6 rounded-3xl bg-gradient-to-br from-[#115e59]/90 to-emerald-600/90 text-white shadow-xl flex flex-col items-center justify-center text-center transform hover:-translate-y-1 transition-transform">
                        <span class="text-3xl font-black mb-1">2+</span>
                        <span class="text-[9px] md:text-xs font-bold uppercase tracking-widest leading-tight opacity-90">Years<br/>Experience</span>
                    </div>
                    <div class="p-6 rounded-3xl bg-gradient-to-br from-[#115e59]/80 to-emerald-600/80 text-white shadow-xl flex flex-col items-center justify-center text-center transform hover:-translate-y-1 transition-transform">
                        <span class="text-3xl font-black mb-1">{{ $totalProjects }}</span>
                        <span class="text-[9px] md:text-xs font-bold uppercase tracking-widest opacity-90">Projects</span>
                    </div>
                    <div class="p-6 rounded-3xl bg-gradient-to-br from-[#115e59]/70 to-emerald-600/70 text-white shadow-xl flex flex-col items-center justify-center text-center transform hover:-translate-y-1 transition-transform">
                        <span class="text-3xl font-black mb-1">{{ $totalCertificates }}</span>
                        <span class="text-[9px] md:text-xs font-bold uppercase tracking-widest opacity-90">Certifications</span>
                    </div>
                </div>

                <!-- INFO GRID -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="p-5 rounded-2xl bg-[#eeeae0] dark:bg-white/5 border border-[#4b3621]/5 dark:border-white/5 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-white dark:bg-slate-900 flex items-center justify-center text-[#115e59] dark:text-emerald-400 shadow-sm">
                            <i class="fa-solid fa-user text-sm"></i>
                        </div>
                        <div>
                            <span class="text-[9px] uppercase tracking-widest font-black text-[#4b3621]/40 dark:text-slate-500 block">Nama:</span>
                            <span class="text-xs font-bold text-[#4b3621] dark:text-slate-100">Farrel Azam Kahupati</span>
                        </div>
                    </div>
                    <div class="p-5 rounded-2xl bg-[#eeeae0] dark:bg-white/5 border border-[#4b3621]/5 dark:border-white/5 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-white dark:bg-slate-900 flex items-center justify-center text-blue-500 shadow-sm">
                            <i class="fa-solid fa-cake-candles text-sm"></i>
                        </div>
                        <div>
                            <span class="text-[9px] uppercase tracking-widest font-black text-[#4b3621]/40 dark:text-slate-500 block">Lahir:</span>
                            <span class="text-xs font-bold text-[#4b3621] dark:text-slate-100">Samarinda, 05/07/2009</span>
                        </div>
                    </div>
                    <div class="p-5 rounded-2xl bg-[#eeeae0] dark:bg-white/5 border border-[#4b3621]/5 dark:border-white/5 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-white dark:bg-slate-900 flex items-center justify-center text-purple-500 shadow-sm">
                            <i class="fa-solid fa-graduation-cap text-sm"></i>
                        </div>
                        <div>
                            <span class="text-[9px] uppercase tracking-widest font-black text-[#4b3621]/40 dark:text-slate-500 block">Sekolah:</span>
                            <span class="text-xs font-bold text-[#4b3621] dark:text-slate-100">SMK TI Airlangga</span>
                        </div>
                    </div>
                    <div class="p-5 rounded-2xl bg-[#eeeae0] dark:bg-white/5 border border-[#4b3621]/5 dark:border-white/5 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-white dark:bg-slate-900 flex items-center justify-center text-pink-500 shadow-sm">
                            <i class="fa-solid fa-location-dot text-sm"></i>
                        </div>
                        <div>
                            <span class="text-[9px] uppercase tracking-widest font-black text-[#4b3621]/40 dark:text-slate-500 block">Lokasi:</span>
                            <span class="text-xs font-bold text-[#4b3621] dark:text-slate-100">Samarinda, Kaltim</span>
                        </div>
                    </div>
                </div>

                <!-- BIO PANEL -->
                <div class="p-10 rounded-[2.5rem] bg-[#fbfaf5] dark:bg-slate-950/40 backdrop-blur-xl border border-[#4b3621]/10 dark:border-white/10 shadow-2xl relative overflow-hidden group min-h-[300px] flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <h3 class="text-4xl font-black text-[#4b3621] dark:text-white font-dancing tracking-wide">My Kisah</h3>
                            <i class="fa-solid fa-pencil text-[#115e59] dark:text-emerald-400 rotate-12"></i>
                        </div>
                        <div class="space-y-4 text-[#4b3621]/80 dark:text-slate-300 text-sm md:text-base leading-relaxed font-light italic">
                            <p>
                                Saya seorang siswa di <strong class="text-[#115e59] dark:text-emerald-400 font-bold">SMK TI Airlangga</strong> yang memiliki ketertarikan besar 
                                di dunia teknologi, khususnya <strong class="text-[#115e59] dark:text-emerald-400 font-bold">Web Development</strong>. 
                                Saya terbiasa mengembangkan website dari sisi frontend maupun backend, serta terus belajar teknologi baru 
                                untuk meningkatkan kemampuan saya.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Signature -->
                    <div class="mt-8 flex justify-end">
                        <div class="text-right">
                            <p class="font-dancing text-3xl text-[#115e59] dark:text-emerald-400">Farrel Azam</p>
                            <div class="w-24 h-[1px] bg-[#115e59]/30 ml-auto mt-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PERJALANAN KARIR: SYMMETRICAL REVERT -->
        <div class="mt-48" id="karir">
            <div class="text-center mb-24">
                <h3 class="text-4xl md:text-6xl font-black text-[#4b3621] dark:text-white mb-6 tracking-tight font-playfair">Perjalanan <span class="text-[#115e59] dark:text-emerald-500 italic">Karir</span></h3>
                <p class="text-[#4b3621]/40 dark:text-slate-400 max-w-xl mx-auto text-sm md:text-base font-light tracking-wide px-4">
                    Melihat kembali lintasan pendidikan saya selama 11 tahun terakhir melalui Digital Star-Log.
                </p>
            </div>

            @php
                $education = [
                    ['name' => 'SMKTI AIRLANGGA', 'year' => '2025 - Sekarang', 'desc' => 'Fokus pada pengembangan perangkat lunak dan gim (PPLG). Mempelajari Laravel, UI/UX, dan arsitektur web modern.', 'logo' => 'Screenshot 2026-03-18 020016.png'],
                    ['name' => 'MTsN MODEL SAMARINDA', 'year' => '2021 - 2024', 'desc' => 'Fase eksplorasi awal di dunia digital dan pengembangan logika dasar. Membangun fondasi akademik di sekolah teladan.', 'logo' => 'Screenshot 2026-03-18 015959.png'],
                    ['name' => 'SD MUHAMMADIYAH 1', 'year' => '2015 - 2021', 'desc' => 'Membangun disiplin dan fondasi pengetahuan akademik yang kuat di Samarinda.', 'logo' => 'Screenshot 2026-03-18 015930.png'],
                    ['name' => 'TK HANDAYANI', 'year' => '2013 - 2015', 'desc' => 'Titik awal perjalanan di dunia pendidikan dengan keceriaan dan belajar dasar.', 'logo' => 'Screenshot 2026-03-18 020149.png'],
                ];
            @endphp

            <div class="max-w-5xl mx-auto space-y-20 md:space-y-24">
                @foreach($education as $index => $edu)
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center group">
                    <!-- LEFT: LOGO CIRCLE (Symmetrical) -->
                    <div class="md:col-span-5 flex justify-center md:justify-end">
                        <div class="relative w-32 h-32 md:w-56 md:h-56 rounded-full bg-white dark:bg-slate-800 backdrop-blur-xl border border-[#4b3621]/10 dark:border-white/10 overflow-hidden flex items-center justify-center shadow-2xl transition-all duration-500 group-hover:scale-105 group-hover:border-emerald-500/30">
                            <img src="/{{ $edu['logo'] }}" class="w-full h-full object-cover" alt="{{ $edu['name'] }}" />
                        </div>
                    </div>

                    <!-- SPACER/CENTER (Clean gap, no line) -->
                    <div class="hidden md:block md:col-span-1"></div>

                    <!-- RIGHT: INFO CARD (Symmetrical) -->
                    <div class="md:col-span-6">
                        <div class="p-8 md:p-10 rounded-[2.5rem] bg-white/40 dark:bg-slate-900/40 backdrop-blur-xl border border-[#4b3621]/5 dark:border-white/5 shadow-xl transition-all duration-500 group-hover:translate-x-2 group-hover:shadow-2xl">
                            <span class="block text-[#115e59] dark:text-emerald-400 text-xs font-black tracking-widest uppercase mb-4">{{ $edu['year'] }}</span>
                            <h4 class="text-2xl md:text-3xl font-black text-[#4b3621] dark:text-white mb-4 tracking-tight font-playfair leading-tight">{{ $edu['name'] }}</h4>
                            <p class="text-[#4b3621]/60 dark:text-slate-400 text-sm md:text-base leading-relaxed font-light">
                                {{ $edu['desc'] }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<style>
.font-playfair { font-family: 'Playfair Display', serif; }
.font-dancing { font-family: 'Dancing Script', cursive; }

@keyframes scan { 0% { transform: translateY(-100%); } 100% { transform: translateY(1000%); } }

.career-item.active {
    opacity: 1 !important;
    transform: translateY(0) !important;
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

    const trigger = document.getElementById('photo-trigger');
    if (trigger) {
        trigger.addEventListener('click', () => {
            if (typeof openProfileModal === 'function') openProfileModal();
        });
    }
});
</script>
