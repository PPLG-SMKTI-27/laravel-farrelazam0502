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

            <!-- PHOTO REVEAL OVERLAY -->
            <div id="photo-reveal-overlay">
                <div class="reveal-container">
                    <div class="close-reveal" id="close-reveal">
                        <i class="fa-solid fa-times"></i>
                    </div>
                    <div class="reveal-img-wrapper">
                        <img src="/profile.png?v=2" alt="Full Photo" class="object-cover" />
                    </div>
                    <div class="reveal-badge mt-4 cursor-pointer hover:scale-105 transition-transform" id="reveal-music-badge">
                        <i class="fa-solid fa-music mr-2"></i> <span id="music-status-text">Loading music...</span>
                    </div>
                </div>  
            </div>

            <!-- Local Audio Player -->
            <audio id="local-music-player" preload="auto" style="display:none;">
                <source src="{{ asset('audio/dhruv  double take (Lyrics).mp3') }}" type="audio/mpeg">
            </audio>
            <!-- Name & Title -->
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

/* Photo Reveal Overlay */
#photo-reveal-overlay {
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(0, 0, 0, 0.85);
    backdrop-filter: blur(15px);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.5s ease;
}

#photo-reveal-overlay.active {
    opacity: 1;
    pointer-events: auto;
}

.reveal-container {
    position: relative;
    width: 80%; 
    max-width: 280px; 
    aspect-ratio: 9/16;
    transform: scale(0.9);
    transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
}

#photo-reveal-overlay.active .reveal-container {
    transform: scale(1);
}

.reveal-img-wrapper {
    width: 100%;
    height: 100%;
    border-radius: 2rem;
    overflow: hidden;
    border: 2px solid rgba(16, 185, 129, 0.3);
    box-shadow: 0 0 50px rgba(16, 185, 129, 0.2);
}

.reveal-img-wrapper img {
    width: 100%;
    height: 100%;
    object-position: center 20%;
}

