<section id="skill"
class="relative min-h-screen flex items-center justify-center px-5 overflow-hidden">

<!-- Background handled globally by Starry Sky Canvas -->

<!-- CONTENT -->
<div class="relative z-10 max-w-6xl w-full">

<h2 class="text-3xl md:text-4xl font-bold text-center mb-12 pb-2
bg-gradient-to-r from-emerald-400 to-blue-400 bg-clip-text text-transparent">
Skill
</h2>

@php
$skills = [
    [
        'name' => 'HTML & CSS',
        'icon' => 'fa-brands fa-html5 text-orange-500',
        'desc' => 'Membangun struktur dasar dan mendesain antarmuka halaman web agar responsif di berbagai perangkat.'
    ],
    [
        'name' => 'JavaScript',
        'icon' => 'fa-brands fa-js text-yellow-400',
        'desc' => 'Menambahkan fitur interaktif, animasi dinamis, serta manipulasi elemen web secara real-time.'
    ],
    [
        'name' => 'Laravel',
        'icon' => 'fa-brands fa-laravel text-red-500',
        'desc' => 'Mengelola sistem backend, database, routing, otentikasi, dan logika server menggunakan PHP.'
    ],
    [
        'name' => 'MySQL',
        'icon' => 'fa-solid fa-database text-blue-400',
        'desc' => 'Merancang relasi tabel dan menyimpan data aplikasi secara terstruktur ke dalam basis data.'
    ],
    [
        'name' => 'Git & GitHub',
        'icon' => 'fa-brands fa-github text-white',
        'desc' => 'Mengamankan riwayat perubahan kode (version control) dan memudahkan kolaborasi tim.'
    ],
    [
        'name' => 'Tailwind CSS',
        'icon' => 'fa-brands fa-css3-alt text-teal-400',
        'desc' => 'Styling antarmuka lebih cepat dengan utility classes yang mempermudah customisasi desain modern.'
    ],
];
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">

@foreach($skills as $skill)
<div class="group relative bg-slate-900/60 backdrop-blur-md border border-white/5 rounded-3xl p-8 hover:-translate-y-3 hover:border-emerald-400/50 hover:shadow-[0_0_30px_rgba(52,211,153,0.15)] transition-all duration-500 text-left">
    
    <!-- Glow Background on Hover -->
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-400/10 to-blue-400/10 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none -z-10"></div>

    <div class="flex items-center gap-5 mb-5">
        <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-3xl shrink-0 group-hover:scale-110 group-hover:rotate-3 transition duration-500 shadow-lg">
            <i class="{{ $skill['icon'] }}"></i>
        </div>
        <h3 class="text-xl font-bold text-slate-100 group-hover:text-emerald-400 transition duration-300">
            {{ $skill['name'] }}
        </h3>
    </div>
    
    <p class="text-indigo-200/80 leading-relaxed text-sm">
        {{ $skill['desc'] }}
    </p>

</div>
@endforeach

</div>

</div>
</section>
