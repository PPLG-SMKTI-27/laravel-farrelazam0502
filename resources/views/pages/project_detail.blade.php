@extends('layouts.app')

@section('content')

<section class="min-h-screen bg-slate-950 px-6 py-24">

    <div class="max-w-6xl mx-auto">

        {{-- HEADER --}}
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold 
                bg-gradient-to-r from-emerald-400 to-blue-400 
                bg-clip-text text-transparent">
                My Project Details
            </h1>
            <p class="text-slate-400 mt-4 max-w-2xl mx-auto">
                Berikut adalah beberapa project yang telah saya kerjakan.
                Setiap project dibuat dengan fokus pada kualitas dan detail.
            </p>
        </div>

        {{-- PROJECT GRID --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($projects as $p)
                <div class="group bg-slate-900/60 backdrop-blur-lg 
                            p-8 rounded-3xl border border-white/5 
                            hover:border-emerald-400/40 
                            hover:-translate-y-3 
                            transition-all duration-300">

                    <h3 class="text-xl font-semibold text-white mb-3 
                               group-hover:text-emerald-400 transition">
                        {{ $p->title }}
                    </h3>

                    <p class="text-slate-400 leading-relaxed">
                        {{ $p->description }}
                    </p>

                    {{-- OPTIONAL BUTTON --}}
                    <div class="mt-6">
                        <button class="text-sm text-emerald-400 
                                       hover:text-white transition">
                            View More →
                        </button>
                    </div>

                </div>
            @endforeach
        </div>

        {{-- BACK BUTTON --}}
        <div class="text-center mt-20">
            <a href="{{ route('home') }}"
               class="px-8 py-3 rounded-full
                      bg-gradient-to-r from-emerald-400 to-blue-400
                      text-slate-900 font-semibold
                      hover:scale-105 transition duration-300">
                ← Kembali ke Beranda
            </a>
        </div>

    </div>

</section>

@endsection
    