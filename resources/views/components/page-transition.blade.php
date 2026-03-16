<div id="page-transition" class="fixed inset-0 z-[9999] flex items-center justify-center bg-[#020617] pointer-events-none" style="opacity: 0; display: none;">
    {{-- Starry Background for Transition --}}
    <div class="absolute inset-0 overflow-hidden">
        @for($i = 0; $i < 50; $i++)
            <div class="absolute bg-white rounded-full animate-pulse" 
                 style="width: {{ rand(1, 3) }}px; height: {{ rand(1, 3) }}px; top: {{ rand(0, 100) }}%; left: {{ rand(0, 100) }}%; animation-delay: {{ rand(0, 2000) }}ms;">
            </div>
        @endfor
    </div>

    {{-- Flying Rocket container --}}
    <div id="transition-astronaut" class="relative z-10 flex flex-col items-center justify-center" style="opacity: 0; transform: translateY(40px);">
        <i class="fa-solid fa-rocket text-7xl md:text-9xl text-emerald-400 drop-shadow-[0_0_30px_rgba(52,211,153,0.8)] animate-bounce"></i>
        
        {{-- Rocket engine fire effect --}}
        <div class="w-12 h-24 bg-gradient-to-t from-transparent via-orange-500 to-yellow-300 blur-md rounded-full mt-2 animate-pulse" style="animation-duration: 0.1s;"></div>
        
        <h2 class="text-2xl font-bold mt-8 bg-gradient-to-r from-emerald-400 to-blue-400 bg-clip-text text-transparent animate-pulse tracking-widest">
            MELUNCUR...
        </h2>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const transitionScreen = document.getElementById('page-transition');
    const astronaut = document.getElementById('transition-astronaut');

    // Rocket transition: only triggers when clicking internal links
    const links = document.querySelectorAll('a[href]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            const target = this.getAttribute('target');
            
            // Skip anchors, external links, mailto, whatsapp, blank targets, and direct google mail links
            if (!href || href.startsWith('#') || href.includes('mailto:') || href.includes('wa.me') || href.includes('mail.google.com') || target === '_blank') {
                return;
            }

            // Same-page links: scroll instead of launching rocket
            try {
                const linkUrl = new URL(href, window.location.origin);
                if (linkUrl.pathname === window.location.pathname) {
                    e.preventDefault();
                    // Scroll to top smoothly if no hash, otherwise let anchor scroll handle it
                    if (!linkUrl.hash) {
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    }
                    return;
                }
            } catch(err) {
                return; // Invalid URL, skip
            }

            e.preventDefault();

            // Show rocket transition screen
            transitionScreen.style.display = 'flex';
            transitionScreen.style.opacity = '0';
            transitionScreen.style.pointerEvents = 'auto';

            // Fade in the dark sky
            requestAnimationFrame(() => {
                transitionScreen.style.transition = 'opacity 0.4s ease-in';
                transitionScreen.style.opacity = '1';
            });

            // Show rocket after sky is visible
            setTimeout(() => {
                astronaut.style.transition = 'opacity 0.4s ease-out, transform 0.4s ease-out';
                astronaut.style.opacity = '1';
                astronaut.style.transform = 'translateY(0)';
            }, 350);

            // After rocket is visible, fly it up and navigate
            setTimeout(() => {
                astronaut.style.transition = 'transform 0.5s ease-in';
                astronaut.style.transform = 'translateY(-120vh)';
            }, 800);

            // Navigate to the new page
            setTimeout(() => {
                window.location.href = href;
            }, 1100);
        });
    });
});
</script>
