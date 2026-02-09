
<section id="project" class="max-w-6xl mx-auto py-24 px-6">

    <h2 class="text-3xl font-bold text-center mb-14">
        Project
    </h2>

    {{-- GRID --}}
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        {{-- CARD 1 --}}
        <div class="bg-slate-900 p-8 rounded-3xl border border-white/5 hover:-translate-y-2 hover:border-emerald-400/40 transition">
            <h3 class="text-emerald-400 font-semibold mb-2">Website Portofolio</h3>
            <p class="text-slate-400">Website personal modern dengan desain bersih.</p>
        </div>

        {{-- CARD 2 --}}
        <div class="bg-slate-900 p-8 rounded-3xl border border-white/5 hover:-translate-y-2 hover:border-emerald-400/40 transition">
            <h3 class="text-emerald-400 font-semibold mb-2">Aplikasi CRUD Laravel</h3>
            <p class="text-sl   ate-400">Aplikasi manajemen data menggunakan Laravel.</p>
        </div>

        {{-- CARD 3 --}}
        <div class="bg-slate-900 p-8 rounded-3xl border border-white/5 hover:-translate-y-2 hover:border-emerald-400/40 transition">
            <h3 class="text-emerald-400 font-semibold mb-2">Web Rent Car</h3>
            <p class="text-slate-400">Web rental mobil menggunakan native PHP & MySQL.</p>
        </div>

    </div>

    {{-- BUTTON --}}
    <div class="text-center mt-12">
        <a href="{{ route('project_detail') }}"
           class="px-7 py-3 rounded-full
                  bg-gradient-to-r from-emerald-400 to-blue-400
                  text-slate-900 font-semibold
                  hover:scale-105 transition">
            Lihat Detail Project
        </a>
    </div>

</section>