.close-reveal {
    position: absolute;
    top: -50px;
    right: 0;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    background: rgba(255, 255, 255, 0.1);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.close-reveal:hover {
    background: rgba(16, 185, 129, 0.3);
    transform: rotate(90deg);
}

.reveal-badge {
    position: absolute;
    bottom: -40px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(16, 185, 129, 0.2);
    border: 1px solid rgba(16, 185, 129, 0.4);
    color: #10b981;
    padding: 6px 16px;
    border-radius: 100px;
    font-size: 0.8rem;
    font-weight: 600;
    white-space: nowrap;
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% { transform: translate(-50%, 0); }
    50% { transform: translate(-50%, -10px); }
}

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

<!-- ===================== PERJALANAN KARIR SECTION ===================== -->
<section id="about"
class="relative min-h-screen flex flex-col justify-center items-center text-center px-4 md:px-6 overflow-hidden pt-24 pb-20">

<!-- Background handled globally by Starry Sky Canvas -->

<!-- CONTENT -->
<div class="relative z-20 w-full max-w-2xl mx-auto px-4 mt-8 md:mt-0">
    <div class="flex flex-col items-center justify-center gap-6 md:gap-8">
        
        <!-- Profile Image/Avatar (Engaging Element) -->
        <div class="relative group mt-10 md:mt-0">
            <div class="absolute -inset-1 bg-gradient-to-r from-emerald-400 to-blue-500 rounded-full blur opacity-50 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
            <div class="relative w-28 h-28 md:w-36 md:h-36 rounded-full border-2 border-slate-700/50 p-1 bg-slate-900/80 backdrop-blur-sm overflow-hidden flex items-center justify-center mx-auto">
                <!-- Fallback to a cool icon if no image is available yet -->
                <i class="fa-solid fa-user-astronaut text-4xl md:text-5xl text-emerald-400/80 group-hover:scale-110 transition-transform duration-500"></i>
                <!-- Or put an actual img tag here later: <img src="profile.jpg" class="w-full h-full object-cover rounded-full" /> -->
            </div>
            
            <!-- Floating Tech Badge -->
            <div class="absolute -bottom-4 md:-bottom-2 -right-4 md:-right-2 bg-slate-800 border border-slate-700 text-red-500 p-2 md:p-3 rounded-xl shadow-lg transform rotate-6 hover:rotate-0 transition-transform hidden sm:block">
                <i class="fa-brands fa-laravel text-lg md:text-xl"></i>
            </div>
        </div>

        <!-- Text Content -->
        <div class="text-center flex-1 w-full max-w-lg mt-4 md:mt-0">
            <h2 class="text-xs md:text-sm text-emerald-400 font-semibold tracking-widest uppercase mb-3 text-center">Perjalanan Karir</h2>
            
            <p class="text-slate-300 md:text-indigo-200 text-sm md:text-base leading-relaxed mb-6 font-light text-center">
                Jadi inilah Perjalanan karir saya selama 11 tahun di <strong class="text-white font-medium">PENDIDIKAN</strong>.
            </p>

            <!-- Tech Stack Pills -->
            <div class="flex flex-wrap justify-center gap-2 md:gap-3 mb-4">
                <span class="px-3 py-1 bg-slate-800/50 border border-slate-700 rounded-full text-xs text-orange-400 backdrop-blur-sm flex items-center gap-1">
                    <i class="fa-brands fa-html5"></i> HTML
                </span>
                <span class="px-3 py-1 bg-slate-800/50 border border-slate-700 rounded-full text-xs text-blue-400 backdrop-blur-sm flex items-center gap-1">
                    <i class="fa-brands fa-css3-alt"></i> CSS
                </span>
                <span class="px-3 py-1 bg-slate-800/50 border border-slate-700 rounded-full text-xs text-yellow-400 backdrop-blur-sm flex items-center gap-1">
                    <i class="fa-brands fa-js"></i> JavaScript
                </span>
                <span class="px-3 py-1 bg-slate-800/50 border border-slate-700 rounded-full text-xs text-red-400 backdrop-blur-sm flex items-center gap-1">
                    <i class="fa-brands fa-laravel"></i> Laravel
                </span>
            </div>
        </div>
        
    </div>
</div>

<!-- GALACTIC ASCENT TIMELINE (Mobile Only) -->
<div id="mobile-galactic-timeline" class="block md:hidden relative z-20 w-full mt-8 px-6 pb-20">
    
    <!-- Central Glowing Trail -->
    <div class="absolute left-8 top-0 bottom-0 w-px bg-gradient-to-b from-emerald-500/0 via-emerald-500/30 to-blue-500/0 z-0">
        <div class="absolute inset-0 bg-emerald-400/20 blur-[2px] animate-pulse"></div>
    </div>

    @php
        $education = [
            ['id' => 'tk', 'name' => 'TK', 'desc' => 'Handayani', 'year' => '2013 - 2015', 'glow' => '#9e9e9e', 'planet' => 'mercury'],
            ['id' => 'sd', 'name' => 'SD', 'desc' => 'Muhammadiyah 1', 'year' => '2015 - 2021', 'glow' => '#ffab40', 'planet' => 'venus'],
            ['id' => 'smp', 'name' => 'SMP', 'desc' => 'SMP 1 DAN MTS MODEL', 'year' => '2021 - 2024', 'glow' => '#4facfe', 'planet' => 'earth'],
            ['id' => 'smk', 'name' => 'SMK', 'desc' => 'SMKTI AIRLANGGA (PPLG)', 'year' => '2025-2026 - Sekarang', 'glow' => '#ff5252', 'planet' => 'mars'],
        ];
    @endphp

    <div class="space-y-12 relative z-10">
        @foreach($education as $index => $edu)
            <div class="timeline-item flex items-start gap-6 opacity-0 translate-y-8 transition-all duration-700" data-index="{{ $index }}">
                <!-- Planet Node -->
                <div class="relative flex-shrink-0 mt-2">
                    <div class="timeline-planet-orb planet-{{ $edu['planet'] }} w-12 h-12 rounded-full border border-white/10 shadow-lg relative z-10"></div>
                    <div class="absolute inset-0 bg-{{ $edu['planet'] === 'mercury' ? '[#9e9e9e]' : ($edu['planet'] === 'venus' ? '[#ffab40]' : ($edu['planet'] === 'earth' ? '[#4facfe]' : '[#ff5252]')) }}/20 blur-xl rounded-full animate-pulse"></div>
                </div>

                <!-- Info Card -->
                <div class="flex-1 bg-slate-900/40 backdrop-blur-xl border border-white/5 rounded-2xl p-5 hover:border-emerald-500/30 transition-all duration-300">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-bold text-emerald-400 uppercase tracking-widest">{{ $edu['year'] }}</span>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-1">{{ $edu['name'] }}</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">{{ $edu['desc'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- FLOATING ICONS (desktop only) -->
<div class="absolute inset-0 pointer-events-none z-20 hidden md:block">

<a href="#tk" class="planet planet-mercury">
    <div class="planet-label">
        <div class="line"></div>
        <span>TK Handayani</span>
    </div>
</a>
<a href="#sd" class="planet planet-venus">
    <div class="planet-label">
        <div class="line"></div>
        <span>SD Tarakan</span>
    </div>
</a>
<a href="#smp" class="planet planet-earth">
    <div class="planet-label">
        <div class="line"></div>
        <span>SMP 1 Samarinda</span>
    </div>
</a>

<a href="#smk" class="planet planet-mars">
    <div class="planet-label">
        <div class="line"></div>
        <span>SMKTI Airlangga (PPLG)</span>
    </div>
</a>
<a href="#smp2" class="planet planet-jupiter">
    <div class="planet-label">
        <div class="line"></div>
        <span>Mts Model Samarinda</span>
    </div>
</a>
<a href="#sd2" class="planet planet-saturn">
    <div class="planet-label">
        <div class="line"></div>
        <span>SD Muhammadiyah 1</span>
    </div>
</a>

<a href="#tk2" class="planet planet-uranus">
    <div class="planet-label">
        <div class="line"></div>
        <span>TK Tarakan</span>
    </div>
</a>

</div>
</section>

<style>

/* ===== MOBILE PLANET CAROUSEL ===== */
.scrollbar-hide::-webkit-scrollbar { display: none; }
.scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }

