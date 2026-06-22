@extends('layouts.app')

@section('content')
@php
    $techCounts = [];
    foreach($projects as $item) {
        $techs = explode(',', $item->technology);
        foreach($techs as $tech) {
            $tech = trim($tech);
            if (!empty($tech)) {
                $techCounts[$tech] = ($techCounts[$tech] ?? 0) + 1;
            }
        }
    }
    arsort($techCounts);
    $topTechs = array_slice($techCounts, 0, 5, true);
    $techLabels = array_keys($topTechs);
    $techValues = array_values($topTechs);
    $techLabelsJson = json_encode($techLabels);
    $techValuesJson = json_encode($techValues);
@endphp

<div class="min-h-screen pt-32 pb-24 relative bg-transparent">
    <div class="max-w-7xl mx-auto px-6 relative z-20">
        
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-12">
            <h1 class="text-4xl md:text-5xl font-black text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight">
                Manage Projects
            </h1>
            <a href="{{ route('dashboard') }}" 
               class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#4b3621]/20 dark:border-white/20 bg-[#fbfaf5]/80 dark:bg-slate-900/80 backdrop-blur-md text-[#4b3621] dark:text-white font-bold text-xs tracking-widest uppercase hover:bg-slate-100 dark:hover:bg-slate-800 transition-all duration-300 shadow-md">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Project List & Mini Chart -->
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-6 border border-[#4b3621]/10 dark:border-white/5 shadow-xl h-fit">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-[#4b3621] dark:text-white font-bold text-xl font-playfair">My Projects</h3>
                        <a href="{{ route('project.editForm') }}" class="bg-purple-500/10 dark:bg-purple-500/20 text-purple-700 dark:text-purple-400 hover:bg-purple-500 hover:text-white dark:hover:bg-purple-500 dark:hover:text-slate-950 px-3 py-1.5 rounded-full text-xs font-bold transition">
                            <i class="fas fa-plus mr-1"></i> Add New
                        </a>
                    </div>
                    
                    <div class="space-y-3">
                        @forelse($projects as $item)
                        <div class="group flex justify-between items-center p-4 rounded-2xl bg-[#fbfaf5]/50 dark:bg-slate-800/30 border border-[#4b3621]/5 dark:border-white/5 hover:border-[#115e59]/20 dark:hover:border-purple-500/30 hover:bg-white dark:hover:bg-slate-800/50 transition duration-300 {{ isset($project) && $project->id == $item->id ? 'border-[#115e59] dark:border-purple-500 bg-white dark:bg-slate-800/70 shadow-md' : '' }}">
                            <div class="flex-1 min-w-0 pr-2">
                                <h4 class="text-[#4b3621] dark:text-white font-bold group-hover:text-[#115e59] dark:group-hover:text-purple-400 transition text-sm truncate">
                                    {{ $item->title }}
                                    @if($item->is_featured)
                                        <span class="text-yellow-500 text-xs"><i class="fas fa-star"></i></span>
                                    @endif
                                </h4>
                                <p class="text-[#4b3621]/50 dark:text-slate-500 text-xs truncate">{{ $item->technology }}</p>
                            </div>
                            <div class="flex gap-1 shrink-0">
                                <a href="{{ route('project.editForm', $item->id) }}" class="text-[#4b3621]/50 dark:text-slate-400 hover:text-[#115e59] dark:hover:text-purple-400 transition p-2">
                                    <i class="fas fa-edit text-sm"></i>
                                </a>
                                <form action="{{ route('project.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-[#4b3621]/50 dark:text-slate-400 hover:text-red-600 dark:hover:text-rose-400 transition p-2">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <p class="text-[#4b3621]/50 dark:text-slate-500 text-center py-4 text-sm italic">No projects yet.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Mini Tech Chart -->
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-6 border border-[#4b3621]/10 dark:border-white/5 shadow-xl">
                    <h3 class="text-[#4b3621] dark:text-white font-bold text-lg mb-2 font-playfair">Top Teknologi</h3>
                    <p class="text-[10px] text-[#4b3621]/60 dark:text-slate-400 font-light mb-4 leading-normal">Teknologi yang paling sering digunakan dalam projek Anda.</p>
                    <div class="relative h-[200px] w-full">
                        <canvas id="projectTechChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="lg:col-span-2">
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-8 border border-[#4b3621]/10 dark:border-white/5 shadow-2xl relative overflow-hidden">
                    <!-- Glow effect -->
                    <div class="absolute -top-12 -right-12 w-40 h-40 bg-purple-500/10 rounded-full blur-3xl pointer-events-none"></div>
                    
                    <h3 class="text-[#4b3621] dark:text-white font-bold text-2xl mb-8 relative z-10 font-playfair">
                        {{ $project->id ? 'Edit Project' : 'Add New Project' }}
                    </h3>

                    <form action="{{ $project->id ? route('project.update', $project->id) : route('project.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 relative z-10">
                        @csrf
                        @if($project->id)
                            @method('PUT')
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Project Title</label>
                                <input type="text" name="title" value="{{ old('title', $project->title) }}" placeholder="e.g. My Awesome Website" required
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-purple-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-purple-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Technologies Used</label>
                                <input type="text" name="technology" value="{{ old('technology', $project->technology) }}" placeholder="e.g. Laravel, Vue, Tailwind" required
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-purple-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-purple-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Description</label>
                            <textarea name="description" rows="4" placeholder="Describe your project..." required
                                class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-purple-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-purple-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">{{ old('description', $project->description) }}</textarea>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Demo link (Optional)</label>
                            <input type="url" name="demo_link" value="{{ old('demo_link', $project->demo_link) }}" placeholder="https://example.com"
                                class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-purple-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-550/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Project Image (Optional)</label>
                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                                @if($project->image)
                                    <img src="{{ Storage::url($project->image) }}" alt="Project Image" class="w-24 h-24 object-cover rounded-xl border border-[#4b3621]/10 dark:border-white/10 shrink-0 shadow-md">
                                @endif
                                <input type="file" name="image" accept="image/*"
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621]/60 dark:text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-[#115e59]/10 file:text-[#115e59] dark:file:bg-emerald-500/10 dark:file:text-emerald-400 hover:file:bg-[#115e59]/20 dark:hover:file:bg-emerald-500/20 transition duration-300 text-sm">
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 rounded-2xl bg-[#fbfaf5]/50 dark:bg-slate-800/30 border border-[#4b3621]/10 dark:border-white/5">
                            <div class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="is_featured" id="is_featured" value="1" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}
                                    class="w-5 h-5 bg-[#fbfaf5]/40 dark:bg-slate-950/40 border-[#4b3621]/20 dark:border-white/10 rounded text-[#115e59] dark:text-emerald-500 focus:ring-[#115e59] dark:focus:ring-emerald-500">
                                <label for="is_featured" class="ml-3 text-[#4b3621] dark:text-white font-bold cursor-pointer text-sm">
                                    Featured Project
                                    <span class="block text-xs text-[#4b3621]/60 dark:text-slate-550 font-normal">Tampilkan project ini di halaman utama (Maksimal 3)</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex justify-between items-center pt-4">
                            @if($project->id)
                            <button type="button" onclick="document.getElementById('delete-form').submit()" class="text-red-500 hover:text-red-400 font-bold transition flex items-center gap-2 text-sm uppercase tracking-wider">
                                <i class="fas fa-trash"></i> Delete Project
                            </button>
                            @else
                            <div></div>
                            @endif
                            
                            <button type="submit" class="bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-500 hover:to-blue-500 text-white font-bold py-4 px-10 rounded-2xl shadow-lg transition duration-300 transform hover:scale-[1.02] active:scale-[0.98] text-sm uppercase tracking-wider">
                                {{ $project->id ? 'Update Project' : 'Save Project' }}
                            </button>
                        </div>
                    </form>

                    @if($project->id)
                    <form id="delete-form" action="{{ route('project.destroy', $project->id) }}" method="POST" class="hidden">
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
    const ctx = document.getElementById('projectTechChart');
    if (ctx) {
        const isDark = document.documentElement.classList.contains('dark');
        const textColor = isDark ? '#cbd5e1' : '#4b3621';
        const gridColor = isDark ? 'rgba(255,255,255,0.05)' : 'rgba(75,54,33,0.05)';
        
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! $techLabelsJson !!},
                datasets: [{
                    label: 'Penggunaan',
                    data: {!! $techValuesJson !!},
                    backgroundColor: isDark ? 'rgba(139, 92, 246, 0.2)' : 'rgba(109, 40, 217, 0.15)', // Purple
                    borderColor: isDark ? '#8b5cf6' : '#6d28d9',
                    borderWidth: 1.5,
                    borderRadius: 6
                }]
            },
            options: {
                indexAxis: 'y',
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
                        grid: { color: gridColor },
                        ticks: {
                            color: textColor,
                            font: { size: 9, family: 'Inter' },
                            stepSize: 1
                        }
                    },
                    y: {
                        grid: { display: false },
                        ticks: {
                            color: textColor,
                            font: { size: 9, family: 'Inter', weight: 'bold' }
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