@extends('layouts.app')

@section('content')

<section id="project_detail" class="max-w-6xl mx-auto py-24 px-6">

    <h2 class="text-3xl font-bold text-center mb-14">
        Project
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        <div class="bg-slate-900 p-8 rounded-3xl border border-white/5 hover:-translate-y-2 transition">
            <h3 class="text-emerald-400 font-semibold mb-2">Website Portofolio</h3>
            <p class="text-slate-400">Website personal modern dengan desain bersih.</p>
        </div>

        <div class="bg-slate-900 p-8 rounded-3xl border border-white/5 hover:-translate-y-2 transition">
            <h3 class="text-emerald-400 font-semibold mb-2">Aplikasi CRUD Laravel</h3>
            <p class="text-slate-400">Aplikasi manajemen data menggunakan Laravel.</p>
        </div>

        <div class="bg-slate-900 p-8 rounded-3xl border border-white/5 hover:-translate-y-2 transition">
            <h3 class="text-emerald-400 font-semibold mb-2">Web Rent Car</h3>
            <p class="text-slate-400">Web rental mobil menggunakan native PHP & MySQL.</p>
        </div>

    </div>

</section>

@endsection
