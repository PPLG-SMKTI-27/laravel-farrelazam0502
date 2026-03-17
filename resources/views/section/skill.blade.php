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
            'icon' => 'fa-brands fa-github text-white',
            'desc' => 'Version control untuk mengamankan riwayat perubahan kode dan kolaborasi.'
        ],
    ]
];
@endphp

<section id="skill" class="relative min-h-screen py-24 px-5 overflow-hidden">
    
    <div class="relative z-10 max-w-6xl mx-auto w-full">
        
        <!-- SECTION HEADER -->
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 pb-2
        bg-gradient-to-r from-emerald-400 to-blue-400 bg-clip-text text-transparent">
        Skill
        </h2>

        <!-- CATEGORY GROUPS -->
        <div class="space-y-16">
            @foreach($skillGroups as $category => $skills)
            <div class="skill-group">
                <div class="flex items-center gap-4 mb-8">
                    <h3 class="text-xl md:text-2xl font-black text-white/90 uppercase tracking-widest">{{ $category }}</h3>
                    <div class="flex-1 h-[1px] bg-white/10"></div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($skills as $skill)
                    <div class="group relative bg-slate-900/60 backdrop-blur-md border border-white/5 rounded-3xl p-6 md:p-8 hover:-translate-y-2 hover:border-emerald-400/50 hover:shadow-[0_20px_40px_rgba(0,0,0,0.4),0_0_20px_rgba(52,211,153,0.1)] transition-all duration-500">
                        
                        <!-- Hover Glow -->
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-400/5 to-blue-400/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>

                        <div class="flex items-center gap-5 mb-5">
                            <div class="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-2xl md:text-3xl shrink-0 group-hover:scale-110 group-hover:rotate-3 transition duration-500 shadow-xl">
                                <i class="{{ $skill['icon'] }}"></i>
                            </div>
                            <h4 class="text-lg md:text-xl font-bold text-slate-100 group-hover:text-emerald-400 transition duration-300">
                                {{ $skill['name'] }}
                            </h4>
                        </div>
                        
                        <p class="text-indigo-200/70 leading-relaxed text-sm font-light">
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
