<div id="page-transition" class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-[#fbfaf5] dark:bg-slate-950 pointer-events-none" style="opacity: 0; display: none;">
    
    <div class="overflow-hidden mb-2">
        <h2 id="transition-title" class="text-3xl md:text-5xl font-black text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight translate-y-full opacity-0">
            Farrel Azam
        </h2>
    </div>

    <div class="overflow-hidden">
        <p id="transition-subtitle" class="text-[9px] md:text-[10px] font-bold text-[#4b3621]/40 dark:text-slate-500 tracking-[0.4em] uppercase translate-y-full opacity-0">
            LOADING...
        </p>
    </div>

    {{-- Minimal Loading Line --}}
    <div class="mt-8 w-24 h-[1px] bg-[#4b3621]/10 dark:bg-white/10 overflow-hidden opacity-0" id="transition-bar-container">
        <div id="transition-bar" class="w-0 h-full bg-[#115e59] dark:bg-emerald-400"></div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const transitionScreen = document.getElementById('page-transition');
    const title = document.getElementById('transition-title');
    const subtitle = document.getElementById('transition-subtitle');
    const barContainer = document.getElementById('transition-bar-container');
    const bar = document.getElementById('transition-bar');

    // Select all internal links
    const links = document.querySelectorAll('a[href]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            const target = this.getAttribute('target');
            
            // Skip anchors, external links, mailto, whatsapp, blank targets, etc.
            if (!href || href.startsWith('#') || href.includes('mailto:') || href.includes('wa.me') || href.includes('mail.google.com') || target === '_blank') {
                return;
            }

            // Same-page links: scroll instead of transition
            try {
                const linkUrl = new URL(href, window.location.origin);
                if (linkUrl.pathname === window.location.pathname) {
                    if (!linkUrl.hash) {
                        e.preventDefault();
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    }
                    return;
                }

                // Skip for Dashboard/Admin
                if (linkUrl.pathname.startsWith('/dashboard') || linkUrl.pathname.startsWith('/profile')) {
                    return;
                }
            } catch(err) {
                return;
            }

            e.preventDefault();

            // Prepare GSAP Timeline for the exit
            if(typeof gsap === 'undefined') {
                window.location.href = href;
                return;
            }

            const tl = gsap.timeline({
                onComplete: () => {
                    window.location.href = href;
                }
            });

            // Show Overlay
            transitionScreen.style.display = 'flex';
            transitionScreen.style.pointerEvents = 'auto';

            tl.to(transitionScreen, {
                opacity: 1,
                duration: 0.4,
                ease: "power2.inOut"
            })
            .to([title, subtitle], {
                y: 0,
                opacity: 1,
                duration: 0.6,
                stagger: 0.1,
                ease: "power4.out"
            }, "-=0.2")
            .to(barContainer, {
                opacity: 1,
                duration: 0.3
            }, "-=0.4")
            .to(bar, {
                width: '100%',
                duration: 0.6,
                ease: "power2.inOut"
            }, "-=0.3");
        });
    });
});
</script>