.mobile-planet-card {
    flex: 0 0 auto;
    position: relative;
    text-decoration: none;
    min-width: 100px;
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card-glow {
    position: absolute;
    inset: 0;
    border-radius: 24px;
    opacity: 0;
    transition: opacity 0.5s;
    z-index: 0;
}

.card-inner {
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    padding: 20px 14px 16px;
    border-radius: 24px;
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.8), rgba(30, 41, 59, 0.6));
    border: 1px solid rgba(255,255,255,0.08);
    backdrop-filter: blur(12px);
    transition: all 0.5s;
    width: 100px;
    min-height: 130px;
    justify-content: center;
}

.mobile-planet-card:active .card-inner {
    transform: scale(0.95);
}

.mobile-planet-card.active .card-glow {
    opacity: 1;
    filter: blur(15px);
}

.mobile-planet-card.active .card-inner {
    border-color: rgba(255,255,255,0.25);
    transform: scale(1.08);
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.9), rgba(30, 41, 59, 0.8));
}

.mobile-planet-orb {
    width: 55px !important;
    height: 55px !important;
    border-radius: 50% !important;
    box-shadow: 
        inset -10px -10px 20px rgba(0,0,0,0.9), 
        inset 4px 4px 10px rgba(255,255,255,0.3),
        0 0 15px rgba(255,255,255,0.1) !important;
    transition: box-shadow 0.5s;
}

.mobile-planet-card.active .mobile-planet-orb {
    box-shadow: 
        inset -10px -10px 20px rgba(0,0,0,0.9), 
        inset 4px 4px 10px rgba(255,255,255,0.3),
        0 0 25px var(--planet-glow, rgba(255,255,255,0.3)) !important;
}

