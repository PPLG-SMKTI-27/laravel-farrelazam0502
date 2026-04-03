{{-- Certificate Section with Character Select Carousel + Detail Modal --}}
<section id="certificate"
    class="relative min-h-[70vh] flex items-center justify-center px-4 md:px-6 overflow-hidden py-20 transition-colors duration-700 bg-transparent dark:bg-transparent">

    <div class="relative z-10 max-w-7xl w-full">

        <h2 class="text-3xl md:text-4xl font-black text-center mb-3 text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight">
            {{ __('Sertifikat') }}
        </h2>
        <p class="text-center text-[#4b3621]/60 dark:text-slate-400 text-sm mb-12 max-w-md mx-auto font-light">
            {{ __('Bukti kompetensi dan pencapaian yang telah saya raih.') }}
        </p>

        @if($certificates->isEmpty())
            <div class="text-center py-16">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-[#4b3621]/5 dark:bg-white/5 flex items-center justify-center">
                    <i class="fa-solid fa-award text-2xl text-[#4b3621]/30 dark:text-white/30"></i>
                </div>
                <p class="text-[#4b3621]/50 dark:text-slate-500 text-sm italic">{{ __('Belum ada sertifikat yang ditambahkan.') }}</p>
            </div>
        @else
            {{-- CHARACTER SELECT CAROUSEL --}}
            <div class="cert-carousel relative w-full" id="certCarousel">
                
                {{-- Navigation Arrows (Only if > 1 cert) --}}
                @if($certificates->count() > 1)
                <button onclick="certSlider.prev()" class="absolute left-0 md:left-4 top-1/2 -translate-y-1/2 z-40 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 dark:bg-slate-800/80 backdrop-blur-md border border-[#4b3621]/10 dark:border-white/10 flex items-center justify-center text-[#4b3621] dark:text-white shadow-xl hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 transition-all duration-300 hover:scale-110 cursor-pointer">
                    <i class="fa-solid fa-chevron-left text-sm"></i>
                </button>
                <button onclick="certSlider.next()" class="absolute right-0 md:right-4 top-1/2 -translate-y-1/2 z-40 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 dark:bg-slate-800/80 backdrop-blur-md border border-[#4b3621]/10 dark:border-white/10 flex items-center justify-center text-[#4b3621] dark:text-white shadow-xl hover:bg-[#115e59] hover:text-white dark:hover:bg-emerald-500 dark:hover:text-slate-900 transition-all duration-300 hover:scale-110 cursor-pointer">
                    <i class="fa-solid fa-chevron-right text-sm"></i>
                </button>
                @endif

                {{-- Cards Container --}}
                <div class="flex items-center justify-center w-full py-8 md:py-12 min-h-[420px] md:min-h-[500px] relative px-12 md:px-20">
                    @foreach($certificates as $index => $cert)
                        <div class="cert-slide absolute transition-all duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] cursor-pointer"
                             data-index="{{ $index }}"
                             onclick="if(certSlider.current === {{ $index }}) { openCertModal({{ $index }}); } else { certSlider.goTo({{ $index }}); }"
                             style="opacity: 0; pointer-events: none;">
                            
                            <div class="relative bg-white/70 dark:bg-slate-900/60 backdrop-blur-xl rounded-[2rem] border border-[#4b3621]/10 dark:border-white/5 overflow-hidden shadow-2xl flex flex-col h-full transition-all duration-500">
                                
                                {{-- Visual Header --}}
                                <div class="relative h-36 md:h-44 w-full overflow-hidden bg-gradient-to-br from-[#f8f6f0] to-[#ede8d8] dark:from-slate-900/80 dark:to-slate-800/60">
                                    @if($cert->image)
                                        <img src="{{ Storage::url($cert->image) }}" alt="{{ $cert->title }}" class="absolute inset-0 w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>
                                    @else
                                        <div class="absolute inset-0 opacity-10 dark:opacity-5" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 20px, currentColor 20px, currentColor 21px); color: #4b3621;"></div>
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-[#115e59]/10 dark:bg-emerald-400/10 flex items-center justify-center">
                                                <i class="fa-solid fa-certificate text-2xl md:text-3xl text-[#115e59]/60 dark:text-emerald-400/60"></i>
                                            </div>
                                        </div>
                                    @endif
                                    {{-- Serial Badge --}}
                                    <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-white/60 dark:bg-slate-800/60 backdrop-blur-md border border-[#4b3621]/10 dark:border-white/10 text-[9px] font-bold tracking-widest text-[#4b3621]/50 dark:text-slate-400">
                                        #{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </div>
                                </div>

                                {{-- Content --}}
                                <div class="p-5 md:p-7 flex flex-col flex-grow">
                                    <h3 class="text-base md:text-lg font-bold text-[#4b3621] dark:text-white mb-2 font-playfair leading-tight">
                                        {{ $cert->title }}
                                    </h3>
                                    <p class="text-[#4b3621]/60 dark:text-slate-400 text-xs md:text-sm mb-1 font-medium">
                                        <i class="fa-solid fa-building text-[10px] mr-1.5 opacity-50"></i>{{ $cert->issuer }}
                                    </p>
                                    <p class="text-[#4b3621]/40 dark:text-slate-500 text-xs mb-4">
                                        <i class="fa-regular fa-calendar text-[10px] mr-1.5 opacity-50"></i>{{ $cert->date }}
                                    </p>

                                    {{-- View Detail Link --}}
                                    <div class="mt-auto">
                                        <span class="inline-flex items-center gap-2 text-[#4b3621] dark:text-white font-bold text-[11px] uppercase tracking-[0.12em] hover:text-[#115e59] dark:hover:text-emerald-400 transition-colors duration-300">
                                            <span>Lihat Detail</span>
                                            <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Dots Indicator (Only if > 1 cert) --}}
                @if($certificates->count() > 1)
                <div class="flex items-center justify-center gap-2 mt-2" id="certDots">
                    @foreach($certificates as $index => $cert)
                        <button onclick="certSlider.goTo({{ $index }})" 
                                class="cert-dot w-2 h-2 rounded-full bg-[#4b3621]/20 dark:bg-white/20 transition-all duration-500 hover:bg-[#115e59] dark:hover:bg-emerald-400 cursor-pointer"
                                data-index="{{ $index }}"></button>
                    @endforeach
                </div>
                @endif
            </div>
        @endif

    </div>
