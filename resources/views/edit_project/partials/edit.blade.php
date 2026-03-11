@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#0b1120] py-12">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="flex justify-between items-center mb-12">
            <h1 class="text-4xl font-extrabold text-white tracking-tight">
                Manage Projects
            </h1>
            <a href="{{ route('dashboard') }}" class="text-gray-400 hover:text-white transition flex items-center gap-2">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Project List -->
            <div class="lg:col-span-1">
                <div class="bg-[#111827]/80 backdrop-blur-md rounded-3xl p-6 border border-gray-700 shadow-lg h-fit">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-white font-bold text-xl">My Projects</h3>
                        <a href="{{ route('project.editForm') }}" class="bg-purple-600/20 text-purple-400 hover:bg-purple-600/30 px-3 py-1 rounded-full text-xs font-semibold transition">
                            <i class="fas fa-plus mr-1"></i> Add New
                        </a>
                    </div>
                    
                    <div class="space-y-3">
                        @forelse($projects as $item)
                        <div class="group flex justify-between items-center p-4 rounded-2xl bg-[#1f2937]/50 border border-transparent hover:border-purple-500/50 hover:bg-[#1f2937] transition duration-300 {{ isset($project) && $project->id == $item->id ? 'border-purple-500 bg-[#1f2937]' : '' }}">
                            <div class="flex-1">
                                <h4 class="text-white font-medium group-hover:text-purple-400 transition flex items-center gap-2">
                                    {{ $item->title }}
                                    @if($item->is_featured)
                                        <i class="fas fa-star text-yellow-500 text-[10px]" title="Featured"></i>
                                    @endif
                                </h4>
                                <p class="text-gray-500 text-xs truncate max-w-[150px]">{{ $item->technology }}</p>
                            </div>
                            <div class="flex gap-2">
                                <a href="{{ route('project.editForm', $item->id) }}" class="text-gray-400 hover:text-blue-400 transition p-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('project.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-gray-400 hover:text-red-400 transition p-2">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <p class="text-gray-500 text-center py-4">No projects yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="lg:col-span-2">
                <div class="bg-[#111827]/80 backdrop-blur-md rounded-3xl p-8 border border-gray-700 shadow-2xl relative overflow-hidden">
                    <!-- Glow effect -->
                    <div class="absolute -top-12 -right-12 w-40 h-40 bg-purple-600/10 rounded-full blur-3xl"></div>
                    
                    <h3 class="text-white font-bold text-2xl mb-8 relative z-10">
                        {{ $project->id ? 'Edit Project' : 'Add New Project' }}
                    </h3>

                    <form action="{{ $project->id ? route('project.update', $project->id) : route('project.store') }}" method="POST" class="space-y-6 relative z-10">
                        @csrf
                        @if($project->id)
                            @method('PUT')
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-gray-400 text-sm font-medium ml-1">Project Title</label>
                                <input type="text" name="title" value="{{ old('title', $project->title) }}" placeholder="e.g. My Awesome Website" required
                                    class="w-full bg-[#1f2937] border border-gray-700 rounded-2xl px-6 py-4 text-white focus:outline-none focus:ring-2 focus:ring-purple-500/50 transition duration-300">
                            </div>
                            <div class="space-y-2">
                                <label class="text-gray-400 text-sm font-medium ml-1">Technologies Used</label>
                                <input type="text" name="technology" value="{{ old('technology', $project->technology) }}" placeholder="e.g. Laravel, Vue, Tailwind" required
                                    class="w-full bg-[#1f2937] border border-gray-700 rounded-2xl px-6 py-4 text-white focus:outline-none focus:ring-2 focus:ring-purple-500/50 transition duration-300">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-gray-400 text-sm font-medium ml-1">Description</label>
                            <textarea name="description" rows="4" placeholder="Describe your project..." required
                                class="w-full bg-[#1f2937] border border-gray-700 rounded-2xl px-6 py-4 text-white focus:outline-none focus:ring-2 focus:ring-purple-500/50 transition duration-300">{{ old('description', $project->description) }}</textarea>
                        </div>

                        <div class="space-y-2">
                            <label class="text-gray-400 text-sm font-medium ml-1">Demo link (Optional)</label>
                            <input type="url" name="demo_link" value="{{ old('demo_link', $project->demo_link) }}" placeholder="https://example.com"
                                class="w-full bg-[#1f2937] border border-gray-700 rounded-2xl px-6 py-4 text-white focus:outline-none focus:ring-2 focus:ring-purple-500/50 transition duration-300">
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-purple-500/10 border border-purple-500/20 rounded-2xl">
                            <div class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="is_featured" id="is_featured" value="1" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}
                                    class="w-5 h-5 bg-[#1f2937] border-gray-700 rounded text-purple-600 focus:ring-purple-500 focus:ring-offset-[#111827]">
                                <label for="is_featured" class="ml-3 text-white font-medium cursor-pointer">
                                    Featured Project
                                    <span class="block text-xs text-gray-500 font-normal">Tampilkan project ini di halaman utama (Maksimal 3)</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex justify-between items-center pt-4">
                            @if($project->id)
                            <button type="button" onclick="document.getElementById('delete-form').submit()" class="text-red-500 hover:text-red-400 font-medium transition flex items-center gap-2">
                                <i class="fas fa-trash"></i> Delete Project
                            </button>
                            @else
                            <div></div>
                            @endif
                            
                            <button type="submit" class="bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-500 hover:to-blue-500 text-white font-bold py-4 px-10 rounded-2xl shadow-lg transition duration-300 transform hover:scale-[1.02] active:scale-[0.98]">
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
@endsection