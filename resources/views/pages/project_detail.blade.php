@extends('layouts.app')

@section('content')

<section class="min-h-screen px-4 md:px-6 py-32 relative bg-transparent overflow-hidden">

    <div class="max-w-7xl mx-auto relative z-20">

        {{-- HEADER --}}
        <div class="text-center mb-16 fade-in-up">
            <h1 class="text-4xl md:text-6xl font-black mb-6 text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight drop-shadow-sm">
                Project Detail
            </h1>
            <p class="text-[#4b3621]/70 dark:text-slate-400 mt-4 max-w-2xl mx-auto text-lg font-light leading-relaxed">
                Eksplorasi mendalam mengenai setiap baris kode dan desain yang telah saya bangun untuk menyelesaikan berbagai masalah.
            </p>
        </div>

        {{-- SEARCH BAR --}}
        <div class="max-w-xl mx-auto mb-16 relative z-30 fade-in-up">
            <div class="relative group">
                <input type="text" id="projectSearch" placeholder="Cari nama project, bahasa, dsb..." 
                       class="w-full pl-14 pr-6 py-4 rounded-full bg-white/60 dark:bg-slate-900/60 backdrop-blur-xl border border-[#4b3621]/20 dark:border-white/20 focus:outline-none focus:border-[#115e59] dark:focus:border-emerald-400 focus:ring-4 focus:ring-[#115e59]/10 dark:focus:ring-emerald-400/10 text-[#4b3621] dark:text-white transition-all shadow-xl text-sm md:text-base placeholder:text-[#4b3621]/40 dark:placeholder:text-slate-500 font-medium">
                <div class="absolute left-5 top-1/2 -translate-y-1/2 w-5 h-5 flex items-center justify-center text-[#4b3621]/40 dark:text-slate-500 group-focus-within:text-[#115e59] dark:group-focus-within:text-emerald-400 transition-colors">
                    <i class="fa-solid fa-search"></i>
                </div>
            </div>
        </div>

        {{-- DYNAMIC CAROUSEL WRAPPER --}}
        <div class="project-carousel relative w-full fade-in-up" id="detailCarousel">
            
            {{-- Navigation Arrows (hidden initially) --}}
            <button id="detailPrevBtn" onclick="if(detailSlider) detailSlider.prev()" class="hidden absolute left-0 md:left-4 top-1/2 -translate-y-1/2 z-40 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 dark:bg-slate-800/80 backdrop-blur-md border border-[#4b3621]/10 dark:border-white/10 items-center justify-center text-[#4b3621] dark:text-white shadow-xl hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 transition-all duration-300 hover:scale-110 cursor-pointer">
                <i class="fa-solid fa-chevron-left text-sm"></i>
            </button>
            <button id="detailNextBtn" onclick="if(detailSlider) detailSlider.next()" class="hidden absolute right-0 md:right-4 top-1/2 -translate-y-1/2 z-40 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 dark:bg-slate-800/80 backdrop-blur-md border border-[#4b3621]/10 dark:border-white/10 items-center justify-center text-[#4b3621] dark:text-white shadow-xl hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 transition-all duration-300 hover:scale-110 cursor-pointer">
                <i class="fa-solid fa-chevron-right text-sm"></i>
            </button>

            {{-- Cards Container --}}
            <div id="detailSlidesContainer" class="flex items-center justify-center w-full py-8 md:py-12 min-h-[480px] md:min-h-[550px] relative px-6 md:px-20">
                {{-- JS Injected Slides --}}
            </div>

            {{-- Dots Indicator --}}
            <div class="flex flex-wrap items-center justify-center gap-2 mt-4 px-4" id="detailDots">
                {{-- JS Injected Dots --}}
            </div>
        </div>

        {{-- EMPTY STATE --}}
        <div id="emptyState" class="hidden flex-col items-center justify-center py-20 text-center fade-in-up">
            <div class="w-24 h-24 rounded-full bg-white/50 dark:bg-slate-900/50 backdrop-blur-md flex items-center justify-center mb-6 shadow-xl border border-[#4b3621]/10 dark:border-white/10">
                <i class="fa-solid fa-folder-open text-4xl text-[#4b3621]/30 dark:text-white/30"></i>
            </div>
            <h3 class="text-2xl font-bold text-[#4b3621] dark:text-white font-playfair mb-3 drop-shadow-sm">Project tidak ditemukan</h3>
            <p class="text-[#4b3621]/60 dark:text-slate-400 text-sm max-w-xs mx-auto">Coba gunakan kata kunci pencarian yang lain.</p>
        </div>

        {{-- BACK BUTTON --}}
        <div class="text-center mt-20 fade-in-up relative z-30">
            <a href="{{ route('home') }}"
               class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-full border border-[#4b3621]/20 dark:border-white/20 bg-white/50 dark:bg-slate-900/50 backdrop-blur-md text-[#4b3621] dark:text-white font-bold text-[11px] tracking-widest uppercase hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 hover:border-transparent transition-all duration-500 hover:scale-105 shadow-xl group">
                <i class="fa-solid fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                Kembali ke Beranda
            </a>
        </div>

    </div>

</section>

{{-- SCRIPT COMPILER --}}
<script>
    // Include localized CharacterSlider logic so it doesn't conflict or rely on external scopes
    class LocalCharacterSlider {
        constructor(idPrefix, count) {
            this.containerId = idPrefix + 'Carousel';
            this.dotsId = idPrefix + 'Dots';
            this.count = count;
            this.current = 0;
            this.slides = document.querySelectorAll('#' + this.containerId + ' .detail-slide');
            this.dots = document.querySelectorAll('#' + this.dotsId + ' .detail-dot');
            this.isMobile = window.innerWidth < 768;

            window.addEventListener('resize', () => {
                const wasMobile = this.isMobile;
                this.isMobile = window.innerWidth < 768;
                if (wasMobile !== this.isMobile) this.update();
            });

            this.update();
        }

        update() {
            if (this.slides.length === 0) return;
            
            // If only 1 slide, center it statically
            if (this.slides.length === 1) {
                const slide = this.slides[0];
                slide.style.opacity = '1';
                slide.style.pointerEvents = 'auto';
                slide.style.zIndex = '30';
                slide.style.transform = 'translateX(0) scale(1)';
                slide.style.filter = 'blur(0)';
                slide.style.width = this.isMobile ? '85%' : '60%';
                if(this.dots[0]) {
                    this.dots[0].classList.add('w-8', 'bg-[#115e59]');
                    this.dots[0].classList.remove('w-2', 'bg-[#4b3621]/20', 'dark:bg-white/20');
                }
                return;
            }

            this.slides.forEach((slide, index) => {
                slide.style.opacity = '0';
                slide.style.pointerEvents = 'none';
                slide.style.zIndex = '0';
                slide.style.transform = 'translateX(0) scale(0.8)';
                slide.style.filter = 'blur(4px)';
                slide.style.width = this.isMobile ? '85%' : '45%'; 

                let offset = index - this.current;
                if (offset < -Math.floor(this.count / 2)) offset += this.count;
                if (offset > Math.floor(this.count / 2)) offset -= this.count;

                if (offset === 0) {
                    slide.style.opacity = '1';
                    slide.style.pointerEvents = 'auto';
                    slide.style.zIndex = '30';
                    slide.style.transform = 'translateX(0) scale(1)';
                    slide.style.filter = 'blur(0)';
                    slide.style.width = this.isMobile ? '85%' : '45%';
                } else if (offset === -1 || (this.current === 0 && index === this.count - 1)) {
                    slide.style.opacity = this.isMobile ? '0' : '0.6';
                    slide.style.zIndex = '20';
                    slide.style.transform = `translateX(${this.isMobile ? '-50%' : '-65%'}) scale(0.85)`;
                    if(!this.isMobile) slide.style.pointerEvents = 'auto';
                } else if (offset === 1 || (this.current === this.count - 1 && index === 0)) {
                    slide.style.opacity = this.isMobile ? '0' : '0.6';
                    slide.style.zIndex = '20';
                    slide.style.transform = `translateX(${this.isMobile ? '50%' : '65%'}) scale(0.85)`;
                    if(!this.isMobile) slide.style.pointerEvents = 'auto';
                }
            });

            this.dots.forEach((dot, index) => {
                if (index === this.current) {
                    dot.classList.add('w-8', 'bg-[#115e59]', 'dark:bg-emerald-400');
                    dot.classList.remove('w-2', 'bg-[#4b3621]/20', 'dark:bg-white/20');
                } else {
                    dot.classList.remove('w-8', 'bg-[#115e59]', 'dark:bg-emerald-400');
                    dot.classList.add('w-2', 'bg-[#4b3621]/20', 'dark:bg-white/20');
                }
            });
        }

        next() {
            this.current = (this.current + 1) % this.count;
            this.update();
        }

        prev() {
            this.current = (this.current - 1 + this.count) % this.count;
            this.update();
        }

        goTo(index) {
            this.current = ((index % this.count) + this.count) % this.count;
            this.update();
        }
    }

    // Backend injected data
    const allProjects = @json($projects->values());
    let detailSlider = null;

    function escapeHtml(text) {
        if (!text) return '';
        const div = document.createElement('div');
        div.innerText = text;
        return div.innerHTML;
    }

    function renderProjects(projects) {
        const container = document.getElementById('detailSlidesContainer');
        const dotsContainer = document.getElementById('detailDots');
        const prevBtn = document.getElementById('detailPrevBtn');
        const nextBtn = document.getElementById('detailNextBtn');
        const carousel = document.getElementById('detailCarousel');
        const emptyState = document.getElementById('emptyState');

        container.innerHTML = '';
        dotsContainer.innerHTML = '';

        if (projects.length === 0) {
            carousel.style.display = 'none';
            emptyState.style.display = 'flex';
            if (detailSlider) detailSlider = null;
            return;
        }

        carousel.style.display = 'block';
        emptyState.style.display = 'none';

        if (projects.length > 1) {
            prevBtn.style.display = 'flex';
            nextBtn.style.display = 'flex';
            dotsContainer.style.display = 'flex';
        } else {
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
            dotsContainer.style.display = 'none';
        }

        projects.forEach((p, index) => {
            const num = String(index + 1).padStart(2, '0');
            const termRaw = p.technology ? p.technology : 'Web App';
            const tech = escapeHtml(termRaw);
            const title = escapeHtml(p.title);
            const description = escapeHtml(p.description);
            const imgHtml = p.image 
                ? `<img src="/storage/${escapeHtml(p.image)}" alt="${title}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                   <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>`
                : `<div class="absolute inset-0 bg-gradient-to-br from-[#4b3621]/5 to-transparent dark:from-white/5 dark:to-transparent"></div>
                   <div class="absolute inset-0 flex items-center justify-center">
                       <div class="w-20 h-20 md:w-24 md:h-24 rounded-full border border-[#4b3621]/10 dark:border-white/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                           <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-[#4b3621]/5 dark:bg-white/5 flex items-center justify-center">
                               <i class="fa-solid fa-code text-xl text-[#4b3621]/40 dark:text-white/40 group-hover:text-[#115e59] dark:group-hover:text-emerald-400 transition-colors"></i>
                           </div>
                       </div>
                   </div>`;

            const linkTarget = p.demo_link ? '_blank' : '_self';
            const linkHref = p.demo_link ? escapeHtml(p.demo_link) : '#';

            const slide = document.createElement('div');
            // 'detail-slide' is the selector required by LocalCharacterSlider
            slide.className = 'detail-slide absolute transition-all duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] cursor-pointer';
            slide.dataset.index = index;
            slide.style.opacity = '0';
            slide.style.pointerEvents = 'none';

            slide.onclick = () => {
                if (detailSlider && projects.length > 1) {
                    if (detailSlider.current !== index) {
                        detailSlider.goTo(index);
                    } else if (p.demo_link) {
                        window.open(p.demo_link, linkTarget);
                    } else {
                        // feedback if clicked center but no link
                    }
                }
            };

            slide.innerHTML = `
                <div class="relative bg-white/70 dark:bg-slate-900/60 backdrop-blur-xl rounded-[2rem] border border-[#4b3621]/10 dark:border-white/5 overflow-hidden shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 flex flex-col h-full group">
                    <div class="relative h-48 md:h-56 w-full overflow-hidden bg-gradient-to-br from-[#f8f6f0] to-[#ede8d8] dark:from-slate-900/80 dark:to-slate-800/60">
                        ${imgHtml}
                        <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-white/60 dark:bg-slate-800/60 backdrop-blur-md border border-[#4b3621]/10 dark:border-white/10 text-[9px] font-bold tracking-widest text-[#4b3621]/50 dark:text-slate-400">
                            #${num}
                        </div>
                        <div class="absolute bottom-4 left-5 flex items-center gap-2 mb-0">
                            <span class="px-3 py-1 rounded-full bg-white/70 dark:bg-slate-800/70 backdrop-blur-md text-[10px] font-bold text-[#4b3621]/70 dark:text-white/70 tracking-wider uppercase border border-[#4b3621]/5 dark:border-white/5">
                                ${tech}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 md:p-8 flex flex-col flex-grow">
                        <h3 class="text-xl md:text-2xl font-bold text-[#4b3621] dark:text-white mb-3 font-playfair leading-tight tracking-tight group-hover:text-[#115e59] dark:group-hover:text-emerald-400 transition-colors line-clamp-2">
                            ${title}
                        </h3>
                        <p class="text-[#4b3621]/65 dark:text-slate-400 text-sm leading-relaxed mb-6 flex-grow font-light">
                            ${description}
                        </p>
                        <div class="mt-auto pt-5 border-t border-[#4b3621]/10 dark:border-white/10 relative z-10 pointer-events-none">
                            <a href="${linkHref}" target="${linkTarget}" class="inline-flex items-center gap-3 text-[#4b3621] dark:text-white font-bold text-[11px] uppercase tracking-[0.15em] hover:text-[#115e59] dark:hover:text-emerald-400 transition-colors duration-300 group/link pointer-events-auto">
                                <span>Kunjungi Project</span>
                                <div class="w-8 h-[1px] bg-[#4b3621]/20 dark:bg-white/20 group-hover/link:w-12 group-hover/link:bg-[#115e59] dark:group-hover/link:bg-emerald-400 transition-all duration-500"></div>
                                <i class="fa-solid fa-arrow-up-right-from-square text-[9px] -ml-1 group-hover/link:translate-x-1 group-hover/link:-translate-y-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            `;
            container.appendChild(slide);

            if (projects.length > 1) {
                const dot = document.createElement('button');
                dot.className = "detail-dot w-2 h-2 rounded-full bg-[#4b3621]/20 dark:bg-white/20 transition-all duration-500 hover:bg-[#115e59] dark:hover:bg-emerald-400 cursor-pointer";
                dot.dataset.index = index;
                dot.onclick = () => { if(detailSlider) detailSlider.goTo(index); };
                dotsContainer.appendChild(dot);
            }
        });

        // Initialize Slider
        detailSlider = new LocalCharacterSlider('detail', projects.length);
    }

    // Dynamic Search Handler
    document.getElementById('projectSearch').addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase();
        
        // Return original instantly if empty
        if (query.trim() === '') {
            renderProjects(allProjects);
            return;
        }

        const filtered = allProjects.filter(p => {
            return (p.title && p.title.toLowerCase().includes(query)) || 
                   (p.technology && p.technology.toLowerCase().includes(query)) ||
                   (p.description && p.description.toLowerCase().includes(query));
        });
        renderProjects(filtered);
    });

    // Initial load
    renderProjects(allProjects);
</script>

@endsection