</section>

{{-- CERTIFICATE DETAIL MODAL (LIGHTBOX) --}}
<div id="cert-modal-overlay" class="fixed inset-0 z-[9999] bg-[#e6ddc5] dark:bg-slate-900 hidden items-center justify-center p-4 xl:p-10">
    <div id="cert-modal-content" class="relative flex items-center justify-center max-w-4xl w-full max-h-[80vh] scale-95 opacity-0 transition-all duration-500">
        
        {{-- Close --}}
        <button onclick="closeCertModal()" class="absolute -top-12 right-0 md:-right-12 md:-top-4 w-10 h-10 rounded-full bg-[#4b3621]/10 dark:bg-white/10 hover:bg-[#4b3621]/20 dark:hover:bg-white/20 flex items-center justify-center text-[#4b3621] dark:text-white transition-all duration-300 z-50 cursor-pointer">
            <i class="fa-solid fa-xmark text-lg"></i>
        </button>

        {{-- Fallback Container (if no image) --}}
        <div id="cert-modal-fallback-container" class="w-full h-64 md:h-96 max-w-lg bg-slate-900 rounded-[2rem] border border-white/10 flex items-center justify-center relative overflow-hidden hidden shadow-2xl">
            <div class="absolute inset-0 opacity-5" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 20px, currentColor 20px, currentColor 21px); color: #fff;"></div>
            <div class="w-24 h-24 rounded-full bg-emerald-400/15 flex items-center justify-center z-10">
                <i class="fa-solid fa-award text-5xl text-emerald-400"></i>
            </div>
        </div>

        {{-- Actual Image (Hidden by default) --}}
        <img id="cert-modal-image" src="" alt="Certificate" class="w-auto h-auto max-w-full max-h-[75vh] object-contain rounded-2xl shadow-2xl bg-[#fbfaf5] p-2 md:p-4 hidden cursor-pointer">
    </div>
</div>