.mobile-planet-name {
    color: #fff;
    font-size: 0.85rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

.mobile-planet-desc {
    color: rgba(148, 163, 184, 0.7);
    font-size: 0.6rem;
    font-weight: 400;
    letter-spacing: 0.02em;
    margin-top: -4px;
}

.mobile-planet-card.active .mobile-planet-name {
    background: linear-gradient(90deg, #34d399, #60a5fa);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.mobile-planet-card.active .mobile-planet-desc {
    color: rgba(148, 163, 184, 1);
}

/* ===== END MOBILE CAROUSEL ===== */


/* Scroll Progress Line Styling */
#scroll-progress {
    transition: width 0.1s ease-out;
}

/* Bounce Animation for Hint */
@keyframes finger-bounce {
    0%, 100% { transform: translateX(0); }
    50% { transform: translateX(5px); }
}

.fa-hand-pointer {
    animation: finger-bounce 1.5s infinite;
}
/* Vertical Timeline Styling */
.timeline-item.revealed {
    opacity: 1 !important;
    transform: translateY(0) !important;
}

.timeline-planet-orb {
    box-shadow: 
        inset -8px -8px 15px rgba(0,0,0,0.8), 
        inset 3px 3px 10px rgba(255,255,255,0.2),
        0 0 15px currentColor;
}

.timeline-planet-orb.planet-mercury { background: #8e8e8e; color: rgba(142, 142, 142, 0.4); }
.timeline-planet-orb.planet-venus { background: #ffab40; color: rgba(255, 171, 64, 0.4); }
.timeline-planet-orb.planet-earth { background: #1b5b9c; color: rgba(27, 91, 156, 0.4); }
.timeline-planet-orb.planet-mars { background: #bc5e3a; color: rgba(188, 94, 58, 0.4); }

/* Planet Labels on Desktop */
.planet-label {
    position: absolute;
    top: -20px;
    left: 100%;
    display: flex;
    align-items: center;
    gap: 8px;
    opacity: 0.7;
    transition: opacity 0.3s, transform 0.3s;
    pointer-events: none;
    transform: translateX(10px);
}

.planet:hover .planet-label {
    opacity: 1;
    transform: translateX(15px);
}

.planet-label .line {
    width: 30px;
    height: 1px;
    background: linear-gradient(90deg, rgba(255,255,255,0.8), transparent);
}

.planet-label span {
    background: rgba(15, 23, 42, 0.7);
    padding: 4px 10px;
    border-radius: 6px;
    backdrop-filter: blur(4px);
    border: 1px solid rgba(255,255,255,0.1);
    color: #e2e8f0;
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 0.05em;
    white-space: nowrap;
}

/* Base Realistic Planet CSS */
.planet {
    position: absolute;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(255,255,255,0.95);
    font-size: 0.8rem;
    font-weight: bold;
    text-shadow: 1px 1px 4px rgba(0,0,0,1);
    pointer-events: auto;
    transition: transform 0.4s, box-shadow 0.4s;
    text-decoration: none;
    z-index: 10;
    box-shadow: inset -15px -15px 25px rgba(0,0,0,0.9), inset 5px 5px 15px rgba(255,255,255,0.3);
}

.planet:hover {
    transform: scale(1.3) !important;
    z-index: 20;
}

/* Planet variations */
.planet-mercury { background: #8e8e8e; width: 55px; height: 55px; }
.planet-venus { background: #ffab40; }
.planet-earth { background: #1b5b9c; box-shadow: inset -15px -15px 25px rgba(0,0,0,0.9), inset 5px 5px 15px rgba(255,255,255,0.3), 0 0 20px rgba(79, 172, 254, 0.5); }
.planet-mars { background: #bc5e3a; }
.planet-jupiter { background: #c3a171; width: 85px; height: 85px; }
.planet-saturn { background: #e2c286; width: 75px; height: 75px; }
.planet-uranus { background: #84ffff; width: 75px; height: 75px; }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

<script>
const planets = document.querySelectorAll(".planet");
const about = document.querySelector("#about");
let positions = [];

function calculateFormation() {
    const w = about.offsetWidth;
    const h = about.offsetHeight;
    const isMobile = window.innerWidth < 768;
    const rx = isMobile ? w * 0.40 : w * 0.35;
    const ry = isMobile ? h * 0.38 : h * 0.35;
    const cx = w / 2;
    const cy = h / 2;

    planets.forEach((el, i) => {
        const a = (i / planets.length) * Math.PI * 2;
        const elementRadius = el.offsetWidth / 2;
        if (isMobile) el.style.transform = "scale(0.4)";
        else el.style.transform = "scale(1)";

        const l = cx + rx * Math.cos(a) - elementRadius;
        const t = cy + ry * Math.sin(a) - elementRadius;
        positions[i] = { angle: a, left: l, top: t, radius: elementRadius, isHovered: false };
        el.style.left = l + "px";
        el.style.top = t + "px";

        el.addEventListener('mouseenter', () => { positions[i].isHovered = true; });
        el.addEventListener('mouseleave', () => { positions[i].isHovered = false; });
    });
}

function rotatePlanets() {
    const w = about.offsetWidth;
    const h = about.offsetHeight;
    const isMobile = window.innerWidth < 768;
    const rx = isMobile ? w * 0.40 : w * 0.35;
    const ry = isMobile ? h * 0.38 : h * 0.35;
    const cx = w / 2;
    const cy = h / 2;

    planets.forEach((el, i) => {
        if(!positions[i] || positions[i].isHovered) return;
        positions[i].angle += isMobile ? 0.0004 : 0.0002;
        const radius = positions[i].radius;
        const l = cx + rx * Math.cos(positions[i].angle) - radius;
        const t = cy + ry * Math.sin(positions[i].angle) - radius;
        gsap.to(el, { x: l - positions[i].left, y: t - positions[i].top, duration: 0.3, ease: "none" });
    });
    requestAnimationFrame(rotatePlanets);
}

if (window.innerWidth >= 768) {
    calculateFormation();
    rotatePlanets();
}

window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) calculateFormation();
});

// Vertical Timeline Intersection Observer
const timelineItems = document.querySelectorAll('.timeline-item');
if (timelineItems.length > 0) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
            }
        });
    }, { threshold: 0.2 });
    timelineItems.forEach(item => observer.observe(item));
}

// ===================== INTERACTIVE PHOTO & MUSIC (GUARANTEED SEEK) =====================
const photoTrigger = document.getElementById('photo-trigger');
const closeReveal = document.getElementById('close-reveal');
const photoRevealOverlay = document.getElementById('photo-reveal-overlay');
const musicStatusText = document.getElementById('music-status-text');
const musicBadge = document.getElementById('reveal-music-badge');
const localPlayer = document.getElementById('local-music-player');

function openReveal() {
    if (!photoRevealOverlay) return;
    
    // Show UI
    photoRevealOverlay.classList.add('active');
    document.body.style.overflow = 'hidden'; 
    
    // Simple Play from Start (Restart every time)
    if (localPlayer) {
        localPlayer.currentTime = 0; 
        localPlayer.play().then(() => {
            if (musicStatusText) musicStatusText.innerText = "Double Take 🎵";
            if (musicBadge) musicBadge.classList.remove('animate-pulse');
        }).catch(err => {
            console.warn("Autoplay blocked:", err);
            if (musicStatusText) musicStatusText.innerHTML = "Tap to Play Music <i class='fa-solid fa-play ml-1'></i>";
            if (musicBadge) musicBadge.classList.remove('animate-pulse');
        });
    }
}

function closeRevealAction() {
    if (!photoRevealOverlay) return;
    photoRevealOverlay.classList.remove('active');
    document.body.style.overflow = ''; 
    if (localPlayer) localPlayer.pause();
}

// Event Listeners
if (photoTrigger) photoTrigger.addEventListener('click', openReveal);
if (closeReveal) {
    closeReveal.addEventListener('click', (e) => {
        e.stopPropagation();
        closeRevealAction();
    });
}
if (photoRevealOverlay) {
    photoRevealOverlay.addEventListener('click', (e) => {
        if (e.target === photoRevealOverlay) closeRevealAction();
    });
}

// Manual Play Fallback Trigger
if (musicBadge) {
    musicBadge.addEventListener('click', (e) => {
        e.stopPropagation();
        if (localPlayer && localPlayer.paused) {
            localPlayer.play();
            if (musicStatusText) musicStatusText.innerText = "Double Take 🎵";
        }
    });
}
</script>
