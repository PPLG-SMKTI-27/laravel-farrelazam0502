<!-- ===================== TENTANG SAYA SECTION ===================== -->
<section id="tentang-saya"
    class="relative flex flex-col items-center px-5 md:px-6 overflow-hidden pt-24 md:pt-28 pb-14 md:pb-20">

    <!-- Section Title -->
    <div class="relative z-20 mb-8 md:mb-14">
        <h3 class="text-xl md:text-3xl font-bold text-white text-center">About Me</h3>
        <div class="mt-2 md:mt-3 mx-auto w-12 md:w-16 h-1 bg-gradient-to-r from-emerald-400 to-blue-500 rounded-full"></div>
    </div>

    <div class="relative z-20 w-full max-w-4xl mx-auto">

        <!-- TOP: Centered Profile Photo + Name -->
        <div class="flex flex-col items-center mb-8 md:mb-12">
            <!-- Floating Glass Frame Photo -->
            <div class="tentang-avatar-frame mb-5 md:mb-8 group cursor-pointer relative" id="photo-trigger">
                <!-- Hover Hint (Optional) -->
                <div class="absolute -bottom-2 -right-2 bg-emerald-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-[10px] shadow-lg z-10 animate-pulse">
                    <i class="fa-solid fa-expand"></i>
                </div>

                <div class="tentang-frame-border"></div>
                <div class="tentang-frame-img">
                    <img src="/profile.png?v=2" alt="Farrel" class="w-full h-full object-cover rounded-2xl md:rounded-3xl" />
                </div>
            </div>

            <!-- NAME & TITLE -->
            <h3 class="text-xl md:text-3xl font-bold text-white mb-1">Farrel Azam</h3>
            <p class="text-emerald-400 text-xs md:text-sm font-medium tracking-wide">Pelajar &bull; Web Developer &bull; Laravel</p>
            
            <!-- Social Icons Row -->
            <div class="flex items-center gap-2.5 md:gap-3 mt-4 md:mt-5">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=farrelazam64@gmail.com" target="_blank" class="tentang-social-icon" title="Email">
                    <i class="fa-solid fa-envelope"></i>
                </a>
                <a href="https://wa.me/6281351408541" target="_blank" class="tentang-social-icon" title="WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="https://github.com/PPLG-SMKTI-27/laravel-farrelazam0502" target="_blank" class="tentang-social-icon" title="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://instagram.com/farctyl" target="_blank" class="tentang-social-icon" title="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>

        <!-- STATS BAR (moved up for mobile visual hierarchy) -->
        <div class="tentang-stats-bar rounded-xl md:rounded-2xl p-1 flex flex-row mb-6 md:mb-10">
            <div class="tentang-stat-item flex-1 py-3 md:py-5 px-2 md:px-4 text-center">
                <div class="text-xl md:text-4xl font-black text-white mb-0.5 md:mb-1">1<span class="text-emerald-400">+</span></div>
                <div class="text-[8px] md:text-xs text-slate-400 uppercase tracking-wider md:tracking-widest font-semibold leading-tight">Tahun<br class="md:hidden"> Pengalaman</div>
            </div>
            <div class="tentang-stat-divider"></div>
            <div class="tentang-stat-item flex-1 py-3 md:py-5 px-2 md:px-4 text-center">
                <div class="text-xl md:text-4xl font-black text-white mb-0.5 md:mb-1">{{ $totalProjects }}</div>
                <div class="text-[8px] md:text-xs text-slate-400 uppercase tracking-wider md:tracking-widest font-semibold">Project</div>
            </div>
            <div class="tentang-stat-divider"></div>
            <div class="tentang-stat-item flex-1 py-3 md:py-5 px-2 md:px-4 text-center">
                <div class="text-xl md:text-4xl font-black text-white mb-0.5 md:mb-1">3<span class="text-purple-400">+</span></div>
                <div class="text-[8px] md:text-xs text-slate-400 uppercase tracking-wider md:tracking-widest font-semibold">Sertifikasi</div>
            </div>
        </div>

        <!-- MIDDLE: Two-column layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">

            <!-- Info Cards Grid (shows first on mobile) -->
            <div class="grid grid-cols-2 gap-2.5 md:gap-3 order-1 md:order-2">
                <div class="tentang-info-card rounded-xl p-3 md:p-4">
                    <i class="fa-solid fa-user text-emerald-400 text-base md:text-lg mb-1.5 md:mb-2"></i>
                    <span class="tentang-info-label">Nama</span>
                    <span class="tentang-info-value">Farrel Azam Kahupati</span>
                </div>
                <div class="tentang-info-card rounded-xl p-3 md:p-4">
                    <i class="fa-solid fa-cake-candles text-blue-400 text-base md:text-lg mb-1.5 md:mb-2"></i>
                    <span class="tentang-info-label">Lahir</span>
                    <span class="tentang-info-value">Samarinda, 05/07/2009</span>
                </div>
                <div class="tentang-info-card rounded-xl p-3 md:p-4">
                    <i class="fa-solid fa-graduation-cap text-purple-400 text-base md:text-lg mb-1.5 md:mb-2"></i>
                    <span class="tentang-info-label">Pendidikan</span>
                    <span class="tentang-info-value">SMK TI Airlangga</span>
                </div>
                <div class="tentang-info-card rounded-xl p-3 md:p-4">
                    <i class="fa-solid fa-location-dot text-pink-400 text-base md:text-lg mb-1.5 md:mb-2"></i>
                    <span class="tentang-info-label">Lokasi</span>
                    <span class="tentang-info-value">Samarinda, Kaltim</span>
                </div>
            </div>

            <!-- Bio Panel -->
            <div class="tentang-glass-panel p-5 md:p-7 rounded-xl md:rounded-2xl order-2 md:order-1">
                <div class="flex items-center gap-1.5 md:gap-2 mb-3 md:mb-4">
                    <div class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-emerald-400"></div>
                    <div class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-purple-400"></div>
                    <span class="text-[10px] md:text-xs text-slate-500 ml-1.5 md:ml-2 font-mono">tentang_saya.md</span>
                </div>
                <p class="text-slate-300 text-xs md:text-base leading-relaxed font-light">
                    Saya seorang siswa di <strong class="text-white font-medium">SMK TI Airlangga</strong> yang memiliki ketertarikan besar 
                    di dunia teknologi, khususnya <strong class="text-emerald-400 font-medium">Web Development</strong>. 
                    Saya terbiasa mengembangkan website dari sisi frontend maupun backend, serta terus belajar teknologi baru 
                    untuk meningkatkan kemampuan saya.
                </p>
                <p class="text-slate-400 text-xs md:text-sm leading-relaxed font-light mt-2 md:mt-3">
                    Tujuan saya adalah menciptakan produk/website digital yang tidak hanya berfungsi dengan baik, tetapi juga memiliki 
                    desain yang menarik dan pengalaman pengguna yang nyaman.
                </p>
            </div>
        </div>

    </div>
