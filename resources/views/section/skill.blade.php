<section id="skill" class="max-w-6xl mx-auto py-24 px-5">
    <h2 class="text-3xl font-bold text-center mb-12">Skill</h2>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
        @foreach (['HTML','CSS','JavaScript','Laravel','MySQL','Git'] as $skill)
            <div class="bg-slate-900 border border-white/5 rounded-2xl p-6 text-center font-semibold
                        hover:-translate-y-2 hover:shadow-xl hover:shadow-emerald-400/20 transition">
                {{ $skill }}
            </div>
        @endforeach
    </div>
</section>
