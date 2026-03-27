@extends('layouts.app')

@section('content')
<div class="min-h-screen pt-32 pb-24 relative bg-transparent">
    <div class="max-w-7xl mx-auto px-6 relative z-20">

        {{-- HEADER --}}
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-16 fade-in-up">
            
            {{-- Title --}}
            <h1 class="text-4xl md:text-5xl font-black text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight shrink-0 text-center md:text-left drop-shadow-sm">
                Dashboard
            </h1>

            {{-- Action Buttons --}}
            <div class="flex flex-wrap items-center justify-center gap-4 shrink-0 w-full md:w-auto">
                {{-- Kembali Ke Beranda Button --}}
                <a href="{{ route('home') }}" 
                   class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#4b3621]/20 dark:border-white/20 bg-white/50 dark:bg-slate-900/50 backdrop-blur-md text-[#4b3621] dark:text-white font-bold text-xs tracking-widest uppercase hover:bg-slate-100 dark:hover:bg-slate-800 transition-all duration-300 shadow-md hover:scale-105">
                    <i class="fa-solid fa-home"></i> Beranda
                </a>

                <a href="{{ route('profile.edit') }}" 
                   class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#4b3621]/20 dark:border-white/20 bg-white/50 dark:bg-slate-900/50 backdrop-blur-md text-[#4b3621] dark:text-white font-bold text-xs tracking-widest uppercase hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 hover:border-transparent transition-all duration-300 shadow-md hover:scale-105">
                    <i class="fa-solid fa-user"></i> Profile
                </a>
                
                <a href="{{ route('project.editForm') }}" 
                   class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#4b3621]/20 dark:border-transparent bg-[#115e59] dark:bg-emerald-500 text-white dark:text-slate-900 font-bold text-xs tracking-widest uppercase hover:bg-[#0f4d4a] dark:hover:bg-emerald-400 transition-all duration-300 shadow-md hover:scale-105">
                    <i class="fa-solid fa-plus"></i> New Project
                </a>
            </div>

        </div>

        @if(session('success'))
        <div class="max-w-7xl mx-auto mb-8 bg-emerald-500/10 dark:bg-emerald-500/20 border border-emerald-500/30 text-[#115e59] dark:text-emerald-400 px-6 py-4 rounded-2xl flex items-center gap-3 backdrop-blur-md fade-in-up">
            <i class="fa-solid fa-check-circle text-lg"></i>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
        @endif

        {{-- Welcome Card (Elegant Glass) --}}
        <div class="bg-[#fbfaf5]/80 dark:bg-slate-900/60 backdrop-blur-2xl border border-[#4b3621]/10 dark:border-white/10 rounded-[2.5rem] p-8 md:p-12 shadow-2xl mb-12 relative overflow-hidden fade-in-up">
            <div class="relative z-10 text-center md:text-left max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold text-[#4b3621] dark:text-white font-playfair mb-4 leading-tight">
                    Halo, {{ Auth::user()->name }} 👋
                </h2>
                <p class="text-[#4b3621]/70 dark:text-slate-400 text-sm md:text-base font-light leading-relaxed">
                    Selamat datang di ruang kendali portofolio Anda. Pantau statistik kunjungan dan kelola proyek dengan antarmuka yang elegan dan responsif.
                </p>
            </div>
            {{-- Elegant Accents --}}
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-gradient-to-br from-emerald-400/20 to-blue-400/20 blur-3xl rounded-full pointer-events-none"></div>
            <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-gradient-to-br from-[#4b3621]/10 to-transparent dark:from-white/5 dark:to-transparent blur-3xl rounded-full pointer-events-none"></div>
        </div>

        {{-- Statistik Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-8 max-w-7xl mx-auto mb-16 fade-in-up">

            {{-- Stat 1 --}}
            <div class="stat-card bg-white/60 dark:bg-slate-900/60 backdrop-blur-xl p-8 rounded-[2rem] border border-[#4b3621]/10 dark:border-white/5 shadow-xl hover:shadow-2xl transition-all duration-500 relative overflow-hidden group">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="text-[#4b3621]/60 dark:text-slate-400 text-[10px] md:text-xs uppercase tracking-[0.2em] font-bold">
                        Total Project
                    </h4>
                    <div class="w-10 h-10 rounded-full bg-[#115e59]/10 dark:bg-emerald-500/20 flex items-center justify-center text-[#115e59] dark:text-emerald-400 group-hover:scale-110 group-hover:bg-[#115e59] group-hover:text-white dark:group-hover:bg-emerald-500 dark:group-hover:text-slate-900 transition-all duration-300">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                </div>
                <p class="text-4xl md:text-6xl font-black text-[#4b3621] dark:text-white font-playfair mt-auto count" data-target="{{ $projects->count() }}">0</p>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-[#115e59]/20 to-transparent dark:from-emerald-400/20"></div>
            </div>

            {{-- Stat 2 --}}
            <div class="stat-card bg-white/60 dark:bg-slate-900/60 backdrop-blur-xl p-8 rounded-[2rem] border border-[#4b3621]/10 dark:border-white/5 shadow-xl hover:shadow-2xl transition-all duration-500 relative overflow-hidden group">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="text-[#4b3621]/60 dark:text-slate-400 text-[10px] md:text-xs uppercase tracking-[0.2em] font-bold">
                        Skills
                    </h4>
                    <div class="w-10 h-10 rounded-full bg-blue-600/10 dark:bg-blue-500/20 flex items-center justify-center text-blue-600 dark:text-blue-400 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-code"></i>
                    </div>
                </div>
                <p class="text-4xl md:text-6xl font-black text-[#4b3621] dark:text-white font-playfair mt-auto count" data-target="8">0</p>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500/20 to-transparent"></div>
            </div>

            {{-- Stat 3 --}}
            <div class="stat-card bg-white/60 dark:bg-slate-900/60 backdrop-blur-xl p-8 rounded-[2rem] border border-[#4b3621]/10 dark:border-white/5 shadow-xl hover:shadow-2xl transition-all duration-500 relative overflow-hidden group">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="text-[#4b3621]/60 dark:text-slate-400 text-[10px] md:text-xs uppercase tracking-[0.2em] font-bold">
                        Contacts
                    </h4>
                    <div class="w-10 h-10 rounded-full bg-amber-500/10 dark:bg-amber-500/20 flex items-center justify-center text-amber-600 dark:text-amber-400 group-hover:scale-110 group-hover:bg-amber-500 group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                </div>
                <p class="text-4xl md:text-6xl font-black text-[#4b3621] dark:text-white font-playfair mt-auto count" data-target="5">0</p>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-amber-500/20 to-transparent"></div>
            </div>

        </div>

        {{-- Latest Projects Table (Elegant Grid Layout) --}}
        <div class="max-w-7xl mx-auto bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-[2.5rem] p-8 md:p-12 shadow-2xl border border-[#4b3621]/5 dark:border-white/5 fade-in-up">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-6 mb-10 pb-6 border-b border-[#4b3621]/10 dark:border-white/10">
                <h3 class="text-2xl font-bold text-[#4b3621] dark:text-white font-playfair">Manajemen Proyek</h3>
                <a href="{{ route('project.editForm') }}" class="inline-flex items-center gap-2 px-6 py-2 rounded-full bg-[#115e59]/10 dark:bg-emerald-500/10 text-[#115e59] dark:text-emerald-400 border border-[#115e59]/20 dark:border-emerald-500/20 hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-400 dark:hover:text-slate-900 text-xs font-bold tracking-widest uppercase transition-all duration-300">
                    <i class="fa-solid fa-list-check"></i> Manage All
                </a>
            </div>
            
            <div class="overflow-x-auto scrollbar-hide">
                <table class="w-full table-auto text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10">Project Details</th>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10">Technology</th>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#4b3621]/5 dark:divide-white/5">
                        @forelse($projects as $item)
                        <tr class="group hover:bg-white/50 dark:hover:bg-slate-800/30 transition-colors duration-300">
                            <td class="px-4 py-6">
                                <p class="text-base font-bold text-[#4b3621] dark:text-white mb-1 group-hover:text-[#115e59] dark:group-hover:text-emerald-400 transition-colors font-playfair">{{ $item->title }}</p>
                                <p class="text-xs text-[#4b3621]/60 dark:text-slate-400 font-light max-w-sm truncate">{{ Str::limit($item->description, 50) }}</p>
                            </td>
                            <td class="px-4 py-6">
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-[#4b3621]/5 dark:bg-white/5 border border-[#4b3621]/10 dark:border-white/10 text-[10px] font-bold text-[#4b3621]/70 dark:text-white/70 tracking-widest uppercase shadow-sm">
                                    {{ $item->technology }}
                                </span>
                            </td>
                            <td class="px-4 py-6 text-right">
                                <div class="flex items-center justify-end gap-3 opacity-70 group-hover:opacity-100 transition-opacity">
                                    <a href="{{ route('project.editForm', $item->id) }}" class="w-10 h-10 rounded-full bg-blue-500/10 dark:bg-blue-500/20 text-blue-600 dark:text-blue-400 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors duration-300">
                                        <i class="fa-solid fa-pen text-xs"></i>
                                    </a>
                                    <form action="{{ route('project.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus proyek ini secara permanen?')" class="m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-10 h-10 rounded-full bg-rose-500/10 dark:bg-rose-500/20 text-rose-600 dark:text-rose-400 flex items-center justify-center hover:bg-rose-600 hover:text-white transition-colors duration-300">
                                            <i class="fa-solid fa-trash text-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-4 py-12 text-center text-[#4b3621]/50 dark:text-slate-500 text-sm font-light italic">Belum ada project yang ditambahkan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

{{-- GSAP Scripts --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Subtle Entrance Animations
        gsap.fromTo(".fade-in-up", 
            { y: 30, opacity: 0 }, 
            { y: 0, opacity: 1, duration: 1, stagger: 0.15, ease: "power3.out" }
        );

        // Animate counter numbers
        document.querySelectorAll('.count').forEach(el => {
            const target = +el.getAttribute('data-target');
            gsap.fromTo(el, { innerText: 0 }, { 
                innerText: target, 
                duration: 2.5, 
                snap: { innerText: 1 }, 
                ease: "power2.out",
                delay: 0.5
            });
        });
    });
</script>
@endsection
