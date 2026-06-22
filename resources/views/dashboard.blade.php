@extends('layouts.app')

@section('content')
<div class="min-h-screen pt-32 pb-24 relative bg-transparent">
    <div class="max-w-7xl mx-auto px-6 relative z-20">

        {{-- HEADER --}}
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-16">
            
            {{-- Title --}}
            <h1 class="text-4xl md:text-5xl font-black text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight shrink-0 text-center md:text-left drop-shadow-sm">
                Dashboard
            </h1>

            {{-- Action Buttons --}}
            <div class="flex flex-wrap items-center justify-center gap-4 shrink-0 w-full md:w-auto">
                {{-- Kembali Ke Beranda Button - PROMINENT --}}
                <a href="{{ route('home') }}" 
                   class="inline-flex items-center gap-2.5 px-7 py-3 rounded-full bg-[#4b3621] dark:bg-emerald-500 text-white dark:text-slate-900 font-bold text-xs tracking-widest uppercase hover:bg-[#3a2916] dark:hover:bg-emerald-400 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fa-solid fa-arrow-left"></i> Kembali Ke Beranda
                </a>

                <a href="{{ route('profile.edit') }}" 
                   class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#4b3621]/20 dark:border-white/20 bg-white/50 dark:bg-slate-900/50 backdrop-blur-md text-[#4b3621] dark:text-white font-bold text-xs tracking-widest uppercase hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 hover:border-transparent transition-all duration-300 shadow-md">
                    <i class="fa-solid fa-user"></i> Profile
                </a>
                
                <a href="{{ route('project.editForm') }}" 
                   class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#4b3621]/20 dark:border-transparent bg-[#115e59] dark:bg-emerald-500 text-white dark:text-slate-900 font-bold text-xs tracking-widest uppercase hover:bg-[#0f4d4a] dark:hover:bg-emerald-400 transition-all duration-300 shadow-md">
                    <i class="fa-solid fa-plus"></i> New Project
                </a>

                <a href="{{ route('certificate.editForm') }}" 
                   class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-amber-500/30 dark:border-amber-500/30 bg-amber-500/10 dark:bg-amber-500/20 text-amber-700 dark:text-amber-400 font-bold text-xs tracking-widest uppercase hover:bg-amber-500 hover:text-white dark:hover:bg-amber-500 dark:hover:text-slate-900 hover:border-transparent transition-all duration-300 shadow-md">
                    <i class="fa-solid fa-award"></i> New Sertifikat
                </a>

                <a href="{{ route('education.editForm') }}" 
                   class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-emerald-500/30 dark:border-emerald-500/30 bg-emerald-500/10 dark:bg-emerald-500/20 text-emerald-700 dark:text-emerald-400 font-bold text-xs tracking-widest uppercase hover:bg-emerald-500 hover:text-white dark:hover:bg-emerald-500 hover:text-white transition-all duration-300 shadow-md">
                    <i class="fa-solid fa-graduation-cap"></i> New Education
                </a>

                <a href="{{ route('skill.editForm') }}" 
                   class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-blue-500/30 dark:border-blue-500/30 bg-blue-500/10 dark:bg-blue-500/20 text-blue-700 dark:text-blue-400 font-bold text-xs tracking-widest uppercase hover:bg-blue-500 hover:text-white dark:hover:bg-blue-500 hover:text-white transition-all duration-300 shadow-md">
                    <i class="fa-solid fa-code"></i> New Skill
                </a>
            </div>

        </div>

        @if(session('success'))
        <div class="max-w-7xl mx-auto mb-8 bg-emerald-500/10 dark:bg-emerald-500/20 border border-emerald-500/30 text-[#115e59] dark:text-emerald-400 px-6 py-4 rounded-2xl flex items-center gap-3 backdrop-blur-md">
            <i class="fa-solid fa-check-circle text-lg"></i>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
        @endif

        {{-- Welcome Card (Elegant Glass) --}}
        <div class="bg-[#fbfaf5]/80 dark:bg-slate-900/60 backdrop-blur-2xl border border-[#4b3621]/10 dark:border-white/10 rounded-[2.5rem] p-8 md:p-12 shadow-2xl mb-12 relative overflow-hidden">
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
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-8 max-w-7xl mx-auto mb-16">

            {{-- Stat 1: Skills --}}
            <div class="stat-card bg-white/60 dark:bg-slate-900/60 backdrop-blur-xl p-8 rounded-[2rem] border border-[#4b3621]/10 dark:border-white/5 shadow-xl hover:shadow-2xl transition-all duration-500 relative overflow-hidden group">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="text-[#4b3621]/60 dark:text-slate-400 text-[10px] md:text-xs uppercase tracking-[0.2em] font-bold">
                        Total Keahlian
                    </h4>
                    <div class="w-10 h-10 rounded-full bg-blue-600/10 dark:bg-blue-500/20 flex items-center justify-center text-blue-600 dark:text-blue-400 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-code"></i>
                    </div>
                </div>
                <p class="text-4xl md:text-6xl font-black text-[#4b3621] dark:text-white font-playfair mt-auto count" data-target="{{ $totalSkills }}">0</p>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500/20 to-transparent"></div>
            </div>

            {{-- Stat 2: Certificates --}}
            <div class="stat-card bg-white/60 dark:bg-slate-900/60 backdrop-blur-xl p-8 rounded-[2rem] border border-[#4b3621]/10 dark:border-white/5 shadow-xl hover:shadow-2xl transition-all duration-500 relative overflow-hidden group">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="text-[#4b3621]/60 dark:text-slate-400 text-[10px] md:text-xs uppercase tracking-[0.2em] font-bold">
                        Total Sertifikat
                    </h4>
                    <div class="w-10 h-10 rounded-full bg-amber-500/10 dark:bg-amber-500/20 flex items-center justify-center text-amber-600 dark:text-amber-400 group-hover:scale-110 group-hover:bg-amber-500 group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-award"></i>
                    </div>
                </div>
                <p class="text-4xl md:text-6xl font-black text-[#4b3621] dark:text-white font-playfair mt-auto count" data-target="{{ $certificates->count() }}">0</p>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-amber-500/20 to-transparent"></div>
            </div>

            {{-- Stat 3: Projects --}}
            <div class="stat-card bg-white/60 dark:bg-slate-900/60 backdrop-blur-xl p-8 rounded-[2rem] border border-[#4b3621]/10 dark:border-white/5 shadow-xl hover:shadow-2xl transition-all duration-500 relative overflow-hidden group">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="text-[#4b3621]/60 dark:text-slate-400 text-[10px] md:text-xs uppercase tracking-[0.2em] font-bold">
                        Total Proyek
                    </h4>
                    <div class="w-10 h-10 rounded-full bg-[#115e59]/10 dark:bg-emerald-500/20 flex items-center justify-center text-[#115e59] dark:text-emerald-400 group-hover:scale-110 group-hover:bg-[#115e59] group-hover:text-white dark:group-hover:bg-emerald-500 dark:group-hover:text-slate-900 transition-all duration-300">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                </div>
                <p class="text-4xl md:text-6xl font-black text-[#4b3621] dark:text-white font-playfair mt-auto count" data-target="{{ $projects->count() }}">0</p>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-[#115e59]/20 to-transparent dark:from-emerald-400/20"></div>
            </div>

        </div>

        {{-- INDIVIDUAL CHARTS GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 max-w-7xl mx-auto mb-12">
            
            {{-- Skills Distribution Chart --}}
            <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-[2.5rem] p-8 shadow-2xl border border-[#4b3621]/5 dark:border-white/5">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-8 h-8 rounded-full bg-blue-500/10 dark:bg-blue-500/20 flex items-center justify-center text-blue-600 dark:text-blue-400">
                        <i class="fa-solid fa-code text-sm"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#4b3621] dark:text-white font-playfair">Distribusi Skill</h3>
                </div>
                <p class="text-xs text-[#4b3621]/60 dark:text-slate-400 font-light mb-6">Berdasarkan kategori skill Anda.</p>
                <div class="relative h-[250px] w-full flex items-center justify-center">
                    <canvas id="skillChart"></canvas>
                </div>
            </div>

            {{-- Certificates Distribution Chart --}}
            <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-[2.5rem] p-8 shadow-2xl border border-[#4b3621]/5 dark:border-white/5">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-8 h-8 rounded-full bg-amber-500/10 dark:bg-amber-500/20 flex items-center justify-center text-amber-600 dark:text-amber-400">
                        <i class="fa-solid fa-award text-sm"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#4b3621] dark:text-white font-playfair">Distribusi Sertifikat</h3>
                </div>
                <p class="text-xs text-[#4b3621]/60 dark:text-slate-400 font-light mb-6">Berdasarkan penerbit sertifikat.</p>
                <div class="relative h-[250px] w-full flex items-center justify-center">
                    <canvas id="certificateChart"></canvas>
                </div>
            </div>

            {{-- Projects Distribution Chart --}}
            <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-[2.5rem] p-8 shadow-2xl border border-[#4b3621]/5 dark:border-white/5">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-8 h-8 rounded-full bg-[#115e59]/10 dark:bg-emerald-500/20 flex items-center justify-center text-[#115e59] dark:text-emerald-400">
                        <i class="fa-solid fa-layer-group text-sm"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#4b3621] dark:text-white font-playfair">Distribusi Proyek</h3>
                </div>
                <p class="text-xs text-[#4b3621]/60 dark:text-slate-400 font-light mb-6">Berdasarkan teknologi yang digunakan.</p>
                <div class="relative h-[250px] w-full flex items-center justify-center">
                    <canvas id="projectChart"></canvas>
                </div>
            </div>

            {{-- Education Timeline Chart --}}
            <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-[2.5rem] p-8 shadow-2xl border border-[#4b3621]/5 dark:border-white/5">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-8 h-8 rounded-full bg-emerald-500/10 dark:bg-emerald-500/20 flex items-center justify-center text-emerald-600 dark:text-emerald-400">
                        <i class="fa-solid fa-graduation-cap text-sm"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#4b3621] dark:text-white font-playfair">Riwayat Pendidikan</h3>
                </div>
                <p class="text-xs text-[#4b3621]/60 dark:text-slate-400 font-light mb-6">Perjalanan pendidikan Anda.</p>
                <div class="relative h-[250px] w-full flex items-center justify-center">
                    <canvas id="educationChart"></canvas>
                </div>
            </div>

        </div>

        {{-- Activity Chart Card --}}
        <div class="max-w-7xl mx-auto bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-[2.5rem] p-8 md:p-12 shadow-2xl border border-[#4b3621]/5 dark:border-white/5 mb-12">
            <h3 class="text-2xl font-bold text-[#4b3621] dark:text-white font-playfair mb-2">Aktivitas Penginputan Data</h3>
            <p class="text-xs text-[#4b3621]/60 dark:text-slate-400 font-light mb-8">Pantau statistik penambahan proyek, sertifikat, pendidikan, dan skill Anda selama 7 hari terakhir.</p>
            <div class="relative h-[300px] md:h-[400px] w-full">
                <canvas id="activityChart"></canvas>
            </div>
        </div>

        {{-- Latest Projects Table (Elegant Grid Layout) --}}
        <div class="max-w-7xl mx-auto bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-[2.5rem] p-8 md:p-12 shadow-2xl border border-[#4b3621]/5 dark:border-white/5">
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

        {{-- Certificate Management Table --}}
        <div class="max-w-7xl mx-auto bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-[2.5rem] p-8 md:p-12 shadow-2xl border border-[#4b3621]/5 dark:border-white/5 mt-12">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-6 mb-10 pb-6 border-b border-[#4b3621]/10 dark:border-white/10">
                <h3 class="text-2xl font-bold text-[#4b3621] dark:text-white font-playfair">Manajemen Sertifikat</h3>
                <a href="{{ route('certificate.editForm') }}" class="inline-flex items-center gap-2 px-6 py-2 rounded-full bg-amber-500/10 dark:bg-amber-500/10 text-amber-700 dark:text-amber-400 border border-amber-500/20 dark:border-amber-500/20 hover:bg-amber-500 hover:text-white dark:hover:bg-amber-400 dark:hover:text-slate-900 text-xs font-bold tracking-widest uppercase transition-all duration-300">
                    <i class="fa-solid fa-list-check"></i> Manage All
                </a>
            </div>
            
            <div class="overflow-x-auto scrollbar-hide">
                <table class="w-full table-auto text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10">Sertifikat</th>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10">Penerbit</th>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10">Tanggal</th>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#4b3621]/5 dark:divide-white/5">
                        @forelse($certificates as $item)
                        <tr class="group hover:bg-white/50 dark:hover:bg-slate-800/30 transition-colors duration-300">
                            <td class="px-4 py-6">
                                <p class="text-base font-bold text-[#4b3621] dark:text-white mb-1 group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors font-playfair">
                                    {{ $item->title }}
                                    @if($item->is_featured)
                                        <span class="text-yellow-500 text-xs ml-1"><i class="fa-solid fa-star"></i></span>
                                    @endif
                                </p>
                            </td>
                            <td class="px-4 py-6">
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-[#4b3621]/5 dark:bg-white/5 border border-[#4b3621]/10 dark:border-white/10 text-[10px] font-bold text-[#4b3621]/70 dark:text-white/70 tracking-widest uppercase shadow-sm">
                                    {{ $item->issuer }}
                                </span>
                            </td>
                            <td class="px-4 py-6">
                                <span class="text-xs text-[#4b3621]/60 dark:text-slate-400">{{ $item->date }}</span>
                            </td>
                            <td class="px-4 py-6 text-right">
                                <div class="flex items-center justify-end gap-3 opacity-70 group-hover:opacity-100 transition-opacity">
                                    <a href="{{ route('certificate.editForm', $item->id) }}" class="w-10 h-10 rounded-full bg-blue-500/10 dark:bg-blue-500/20 text-blue-600 dark:text-blue-400 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors duration-300">
                                        <i class="fa-solid fa-pen text-xs"></i>
                                    </a>
                                    <form action="{{ route('certificate.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus sertifikat ini?')" class="m-0">
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
                            <td colspan="4" class="px-4 py-12 text-center text-[#4b3621]/50 dark:text-slate-500 text-sm font-light italic">Belum ada sertifikat yang ditambahkan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Education Management Table --}}
        <div class="max-w-7xl mx-auto bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-[2.5rem] p-8 md:p-12 shadow-2xl border border-[#4b3621]/5 dark:border-white/5 mt-12">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-6 mb-10 pb-6 border-b border-[#4b3621]/10 dark:border-white/10">
                <h3 class="text-2xl font-bold text-[#4b3621] dark:text-white font-playfair">Manajemen Perjalanan Pendidikan</h3>
                <a href="{{ route('education.editForm') }}" class="inline-flex items-center gap-2 px-6 py-2 rounded-full bg-emerald-500/10 dark:bg-emerald-500/10 text-emerald-700 dark:text-emerald-400 border border-emerald-500/20 dark:border-emerald-500/20 hover:bg-emerald-500 hover:text-white dark:hover:bg-emerald-400 dark:hover:text-slate-900 text-xs font-bold tracking-widest uppercase transition-all duration-300">
                    <i class="fa-solid fa-list-check"></i> Manage All
                </a>
            </div>
            
            <div class="overflow-x-auto scrollbar-hide">
                <table class="w-full table-auto text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10">Logo</th>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10">Sekolah / Institusi</th>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10">Periode</th>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#4b3621]/5 dark:divide-white/5">
                        @forelse($educations as $item)
                        <tr class="group hover:bg-white/50 dark:hover:bg-slate-800/30 transition-colors duration-300">
                            <td class="px-4 py-4">
                                <img src="{{ Str::startsWith($item->logo, 'http') || Str::startsWith($item->logo, 'Screenshot') ? '/' . $item->logo : Storage::url($item->logo) }}" class="w-12 h-12 object-cover rounded-full border border-[#4b3621]/10" alt="Logo" />
                            </td>
                            <td class="px-4 py-6">
                                <p class="text-base font-bold text-[#4b3621] dark:text-white mb-1 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors font-playfair">{{ $item->name }}</p>
                                <p class="text-xs text-[#4b3621]/60 dark:text-slate-400 font-light max-w-sm truncate">{{ Str::limit(__($item->desc), 50) }}</p>
                            </td>
                            <td class="px-4 py-6">
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-[#4b3621]/5 dark:bg-white/5 border border-[#4b3621]/10 dark:border-white/10 text-[10px] font-bold text-[#4b3621]/70 dark:text-white/70 tracking-widest uppercase shadow-sm">
                                    {{ $item->year }}
                                </span>
                            </td>
                            <td class="px-4 py-6 text-right">
                                <div class="flex items-center justify-end gap-3 opacity-70 group-hover:opacity-100 transition-opacity">
                                    <a href="{{ route('education.editForm', $item->id) }}" class="w-10 h-10 rounded-full bg-blue-500/10 dark:bg-blue-500/20 text-blue-600 dark:text-blue-400 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors duration-300">
                                        <i class="fa-solid fa-pen text-xs"></i>
                                    </a>
                                    <form action="{{ route('education.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus riwayat pendidikan ini?')" class="m-0">
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
                            <td colspan="4" class="px-4 py-12 text-center text-[#4b3621]/50 dark:text-slate-500 text-sm font-light italic">Belum ada riwayat pendidikan yang ditambahkan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Skill Management Table --}}
        <div class="max-w-7xl mx-auto bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-[2.5rem] p-8 md:p-12 shadow-2xl border border-[#4b3621]/5 dark:border-white/5 mt-12">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-6 mb-10 pb-6 border-b border-[#4b3621]/10 dark:border-white/10">
                <h3 class="text-2xl font-bold text-[#4b3621] dark:text-white font-playfair">Manajemen Skill</h3>
                <a href="{{ route('skill.editForm') }}" class="inline-flex items-center gap-2 px-6 py-2 rounded-full bg-blue-500/10 dark:bg-blue-500/10 text-blue-700 dark:text-blue-400 border border-blue-500/20 dark:border-blue-500/20 hover:bg-blue-500 hover:text-white dark:hover:bg-blue-400 dark:hover:text-slate-900 text-xs font-bold tracking-widest uppercase transition-all duration-300">
                    <i class="fa-solid fa-list-check"></i> Manage All
                </a>
            </div>
            
            <div class="overflow-x-auto scrollbar-hide">
                <table class="w-full table-auto text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10">Kategori</th>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10">Nama Skill</th>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10">Ikon</th>
                            <th class="px-4 py-4 text-[#4b3621]/50 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold border-b border-[#4b3621]/10 dark:border-white/10 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#4b3621]/5 dark:divide-white/5">
                        @forelse($skills as $item)
                        <tr class="group hover:bg-white/50 dark:hover:bg-slate-800/30 transition-colors duration-300">
                            <td class="px-4 py-6">
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-[#4b3621]/5 dark:bg-white/5 border border-[#4b3621]/10 dark:border-white/10 text-[10px] font-bold text-[#4b3621]/70 dark:text-white/70 tracking-widest uppercase shadow-sm capitalize">
                                    {{ $item->category }}
                                </span>
                            </td>
                            <td class="px-4 py-6">
                                <p class="text-base font-bold text-[#4b3621] dark:text-white mb-1 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors font-playfair">{{ $item->name }}</p>
                                <p class="text-xs text-[#4b3621]/60 dark:text-slate-400 font-light max-w-sm truncate">{{ Str::limit(__($item->desc), 50) }}</p>
                            </td>
                            <td class="px-4 py-6 text-xl">
                                <i class="{{ $item->icon }}"></i>
                            </td>
                            <td class="px-4 py-6 text-right">
                                <div class="flex items-center justify-end gap-3 opacity-70 group-hover:opacity-100 transition-opacity">
                                    <a href="{{ route('skill.editForm', $item->id) }}" class="w-10 h-10 rounded-full bg-blue-500/10 dark:bg-blue-500/20 text-blue-600 dark:text-blue-400 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors duration-300">
                                        <i class="fa-solid fa-pen text-xs"></i>
                                    </a>
                                    <form action="{{ route('skill.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus skill ini?')" class="m-0">
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
                            <td colspan="4" class="px-4 py-12 text-center text-[#4b3621]/50 dark:text-slate-500 text-sm font-light italic">Belum ada skill yang ditambahkan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

    </div>
</div>
</div>



<script>
// Preserve scroll position after delete (form submit)
document.addEventListener('DOMContentLoaded', () => {
    // Restore scroll position if saved
    const savedScroll = sessionStorage.getItem('dashboard_scroll');
    if (savedScroll) {
        window.scrollTo(0, parseInt(savedScroll));
        sessionStorage.removeItem('dashboard_scroll');
    }

    // Save scroll position before any delete form is submitted
    document.querySelectorAll('form[method="POST"]').forEach(form => {
        form.addEventListener('submit', () => {
            sessionStorage.setItem('dashboard_scroll', window.scrollY.toString());
        });
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.count');
    const speed = 200; // The lower the slower

    const startCount = (counter) => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCount(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
});
</script>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const isDark = document.documentElement.classList.contains('dark');
    const gridColor = isDark ? 'rgba(255, 255, 255, 0.05)' : 'rgba(75, 54, 33, 0.05)';
    const textColor = isDark ? '#94a3b8' : '#4b3621';

    // Premium color palettes
    const bluesPalette = ['#3b82f6', '#6366f1', '#8b5cf6', '#a78bfa', '#60a5fa', '#38bdf8', '#818cf8', '#c084fc'];
    const ambersPalette = ['#f59e0b', '#f97316', '#ef4444', '#eab308', '#d97706', '#fbbf24', '#fb923c', '#fcd34d'];
    const emeraldsPalette = ['#10b981', '#14b8a6', '#06b6d4', '#22d3ee', '#34d399', '#2dd4bf', '#0ea5e9', '#67e8f9'];
    const rosePalette = ['#f43f5e', '#e11d48', '#ec4899', '#f472b6', '#fb7185', '#fda4af', '#a855f7', '#c084fc'];

    // Chart.js default overrides
    Chart.defaults.font.family = 'Inter, sans-serif';
    Chart.defaults.color = textColor;

    // === SKILL DISTRIBUTION (Doughnut) ===
    const skillData = @json($skills->groupBy('category')->map->count());
    const skillLabels = Object.keys(skillData);
    const skillValues = Object.values(skillData);

    if (document.getElementById('skillChart')) {
        new Chart(document.getElementById('skillChart'), {
            type: 'doughnut',
            data: {
                labels: skillLabels.length ? skillLabels : ['Belum ada data'],
                datasets: [{
                    data: skillValues.length ? skillValues : [1],
                    backgroundColor: skillLabels.length ? bluesPalette.slice(0, skillLabels.length) : ['rgba(100,100,100,0.1)'],
                    borderColor: isDark ? '#0f172a' : '#ffffff',
                    borderWidth: 3,
                    hoverBorderWidth: 0,
                    hoverOffset: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '65%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: textColor,
                            padding: 16,
                            usePointStyle: true,
                            pointStyleWidth: 10,
                            font: { size: 11, weight: '600' }
                        }
                    },
                    tooltip: {
                        padding: 12,
                        cornerRadius: 12,
                        backgroundColor: isDark ? 'rgba(15,23,42,0.95)' : 'rgba(75,54,33,0.95)',
                        titleColor: '#fff',
                        bodyColor: '#fff'
                    }
                }
            }
        });
    }

    // === CERTIFICATE DISTRIBUTION (Doughnut) ===
    const certData = @json($certificates->groupBy('issuer')->map->count());
    const certLabels = Object.keys(certData);
    const certValues = Object.values(certData);

    if (document.getElementById('certificateChart')) {
        new Chart(document.getElementById('certificateChart'), {
            type: 'doughnut',
            data: {
                labels: certLabels.length ? certLabels : ['Belum ada data'],
                datasets: [{
                    data: certValues.length ? certValues : [1],
                    backgroundColor: certLabels.length ? ambersPalette.slice(0, certLabels.length) : ['rgba(100,100,100,0.1)'],
                    borderColor: isDark ? '#0f172a' : '#ffffff',
                    borderWidth: 3,
                    hoverBorderWidth: 0,
                    hoverOffset: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '65%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: textColor,
                            padding: 16,
                            usePointStyle: true,
                            pointStyleWidth: 10,
                            font: { size: 11, weight: '600' }
                        }
                    },
                    tooltip: {
                        padding: 12,
                        cornerRadius: 12,
                        backgroundColor: isDark ? 'rgba(15,23,42,0.95)' : 'rgba(75,54,33,0.95)',
                        titleColor: '#fff',
                        bodyColor: '#fff'
                    }
                }
            }
        });
    }

    // === PROJECT DISTRIBUTION (Doughnut) ===
    const projData = @json($projects->groupBy('technology')->map->count());
    const projLabels = Object.keys(projData);
    const projValues = Object.values(projData);

    if (document.getElementById('projectChart')) {
        new Chart(document.getElementById('projectChart'), {
            type: 'doughnut',
            data: {
                labels: projLabels.length ? projLabels : ['Belum ada data'],
                datasets: [{
                    data: projValues.length ? projValues : [1],
                    backgroundColor: projLabels.length ? emeraldsPalette.slice(0, projLabels.length) : ['rgba(100,100,100,0.1)'],
                    borderColor: isDark ? '#0f172a' : '#ffffff',
                    borderWidth: 3,
                    hoverBorderWidth: 0,
                    hoverOffset: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '65%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: textColor,
                            padding: 16,
                            usePointStyle: true,
                            pointStyleWidth: 10,
                            font: { size: 11, weight: '600' }
                        }
                    },
                    tooltip: {
                        padding: 12,
                        cornerRadius: 12,
                        backgroundColor: isDark ? 'rgba(15,23,42,0.95)' : 'rgba(75,54,33,0.95)',
                        titleColor: '#fff',
                        bodyColor: '#fff'
                    }
                }
            }
        });
    }

    // === EDUCATION (Horizontal Bar) ===
    const eduNames = @json($educations->pluck('name'));
    const eduYears = @json($educations->pluck('year'));
    // For bar chart, we need numeric values - use 1 for each education entry to show as equal bars
    const eduData = eduNames.map(() => 1);

    if (document.getElementById('educationChart')) {
        new Chart(document.getElementById('educationChart'), {
            type: 'bar',
            data: {
                labels: eduNames.length ? eduNames : ['Belum ada data'],
                datasets: [{
                    label: 'Pendidikan',
                    data: eduNames.length ? eduData : [0],
                    backgroundColor: eduNames.length ? emeraldsPalette.slice(0, eduNames.length) : ['rgba(100,100,100,0.1)'],
                    borderRadius: 12,
                    borderSkipped: false,
                    barThickness: 28,
                    maxBarThickness: 40
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'y',
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        padding: 12,
                        cornerRadius: 12,
                        backgroundColor: isDark ? 'rgba(15,23,42,0.95)' : 'rgba(75,54,33,0.95)',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        callbacks: {
                            label: function(context) {
                                const idx = context.dataIndex;
                                const yearArr = @json($educations->pluck('year'));
                                return 'Periode: ' + (yearArr[idx] || '-');
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        display: false,
                        grid: { display: false }
                    },
                    y: {
                        grid: { display: false },
                        ticks: {
                            color: textColor,
                            font: { size: 11, weight: '600' },
                            padding: 8
                        }
                    }
                }
            }
        });
    }

    // === ACTIVITY LINE CHART (7 Days) ===
    const ctx = document.getElementById('activityChart').getContext('2d');
    const chartData = JSON.parse('{!! $chartDataJson !!}');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: chartData.labels,
            datasets: [
                {
                    label: 'Total Aktivitas',
                    data: chartData.totals,
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.35,
                    pointBackgroundColor: '#10b981',
                    pointBorderColor: '#fff',
                    pointHoverRadius: 7
                },
                {
                    label: 'Proyek',
                    data: chartData.projects,
                    borderColor: '#6366f1',
                    backgroundColor: 'transparent',
                    borderWidth: 2,
                    tension: 0.3,
                    borderDash: [5, 5]
                },
                {
                    label: 'Sertifikat',
                    data: chartData.certificates,
                    borderColor: '#f59e0b',
                    backgroundColor: 'transparent',
                    borderWidth: 2,
                    tension: 0.3,
                    borderDash: [5, 5]
                },
                {
                    label: 'Pendidikan',
                    data: chartData.educations,
                    borderColor: '#14b8a6',
                    backgroundColor: 'transparent',
                    borderWidth: 2,
                    tension: 0.3,
                    borderDash: [5, 5]
                },
                {
                    label: 'Skill',
                    data: chartData.skills,
                    borderColor: '#3b82f6',
                    backgroundColor: 'transparent',
                    borderWidth: 2,
                    tension: 0.3,
                    borderDash: [5, 5]
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        color: textColor,
                        font: {
                            family: 'sans-serif',
                            weight: '600',
                            size: 11
                        }
                    }
                },
                tooltip: {
                    padding: 12,
                    cornerRadius: 12,
                    backgroundColor: 'rgba(15, 23, 42, 0.95)',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    titleFont: { weight: 'bold' }
                }
            },
            scales: {
                x: {
                    grid: {
                        color: gridColor
                    },
                    ticks: {
                        color: textColor,
                        font: { size: 10 }
                    }
                },
                y: {
                    grid: {
                        color: gridColor
                    },
                    ticks: {
                        color: textColor,
                        font: { size: 10 },
                        precision: 0
                    },
                    min: 0
                }
            }
        }
    });
});
</script>
@endpush

@endsection
