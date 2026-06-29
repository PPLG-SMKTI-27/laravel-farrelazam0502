@extends('layouts.app')

@section('content')
@php
    $eduLabels = [];
    $eduDurations = [];
    foreach($educations as $item) {
        $eduLabels[] = $item->name;
        // Parse duration from year string like "2021 - 2024" or "2025 - Sekarang"
        $years = preg_split('/[\-\s]+/', $item->year);
        $start = isset($years[0]) ? intval(filter_var($years[0], FILTER_SANITIZE_NUMBER_INT)) : null;
        $end = isset($years[1]) ? filter_var($years[1], FILTER_SANITIZE_NUMBER_INT) : null;
        
        if (!$start) {
            $duration = 1;
        } else {
            if (!$end || str_contains(strtolower($item->year), 'sekarang') || str_contains(strtolower($item->year), 'present')) {
                $duration = date('Y') - $start;
                if ($duration <= 0) $duration = 1;
            } else {
                $endYear = intval($end);
                $duration = $endYear - $start;
                if ($duration <= 0) $duration = 1;
            }
        }
        $eduDurations[] = $duration;
    }
    $eduLabelsJson = json_encode($eduLabels);
    $eduDurationsJson = json_encode($eduDurations);
@endphp

<div class="min-h-screen pt-32 pb-24 relative bg-transparent">
    <div class="max-w-7xl mx-auto px-6 relative z-20">
        
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-12">
            <h1 class="text-4xl md:text-5xl font-black text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight">
                Manage Education Journey
            </h1>
            <a href="{{ route('dashboard') }}" 
               class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#4b3621]/20 dark:border-white/20 bg-[#fbfaf5]/80 dark:bg-slate-900/80 backdrop-blur-md text-[#4b3621] dark:text-white font-bold text-xs tracking-widest uppercase hover:bg-slate-100 dark:hover:bg-slate-800 transition-all duration-300 shadow-md">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Education List & Mini Chart -->
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-6 border border-[#4b3621]/10 dark:border-white/5 shadow-xl h-fit">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-[#4b3621] dark:text-white font-bold text-xl font-playfair">Education List</h3>
                        <a href="{{ route('education.editForm') }}" class="bg-emerald-500/10 dark:bg-emerald-500/20 text-emerald-700 dark:text-emerald-400 hover:bg-emerald-500 hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-955 px-3 py-1.5 rounded-full text-xs font-bold transition">
                            <i class="fas fa-plus mr-1"></i> Add New
                        </a>
                    </div>
                    
                    <div class="space-y-3">
                        @forelse($educations as $item)
                        <div class="group flex justify-between items-center p-4 rounded-2xl bg-[#fbfaf5]/50 dark:bg-slate-800/30 border border-[#4b3621]/5 dark:border-white/5 hover:border-[#115e59]/20 dark:hover:border-emerald-500/30 hover:bg-white dark:hover:bg-slate-800/50 transition duration-300 {{ isset($education) && $education->id == $item->id ? 'border-[#115e59] dark:border-emerald-500 bg-white dark:bg-slate-800/70 shadow-md' : '' }}">
                            <div class="flex-1 min-w-0 pr-2">
                                <h4 class="text-[#4b3621] dark:text-white font-bold group-hover:text-[#115e59] dark:group-hover:text-emerald-400 transition text-sm truncate">
                                    {{ $item->name }}
                                </h4>
                                <p class="text-[#4b3621]/50 dark:text-slate-500 text-xs truncate">{{ $item->year }}</p>
                            </div>
                            <div class="flex gap-1 shrink-0">
                                <a href="{{ route('education.editForm', $item->id) }}" class="text-[#4b3621]/50 dark:text-slate-400 hover:text-[#115e59] dark:hover:text-emerald-400 transition p-2">
                                    <i class="fas fa-edit text-sm"></i>
                                </a>
                                <form action="{{ route('education.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus riwayat pendidikan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-[#4b3621]/50 dark:text-slate-400 hover:text-red-600 dark:hover:text-rose-400 transition p-2">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <p class="text-[#4b3621]/50 dark:text-slate-500 text-center py-4 text-sm italic">No education entries yet.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Mini Duration Chart -->
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-6 border border-[#4b3621]/10 dark:border-white/5 shadow-xl">
                    <h3 class="text-[#4b3621] dark:text-white font-bold text-lg mb-2 font-playfair">Masa Belajar (Tahun)</h3>
                    <p class="text-[10px] text-[#4b3621]/60 dark:text-slate-400 font-light mb-4 leading-normal">Durasi waktu sekolah/kuliah di tiap institusi.</p>
                    <div class="relative h-[200px] w-full">
                        <canvas id="educationDurationChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="lg:col-span-2">
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-8 border border-[#4b3621]/10 dark:border-white/5 shadow-2xl relative overflow-hidden">
                    <!-- Glow effect -->
                    <div class="absolute -top-12 -right-12 w-40 h-40 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>
                    
                    <h3 class="text-[#4b3621] dark:text-white font-bold text-2xl mb-8 relative z-10 font-playfair">
                        {{ $education->id ? 'Edit Education Journey' : 'Add New Education Journey' }}
                    </h3>

                    <form action="{{ $education->id ? route('education.update', $education->id) : route('education.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 relative z-10">
                        @csrf
                        @if($education->id)
                            @method('PUT')
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">School / Institution Name</label>
                                <input type="text" name="name" value="{{ old('name', $education->name) }}" placeholder="e.g. SMKTI AIRLANGGA" required
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Year Period</label>
                                <input type="text" name="year" value="{{ old('year', $education->year) }}" placeholder="e.g. 2025 - Sekarang" required
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Description (Text or translation key like: edu_smkti_desc)</label>
                            <textarea name="desc" rows="4" placeholder="Describe the study focus or enter translation key..." required
                                class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">{{ old('desc', $education->desc) }}</textarea>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Logo / Image</label>
                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                                @if($education->logo)
                                    <img src="{{ Str::startsWith($education->logo, 'http') || Str::startsWith($education->logo, 'Screenshot') ? '/' . $education->logo : asset($education->logo) }}" alt="Logo" class="w-24 h-24 object-cover rounded-xl border border-[#4b3621]/10 dark:border-white/10 shrink-0 shadow-md">
                                @endif
                                <input type="file" name="logo" accept="image/*" {{ $education->id ? '' : 'required' }}
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621]/60 dark:text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-[#115e59]/10 file:text-[#115e59] dark:file:bg-emerald-500/10 dark:file:text-emerald-400 hover:file:bg-[#115e59]/20 dark:hover:file:bg-emerald-500/20 transition duration-300 text-sm">
                            </div>
                        </div>

                        <div class="flex justify-between items-center pt-4">
                            @if($education->id)
                            <button type="button" onclick="document.getElementById('delete-form').submit()" class="text-red-500 hover:text-red-400 font-bold transition flex items-center gap-2 text-sm uppercase tracking-wider">
                                <i class="fas fa-trash"></i> Delete Entry
                            </button>
                            @else
                            <div></div>
                            @endif
                            
                            <button type="submit" class="bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white font-bold py-4 px-10 rounded-2xl shadow-lg transition duration-300 transform hover:scale-[1.02] active:scale-[0.98] text-sm uppercase tracking-wider">
                                {{ $education->id ? 'Update Journey' : 'Save Journey' }}
                            </button>
                        </div>
                    </form>

                    @if($education->id)
                    <form id="delete-form" action="{{ route('education.destroy', $education->id) }}" method="POST" class="hidden">
                        @csrf
                        @method('DELETE')
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('educationDurationChart');
    if (ctx) {
        const isDark = document.documentElement.classList.contains('dark');
        const textColor = isDark ? '#cbd5e1' : '#4b3621';
        const gridColor = isDark ? 'rgba(255,255,255,0.05)' : 'rgba(75,54,33,0.05)';
        
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! $eduLabelsJson !!},
                datasets: [{
                    label: 'Masa Belajar (Tahun)',
                    data: {!! $eduDurationsJson !!},
                    backgroundColor: isDark ? 'rgba(16, 185, 129, 0.2)' : 'rgba(17, 94, 89, 0.15)',
                    borderColor: isDark ? '#10b981' : '#115e59',
                    borderWidth: 1.5,
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: isDark ? '#0f172a' : '#fbfaf5',
                        titleColor: isDark ? '#fff' : '#4b3621',
                        bodyColor: isDark ? '#cbd5e1' : '#4b3621',
                        borderColor: isDark ? 'rgba(255,255,255,0.1)' : 'rgba(75,54,33,0.1)',
                        borderWidth: 1
                    }
                },
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: {
                            color: textColor,
                            font: { size: 9, family: 'Inter' }
                        }
                    },
                    y: {
                        grid: { color: gridColor },
                        ticks: {
                            color: textColor,
                            font: { size: 9, family: 'Inter' },
                            stepSize: 1
                        }
                    }
                }
            }
        });
    }
});
</script>
@endpush
@endsection
