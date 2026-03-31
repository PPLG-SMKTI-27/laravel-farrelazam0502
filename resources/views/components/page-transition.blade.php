<div id="page-transition" class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-[#fbfaf5] dark:bg-slate-950 pointer-events-none overflow-hidden" style="opacity: 0; display: none;">
    
    {{-- Background Blobs --}}
    <div class="absolute top-[-8%] left-[-5%] w-[38%] h-[38%] bg-[#e5eee2]/40 blur-[90px] rounded-full dark:bg-emerald-500/[0.04] dark:blur-[70px]"></div>
    <div class="absolute bottom-[-8%] right-[-5%] w-[38%] h-[38%] bg-[#eedebf]/35 blur-[90px] rounded-full dark:bg-blue-500/[0.04] dark:blur-[70px]"></div>

    {{-- CORNERS (Light) --}}
    <svg class="transition-corner absolute top-0 left-0 w-36 h-36 md:w-44 md:h-44 dark:hidden" viewBox="0 0 180 180" fill="none" style="opacity:0;">
        <path d="M5 175 L5 35 Q5 5 35 5 L175 5" stroke="#4b3621" stroke-opacity="0.3" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M5 140 Q5 14 140 5" stroke="#286050" stroke-opacity="0.25" stroke-width="2" fill="none" stroke-dasharray="7 5"/>
        <path d="M18 110 Q18 26 110 18" stroke="#b89574" stroke-opacity="0.15" stroke-width="1.2" fill="none"/>
        
        <circle cx="5" cy="65" r="3" fill="#b89574" fill-opacity="0.35"/><circle cx="65" cy="5" r="3" fill="#b89574" fill-opacity="0.35"/>
        
        <circle cx="135" cy="5" r="1.5" fill="#b89574" fill-opacity="0.15"/>
        <path d="M28 68 Q44 42 66 32 Q48 46 36 72 Z" fill="#286050" fill-opacity="0.14"/>
        <path d="M32 65 Q44 46 60 38" stroke="#286050" stroke-opacity="0.1" stroke-width="0.8" fill="none"/>
        <path d="M90 5 L95 12 L90 19 L85 12 Z" fill="#4b3621" fill-opacity="0.15"/>
        <line x1="44" y1="5" x2="44" y2="14" stroke="#286050" stroke-opacity="0.2" stroke-width="1"/><line x1="39" y1="9.5" x2="49" y2="9.5" stroke="#286050" stroke-opacity="0.2" stroke-width="1"/>
    </svg>
    <svg class="transition-corner absolute top-0 right-0 w-36 h-36 md:w-44 md:h-44 dark:hidden" viewBox="0 0 180 180" fill="none" style="opacity:0;">
        <path d="M175 175 L175 35 Q175 5 145 5 L5 5" stroke="#4b3621" stroke-opacity="0.3" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M175 140 Q175 14 40 5" stroke="#286050" stroke-opacity="0.25" stroke-width="2" fill="none" stroke-dasharray="7 5"/>
        <path d="M162 110 Q162 26 70 18" stroke="#b89574" stroke-opacity="0.15" stroke-width="1.2" fill="none"/>
        
        <circle cx="175" cy="65" r="3" fill="#b89574" fill-opacity="0.35"/><circle cx="115" cy="5" r="3" fill="#b89574" fill-opacity="0.35"/>
        
        <path d="M152 68 Q136 42 114 32 Q132 46 144 72 Z" fill="#286050" fill-opacity="0.14"/>
        <path d="M90 5 L95 12 L90 19 L85 12 Z" fill="#4b3621" fill-opacity="0.15"/>
        <line x1="136" y1="5" x2="136" y2="14" stroke="#286050" stroke-opacity="0.2" stroke-width="1"/><line x1="131" y1="9.5" x2="141" y2="9.5" stroke="#286050" stroke-opacity="0.2" stroke-width="1"/>
    </svg>
    <svg class="transition-corner absolute bottom-0 left-0 w-36 h-36 md:w-44 md:h-44 dark:hidden" viewBox="0 0 180 180" fill="none" style="opacity:0;">
        <path d="M5 5 L5 145 Q5 175 35 175 L175 175" stroke="#4b3621" stroke-opacity="0.3" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M5 40 Q5 166 140 175" stroke="#286050" stroke-opacity="0.25" stroke-width="2" fill="none" stroke-dasharray="7 5"/>
        <path d="M18 70 Q18 154 110 162" stroke="#b89574" stroke-opacity="0.15" stroke-width="1.2" fill="none"/>
        
        <circle cx="5" cy="115" r="3" fill="#b89574" fill-opacity="0.35"/><circle cx="65" cy="175" r="3" fill="#b89574" fill-opacity="0.35"/>
        <path d="M28 112 Q44 138 66 148 Q48 134 36 108 Z" fill="#286050" fill-opacity="0.14"/>
        <path d="M90 175 L95 168 L90 161 L85 168 Z" fill="#4b3621" fill-opacity="0.15"/>
    </svg>
    <svg class="transition-corner absolute bottom-0 right-0 w-36 h-36 md:w-44 md:h-44 dark:hidden" viewBox="0 0 180 180" fill="none" style="opacity:0;">
        <path d="M175 5 L175 145 Q175 175 145 175 L5 175" stroke="#4b3621" stroke-opacity="0.3" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M175 40 Q175 166 40 175" stroke="#286050" stroke-opacity="0.25" stroke-width="2" fill="none" stroke-dasharray="7 5"/>
        <path d="M162 70 Q162 154 70 162" stroke="#b89574" stroke-opacity="0.15" stroke-width="1.2" fill="none"/>
        
        <circle cx="175" cy="115" r="3" fill="#b89574" fill-opacity="0.35"/><circle cx="115" cy="175" r="3" fill="#b89574" fill-opacity="0.35"/>
        <path d="M152 112 Q136 138 114 148 Q132 134 144 108 Z" fill="#286050" fill-opacity="0.14"/>
        <path d="M90 175 L95 168 L90 161 L85 168 Z" fill="#4b3621" fill-opacity="0.15"/>
    </svg>

    {{-- CORNERS (Dark) --}}
    <svg class="transition-corner-dark absolute top-0 left-0 w-36 h-36 md:w-44 md:h-44 hidden dark:block" viewBox="0 0 180 180" fill="none" style="opacity:0;">
        <path d="M5 175 L5 35 Q5 5 35 5 L175 5" stroke="#10b981" stroke-opacity="0.35" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M5 140 Q5 14 140 5" stroke="#3b82f6" stroke-opacity="0.2" stroke-width="1.5" fill="none" stroke-dasharray="6 4"/>
    </svg>
    <svg class="transition-corner-dark absolute top-0 right-0 w-36 h-36 md:w-44 md:h-44 hidden dark:block" viewBox="0 0 180 180" fill="none" style="opacity:0;">
        <path d="M175 175 L175 35 Q175 5 145 5 L5 5" stroke="#10b981" stroke-opacity="0.35" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M175 140 Q175 14 40 5" stroke="#3b82f6" stroke-opacity="0.2" stroke-width="1.5" fill="none" stroke-dasharray="6 4"/>
    </svg>
    <svg class="transition-corner-dark absolute bottom-0 left-0 w-36 h-36 md:w-44 md:h-44 hidden dark:block" viewBox="0 0 180 180" fill="none" style="opacity:0;">
        <path d="M5 5 L5 145 Q5 175 35 175 L175 175" stroke="#10b981" stroke-opacity="0.35" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M5 40 Q5 166 140 175" stroke="#3b82f6" stroke-opacity="0.2" stroke-width="1.5" fill="none" stroke-dasharray="6 4"/>
    </svg>
    <svg class="transition-corner-dark absolute bottom-0 right-0 w-36 h-36 md:w-44 md:h-44 hidden dark:block" viewBox="0 0 180 180" fill="none" style="opacity:0;">
        <path d="M175 5 L175 145 Q175 175 145 175 L5 175" stroke="#10b981" stroke-opacity="0.35" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M175 40 Q175 166 40 175" stroke="#3b82f6" stroke-opacity="0.2" stroke-width="1.5" fill="none" stroke-dasharray="6 4"/>
    </svg>

    {{-- Double Frame --}}
    <div class="transition-frame absolute inset-5 md:inset-8 border-[2px] border-[#4b3621]/[0.1] dark:border-emerald-400/[0.12] rounded-2xl pointer-events-none" style="opacity:0;"></div>
    <div class="transition-frame absolute inset-9 md:inset-12 border border-dashed border-[#286050]/[0.1] dark:border-emerald-400/[0.08] rounded-xl pointer-events-none" style="opacity:0;"></div>

    {{-- Edge Vine Lines (All 4 sides) --}}
    <svg class="transition-edge absolute top-0 left-[12%] w-[76%] h-12 dark:hidden" viewBox="0 0 800 42" fill="none" preserveAspectRatio="none" style="opacity:0;">
        <path d="M0 35 Q40 8 80 24 Q120 38 160 14 Q200 0 240 22 Q280 38 320 12 Q360 0 400 26 Q440 40 480 16 Q520 0 560 24 Q600 38 640 12 Q680 0 720 26 Q760 38 800 14" stroke="#4b3621" stroke-opacity="0.13" stroke-width="2" fill="none"/>
        <path d="M80 24 Q88 16 96 20 Q90 24 84 26 Z" fill="#286050" fill-opacity="0.12"/>
        <path d="M320 12 Q328 4 336 8 Q330 12 324 14 Z" fill="#286050" fill-opacity="0.1"/>
        <path d="M560 24 Q568 16 576 20 Q570 24 564 26 Z" fill="#286050" fill-opacity="0.12"/>
        <circle cx="160" cy="14" r="2.5" fill="#b89574" fill-opacity="0.25"/><circle cx="400" cy="26" r="2.5" fill="#b89574" fill-opacity="0.25"/><circle cx="640" cy="12" r="2.5" fill="#b89574" fill-opacity="0.2"/>
    </svg>
    <svg class="transition-edge absolute bottom-0 left-[12%] w-[76%] h-12 dark:hidden" viewBox="0 0 800 42" fill="none" preserveAspectRatio="none" style="opacity:0;">
        <path d="M0 7 Q40 34 80 18 Q120 4 160 28 Q200 42 240 20 Q280 4 320 30 Q360 42 400 16 Q440 2 480 26 Q520 42 560 18 Q600 4 640 30 Q680 42 720 16 Q760 4 800 28" stroke="#4b3621" stroke-opacity="0.13" stroke-width="2" fill="none"/>
        <path d="M80 18 Q88 26 96 22 Q90 18 84 16 Z" fill="#286050" fill-opacity="0.12"/>
        <path d="M320 30 Q328 38 336 34 Q330 30 324 28 Z" fill="#286050" fill-opacity="0.1"/>
        <circle cx="160" cy="28" r="2.5" fill="#b89574" fill-opacity="0.25"/><circle cx="400" cy="16" r="2.5" fill="#b89574" fill-opacity="0.25"/><circle cx="640" cy="30" r="2.5" fill="#b89574" fill-opacity="0.2"/>
    </svg>
    <svg class="transition-edge absolute left-0 top-[12%] w-12 h-[76%] dark:hidden" viewBox="0 0 42 800" fill="none" preserveAspectRatio="none" style="opacity:0;">
        <path d="M35 0 Q8 40 24 80 Q38 120 14 160 Q0 200 22 240 Q38 280 12 320 Q0 360 26 400 Q40 440 16 480 Q0 520 24 560 Q38 600 12 640 Q0 680 26 720 Q38 760 14 800" stroke="#4b3621" stroke-opacity="0.12" stroke-width="1.8" fill="none"/>
        <circle cx="14" cy="160" r="2.5" fill="#b89574" fill-opacity="0.25"/><circle cx="12" cy="320" r="2.5" fill="#b89574" fill-opacity="0.2"/><circle cx="16" cy="480" r="2.5" fill="#b89574" fill-opacity="0.25"/>
    </svg>
    <svg class="transition-edge absolute right-0 top-[12%] w-12 h-[76%] dark:hidden" viewBox="0 0 42 800" fill="none" preserveAspectRatio="none" style="opacity:0;">
        <path d="M7 0 Q34 40 18 80 Q4 120 28 160 Q42 200 20 240 Q4 280 30 320 Q42 360 16 400 Q2 440 26 480 Q42 520 18 560 Q4 600 30 640 Q42 680 16 720 Q4 760 28 800" stroke="#4b3621" stroke-opacity="0.12" stroke-width="1.8" fill="none"/>
        <circle cx="28" cy="160" r="2.5" fill="#b89574" fill-opacity="0.25"/><circle cx="30" cy="320" r="2.5" fill="#b89574" fill-opacity="0.2"/><circle cx="26" cy="480" r="2.5" fill="#b89574" fill-opacity="0.25"/>
    </svg>

    {{-- Mid-edge ornaments (Brown tones) --}}
    <svg class="transition-mid absolute top-1 left-1/2 -translate-x-1/2 w-8 h-8 dark:hidden" viewBox="0 0 32 32" fill="none" style="opacity:0;"><path d="M16 3 L27 16 L16 29 L5 16 Z" stroke="#4b3621" stroke-opacity="0.25" stroke-width="1.3" fill="#4b3621" fill-opacity="0.04"/></svg>
    <svg class="transition-mid absolute bottom-1 left-1/2 -translate-x-1/2 w-8 h-8 dark:hidden" viewBox="0 0 32 32" fill="none" style="opacity:0;"><path d="M16 3 L27 16 L16 29 L5 16 Z" stroke="#4b3621" stroke-opacity="0.25" stroke-width="1.3" fill="#4b3621" fill-opacity="0.04"/></svg>
    <svg class="transition-mid absolute left-1 top-1/2 -translate-y-1/2 w-8 h-10 dark:hidden" viewBox="0 0 32 40" fill="none" style="opacity:0;"><path d="M5 20 Q16 6 27 20 Q16 34 5 20 Z" stroke="#b89574" stroke-opacity="0.25" stroke-width="1.3" fill="#b89574" fill-opacity="0.05"/></svg>
    <svg class="transition-mid absolute right-1 top-1/2 -translate-y-1/2 w-8 h-10 dark:hidden" viewBox="0 0 32 40" fill="none" style="opacity:0;"><path d="M5 20 Q16 6 27 20 Q16 34 5 20 Z" stroke="#b89574" stroke-opacity="0.25" stroke-width="1.3" fill="#b89574" fill-opacity="0.05"/></svg>
    {{-- Dark mid (slate tones) --}}
    <svg class="transition-mid hidden dark:block absolute top-1 left-1/2 -translate-x-1/2 w-8 h-8" viewBox="0 0 32 32" fill="none" style="opacity:0;"><path d="M16 3 L27 16 L16 29 L5 16 Z" stroke="#94a3b8" stroke-opacity="0.25" stroke-width="1.3" fill="#94a3b8" fill-opacity="0.05"/></svg>
    <svg class="transition-mid hidden dark:block absolute bottom-1 left-1/2 -translate-x-1/2 w-8 h-8" viewBox="0 0 32 32" fill="none" style="opacity:0;"><path d="M16 3 L27 16 L16 29 L5 16 Z" stroke="#94a3b8" stroke-opacity="0.25" stroke-width="1.3" fill="#94a3b8" fill-opacity="0.05"/></svg>
    <svg class="transition-mid hidden dark:block absolute left-1 top-1/2 -translate-y-1/2 w-8 h-10" viewBox="0 0 32 40" fill="none" style="opacity:0;"><path d="M5 20 Q16 6 27 20 Q16 34 5 20 Z" stroke="#94a3b8" stroke-opacity="0.25" stroke-width="1.3" fill="#94a3b8" fill-opacity="0.05"/></svg>
    <svg class="transition-mid hidden dark:block absolute right-1 top-1/2 -translate-y-1/2 w-8 h-10" viewBox="0 0 32 40" fill="none" style="opacity:0;"><path d="M5 20 Q16 6 27 20 Q16 34 5 20 Z" stroke="#94a3b8" stroke-opacity="0.25" stroke-width="1.3" fill="#94a3b8" fill-opacity="0.05"/></svg>

    {{-- Floating Particles --}}
    <div class="transition-particle dark:hidden absolute w-[7px] h-[7px] rounded-full bg-[#4b3621]/20" style="top:16%;right:10%;"></div>
    <div class="transition-particle dark:hidden absolute w-[8px] h-[8px] rounded-full bg-[#b89574]/22" style="top:78%;right:5%;"></div>
    <div class="transition-particle dark:hidden absolute w-[7px] h-[7px] rounded-full bg-[#4b3621]/15" style="top:48%;right:3%;"></div>
    <div class="transition-particle dark:hidden absolute w-[5px] h-[5px] rounded-full bg-[#b89574]/25" style="top:88%;left:35%;"></div>
    <div class="transition-particle dark:hidden absolute w-[4px] h-[4px] rounded-full bg-[#4b3621]/22" style="top:22%;left:24%;"></div>
    <div class="transition-particle dark:hidden absolute w-[5px] h-[5px] rounded-full bg-[#b89574]/25" style="top:90%;right:25%;"></div>
    <div class="transition-particle hidden dark:block absolute w-[5px] h-[5px] rounded-full bg-blue-400/30 shadow-[0_0_8px_rgba(59,130,246,0.25)]" style="top:16%;right:10%;"></div>
    <div class="transition-particle hidden dark:block absolute w-[4px] h-[4px] rounded-full bg-blue-400/25" style="top:35%;left:4%;"></div>
    <div class="transition-particle hidden dark:block absolute w-[4px] h-[4px] rounded-full bg-blue-400/25 shadow-[0_0_6px_rgba(59,130,246,0.2)]" style="top:5%;right:38%;"></div>

    {{-- Scattered shapes --}}
    <svg class="transition-scatter dark:hidden absolute w-4 h-4" style="top:14%;left:20%;opacity:0;" viewBox="0 0 16 16"><line x1="8" y1="2" x2="8" y2="14" stroke="#4b3621" stroke-opacity="0.2" stroke-width="1.2"/><line x1="2" y1="8" x2="14" y2="8" stroke="#4b3621" stroke-opacity="0.2" stroke-width="1.2"/></svg>
    <svg class="transition-scatter dark:hidden absolute w-4 h-4" style="top:82%;right:22%;opacity:0;" viewBox="0 0 16 16"><line x1="8" y1="2" x2="8" y2="14" stroke="#4b3621" stroke-opacity="0.2" stroke-width="1.2"/><line x1="2" y1="8" x2="14" y2="8" stroke="#4b3621" stroke-opacity="0.2" stroke-width="1.2"/></svg>
    <svg class="transition-scatter dark:hidden absolute w-4 h-4" style="top:32%;right:20%;opacity:0;" viewBox="0 0 16 16"><path d="M8 1 L15 8 L8 15 L1 8 Z" stroke="#286050" stroke-opacity="0.2" stroke-width="1" fill="#286050" fill-opacity="0.04"/></svg>
    <svg class="transition-scatter dark:hidden absolute w-4 h-4" style="top:65%;left:24%;opacity:0;" viewBox="0 0 16 16"><path d="M8 1 L15 8 L8 15 L1 8 Z" stroke="#286050" stroke-opacity="0.2" stroke-width="1" fill="#286050" fill-opacity="0.04"/></svg>
    <svg class="transition-scatter dark:hidden absolute w-5 h-5" style="top:44%;left:16%;opacity:0;" viewBox="0 0 20 20"><circle cx="10" cy="10" r="7" stroke="#b89574" stroke-opacity="0.2" stroke-width="1" fill="none"/><circle cx="10" cy="10" r="2" fill="#b89574" fill-opacity="0.2"/></svg>
    <svg class="transition-scatter dark:hidden absolute w-6 h-3" style="top:24%;left:72%;opacity:0;" viewBox="0 0 24 12"><circle cx="4" cy="6" r="2" fill="#4b3621" fill-opacity="0.2"/><circle cx="12" cy="6" r="2" fill="#4b3621" fill-opacity="0.15"/><circle cx="20" cy="6" r="2" fill="#4b3621" fill-opacity="0.1"/></svg>

    <svg class="transition-scatter hidden dark:block absolute w-4 h-4" style="top:14%;left:20%;opacity:0;" viewBox="0 0 16 16"><line x1="8" y1="2" x2="8" y2="14" stroke="#10b981" stroke-opacity="0.25" stroke-width="1.2"/><line x1="2" y1="8" x2="14" y2="8" stroke="#10b981" stroke-opacity="0.25" stroke-width="1.2"/></svg>
    <svg class="transition-scatter hidden dark:block absolute w-4 h-4" style="top:82%;right:22%;opacity:0;" viewBox="0 0 16 16"><line x1="8" y1="2" x2="8" y2="14" stroke="#10b981" stroke-opacity="0.25" stroke-width="1.2"/><line x1="2" y1="8" x2="14" y2="8" stroke="#10b981" stroke-opacity="0.25" stroke-width="1.2"/></svg>
    <svg class="transition-scatter hidden dark:block absolute w-4 h-4" style="top:32%;right:20%;opacity:0;" viewBox="0 0 16 16"><path d="M8 1 L15 8 L8 15 L1 8 Z" stroke="#10b981" stroke-opacity="0.25" stroke-width="1" fill="#10b981" fill-opacity="0.05"/></svg>

    {{-- Center Content --}}
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

    document.querySelectorAll('.transition-particle').forEach((p) => {
        if (typeof gsap !== 'undefined') {
            gsap.to(p, {
                y: `${(Math.random() > 0.5 ? '-' : '+')}=${20 + Math.random() * 35}`,
                x: `${(Math.random() > 0.5 ? '-' : '+')}=${10 + Math.random() * 18}`,
                opacity: Math.random() * 0.5 + 0.2,
                duration: 2.5 + Math.random() * 3,
                repeat: -1, yoyo: true, ease: "sine.inOut",
                delay: Math.random() * 1.5
            });
        }
    });

    const links = document.querySelectorAll('a[href]');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            const target = this.getAttribute('target');
            if (!href || href.startsWith('#') || href.includes('mailto:') || href.includes('wa.me') || href.includes('mail.google.com') || target === '_blank') return;
            try {
                const linkUrl = new URL(href, window.location.origin);
                if (linkUrl.pathname === window.location.pathname) { if (!linkUrl.hash) { e.preventDefault(); window.scrollTo({ top: 0, behavior: 'smooth' }); } return; }
                if (linkUrl.pathname.startsWith('/dashboard') || linkUrl.pathname.startsWith('/profile')) return;
            } catch(err) { return; }

            e.preventDefault();
            if(typeof gsap === 'undefined') { window.location.href = href; return; }

            const tl = gsap.timeline({ onComplete: () => { window.location.href = href; } });
            transitionScreen.style.display = 'flex';
            transitionScreen.style.pointerEvents = 'auto';

            tl.to(transitionScreen, { opacity: 1, duration: 0.4, ease: "power2.inOut" })
              .to(['.transition-corner', '.transition-corner-dark'], { opacity: 1, duration: 0.4, stagger: 0.05, ease: "back.out(1.2)" }, "-=0.2")
              .to('.transition-frame', { opacity: 1, duration: 0.3, stagger: 0.1, ease: "power2.out" }, "-=0.3")
              .to('.transition-edge', { opacity: 1, duration: 0.3, stagger: 0.04, ease: "power2.out" }, "-=0.2")
              .to('.transition-mid', { opacity: 1, duration: 0.3, stagger: 0.04, ease: "power2.out" }, "-=0.2")
              .to('.transition-scatter', { opacity: 1, duration: 0.4, stagger: 0.03, ease: "power2.out" }, "-=0.2")
              .to([title, subtitle], { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power4.out" }, "-=0.2")
              .to(barContainer, { opacity: 1, duration: 0.3 }, "-=0.4")
              .to(bar, { width: '100%', duration: 0.6, ease: "power2.inOut" }, "-=0.3");
        });
    });
});
</script>
