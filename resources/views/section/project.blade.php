<section id="project"
    class="relative min-h-screen flex items-center justify-center px-4 md:px-6 overflow-hidden py-20 transition-colors duration-700 bg-transparent dark:bg-transparent">

    <div class="relative z-10 max-w-7xl w-full">

        <h2 class="text-3xl md:text-4xl font-black text-center mb-3 text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight">
            Project
        </h2>
        <p class="text-center text-[#4b3621]/60 dark:text-slate-400 text-sm mb-12 max-w-md mx-auto font-light">
            Karya terbaik yang telah saya bangun.
        </p>

        {{-- CHARACTER SELECT CAROUSEL --}}
        <div class="project-carousel relative w-full" id="projectCarousel">
            
            {{-- Navigation Arrows (Only if > 1 project) --}}
            @if($projects->count() > 1)
            <button onclick="projectSlider.prev()" class="absolute left-0 md:left-4 top-1/2 -translate-y-1/2 z-40 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 dark:bg-slate-800/80 backdrop-blur-md border border-[#4b3621]/10 dark:border-white/10 flex items-center justify-center text-[#4b3621] dark:text-white shadow-xl hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 transition-all duration-300 hover:scale-110 cursor-pointer">
                <i class="fa-solid fa-chevron-left text-sm"></i>
            </button>
            <button onclick="projectSlider.next()" class="absolute right-0 md:right-4 top-1/2 -translate-y-1/2 z-40 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 dark:bg-slate-800/80 backdrop-blur-md border border-[#4b3621]/10 dark:border-white/10 flex items-center justify-center text-[#4b3621] dark:text-white shadow-xl hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 transition-all duration-300 hover:scale-110 cursor-pointer">
                <i class="fa-solid fa-chevron-right text-sm"></i>
            </button>
            @endif

            {{-- Cards Container --}}
            <div class="flex items-center justify-center w-full py-8 md:py-12 min-h-[480px] md:min-h-[550px] relative px-12 md:px-20">
                @foreach($projects as $index => $p)
                    <div class="project-slide absolute transition-all duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] cursor-pointer"
                         data-index="{{ $index }}"
                         onclick="if(projectSlider.current === {{ $index }}) { openProjectModal({{ $index }}); } else { projectSlider.goTo({{ $index }}); }"
                         style="opacity: 0; pointer-events: none;">
                        
                        <div class="relative bg-white/70 dark:bg-slate-900/60 backdrop-blur-xl rounded-[2rem] border border-[#4b3621]/10 dark:border-white/5 overflow-hidden shadow-2xl flex flex-col h-full transition-all duration-500">
                            
                            {{-- Visual Header --}}
                            <div class="relative h-40 md:h-52 w-full overflow-hidden bg-gradient-to-br from-[#f8f6f0] to-[#ede8d8] dark:from-slate-900/80 dark:to-slate-800/60">
                                @if($p->image)
                                    <img src="{{ Storage::url($p->image) }}" alt="{{ $p->title }}" class="absolute inset-0 w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>
                                @else
                                    <div class="absolute inset-0 bg-gradient-to-br from-[#4b3621]/5 to-transparent dark:from-white/5 dark:to-transparent"></div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="w-20 h-20 md:w-24 md:h-24 rounded-full border border-[#4b3621]/10 dark:border-white/10 flex items-center justify-center">
                                            <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-[#4b3621]/5 dark:bg-white/5 flex items-center justify-center">
                                                <i class="fa-solid fa-code text-xl text-[#4b3621]/40 dark:text-white/40"></i>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                {{-- Index Badge --}}
                                <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-white/60 dark:bg-slate-800/60 backdrop-blur-md border border-[#4b3621]/10 dark:border-white/10 text-[9px] font-bold tracking-widest text-[#4b3621]/50 dark:text-slate-400">
                                    #{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </div>
                                {{-- Technology Badge --}}
                                <div class="absolute bottom-4 left-5 flex items-center gap-2">
                                    <span class="px-3 py-1 rounded-full bg-white/70 dark:bg-slate-800/70 backdrop-blur-md text-[10px] font-bold text-[#4b3621]/70 dark:text-white/70 tracking-wider uppercase border border-[#4b3621]/5 dark:border-white/5">
                                        {{ $p->technology }}
                                    </span>
                                </div>
                            </div>

                            {{-- Content --}}
                            <div class="p-6 md:p-8 flex flex-col flex-grow">
                                <h3 class="text-lg md:text-2xl font-bold text-[#4b3621] dark:text-white mb-3 font-playfair leading-tight tracking-tight">
                                    {{ $p->title }}
                                </h3>
                                <p class="text-[#4b3621]/65 dark:text-slate-400 text-sm leading-relaxed mb-6 flex-grow font-light line-clamp-3">
                                    {{ $p->description }}
                                </p>
                                
                                {{-- Action --}}
                                <div class="mt-auto pointer-events-none">
                                    <span class="inline-flex items-center gap-3 text-[#4b3621] dark:text-white font-bold text-[11px] uppercase tracking-[0.15em] hover:text-[#115e59] dark:hover:text-emerald-400 transition-colors duration-300 group/link pointer-events-auto">
                                        <span>{{ __('Lihat Projek') }}</span>
                                        <div class="w-8 h-[1px] bg-[#4b3621]/20 dark:bg-white/20 group-hover/link:w-12 group-hover/link:bg-[#115e59] dark:group-hover/link:bg-emerald-400 transition-all duration-500"></div>
                                        <i class="fa-solid fa-arrow-right text-[9px] -ml-1 group-hover/link:translate-x-1 transition-transform"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Dots Indicator (Only if > 1 project) --}}
            @if($projects->count() > 1)
            <div class="flex items-center justify-center gap-2 mt-2" id="projectDots">
                @foreach($projects as $index => $p)
                    <button onclick="projectSlider.goTo({{ $index }})" 
                            class="project-dot w-2 h-2 rounded-full bg-[#4b3621]/20 dark:bg-white/20 transition-all duration-500 hover:bg-[#115e59] dark:hover:bg-emerald-400 cursor-pointer"
                            data-index="{{ $index }}"></button>
                @endforeach
            </div>
            @endif
        </div>

        {{-- SEE ALL BUTTON --}}
        <div class="text-center mt-10 relative z-20">
            <a href="{{ route('project_detail') }}"
               class="inline-flex items-center justify-center gap-3 px-8 py-3.5 rounded-full border border-[#4b3621]/15 dark:border-white/15 bg-white/50 dark:bg-slate-900/50 backdrop-blur-md text-[#4b3621] dark:text-white font-bold text-xs tracking-widest uppercase hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 hover:border-transparent transition-all duration-500 hover:scale-105 shadow-lg group">
                Lihat Semua Projek
                <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

    </div>

