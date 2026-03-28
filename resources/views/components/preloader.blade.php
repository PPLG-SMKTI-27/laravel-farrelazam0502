<div id="preloader" class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-[#fbfaf5] dark:bg-slate-900 overflow-hidden">
    
    <div class="overflow-hidden mb-4">
        <h1 id="preloader-title" class="text-4xl md:text-6xl lg:text-7xl font-black text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight translate-y-full opacity-0">
            Farrel Azam
        </h1>
    </div>

    <div class="overflow-hidden">
        <p id="preloader-subtitle" class="text-xs md:text-sm font-bold text-[#4b3621]/60 dark:text-slate-400 tracking-[0.3em] uppercase translate-y-full opacity-0">
            Portfolio
        </p>
    </div>

    {{-- Loading Bar --}}
    <div class="absolute bottom-16 md:bottom-24 w-48 md:w-64 h-[2px] bg-[#4b3621]/10 dark:bg-white/10 rounded-full overflow-hidden opacity-0" id="preloader-bar-container">
        <div id="preloader-bar" class="absolute top-0 left-0 h-full bg-[#115e59] dark:bg-emerald-400 w-0"></div>
    </div>
</div>

<script>
// Check if preloader already played in this session BEFORE anything else
if (sessionStorage.getItem('preloader_played')) {
    document.getElementById('preloader').style.display = 'none';
} else {
    document.body.classList.add('overflow-hidden');
    
    document.addEventListener('DOMContentLoaded', () => {
        if(typeof gsap === 'undefined') return;

        const tl = gsap.timeline({
            onComplete: () => {
                sessionStorage.setItem('preloader_played', 'true');
                
                // Fade out the whole preloader to reveal the site smoothly
                gsap.to('#preloader', {
                    opacity: 0,
                    duration: 1.2,
                    ease: "power2.inOut",
                    onComplete: () => {
                        document.getElementById('preloader').style.display = 'none';
                        document.body.classList.remove('overflow-hidden');
                    }
                });
            }
        });

        // 1. Reveal Title
        tl.to('#preloader-title', {
            y: 0,
            opacity: 1,
            duration: 1,
            ease: "power4.out",
            delay: 0.2
        })
        // 2. Reveal Subtitle
        .to('#preloader-subtitle', {
            y: 0,
            opacity: 1,
            duration: 0.8,
            ease: "power4.out"
        }, "-=0.6")
        // 3. Show Loading Bar Container
        .to('#preloader-bar-container', {
            opacity: 1,
            duration: 0.5
        }, "-=0.2")
        // 4. Animate Loading Bar Progress
        .to('#preloader-bar', {
            width: '100%',
            duration: 1.2,
            ease: "power2.inOut"
        })
        // 5. Fade out all elements before sliding up
        .to(['#preloader-title', '#preloader-subtitle', '#preloader-bar-container'], {
            y: -30,
            opacity: 0,
            duration: 0.6,
            stagger: 0.1,
            ease: "power2.in"
        }, "+=0.2");
    });
}
</script>