</section>

<style>
/* ===== TENTANG SAYA STYLES ===== */

/* Floating Glass Frame (Rectangle) */
.tentang-avatar-frame {
    position: relative;
    width: 130px;
    height: 170px; /* Vertical aspect ratio */
    transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.tentang-avatar-frame:hover {
    transform: scale(1.05) rotate(2deg);
}

@media (min-width: 768px) {
    .tentang-avatar-frame {
        width: 180px;
        height: 240px;
    }
}

/* Photo trigger effects */

.tentang-avatar-frame:hover {
    transform: translateY(-8px) rotate(1deg);
}

.tentang-frame-border {
    position: absolute;
    inset: -2px;
    border-radius: 1.2rem;
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.5), rgba(59, 130, 246, 0.5));
    mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    mask-composite: exclude;
    padding: 2px;
    z-index: 0;
    filter: drop-shadow(0 0 8px rgba(16, 185, 129, 0.3));
}

@media (min-width: 768px) {
    .tentang-frame-border {
        border-radius: 2rem;
        padding: 3px;
    }
}

.tentang-frame-img {
    position: relative;
    width: 100%;
    height: 100%;
    border-radius: 1rem;
    overflow: hidden;
    z-index: 1;
    background: rgba(15, 23, 42, 0.5);
    border: 1px solid rgba(255,255,255,0.1);
    box-shadow: 0 10px 30px -5px rgba(0,0,0,0.5);
}

@media (min-width: 768px) {
    .tentang-frame-img {
        border-radius: 1.8rem;
    }
}

