@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#0b1120] py-12">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="flex justify-between items-center mb-12">
            <h1 class="text-4xl font-extrabold text-white tracking-tight">
                Manage Sertifikat
            </h1>
            <a href="{{ route('dashboard') }}" class="text-gray-400 hover:text-white transition flex items-center gap-2">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            {{-- Certificate List --}}
            <div class="lg:col-span-1">
                <div class="bg-[#111827]/80 backdrop-blur-md rounded-3xl p-6 border border-gray-700 shadow-lg h-fit">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-white font-bold text-xl">My Sertifikat</h3>
                        <a href="{{ route('certificate.editForm') }}" class="bg-emerald-600/20 text-emerald-400 hover:bg-emerald-600/30 px-3 py-1 rounded-full text-xs font-semibold transition">
                            <i class="fas fa-plus mr-1"></i> Add New
                        </a>
                    </div>
                    
                    <div class="space-y-3">
                        @forelse($certificates as $item)
                        <div class="group flex justify-between items-center p-4 rounded-2xl bg-[#1f2937]/50 border border-transparent hover:border-emerald-500/50 hover:bg-[#1f2937] transition duration-300 {{ isset($certificate) && $certificate->id == $item->id ? 'border-emerald-500 bg-[#1f2937]' : '' }}">
                            <div class="flex-1">
                                <h4 class="text-white font-medium group-hover:text-emerald-400 transition flex items-center gap-2">
                                    {{ $item->title }}
                                    @if($item->is_featured)
                                        <span class="text-yellow-400 text-xs"><i class="fas fa-star"></i></span>
                                    @endif
                                </h4>
                                <p class="text-gray-500 text-xs truncate max-w-[150px]">{{ $item->issuer }}</p>
                            </div>
                            <div class="flex gap-2">
                                <a href="{{ route('certificate.editForm', $item->id) }}" class="text-gray-400 hover:text-blue-400 transition p-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('certificate.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus sertifikat ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-gray-400 hover:text-red-400 transition p-2">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <p class="text-gray-500 text-center py-4">Belum ada sertifikat.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            {{-- Form --}}
            <div class="lg:col-span-2">
                <div class="bg-[#111827]/80 backdrop-blur-md rounded-3xl p-8 border border-gray-700 shadow-2xl relative overflow-hidden">
                    <div class="absolute -top-12 -right-12 w-40 h-40 bg-emerald-600/10 rounded-full blur-3xl"></div>
                    
                    <h3 class="text-white font-bold text-2xl mb-8 relative z-10">
                        {{ $certificate->id ? 'Edit Sertifikat' : 'Tambah Sertifikat Baru' }}
                    </h3>

                    <form action="{{ $certificate->id ? route('certificate.update', $certificate->id) : route('certificate.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 relative z-10">
                        @csrf
                        @if($certificate->id)
                            @method('PUT')
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-gray-400 text-sm font-medium ml-1">Nama Sertifikat</label>
                                <input type="text" name="title" value="{{ old('title', $certificate->title) }}" placeholder="e.g. Web Development Bootcamp" required
                                    class="w-full bg-[#1f2937] border border-gray-700 rounded-2xl px-6 py-4 text-white focus:outline-none focus:ring-2 focus:ring-emerald-500/50 transition duration-300">
                            </div>
                            <div class="space-y-2">
                                <label class="text-gray-400 text-sm font-medium ml-1">Penerbit / Issuer</label>
                                <input type="text" name="issuer" value="{{ old('issuer', $certificate->issuer) }}" placeholder="e.g. Google, Dicoding, Coursera" required
                                    class="w-full bg-[#1f2937] border border-gray-700 rounded-2xl px-6 py-4 text-white focus:outline-none focus:ring-2 focus:ring-emerald-500/50 transition duration-300">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-gray-400 text-sm font-medium ml-1">Tanggal</label>
                                <input type="text" name="date" value="{{ old('date', $certificate->date) }}" placeholder="e.g. Maret 2026" required
                                    class="w-full bg-[#1f2937] border border-gray-700 rounded-2xl px-6 py-4 text-white focus:outline-none focus:ring-2 focus:ring-emerald-500/50 transition duration-300">
                            </div>
                            <div class="space-y-2">
                                <label class="text-gray-400 text-sm font-medium ml-1">Credential ID (Opsional)</label>
                                <input type="text" name="credential_id" value="{{ old('credential_id', $certificate->credential_id) }}" placeholder="e.g. ABC123XYZ"
                                    class="w-full bg-[#1f2937] border border-gray-700 rounded-2xl px-6 py-4 text-white focus:outline-none focus:ring-2 focus:ring-emerald-500/50 transition duration-300">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-gray-400 text-sm font-medium ml-1">Credential URL (Opsional)</label>
                            <input type="url" name="credential_url" value="{{ old('credential_url', $certificate->credential_url) }}" placeholder="https://example.com/verify/..."
                                class="w-full bg-[#1f2937] border border-gray-700 rounded-2xl px-6 py-4 text-white focus:outline-none focus:ring-2 focus:ring-emerald-500/50 transition duration-300">
                        </div>

                        <div class="space-y-2">
                            <label class="text-gray-400 text-sm font-medium ml-1">Deskripsi (Opsional)</label>
                            <textarea name="description" rows="3" placeholder="Deskripsi singkat tentang sertifikat..."
                                class="w-full bg-[#1f2937] border border-gray-700 rounded-2xl px-6 py-4 text-white focus:outline-none focus:ring-2 focus:ring-emerald-500/50 transition duration-300">{{ old('description', $certificate->description) }}</textarea>
                        </div>

                        <div class="space-y-2">
                            <label class="text-gray-400 text-sm font-medium ml-1">Gambar Sertifikat (Opsional)</label>
                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                                @if($certificate->image)
                                    <img src="{{ Storage::url($certificate->image) }}" alt="Certificate Image" class="w-24 h-24 object-cover rounded-xl border border-gray-700 shrink-0">
                                @endif
                                <input type="file" name="image" accept="image/*"
                                    class="w-full bg-[#1f2937] border border-gray-700 rounded-2xl px-6 py-4 text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-emerald-500/10 file:text-emerald-400 hover:file:bg-emerald-500/20 transition duration-300">
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 rounded-2xl bg-[#1f2937]/50 border border-gray-700">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="hidden" name="is_featured" value="0">
                                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $certificate->is_featured) ? 'checked' : '' }}
                                    class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-600 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-500"></div>
                            </label>
                            <div>
                                <span class="text-white text-sm font-medium flex items-center gap-2"><i class="fas fa-star text-yellow-400 text-xs"></i> Tampilkan di Portfolio</span>
                                <span class="text-gray-500 text-xs">Hanya sertifikat yang ditandai akan muncul di halaman utama</span>
                            </div>
                        </div>

                        <div class="flex justify-between items-center pt-4">
                            @if($certificate->id)
                            <button type="button" onclick="document.getElementById('cert-delete-form').submit()" class="text-red-500 hover:text-red-400 font-medium transition flex items-center gap-2">
                                <i class="fas fa-trash"></i> Hapus Sertifikat
                            </button>
                            @else
                            <div></div>
                            @endif
                            
                            <button type="submit" class="bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white font-bold py-4 px-10 rounded-2xl shadow-lg transition duration-300 transform hover:scale-[1.02] active:scale-[0.98]">
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
@endsection