</section>

{{-- PROJECT IMAGE MODAL (LIGHTBOX) --}}
<div id="project-modal-overlay" class="fixed inset-0 z-[9999] bg-[#e6ddc5] dark:bg-slate-900 hidden items-center justify-center p-4 xl:p-10">
    <div id="project-modal-content" class="relative flex items-center justify-center max-w-5xl w-full max-h-[85vh] scale-95 opacity-0 transition-all duration-500">
        
        {{-- Close --}}
        <button onclick="closeProjectModal()" class="absolute -top-12 right-0 md:-right-12 md:-top-4 w-10 h-10 rounded-full bg-[#4b3621]/10 dark:bg-white/10 hover:bg-[#4b3621]/20 dark:hover:bg-white/20 flex items-center justify-center text-[#4b3621] dark:text-white transition-all duration-300 z-50 cursor-pointer">
            <i class="fa-solid fa-xmark text-lg"></i>
        </button>

        {{-- Fallback Container (if no image) --}}
        <div id="project-modal-fallback-container" class="w-full h-64 md:h-96 max-w-lg bg-slate-900 rounded-[2rem] border border-white/10 flex items-center justify-center relative overflow-hidden hidden shadow-2xl">
            <div class="absolute inset-0 opacity-5" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 20px, currentColor 20px, currentColor 21px); color: #fff;"></div>
            <div class="w-24 h-24 rounded-full bg-emerald-400/15 flex items-center justify-center z-10">
                <i class="fa-solid fa-code text-5xl text-emerald-400"></i>
            </div>
        </div>

        {{-- Actual Image (Hidden by default) --}}
        <img id="project-modal-image" src="" alt="Project" class="w-auto h-auto max-w-full max-h-[85vh] object-contain rounded-xl md:rounded-2xl shadow-2xl hidden cursor-pointer">
    </div>
</div>

<script>
// Project data for modal
const projectData = @json($projects->values());

function openProjectModal(index) {
    const p = projectData[index];
    if (!p) return;

    const overlay = document.getElementById('project-modal-overlay');
    const content = document.getElementById('project-modal-content');

    const fallback = document.getElementById('project-modal-fallback-container');
    const modalImage = document.getElementById('project-modal-image');

    if (p.image) {
        // Show Image
        modalImage.src = '/storage/' + p.image;
        modalImage.classList.remove('hidden');
        fallback.classList.add('hidden');
    } else {
        // Hide Image
        modalImage.src = '';
        modalImage.classList.add('hidden');
        fallback.classList.remove('hidden');
    }

    overlay.classList.remove('hidden');
    overlay.classList.add('flex');
    document.body.style.overflow = 'hidden';

    requestAnimationFrame(() => {
        content.style.transform = 'scale(1)';
        content.style.opacity = '1';
    });
}

function closeProjectModal() {
    const overlay = document.getElementById('project-modal-overlay');
    const content = document.getElementById('project-modal-content');

    content.style.transform = 'scale(0.95)';
    content.style.opacity = '0';

    setTimeout(() => {
        overlay.classList.add('hidden');
        overlay.classList.remove('flex');
        document.body.style.overflow = '';
    }, 300);
}

document.getElementById('project-modal-overlay')?.addEventListener('click', function(e) {
    closeProjectModal();
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeProjectModal();
});

// Uses CharacterSlider class defined in certificate section
const projectSlider = new window.CharacterSlider('project', {{ count($projects) }});
window.addEventListener('resize', () => projectSlider.update());
</script>