.tentang-frame-img img {
    object-position: center 20%;
    transition: transform 0.8s ease;
}

.tentang-avatar-frame:hover .tentang-frame-img img {
    transform: scale(1.05);
}

/* Social Icons */
.tentang-social-icon {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(15, 23, 42, 0.6);
    border: 1px solid rgba(255,255,255,0.1);
    color: #94a3b8;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    backdrop-filter: blur(8px);
    position: relative;
    z-index: 60;
}

@media (min-width: 768px) {
    .tentang-social-icon {
        width: 42px;
        height: 42px;
        font-size: 1rem;
    }
}

.tentang-social-icon:hover,
.tentang-social-icon:active {
    color: #10b981;
    border-color: rgba(16, 185, 129, 0.5);
    transform: translateY(-3px) scale(1.1);
    box-shadow: 0 8px 25px -5px rgba(16, 185, 129, 0.3);
    background: rgba(16, 185, 129, 0.1);
}

/* Glass Panel (Bio) */
.tentang-glass-panel {
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.7), rgba(30, 41, 59, 0.4));
    border: 1px solid rgba(255,255,255,0.08);
    backdrop-filter: blur(16px);
    transition: all 0.4s ease;
}

.tentang-glass-panel:hover {
    border-color: rgba(16, 185, 129, 0.2);
    box-shadow: 0 10px 40px -10px rgba(16, 185, 129, 0.1);
}

/* Info Cards */
.tentang-info-card {
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.7), rgba(30, 41, 59, 0.4));
    border: 1px solid rgba(255,255,255,0.08);
    backdrop-filter: blur(12px);
    display: flex;
    flex-direction: column;
    transition: all 0.3s ease;
}

.tentang-info-card:hover,
.tentang-info-card:active {
    border-color: rgba(255,255,255,0.18);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px -8px rgba(0,0,0,0.5);
}

.tentang-info-label {
    font-size: 0.55rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight: 700;
    color: #64748b;
    margin-bottom: 1px;
}

@media (min-width: 768px) {
    .tentang-info-label {
        font-size: 0.6rem;
        letter-spacing: 0.12em;
        margin-bottom: 2px;
    }
}

.tentang-info-value {
    color: #e2e8f0;
    font-size: 0.72rem;
    font-weight: 500;
    line-height: 1.3;
}

@media (min-width: 768px) {
    .tentang-info-value {
        font-size: 0.8rem;
    }
}

/* Stats Bar */
.tentang-stats-bar {
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.8), rgba(30, 41, 59, 0.5));
    border: 1px solid rgba(255,255,255,0.08);
    backdrop-filter: blur(16px);
    position: relative;
    overflow: hidden;
}

.tentang-stats-bar::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, #10b981, #3b82f6, #8b5cf6);
}

.tentang-stat-item {
    transition: all 0.3s ease;
    border-radius: 12px;
}

@media (min-width: 768px) {
    .tentang-stat-item {
        border-radius: 16px;
    }
}

.tentang-stat-item:hover {
    background: rgba(255,255,255,0.03);
}

.tentang-stat-divider {
    width: 1px;
    background: rgba(255,255,255,0.08);
    align-self: stretch;
    margin: 10px 0;
}
</style>

