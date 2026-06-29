@extends('layouts.app')

@section('content')
@php
    $issuerCounts = [];
    foreach($certificates as $item) {
        $issuer = trim($item->issuer);
        if (!empty($issuer)) {
            $issuerCounts[$issuer] = ($issuerCounts[$issuer] ?? 0) + 1;
        }
    }
    arsort($issuerCounts);
    $topIssuers = array_slice($issuerCounts, 0, 5, true);
    $issuerLabels = array_keys($topIssuers);
    $issuerValues = array_values($topIssuers);
    $issuerLabelsJson = json_encode($issuerLabels);
    $issuerValuesJson = json_encode($issuerValues);
@endphp

<div class="min-h-screen pt-32 pb-24 relative bg-transparent">
    <div class="max-w-7xl mx-auto px-6 relative z-20">
        
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-12">
            <h1 class="text-4xl md:text-5xl font-black text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight">
                Manage Sertifikat
            </h1>
            <a href="{{ route('dashboard') }}" 
               class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#4b3621]/20 dark:border-white/20 bg-[#fbfaf5]/80 dark:bg-slate-900/80 backdrop-blur-md text-[#4b3621] dark:text-white font-bold text-xs tracking-widest uppercase hover:bg-slate-100 dark:hover:bg-slate-800 transition-all duration-300 shadow-md">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Certificate List & Mini Chart -->
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-6 border border-[#4b3621]/10 dark:border-white/5 shadow-xl h-fit">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-[#4b3621] dark:text-white font-bold text-xl font-playfair">My Sertifikat</h3>
                        <a href="{{ route('certificate.editForm') }}" class="bg-emerald-500/10 dark:bg-emerald-500/20 text-emerald-700 dark:text-emerald-400 hover:bg-emerald-500 hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-950 px-3 py-1.5 rounded-full text-xs font-bold transition">
                            <i class="fas fa-plus mr-1"></i> Add New
                        </a>
                    </div>
                    
                    <div class="space-y-3">
                        @forelse($certificates as $item)
                        <div class="group flex justify-between items-center p-4 rounded-2xl bg-[#fbfaf5]/50 dark:bg-slate-800/30 border border-[#4b3621]/5 dark:border-white/5 hover:border-[#115e59]/20 dark:hover:border-emerald-500/30 hover:bg-white dark:hover:bg-slate-800/50 transition duration-300 {{ isset($certificate) && $certificate->id == $item->id ? 'border-[#115e59] dark:border-emerald-500 bg-white dark:bg-slate-800/70 shadow-md' : '' }}">
                            <div class="flex-1 min-w-0 pr-2">
                                <h4 class="text-[#4b3621] dark:text-white font-bold group-hover:text-[#115e59] dark:group-hover:text-emerald-400 transition flex items-center gap-2 text-sm truncate">
                                    {{ $item->title }}
                                    @if($item->is_featured)
                                        <span class="text-yellow-500 text-xs"><i class="fas fa-star"></i></span>
                                    @endif
                                </h4>
                                <p class="text-[#4b3621]/50 dark:text-slate-500 text-xs truncate">{{ $item->issuer }}</p>
                            </div>
                            <div class="flex gap-1 shrink-0">
                                <a href="{{ route('certificate.editForm', $item->id) }}" class="text-[#4b3621]/50 dark:text-slate-400 hover:text-[#115e59] dark:hover:text-emerald-400 transition p-2">
                                    <i class="fas fa-edit text-sm"></i>
                                </a>
                                <form action="{{ route('certificate.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus sertifikat ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-[#4b3621]/50 dark:text-slate-400 hover:text-red-600 dark:hover:text-rose-400 transition p-2">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <p class="text-[#4b3621]/50 dark:text-slate-500 text-center py-4 text-sm italic">Belum ada sertifikat.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Mini Issuer Chart -->
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-6 border border-[#4b3621]/10 dark:border-white/5 shadow-xl">
                    <h3 class="text-[#4b3621] dark:text-white font-bold text-lg mb-2 font-playfair">Penerbit Sertifikat</h3>
                    <p class="text-[10px] text-[#4b3621]/60 dark:text-slate-400 font-light mb-4 leading-normal">Porsi sertifikat berdasarkan institusi penerbit.</p>
                    <div class="relative h-[200px] w-full">
                        <canvas id="certificateIssuerChart"></canvas>
                    </div>
                </div>
            </div>

            {{-- Form --}}
            <div class="lg:col-span-2">
                <div class="bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl rounded-3xl p-8 border border-[#4b3621]/10 dark:border-white/5 shadow-2xl relative overflow-hidden">
                    <div class="absolute -top-12 -right-12 w-40 h-40 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>
                    
                    <h3 class="text-[#4b3621] dark:text-white font-bold text-2xl mb-8 relative z-10 font-playfair">
                        {{ $certificate->id ? 'Edit Sertifikat' : 'Tambah Sertifikat Baru' }}
                    </h3>

                    <form action="{{ $certificate->id ? route('certificate.update', $certificate->id) : route('certificate.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 relative z-10">
                        @csrf
                        @if($certificate->id)
                            @method('PUT')
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Nama Sertifikat</label>
                                <input type="text" name="title" value="{{ old('title', $certificate->title) }}" placeholder="e.g. Web Development Bootcamp" required
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Penerbit / Issuer</label>
                                <input type="text" name="issuer" value="{{ old('issuer', $certificate->issuer) }}" placeholder="e.g. Google, Dicoding, Coursera" required
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Tanggal</label>
                                <input type="text" name="date" value="{{ old('date', $certificate->date) }}" placeholder="e.g. Maret 2026" required
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Credential ID (Opsional)</label>
                                <input type="text" name="credential_id" value="{{ old('credential_id', $certificate->credential_id) }}" placeholder="e.g. ABC123XYZ"
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Credential URL (Opsional)</label>
                            <input type="url" name="credential_url" value="{{ old('credential_url', $certificate->credential_url) }}" placeholder="https://example.com/verify/..."
                                class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Deskripsi (Opsional)</label>
                            <textarea name="description" rows="3" placeholder="Deskripsi singkat tentang sertifikat..."
                                class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621] dark:text-white focus:outline-none focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 transition duration-300 placeholder:text-[#4b3621]/30 dark:placeholder:text-slate-600 text-sm">{{ old('description', $certificate->description) }}</textarea>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Gambar Sertifikat (Opsional)</label>
                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                                @if($certificate->image)
                                    <img src="{{ asset($certificate->image) }}" alt="Certificate Image" class="w-24 h-24 object-cover rounded-xl border border-[#4b3621]/10 dark:border-white/10 shrink-0 shadow-md">
                                @endif
                                <input type="file" name="image" accept="image/*"
                                    class="w-full bg-[#fbfaf5]/40 dark:bg-slate-950/40 border border-[#4b3621]/15 dark:border-white/10 rounded-2xl px-6 py-4 text-[#4b3621]/60 dark:text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-[#115e59]/10 file:text-[#115e59] dark:file:bg-emerald-500/10 dark:file:text-emerald-400 hover:file:bg-[#115e59]/20 dark:hover:file:bg-emerald-500/20 transition duration-300 text-sm">
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 rounded-2xl bg-[#fbfaf5]/50 dark:bg-slate-800/30 border border-[#4b3621]/10 dark:border-white/5">
                            <label class="relative inline-flex items-center cursor-pointer shrink-0">
                                <input type="hidden" name="is_featured" value="0">
                                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $certificate->is_featured) ? 'checked' : '' }}
                                    class="sr-only peer">
                                <div class="w-11 h-6 bg-[#4b3621]/20 dark:bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#115e59] dark:peer-checked:bg-emerald-500"></div>
                            </label>
                            <div>
                                <span class="text-[#4b3621] dark:text-white text-sm font-bold flex items-center gap-2"><i class="fas fa-star text-yellow-500 text-xs"></i> Tampilkan di Portfolio</span>
                                <span class="text-[#4b3621]/60 dark:text-slate-400 text-xs">Hanya sertifikat yang ditandai akan muncul di halaman utama</span>
                            </div>
                        </div>

                        <div class="flex justify-between items-center pt-4">
                            @if($certificate->id)
                            <button type="button" onclick="document.getElementById('cert-delete-form').submit()" class="text-red-500 hover:text-red-400 font-bold transition flex items-center gap-2 text-sm uppercase tracking-wider">
                                <i class="fas fa-trash"></i> Hapus Sertifikat
                            </button>
                            @else
                            <div></div>
                            @endif
                            
                            <button type="submit" class="bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white font-bold py-4 px-10 rounded-2xl shadow-lg transition duration-300 transform hover:scale-[1.02] active:scale-[0.98] text-sm uppercase tracking-wider">
                                {{ $certificate->id ? 'Update Sertifikat' : 'Simpan Sertifikat' }}
                            </button>
                        </div>
                    </form>

                    @if($certificate->id)
                    <form id="cert-delete-form" action="{{ route('certificate.destroy', $certificate->id) }}" method="POST" class="hidden">
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
    const ctx = document.getElementById('certificateIssuerChart');
    if (ctx) {
        const isDark = document.documentElement.classList.contains('dark');
        const textColor = isDark ? '#cbd5e1' : '#4b3621';
        
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: {!! $issuerLabelsJson !!},
                datasets: [{
                    data: {!! $issuerValuesJson !!},
                    backgroundColor: [
                        isDark ? 'rgba(245, 158, 11, 0.6)' : 'rgba(245, 158, 11, 0.5)',  // Amber
                        isDark ? 'rgba(59, 130, 246, 0.6)' : 'rgba(59, 130, 246, 0.5)', // Blue
                        isDark ? 'rgba(16, 185, 129, 0.6)' : 'rgba(16, 185, 129, 0.5)', // Emerald
                        isDark ? 'rgba(236, 72, 153, 0.6)' : 'rgba(236, 72, 153, 0.5)', // Pink
                        isDark ? 'rgba(139, 92, 246, 0.6)' : 'rgba(139, 92, 246, 0.5)' // Purple
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
                            font: { size: 9, family: 'Inter', weight: 'bold' },
                            padding: 10
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
                cutout: '60%'
            }
        });
    }
});
</script>
@endpush
@endsection