<script>
    // Certificate data for modal
    const certData = @json($certificates->values());

    function openCertModal(index) {
        const cert = certData[index];
        if (!cert) return;

        const overlay = document.getElementById('cert-modal-overlay');
        const content = document.getElementById('cert-modal-content');

        // Handle Image Lightbox Logic
        const fallback = document.getElementById('cert-modal-fallback-container');
        const modalImage = document.getElementById('cert-modal-image');

        if (cert.image) {
            // Show Image
            modalImage.src = '/storage/' + cert.image;
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

    function closeCertModal() {
        const overlay = document.getElementById('cert-modal-overlay');
        const content = document.getElementById('cert-modal-content');

        content.style.transform = 'scale(0.95)';
        content.style.opacity = '0';

        setTimeout(() => {
            overlay.classList.add('hidden');
            overlay.classList.remove('flex');
            document.body.style.overflow = '';
        }, 300);
    }

    document.getElementById('cert-modal-overlay')?.addEventListener('click', function(e) {
        closeCertModal();
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeCertModal();
    });

    // Define CharacterSlider globally (used by both certificate and project carousels)
    if (typeof CharacterSlider === 'undefined') {
        class CharacterSlider {
            constructor(prefix, count) {
                this.prefix = prefix;
                this.count = count;
                this.current = 0;
                this.slides = document.querySelectorAll(`.${prefix}-slide`);
                this.dots = document.querySelectorAll(`.${prefix}-dot`);
                this.update();
            }

            goTo(index) {
                this.current = ((index % this.count) + this.count) % this.count;
                this.update();
            }

            next() { this.goTo(this.current + 1); }
            prev() { this.goTo(this.current - 1); }

            update() {
                const isMobile = window.innerWidth < 768;
                
                this.slides.forEach((slide, i) => {
                    const offset = this.getOffset(i);
                    const absOffset = Math.abs(offset);
                    
                    slide.style.opacity = '0';
                    slide.style.pointerEvents = 'none';
                    slide.style.zIndex = '1';
                    slide.style.filter = 'none';
                    slide.style.marginLeft = '0';

                    if (absOffset > 2) return;

                    const isActive = offset === 0;
                    const dir = offset > 0 ? 1 : -1;
                    
                    if (isMobile) {
                        if (absOffset > 1) return;

                        const containerW = window.innerWidth;
                        const activeW = Math.min(containerW * 0.65, 300);
                        const sideW = activeW * 0.6;
                        const sideShift = (activeW / 2) + (sideW / 2) + 8;

                        slide.style.left = '50%';
                        
                        if (isActive) {
                            slide.style.width = activeW + 'px';
                            slide.style.transform = 'translateX(-50%) scale(1)';
                            slide.style.opacity = '1';
                            slide.style.zIndex = '30';
                            slide.style.pointerEvents = 'auto';
                        } else {
                            slide.style.width = sideW + 'px';
                            slide.style.transform = `translateX(calc(-50% + ${dir * sideShift}px)) scale(0.85)`;
                            slide.style.opacity = '0.45';
                            slide.style.zIndex = '10';
                            slide.style.pointerEvents = 'auto';
                            slide.style.filter = 'blur(1px)';
                        }
                    } else {
                        const activeW = 380;
                        const sideW = 260;
                        const tinyW = 200;
                        const sideSpacing = (activeW / 2) + (sideW / 2) + 30;
                        const tinySpacing = sideSpacing + (sideW / 2) + (tinyW / 2) + 20;

                        slide.style.left = '50%';
                        
                        if (isActive) {
                            slide.style.width = activeW + 'px';
                            slide.style.transform = 'translateX(-50%) scale(1)';
                            slide.style.opacity = '1';
                            slide.style.zIndex = '30';
                            slide.style.pointerEvents = 'auto';
                        } else if (absOffset === 1) {
                            slide.style.width = sideW + 'px';
                            slide.style.transform = `translateX(calc(-50% + ${dir * sideSpacing}px)) scale(0.9)`;
                            slide.style.opacity = '0.55';
                            slide.style.zIndex = '20';
                            slide.style.pointerEvents = 'auto';
                            slide.style.filter = 'blur(0.5px)';
                        } else {
                            slide.style.width = tinyW + 'px';
                            slide.style.transform = `translateX(calc(-50% + ${dir * tinySpacing}px)) scale(0.78)`;
                            slide.style.opacity = '0.25';
                            slide.style.zIndex = '10';
                            slide.style.pointerEvents = 'auto';
                            slide.style.filter = 'blur(1.5px)';
                        }
                    }
                });

                this.dots.forEach((dot, i) => {
                    if (i === this.current) {
                        dot.style.width = '24px';
                        dot.classList.add('bg-[#115e59]', 'dark:bg-emerald-400');
                        dot.classList.remove('bg-[#4b3621]/20', 'dark:bg-white/20');
                    } else {
                        dot.style.width = '8px';
                        dot.classList.remove('bg-[#115e59]', 'dark:bg-emerald-400');
                        dot.classList.add('bg-[#4b3621]/20', 'dark:bg-white/20');
                    }
                });
            }

            getOffset(index) {
                let offset = index - this.current;
                if (offset > this.count / 2) offset -= this.count;
                if (offset < -this.count / 2) offset += this.count;
                return offset;
            }
        }
        window.CharacterSlider = CharacterSlider;
    }

    // Certificate Carousel
    @if(!$certificates->isEmpty())
    const certSlider = new window.CharacterSlider('cert', {{ count($certificates) }});
    window.addEventListener('resize', () => certSlider.update());
    @endif
</script>
