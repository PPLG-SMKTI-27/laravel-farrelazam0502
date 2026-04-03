@php
$skills = [
    [
        'category' => 'front-end',
        'name' => 'HTML',
        'icon' => 'fa-brands fa-html5 text-orange-500',
        'desc' => 'Struktur semantik web yang presisi.'
    ],
    [
        'category' => 'front-end',
        'name' => 'CSS',
        'icon' => 'fa-brands fa-css3-alt text-blue-500',
        'desc' => 'Desain visual antar muka yang menawan.'
    ],
    [
        'category' => 'front-end',
        'name' => 'Tailwind',
        'icon' => 'fa-solid fa-wind text-teal-400',
        'desc' => 'Styling efisien dengan gaya utility-first.'
    ],
    [
        'category' => 'front-end',
        'name' => 'JavaScript',
        'icon' => 'fa-brands fa-js text-yellow-500',
        'desc' => 'Menghidupkan interaktivitas yang dinamis.'
    ],
    [
        'category' => 'back-end',
        'name' => 'Laravel',
        'icon' => 'fa-brands fa-laravel text-red-500',
        'desc' => 'Arsitektur sistem server yang tangguh.'
    ],
    [
        'category' => 'back-end',
        'name' => 'MySQL',
        'icon' => 'fa-solid fa-database text-blue-500',
        'desc' => 'Manajemen data logikal skala besar.'
    ],
    [
        'category' => 'tools',
        'name' => 'Git',
        'icon' => 'fa-brands fa-git-alt text-orange-600',
        'desc' => 'Perlindungan riwayat kode sistematis.'
    ],
    [
        'category' => 'tools',
        'name' => 'GitHub',
        'icon' => 'fa-brands fa-github text-[#4b3621] dark:text-white',
        'desc' => 'Wadah kolaborasi pusat dalam cloud.'
    ],
];
@endphp

