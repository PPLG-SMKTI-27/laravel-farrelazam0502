@extends('layouts.app')

@section('content')
@php
    $feCount = $skills->where('category', 'front-end')->count();
    $beCount = $skills->where('category', 'back-end')->count();
    $toolsCount = $skills->where('category', 'tools')->count();
    $skillCounts = [$feCount, $beCount, $toolsCount];
    $skillCountsJson = json_encode($skillCounts);
@endphp

<div class="min-h-screen pt-32 pb-24 relative bg-transparent">
    <div class="max-w-7xl mx-auto px-6 relative z-20">
        
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-12">
            <h1 class="text-4xl md:text-5xl font-black text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight">
                Manage Skills
            </h1>
            <a href="{{ route('dashboard') }}" 
               class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#4b3621]/20 dark:border-white/20 bg-[#fbfaf5]/80 dark:bg-slate-900/80 backdrop-blur-md text-[#4b3621] dark:text-white font-bold text-xs tracking-widest uppercase hover:bg-slate-100 dark:hover:bg-slate-800 transition-all duration-300 shadow-md">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Skill List & Mini Chart -->
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-6 border border-[#4b3621]/10 dark:border-white/5 shadow-xl h-fit">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-[#4b3621] dark:text-white font-bold text-xl font-playfair">Skill List</h3>
                        <a href="{{ route('skill.editForm') }}" class="bg-blue-500/10 dark:bg-blue-500/20 text-blue-700 dark:text-blue-400 hover:bg-blue-500 hover:text-white dark:hover:bg-blue-500 dark:hover:text-slate-950 px-3 py-1.5 rounded-full text-xs font-bold transition">
                            <i class="fas fa-plus mr-1"></i> Add New
                        </a>
                    </div>
                    
                    <div class="space-y-3">
                        @forelse($skills as $item)
                        <div class="group flex justify-between items-center p-4 rounded-2xl bg-[#fbfaf5]/50 dark:bg-slate-800/30 border border-[#4b3621]/5 dark:border-white/5 hover:border-[#115e59]/20 dark:hover:border-blue-500/30 hover:bg-white dark:hover:bg-slate-800/50 transition duration-300 {{ isset($skill) && $skill->id == $item->id ? 'border-[#115e59] dark:border-blue-500 bg-white dark:bg-slate-800/70 shadow-md' : '' }}">
                            <div class="flex-1 min-w-0 pr-2">
                                <h4 class="text-[#4b3621] dark:text-white font-bold group-hover:text-[#115e59] dark:group-hover:text-blue-400 transition text-sm truncate">
                                    {{ $item->name }}
                                </h4>
                                <p class="text-[#4b3621]/50 dark:text-slate-500 text-xs truncate capitalize">{{ $item->category }}</p>
                            </div>
                            <div class="flex gap-1 shrink-0">
                                <a href="{{ route('skill.editForm', $item->id) }}" class="text-[#4b3621]/50 dark:text-slate-400 hover:text-[#115e59] dark:hover:text-blue-400 transition p-2">
                                    <i class="fas fa-edit text-sm"></i>
                                </a>
                                <form action="{{ route('skill.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus skill ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-[#4b3621]/50 dark:text-slate-400 hover:text-red-600 dark:hover:text-rose-400 transition p-2">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <p class="text-[#4b3621]/50 dark:text-slate-500 text-center py-4 text-sm italic">No skills entries yet.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Mini Category Chart -->
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-6 border border-[#4b3621]/10 dark:border-white/5 shadow-xl">
                    <h3 class="text-[#4b3621] dark:text-white font-bold text-lg mb-2 font-playfair">Distribusi Kategori</h3>
                    <p class="text-[10px] text-[#4b3621]/60 dark:text-slate-400 font-light mb-4 leading-normal">Pembagian porsi keahlian berdasarkan layer sistem.</p>
                    <div class="relative h-[200px] w-full">
                        <canvas id="skillsCategoryChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="lg:col-span-2">
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-8 border border-[#4b3621]/10 dark:border-white/5 shadow-2xl relative overflow-hidden">
                    <!-- Glow effect -->
                    <div class="absolute -top-12 -right-12 w-40 h-40 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
                    
                    <h3 class="text-[#4b3621] dark:text-white font-bold text-2xl mb-8 relative z-10 font-playfair">
                        {{ $skill->id ? 'Edit Skill' : 'Add New Skill' }}
                    </h3>

                    <form action="{{ $skill->id ? route('skill.update', $skill->id) : route('skill.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 relative z-10">
                        @if($errors->any())
                            <div class="bg-red-500/10 border border-red-500/20 text-red-600 dark:text-red-400 p-4 rounded-xl mb-6">
                                <ul class="list-disc list-inside text-sm font-medium">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        @if($skill->id)
                            @method('PUT')
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Skill Name</label>
                                <input type="text" name="name" value="{{ old('name', $skill->name) }}" placeholder="e.g. PHP" required
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-blue-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-blue-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Category</label>
                                <select name="category" required
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-blue-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-blue-500/20 transition duration-300 text-sm">
                                    <option value="front-end" {{ old('category', $skill->category) == 'front-end' ? 'selected' : '' }} class="bg-white dark:bg-slate-900 text-[#4b3621] dark:text-white">Front-end</option>
                                    <option value="back-end" {{ old('category', $skill->category) == 'back-end' ? 'selected' : '' }} class="bg-white dark:bg-slate-900 text-[#4b3621] dark:text-white">Back-end</option>
                                    <option value="tools" {{ old('category', $skill->category) == 'tools' ? 'selected' : '' }} class="bg-white dark:bg-slate-900 text-[#4b3621] dark:text-white">Tools / Alat</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Icon / Logo (Upload Gambar)</label>
                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                                @if($skill->icon)
                                    @if(str_starts_with($skill->icon, 'uploads/'))
                                        <img src="{{ asset($skill->icon) }}" alt="Skill Icon" class="w-16 h-16 object-contain rounded-xl border border-[#4b3621]/10 dark:border-white/10 shrink-0 shadow-md bg-white dark:bg-slate-800 p-1">
                                    @else
                                        <div class="w-16 h-16 rounded-xl border border-[#4b3621]/10 dark:border-white/10 flex items-center justify-center text-3xl bg-white dark:bg-slate-800 shadow-md shrink-0">
                                            <i class="{{ $skill->icon }}"></i>
                                        </div>
                                    @endif
                                @endif
                                <input type="file" name="icon_file" accept="image/*"
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621]/60 dark:text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-[#115e59]/10 file:text-[#115e59] dark:file:bg-emerald-500/10 dark:file:text-emerald-400 hover:file:bg-[#115e59]/20 dark:hover:file:bg-emerald-500/20 transition duration-300 text-sm">
                            </div>
                            <p class="text-[10px] text-[#4b3621]/40 dark:text-slate-500 ml-1 mt-1">Upload logo/gambar skill (PNG/SVG recommended). Atau isi FontAwesome class di bawah sebagai alternatif.</p>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Icon Class (Alternatif - FontAwesome)</label>
                            <input type="text" name="icon_text" value="{{ old('icon_text', str_starts_with($skill->icon ?? '', 'uploads/') ? '' : $skill->icon) }}" placeholder="e.g. fa-brands fa-js text-yellow-500 (kosongkan jika upload gambar)"
                                class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-blue-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-blue-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                            <p class="text-[10px] text-[#4b3621]/40 dark:text-slate-500 ml-1 mt-1">Hanya digunakan jika tidak upload gambar. Contoh: fa-brands fa-laravel text-red-500</p>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Description (Description text or translation key)</label>
                            <textarea name="desc" rows="4" placeholder="Describe the skill or add translation key..." required
                                class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-blue-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-blue-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">{{ old('desc', $skill->desc) }}</textarea>
                        </div>

                        <div class="flex justify-between items-center pt-4">
                            @if($skill->id)
                            <button type="button" onclick="document.getElementById('delete-form').submit()" class="text-red-500 hover:text-red-400 font-bold transition flex items-center gap-2 text-sm uppercase tracking-wider">
                                <i class="fas fa-trash"></i> Delete Skill
                            </button>
                            @else
                            <div></div>
                            @endif
                            
                            <button type="submit" class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold py-4 px-10 rounded-2xl shadow-lg transition duration-300 transform hover:scale-[1.02] active:scale-[0.98] text-sm uppercase tracking-wider">
                                {{ $skill->id ? 'Update Skill' : 'Save Skill' }}
                            </button>
                        </div>
                    </form>

                    @if($skill->id)
                    <form id="delete-form" action="{{ route('skill.destroy', $skill->id) }}" method="POST" class="hidden">
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
    const ctx = document.getElementById('skillsCategoryChart');
    if (ctx) {
        const isDark = document.documentElement.classList.contains('dark');
        const textColor = isDark ? '#cbd5e1' : '#4b3621';
        
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Front-end', 'Back-end', 'Tools / Alat'],
                datasets: [{
                    data: {!! $skillCountsJson !!},
                    backgroundColor: [
                        isDark ? 'rgba(59, 130, 246, 0.6)' : 'rgba(59, 130, 246, 0.5)', // Blue
                        isDark ? 'rgba(16, 185, 129, 0.6)' : 'rgba(16, 185, 129, 0.5)', // Emerald
                        isDark ? 'rgba(245, 158, 11, 0.6)' : 'rgba(245, 158, 11, 0.5)'  // Amber
                    ],
                    borderColor: isDark ? '#0f172a' : '#fff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: textColor,
                            font: { size: 10, family: 'Inter', weight: 'bold' },
                            padding: 15
                        }
                    },
                    tooltip: {
                        backgroundColor: isDark ? '#0f172a' : '#fbfaf5',
                        titleColor: isDark ? '#fff' : '#4b3621',
                        bodyColor: isDark ? '#cbd5e1' : '#4b3621',
                        borderColor: isDark ? 'rgba(255,255,255,0.1)' : 'rgba(75,54,33,0.1)',
                        borderWidth: 1
                    }
                },
                cutout: '65%'
            }
        });
    }
});
</script>
@endpush
@endsection
