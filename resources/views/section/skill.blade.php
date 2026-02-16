<section id="skill"
class="relative min-h-screen flex items-center justify-center px-5 overflow-hidden">

<!-- BACKGROUND IMAGE -->
<div class="absolute inset-0">
    <div class="w-full h-full bg-cover bg-center bg-no-repeat"
         style="background-image:url('/backgroundskill.png');">
    </div>
</div>

<!-- CONTENT -->
<div class="relative z-10 max-w-6xl w-full">

<h2 class="text-3xl md:text-4xl font-bold text-center mb-12
bg-gradient-to-r from-emerald-400 to-blue-400 bg-clip-text text-transparent">
Skill
</h2>

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">

@foreach(['HTML','CSS','JavaScript','Laravel','MySQL','Git'] as $skill)
<div class="bg-slate-900/70 border border-white/10 rounded-2xl p-6 text-center font-semibold
hover:-translate-y-2 hover:shadow-xl hover:shadow-emerald-400/20 transition duration-300">
{{ $skill }}
</div>
@endforeach

</div>

</div>
</section>
