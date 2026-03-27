@php
$skillGroups = [
    'Front-End' => [
        [
            'name' => 'HTML & CSS',
            'icon' => 'fa-brands fa-html5 text-orange-500',
            'desc' => 'Membangun struktur dasar dan mendesain antarmuka halaman web agar responsif.'
        ],
        [
            'name' => 'Tailwind CSS',
            'icon' => 'fa-brands fa-css3-alt text-teal-400',
            'desc' => 'Styling antarmuka lebih cepat dengan utility classes modern.'
        ],
        [
            'name' => 'JavaScript',
            'icon' => 'fa-brands fa-js text-yellow-400',
            'desc' => 'Menambahkan fitur interaktif dan animasi dinamis.'
        ],
    ],
    'Back-End' => [
        [
            'name' => 'Laravel',
            'icon' => 'fa-brands fa-laravel text-red-500',
            'desc' => 'Mengelola sistem backend, database, dan logika server menggunakan PHP.'
        ],
        [
            'name' => 'MySQL',
            'icon' => 'fa-solid fa-database text-blue-400',
            'desc' => 'Merancang relasi tabel dan menyimpan data aplikasi secara terstruktur.'
        ],
    ],
    'Tools & Others' => [
        [
            'name' => 'Git & GitHub',
            'icon' => 'fa-brands fa-github text-[#4b3621] dark:text-white',
            'desc' => 'Version control untuk mengamankan riwayat perubahan kode dan kolaborasi.'
        ],
    ]
];
@endphp

<section id="skill" class="relative min-h-screen py-24 px-5 overflow-hidden transition-colors duration-700 bg-transparent dark:bg-transparent">
    
    <div class="relative z-10 max-w-6xl mx-auto w-full">
        
        <!-- SECTION HEADER -->
        <h2 class="text-3xl md:text-5xl font-black text-center mb-16 pb-2 text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight">
            Skills <span class="text-[#115e59] dark:text-emerald-500 italic">&</span> Tools
        </h2>

        <!-- CATEGORY GROUPS -->
        <div class="space-y-16">
            @foreach($skillGroups as $category => $skills)
            <div class="skill-group">
                <div class="flex items-center gap-4 mb-8">
                    <h3 class="text-xl md:text-2xl font-black text-[#115e59] dark:text-white/90 uppercase tracking-widest font-playfair">{{ $category }}</h3>
                    <div class="flex-1 h-[1px] bg-[#4b3621]/10 dark:bg-white/10"></div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($skills as $skill)
                    <div class="group relative bg-[#fbfaf5] dark:bg-slate-900/60 backdrop-blur-md border border-[#4b3621]/10 dark:border-white/5 rounded-3xl p-6 md:p-8 hover:-translate-y-2 hover:border-[#115e59]/40 dark:hover:border-emerald-400/50 shadow-[0_10px_30px_rgba(0,0,0,0.03)] dark:shadow-none transition-all duration-500">
                        
                        <!-- Hover Glow -->
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-400/5 to-blue-400/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>

                        <div class="flex items-center gap-5 mb-5">
                            <div class="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-white dark:bg-white/5 border border-[#4b3621]/10 dark:border-white/10 flex items-center justify-center text-2xl md:text-3xl shrink-0 group-hover:scale-110 group-hover:rotate-3 transition duration-500 shadow-xl">
                                <i class="{{ $skill['icon'] }}"></i>
                            </div>
                            <h4 class="text-lg md:text-xl font-bold text-[#4b3621] dark:text-slate-100 group-hover:text-[#115e59] transition duration-300">
                                {{ $skill['name'] }}
                            </h4>
                        </div>
                        
                        <p class="text-[#4b3621]/70 dark:text-indigo-200/70 leading-relaxed text-sm font-light">
                            {{ $skill['desc'] }}
                        </p>

                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