<!-- ===================== PERJALANAN KARIR: COSMIC LIFT ===================== -->
<section id="tentang-saya" class="relative min-h-screen overflow-hidden pt-32 pb-20">
    
    <!-- SECTION HEADER -->
    <div class="relative z-20 max-w-6xl mx-auto px-6 mb-16 md:mb-24">
        <div class="text-center">
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-6">Perjalanan <span class="text-emerald-500 italic">Karir</span></h1>
            <p class="text-slate-400 max-w-xl mx-auto text-sm md:text-base font-light px-4">
                Melihat kembali lintasan pendidikan saya selama 11 tahun terakhir melalui Digital Star-Log.
            </p>
        </div>
    </div>

    @php
        $education = [
            [
                'name' => 'SMKTI AIRLANGGA',
                'year' => '2025 - Sekarang',
                'desc' => 'Fokus pada pengembangan perangkat lunak dan gim (PPLG). Mempelajari Laravel, UI/UX, dan arsitektur web modern.',
                'color' => 'emerald',
                'logo' => 'Screenshot 2026-03-18 020016.png'
            ],
            [
                'name' => 'MTsN MODEL SAMARINDA',
                'year' => '2021 - 2024',
                'desc' => 'Fase eksplorasi awal di dunia digital dan pengembangan logika dasar. Membangun fondasi akademik di sekolah teladan.',
                'color' => 'blue',
                'logo' => 'Screenshot 2026-03-18 015959.png'
            ],
            [
                'name' => 'SD MUHAMMADIYAH 1',
                'year' => '2015 - 2021',
                'desc' => 'Membangun disiplin dan fondasi pengetahuan akademik yang kuat di Samarinda.',
                'color' => 'orange',
                'logo' => 'Screenshot 2026-03-18 015930.png'
            ],
            [
                'name' => 'TK HANDAYANI',
                'year' => '2013 - 2015',
                'desc' => 'Titik awal perjalanan di dunia pendidikan dengan keceriaan dan belajar dasar.',
                'color' => 'purple',
                'logo' => 'Screenshot 2026-03-18 020149.png'
            ],
        ];
    @endphp

    <!-- [ DESKTOP LAYOUT ] -->
    <div class="hidden md:block relative z-20 max-w-6xl mx-auto px-6">
        <!-- CENTRAL ENERGY RAIL -->
        <div class="absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-emerald-500/40 to-transparent z-10">
            <div class="absolute inset-0 bg-emerald-400/20 blur-md"></div>
        </div>

        <div class="space-y-64 relative">
            @foreach($education as $index => $edu)
            <div class="lift-deck flex {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }} items-center gap-24 opacity-0 scale-95 transition-all duration-1000">
                <!-- GLASS TERMINAL -->
                <div class="flex-1 relative">
                    <div class="glass-terminal group relative p-10 rounded-3xl bg-slate-950/40 backdrop-blur-2xl border border-white/10 hover:border-{{ $edu['color'] }}-500/40 transition-all duration-500 shadow-2xl">
                        <div class="relative z-10">
                            <span class="block text-{{ $edu['color'] }}-400 text-[10px] font-bold tracking-[0.3em] uppercase mb-4">{{ $edu['year'] }}</span>
                            <h3 class="text-3xl font-black text-white mb-4 tracking-tight group-hover:text-{{ $edu['color'] }}-400 transition-colors">{{ $edu['name'] }}</h3>
                            <p class="text-slate-400 text-base leading-relaxed font-light">{{ $edu['desc'] }}</p>
                        </div>
                        <div class="mt-8 pt-6 border-t border-white/5 flex items-center gap-6">
                            <div class="flex-1 h-[2px] bg-gradient-to-r from-{{ $edu['color'] }}-500/20 to-transparent"></div>
                        </div>
                    </div>
                </div>
                <!-- INDICATOR NODE -->
                <div class="relative z-30 w-12 h-12 flex items-center justify-center">
                    <div class="absolute inset-0 bg-{{ $edu['color'] }}-500/10 blur-xl rounded-full scale-150"></div>
                    <div class="node-ring w-8 h-8 rounded-full border-2 border-{{ $edu['color'] }}-500/30 flex items-center justify-center bg-slate-950">
                        <div class="w-2 h-2 rounded-full bg-{{ $edu['color'] }}-500 shadow-[0_0_10px_currentColor]"></div>
                    </div>
                </div>
                <!-- COSMIC VISUAL -->
                <div class="flex-1 flex justify-center opacity-80 group-hover:opacity-100 transition-opacity">
                    <div class="relative w-64 h-64 rounded-full border border-white/10 flex items-center justify-center group/porthole">
                        <!-- Orbiting Rings (Holographic) -->
                        <div class="absolute inset-0 border border-{{ $edu['color'] }}-500/20 rounded-full animate-[spin_15s_linear_infinite]"></div>
                        <div class="absolute inset-4 border border-white/5 rounded-full animate-[spin_20s_linear_reverse_infinite]"></div>
                        
                        <!-- Porthole Glass -->
                        <div class="absolute inset-2 bg-gradient-to-b from-white/5 to-transparent rounded-full backdrop-blur-md border border-white/10 shadow-2xl"></div>

                        <!-- School Logo (Floating Central Circle) -->
                        <div class="relative z-10 w-40 h-40 flex items-center justify-center overflow-hidden rounded-full bg-white shadow-xl">
                            <img src="/{{ $edu['logo'] }}" class="w-full h-full object-contain p-4 scale-105 transition-transform duration-1000 group-hover/porthole:scale-110" />
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- [ MOBILE LAYOUT ] -->
    <div class="md:hidden relative z-20 px-6">
        <!-- Vertical Holographic Line -->
        <div class="absolute left-8 top-0 bottom-0 w-[1px] bg-gradient-to-b from-transparent via-emerald-500/30 to-transparent"></div>
        
        <div class="space-y-16">
            @foreach($education as $edu)
            @php
                $nodeColors = [
                    'emerald' => 'bg-emerald-500 border-emerald-500/50 shadow-emerald-500/50',
                    'blue' => 'bg-blue-500 border-blue-500/50 shadow-blue-500/50',
                    'orange' => 'bg-orange-500 border-orange-500/50 shadow-orange-500/50',
                    'purple' => 'bg-purple-500 border-purple-500/50 shadow-purple-500/50',
                ];
                $colorClasses = $nodeColors[$edu['color']] ?? $nodeColors['emerald'];
            @endphp
            <div class="mobile-deck flex gap-8 opacity-0 translate-x-4 transition-all duration-700">
                <!-- Glowing Node -->
                <div class="relative flex-shrink-0 mt-2">
                    <div class="w-5 h-5 rounded-full bg-slate-950 border {{ explode(' ', $colorClasses)[1] }} flex items-center justify-center">
                        <div class="w-2 h-2 rounded-full {{ explode(' ', $colorClasses)[0] }} animate-pulse"></div>
                    </div>
                    <div class="absolute inset-0 {{ explode(' ', $colorClasses)[0] }} opacity-40 blur-lg rounded-full"></div>
                </div>

                <!-- Content Card -->
                <div class="flex-1 bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl relative overflow-hidden group">
                    <!-- Accent Line -->
                    <div class="absolute left-0 top-0 bottom-0 w-1 {{ explode(' ', $colorClasses)[0] }} opacity-30"></div>

                    <span class="block text-{{ $edu['color'] }}-400 text-[10px] font-mono font-bold tracking-widest uppercase mb-2">{{ $edu['year'] }}</span>
                    <h3 class="text-lg font-bold text-white mb-2 leading-tight group-hover:text-{{ $edu['color'] }}-400 transition-colors">{{ $edu['name'] }}</h3>
                    <p class="text-xs text-slate-400 font-light leading-relaxed mb-4">{{ $edu['desc'] }}</p>
                    
                    <div class="flex items-center justify-between text-slate-600">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>