<section id="skill" class="relative min-h-screen py-24 px-5 overflow-hidden transition-colors duration-700 bg-transparent dark:bg-transparent flex flex-col justify-center">
    
    <!-- Background Decorators -->
    <div class="absolute top-1/4 left-0 w-96 h-96 bg-emerald-500/5 dark:bg-emerald-500/10 blur-[120px] rounded-full pointer-events-none -z-10 text-transparent"></div>
    <div class="absolute bottom-1/4 right-0 w-[30rem] h-[30rem] bg-blue-500/5 dark:bg-blue-500/10 blur-[150px] rounded-full pointer-events-none -z-10 text-transparent"></div>

    <div class="relative z-10 max-w-5xl mx-auto w-full">
        
        <!-- SECTION HEADER -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-black text-[#4b3621] dark:text-slate-100 tracking-tight font-playfair leading-tight">{{ __('Skill & Alat') }}</h2>
        </div>
        
        <!-- Filter Tabs (Premium UI) -->
        <div class="flex flex-wrap gap-2 md:gap-4 mb-12 justify-center">
            <button class="skill-tab active px-6 py-2.5 rounded-2xl text-xs font-bold transition-all duration-500 bg-[#115e59] text-white shadow-[0_5px_15px_rgba(17,94,89,0.2)] hover:scale-105 active:scale-95" data-filter="all">{{ __('Semua') }}</button>
            <button class="skill-tab px-6 py-2.5 rounded-2xl text-xs font-bold transition-all duration-500 bg-[#fbfaf5]/80 dark:bg-slate-800/80 text-[#4b3621]/70 dark:text-slate-300 hover:bg-white dark:hover:bg-slate-700 hover:shadow-md hover:scale-105 active:scale-95" data-filter="front-end">Front-end</button>
            <button class="skill-tab px-6 py-2.5 rounded-2xl text-xs font-bold transition-all duration-500 bg-[#fbfaf5]/80 dark:bg-slate-800/80 text-[#4b3621]/70 dark:text-slate-300 hover:bg-white dark:hover:bg-slate-700 hover:shadow-md hover:scale-105 active:scale-95" data-filter="back-end">Back-end</button>
            <button class="skill-tab px-6 py-2.5 rounded-2xl text-xs font-bold transition-all duration-500 bg-[#fbfaf5]/80 dark:bg-slate-800/80 text-[#4b3621]/70 dark:text-slate-300 hover:bg-white dark:hover:bg-slate-700 hover:shadow-md hover:scale-105 active:scale-95" data-filter="tools">{{ __('Alat') }}</button>
        </div>

        <!-- SKILLS GRID (Compact & Clean) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 w-full" id="skills-grid">
            @foreach($skills as $skill)
            <div class="skill-card group bg-[#fbfaf5]/90 dark:bg-slate-900/60 backdrop-blur-xl border border-[#4b3621]/10 dark:border-white/5 rounded-[2rem] p-6 flex flex-col items-center justify-center text-center hover:-translate-y-2 hover:border-[#115e59]/40 dark:hover:border-emerald-400/50 shadow-[0_5px_20px_rgba(75,54,33,0.03)] hover:shadow-[0_15px_30px_rgba(17,94,89,0.1)] dark:shadow-none transition-all duration-500" data-category="{{ $skill['category'] }}">
                
                <!-- Inner Icon Frame -->
                <div class="w-16 h-16 md:w-20 md:h-20 rounded-2xl bg-white dark:bg-[#0b1121] border border-[#4b3621]/5 dark:border-white/5 flex items-center justify-center text-4xl mb-3 group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-500 shadow-md">
                    <!-- Subtle Glow -->
                    <div class="absolute inset-0 bg-[#115e59]/5 dark:bg-emerald-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <i class="{{ $skill['icon'] }} relative z-10 drop-shadow-sm group-hover:drop-shadow-lg"></i>
                </div>
                
                <h4 class="text-base md:text-lg font-black text-[#4b3621] dark:text-slate-100 mt-2 mb-1.5 font-playfair tracking-wide group-hover:text-[#115e59] dark:group-hover:text-emerald-400 transition-colors">
                    {{ $skill['name'] }}
                </h4>
                <p class="text-[#4b3621]/70 dark:text-slate-400 text-[10px] sm:text-[11px] font-semibold leading-relaxed max-w-[160px] mx-auto group-hover:text-[#4b3621] dark:group-hover:text-slate-300 transition-colors">
                    {{ $skill['desc'] }}
                </p>
                
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Tabs Filtering Logic & Animations -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.skill-tab');
    const cards = document.querySelectorAll('.skill-card');

    // INITIAL REVEAL ANIMATION (Coordinated with Preloader)
    function initSkillReveal() {
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            // First, briefly refresh ScrollTrigger to be sure of positions
            ScrollTrigger.refresh();

            gsap.from(".skill-card", {
                scrollTrigger: {
                    trigger: "#skill",
                    start: "top 85%", // Trigger slightly earlier for safety
                    toggleActions: "play none none none",
                    // onEnter: () => console.log("Skill reveal entered") // Debugging
                },
                opacity: 0,
                y: 50,
                scale: 0.9,
                stagger: 0.08,
                duration: 0.8,
                ease: "power2.out",
                clearProps: "all",
                overwrite: 'auto'
            });

            // FAIL-SAFE: If the user is already scrolled to this section, or it's missed,
            // ensure the cards show up after a short delay.
            setTimeout(() => {
                gsap.to(".skill-card", { opacity: 1, y: 0, scale: 1, duration: 0.5, stagger: 0.05 });
            }, 2000);
        } else {
            // GSAP not found fallback
            cards.forEach(card => card.style.opacity = '1');
        }
    }

    // COORDINATE WITH PRELOADER (same as Hero Section)
    if (sessionStorage.getItem('preloader_played')) {
        // Short delay to allow layout to settle
        setTimeout(initSkillReveal, 200);
    } else {
        // Wait for preloader animation to finish (approx 4s)
        setTimeout(initSkillReveal, 4200);
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active styles from all tabs
            tabs.forEach(t => {
                t.classList.remove('active', 'bg-[#115e59]', 'text-white', 'shadow-[0_5px_15px_rgba(17,94,89,0.2)]');
                t.classList.add('bg-[#fbfaf5]/80', 'dark:bg-slate-800/80', 'text-[#4b3621]/70', 'dark:text-slate-300');
            });

            // Add active style to clicked tab
            tab.classList.remove('bg-[#fbfaf5]/80', 'dark:bg-slate-800/80', 'text-[#4b3621]/70', 'dark:text-slate-300');
            tab.classList.add('active', 'bg-[#115e59]', 'text-white', 'shadow-[0_5px_15px_rgba(17,94,89,0.2)]');

            const filter = tab.getAttribute('data-filter');

            cards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'flex';
                    if (typeof gsap !== 'undefined') {
                        gsap.fromTo(card, 
                            { opacity: 0, scale: 0.8, y: 15 }, 
                            { opacity: 1, scale: 1, y: 0, duration: 0.5, ease: "back.out(1.5)", overwrite: true }
                        );
                    }
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>
