@extends('layouts.app')

@section('content')

<section class="min-h-screen px-6 py-32 relative bg-transparent">

    <div class="max-w-6xl mx-auto relative z-20">

        {{-- HEADER --}}
        <div class="text-center mb-20 fade-in-up">
            <h1 class="text-4xl md:text-6xl font-black mb-6 text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight drop-shadow-sm">
                Project Detail
            </h1>
            <p class="text-[#4b3621]/70 dark:text-slate-400 mt-4 max-w-2xl mx-auto text-lg font-light leading-relaxed">
                Eksplorasi mendalam mengenai setiap baris kode dan desain yang telah saya bangun untuk menyelesaikan berbagai masalah.
            </p>
        </div>

        {{-- PROJECT GRID (Elegant Variant) --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">
            @foreach($projects as $index => $p)
                <div class="group relative bg-[#fbfaf5]/80 dark:bg-slate-900/40 backdrop-blur-xl rounded-[2.5rem] border border-[#4b3621]/10 dark:border-white/5 hover:border-[#115e59]/30 dark:hover:border-emerald-500/30 transition-all duration-700 p-8 md:p-10 flex flex-col h-full shadow-xl hover:shadow-2xl hover:-translate-y-2">
                    
                    <!-- Top Minimal Accent -->
                    <div class="w-12 h-12 rounded-full bg-[#4b3621]/5 dark:bg-white/5 flex items-center justify-center mb-8 border border-[#4b3621]/10 dark:border-white/10 group-hover:scale-110 group-hover:bg-[#115e59] dark:group-hover:bg-emerald-400/20 transition-all duration-500">
                        <i class="fa-solid fa-code text-[#4b3621]/40 dark:text-white/40 group-hover:text-white dark:group-hover:text-emerald-400 transition-colors"></i>
                    </div>

                    <!-- Watermark -->
                    <div class="absolute top-8 right-8 text-5xl font-black text-[#4b3621]/[0.03] dark:text-white/[0.02] font-playfair pointer-events-none group-hover:text-[#115e59]/[0.05] dark:group-hover:text-emerald-400/[0.05] transition-colors duration-700 italic">
                        0{{ $index + 1 }}
                    </div>

                    <h3 class="text-2xl font-bold text-[#4b3621] dark:text-white mb-4 group-hover:text-[#115e59] dark:group-hover:text-emerald-400 transition-colors duration-500 font-playfair leading-tight relative z-10 w-[85%]">
                        {{ $p->title }}
                    </h3>

                    <p class="text-[#4b3621]/70 dark:text-slate-400 leading-relaxed font-light mb-10 flex-grow relative z-10">
                        {{ $p->description }}
                    </p>

                    {{-- INLINE CTA --}}
                    <div class="mt-auto relative z-10 pt-5 border-t border-[#4b3621]/10 dark:border-white/10">
                        <button class="flex items-center gap-3 text-[#4b3621] dark:text-white font-bold text-[10px] uppercase tracking-widest group/btn cursor-pointer">
                            <span class="group-hover/btn:text-[#115e59] dark:group-hover/btn:text-emerald-400 transition-colors">Explore Scope</span>
                            <div class="w-6 h-6 rounded-full bg-[#4b3621]/5 dark:bg-white/5 flex items-center justify-center group-hover/btn:bg-[#115e59] dark:group-hover/btn:bg-emerald-400 group-hover/btn:text-white dark:group-hover/btn:text-slate-900 transition-all duration-300 shadow-inner">
                                <i class="fa-solid fa-arrow-right text-[8px] group-hover/btn:translate-x-0.5 transition-transform"></i>
                            </div>
                        </button>
                    </div>

                </div>
            @endforeach
        </div>

        {{-- BACK BUTTON --}}
        <div class="text-center mt-24">
            <a href="{{ route('home') }}"
               class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-full border border-[#4b3621]/20 dark:border-white/20 bg-white/50 dark:bg-slate-900/50 backdrop-blur-md text-[#4b3621] dark:text-white font-bold text-sm tracking-wide hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 hover:border-transparent transition-all duration-500 hover:scale-105 shadow-xl group">
                <i class="fa-solid fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                Kembali ke Beranda
            </a>
        </div>

    </div>

</section>

@endsection