<style>
.glass-terminal { box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.5); }
.lift-deck.active { opacity: 1 !important; transform: scale(1) translateY(0) !important; }
.mobile-deck.revealed { opacity: 1 !important; transform: translateX(0) !important; }

@keyframes node-pulse {
    0%, 100% { transform: scale(1); opacity: 0.3; }
    50% { transform: scale(1.2); opacity: 0.1; }
}
.node-ring::before {
    content: ''; position: absolute; inset: -10px; border-radius: 50%; border: 1px solid currentColor;
    opacity: 0.1; animation: node-pulse 2s infinite;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        // Desktop Animations
        gsap.utils.toArray('.lift-deck').forEach((deck) => {
            ScrollTrigger.create({
                trigger: deck,
                start: "top 85%",
                onEnter: () => deck.classList.add('active'),
                once: true
            });
            gsap.to(deck.querySelector('.glass-terminal'), {
                y: -30,
                scrollTrigger: { trigger: deck, start: "top bottom", end: "bottom top", scrub: 1 }
            });
        });

        // Mobile Animations
        gsap.utils.toArray('.mobile-deck').forEach((deck) => {
            ScrollTrigger.create({
                trigger: deck,
                start: "top 90%",
                onEnter: () => deck.classList.add('revealed'),
                once: true
            });
        });
    }

    // Restore Photo Modal Trigger
    const photoTrigger = document.getElementById('photo-trigger');
    if (photoTrigger) {
        photoTrigger.addEventListener('click', () => {
            if (typeof openProfileModal === 'function') {
                openProfileModal();
            } else {
                console.warn('openProfileModal is not defined. Check layouts/app.blade.php');
            }
        });
    }
});
</script>
