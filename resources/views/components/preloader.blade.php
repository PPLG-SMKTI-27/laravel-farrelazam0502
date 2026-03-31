<div id="preloader" class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-[#fbfaf5] dark:bg-slate-900 overflow-hidden">
    
    {{-- ============================================= --}}
    {{-- BACKGROUND SOFT BLOBS                         --}}
    {{-- ============================================= --}}
    <div class="absolute top-[-10%] left-[-8%] w-[45%] h-[45%] bg-[#e5eee2]/50 blur-[100px] rounded-full dark:bg-emerald-500/[0.05] dark:blur-[80px]"></div>
    <div class="absolute bottom-[-10%] right-[-8%] w-[45%] h-[45%] bg-[#eedebf]/40 blur-[100px] rounded-full dark:bg-blue-500/[0.04] dark:blur-[80px]"></div>
    <div class="absolute top-[20%] right-[-5%] w-[30%] h-[35%] bg-[#e5ece5]/40 blur-[80px] rounded-full dark:bg-emerald-600/[0.03]"></div>
    <div class="absolute bottom-[20%] left-[-5%] w-[30%] h-[35%] bg-[#f2e2be]/35 blur-[80px] rounded-full dark:bg-blue-600/[0.03]"></div>

    {{-- ============================================= --}}
    {{-- CORNER ORNAMENTS - BIG & VISIBLE              --}}
    {{-- ============================================= --}}

    {{-- Top-Left (Light) --}}
    <svg class="preloader-corner absolute top-0 left-0 w-44 h-44 md:w-52 md:h-52 dark:hidden" viewBox="0 0 200 200" fill="none" style="opacity:0;">
        {{-- Main L-shape --}}
        <path d="M6 190 L6 40 Q6 6 40 6 L190 6" stroke="#4b3621" stroke-opacity="0.3" stroke-width="3" fill="none" stroke-linecap="round"/>
        {{-- Inner curve --}}
        <path d="M6 150 Q6 16 150 6" stroke="#286050" stroke-opacity="0.25" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="8 5"/>
        {{-- Third decorative arc --}}
        <path d="M20 120 Q20 28 120 20" stroke="#b89574" stroke-opacity="0.15" stroke-width="1.2" fill="none"/>
        {{-- Corner dot cluster --}}
        {{-- Edge dots --}}
        <circle cx="6" cy="70" r="3" fill="#b89574" fill-opacity="0.35"/>
        <circle cx="70" cy="6" r="3" fill="#b89574" fill-opacity="0.35"/>
        <circle cx="150" cy="6" r="2" fill="#b89574" fill-opacity="0.15"/>
        {{-- Leaf ornament --}}
        <path d="M30 75 Q50 45 75 35 Q55 50 40 80 Z" fill="#286050" fill-opacity="0.15"/>
        <path d="M35 72 Q50 50 68 42" stroke="#286050" stroke-opacity="0.12" stroke-width="0.8" fill="none"/>
        {{-- Diamond --}}
        <path d="M100 6 L106 14 L100 22 L94 14 Z" fill="#4b3621" fill-opacity="0.15" stroke="#4b3621" stroke-opacity="0.1" stroke-width="0.5"/>
        {{-- Small cross --}}
        <line x1="48" y1="6" x2="48" y2="16" stroke="#286050" stroke-opacity="0.2" stroke-width="1"/>
        <line x1="43" y1="11" x2="53" y2="11" stroke="#286050" stroke-opacity="0.2" stroke-width="1"/>
    </svg>

    {{-- Top-Right (Light) --}}
    <svg class="preloader-corner absolute top-0 right-0 w-44 h-44 md:w-52 md:h-52 dark:hidden" viewBox="0 0 200 200" fill="none" style="opacity:0;">
        <path d="M194 190 L194 40 Q194 6 160 6 L10 6" stroke="#4b3621" stroke-opacity="0.3" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M194 150 Q194 16 50 6" stroke="#286050" stroke-opacity="0.25" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="8 5"/>
        <path d="M180 120 Q180 28 80 20" stroke="#b89574" stroke-opacity="0.15" stroke-width="1.2" fill="none"/>
        <circle cx="194" cy="70" r="3" fill="#b89574" fill-opacity="0.35"/>
        <circle cx="130" cy="6" r="3" fill="#b89574" fill-opacity="0.35"/>
        <circle cx="50" cy="6" r="2" fill="#b89574" fill-opacity="0.15"/>
        <path d="M170 75 Q150 45 125 35 Q145 50 160 80 Z" fill="#286050" fill-opacity="0.15"/>
        <path d="M165 72 Q150 50 132 42" stroke="#286050" stroke-opacity="0.12" stroke-width="0.8" fill="none"/>
        <path d="M100 6 L106 14 L100 22 L94 14 Z" fill="#4b3621" fill-opacity="0.15" stroke="#4b3621" stroke-opacity="0.1" stroke-width="0.5"/>
        <line x1="152" y1="6" x2="152" y2="16" stroke="#286050" stroke-opacity="0.2" stroke-width="1"/>
        <line x1="147" y1="11" x2="157" y2="11" stroke="#286050" stroke-opacity="0.2" stroke-width="1"/>
    </svg>

    {{-- Bottom-Left (Light) --}}
    <svg class="preloader-corner absolute bottom-0 left-0 w-44 h-44 md:w-52 md:h-52 dark:hidden" viewBox="0 0 200 200" fill="none" style="opacity:0;">
        <path d="M6 10 L6 160 Q6 194 40 194 L190 194" stroke="#4b3621" stroke-opacity="0.3" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M6 50 Q6 184 150 194" stroke="#286050" stroke-opacity="0.25" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="8 5"/>
        <path d="M20 80 Q20 172 120 180" stroke="#b89574" stroke-opacity="0.15" stroke-width="1.2" fill="none"/>
        <circle cx="6" cy="130" r="3" fill="#b89574" fill-opacity="0.35"/>
        <circle cx="70" cy="194" r="3" fill="#b89574" fill-opacity="0.35"/>
        <path d="M30 125 Q50 155 75 165 Q55 150 40 120 Z" fill="#286050" fill-opacity="0.15"/>
        <path d="M100 194 L106 186 L100 178 L94 186 Z" fill="#4b3621" fill-opacity="0.15" stroke="#4b3621" stroke-opacity="0.1" stroke-width="0.5"/>
    </svg>

    {{-- Bottom-Right (Light) --}}
    <svg class="preloader-corner absolute bottom-0 right-0 w-44 h-44 md:w-52 md:h-52 dark:hidden" viewBox="0 0 200 200" fill="none" style="opacity:0;">
        <path d="M194 10 L194 160 Q194 194 160 194 L10 194" stroke="#4b3621" stroke-opacity="0.3" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M194 50 Q194 184 50 194" stroke="#286050" stroke-opacity="0.25" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="8 5"/>
        <path d="M180 80 Q180 172 80 180" stroke="#b89574" stroke-opacity="0.15" stroke-width="1.2" fill="none"/>
        <circle cx="194" cy="130" r="3" fill="#b89574" fill-opacity="0.35"/>
        <circle cx="130" cy="194" r="3" fill="#b89574" fill-opacity="0.35"/>
        <path d="M170 125 Q150 155 125 165 Q145 150 160 120 Z" fill="#286050" fill-opacity="0.15"/>
        <path d="M100 194 L106 186 L100 178 L94 186 Z" fill="#4b3621" fill-opacity="0.15" stroke="#4b3621" stroke-opacity="0.1" stroke-width="0.5"/>
    </svg>

    {{-- Dark Mode Corners --}}
    <svg class="preloader-corner-dark absolute top-0 left-0 w-44 h-44 md:w-52 md:h-52 hidden dark:block" viewBox="0 0 200 200" fill="none" style="opacity:0;">
        <path d="M6 190 L6 40 Q6 6 40 6 L190 6" stroke="#10b981" stroke-opacity="0.35" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M6 150 Q6 16 150 6" stroke="#3b82f6" stroke-opacity="0.2" stroke-width="1.5" fill="none" stroke-dasharray="6 4"/>
    </svg>
    <svg class="preloader-corner-dark absolute top-0 right-0 w-44 h-44 md:w-52 md:h-52 hidden dark:block" viewBox="0 0 200 200" fill="none" style="opacity:0;">
        <path d="M194 190 L194 40 Q194 6 160 6 L10 6" stroke="#10b981" stroke-opacity="0.35" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M194 150 Q194 16 50 6" stroke="#3b82f6" stroke-opacity="0.2" stroke-width="1.5" fill="none" stroke-dasharray="6 4"/>
    </svg>
    <svg class="preloader-corner-dark absolute bottom-0 left-0 w-44 h-44 md:w-52 md:h-52 hidden dark:block" viewBox="0 0 200 200" fill="none" style="opacity:0;">
        <path d="M6 10 L6 160 Q6 194 40 194 L190 194" stroke="#10b981" stroke-opacity="0.35" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M6 50 Q6 184 150 194" stroke="#3b82f6" stroke-opacity="0.2" stroke-width="1.5" fill="none" stroke-dasharray="6 4"/>
    </svg>
    <svg class="preloader-corner-dark absolute bottom-0 right-0 w-44 h-44 md:w-52 md:h-52 hidden dark:block" viewBox="0 0 200 200" fill="none" style="opacity:0;">
        <path d="M194 10 L194 160 Q194 194 160 194 L10 194" stroke="#10b981" stroke-opacity="0.35" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M194 50 Q194 184 50 194" stroke="#3b82f6" stroke-opacity="0.2" stroke-width="1.5" fill="none" stroke-dasharray="6 4"/>
    </svg>

    {{-- ============================================= --}}
    {{-- RUNNING EDGE VINE DECORATIONS (All 4 sides)   --}}
    {{-- ============================================= --}}

    {{-- Top Edge - vine with leaves --}}
    <svg class="preloader-edge absolute top-0 left-[15%] w-[70%] h-14 dark:hidden" viewBox="0 0 800 50" fill="none" preserveAspectRatio="none" style="opacity:0;">
        <path d="M0 40 Q40 10 80 28 Q120 42 160 18 Q200 2 240 25 Q280 42 320 15 Q360 0 400 30 Q440 45 480 20 Q520 2 560 28 Q600 42 640 15 Q680 0 720 30 Q760 42 800 18" stroke="#4b3621" stroke-opacity="0.13" stroke-width="2" fill="none"/>
        <path d="M50 38 Q70 15 110 22 Q140 32 170 12 Q210 0 250 22 Q290 38 330 12 Q370 0 410 28 Q450 42 490 16 Q530 0 570 26 Q610 40 650 14 Q690 0 730 28 Q770 40 800 22" stroke="#286050" stroke-opacity="0.1" stroke-width="1.2" fill="none"/>
        {{-- Small leaves along the vine --}}
        <path d="M80 28 Q90 18 100 22 Q92 26 84 30 Z" fill="#286050" fill-opacity="0.12"/>
        <path d="M240 25 Q250 15 260 19 Q252 23 244 27 Z" fill="#286050" fill-opacity="0.1"/>
        <path d="M400 30 Q410 20 420 24 Q412 28 404 32 Z" fill="#286050" fill-opacity="0.12"/>
        <path d="M560 28 Q570 18 580 22 Q572 26 564 30 Z" fill="#286050" fill-opacity="0.1"/>
        <path d="M720 30 Q730 20 740 24 Q732 28 724 32 Z" fill="#286050" fill-opacity="0.12"/>
        {{-- Dots --}}
        <circle cx="160" cy="18" r="2.5" fill="#b89574" fill-opacity="0.25"/>
        <circle cx="320" cy="15" r="2.5" fill="#b89574" fill-opacity="0.2"/>
        <circle cx="480" cy="20" r="2.5" fill="#b89574" fill-opacity="0.25"/>
        <circle cx="640" cy="15" r="2.5" fill="#b89574" fill-opacity="0.2"/>
    </svg>

    {{-- Bottom Edge --}}
    <svg class="preloader-edge absolute bottom-0 left-[15%] w-[70%] h-14 dark:hidden" viewBox="0 0 800 50" fill="none" preserveAspectRatio="none" style="opacity:0;">
        <path d="M0 10 Q40 40 80 22 Q120 8 160 32 Q200 48 240 25 Q280 8 320 35 Q360 50 400 20 Q440 5 480 30 Q520 48 560 22 Q600 8 640 35 Q680 50 720 20 Q760 8 800 32" stroke="#4b3621" stroke-opacity="0.13" stroke-width="2" fill="none"/>
        <path d="M50 12 Q90 38 130 26 Q170 14 210 34 Q250 48 290 22 Q330 8 370 32 Q410 46 450 22 Q490 6 530 30 Q570 46 610 22 Q650 6 690 32 Q730 46 770 24" stroke="#286050" stroke-opacity="0.1" stroke-width="1.2" fill="none"/>
        <path d="M80 22 Q90 32 100 28 Q92 24 84 20 Z" fill="#286050" fill-opacity="0.12"/>
        <path d="M240 25 Q250 35 260 31 Q252 27 244 23 Z" fill="#286050" fill-opacity="0.1"/>
        <path d="M400 20 Q410 30 420 26 Q412 22 404 18 Z" fill="#286050" fill-opacity="0.12"/>
        <path d="M560 22 Q570 32 580 28 Q572 24 564 20 Z" fill="#286050" fill-opacity="0.1"/>
        <circle cx="160" cy="32" r="2.5" fill="#b89574" fill-opacity="0.25"/>
        <circle cx="320" cy="35" r="2.5" fill="#b89574" fill-opacity="0.2"/>
        <circle cx="480" cy="30" r="2.5" fill="#b89574" fill-opacity="0.25"/>
        <circle cx="640" cy="35" r="2.5" fill="#b89574" fill-opacity="0.2"/>
    </svg>

    {{-- Left Edge --}}
    <svg class="preloader-edge absolute left-0 top-[15%] w-14 h-[70%] dark:hidden" viewBox="0 0 50 800" fill="none" preserveAspectRatio="none" style="opacity:0;">
        <path d="M40 0 Q10 40 28 80 Q42 120 18 160 Q2 200 25 240 Q42 280 15 320 Q0 360 30 400 Q45 440 20 480 Q2 520 28 560 Q42 600 15 640 Q0 680 30 720 Q42 760 18 800" stroke="#4b3621" stroke-opacity="0.12" stroke-width="1.8" fill="none"/>
        <path d="M38 50 Q12 90 26 130 Q38 170 14 210 Q2 250 26 290 Q40 330 16 370 Q2 410 26 450 Q40 490 16 530 Q2 570 26 610 Q40 650 16 690 Q2 730 26 770" stroke="#286050" stroke-opacity="0.08" stroke-width="1" fill="none"/>
        <path d="M28 80 Q18 90 22 100 Q26 92 30 84 Z" fill="#286050" fill-opacity="0.12"/>
        <path d="M25 240 Q15 250 19 260 Q23 252 27 244 Z" fill="#286050" fill-opacity="0.1"/>
        <path d="M30 400 Q20 410 24 420 Q28 412 32 404 Z" fill="#286050" fill-opacity="0.12"/>
        <path d="M28 560 Q18 570 22 580 Q26 572 30 564 Z" fill="#286050" fill-opacity="0.1"/>
        <circle cx="18" cy="160" r="2.5" fill="#b89574" fill-opacity="0.25"/>
        <circle cx="15" cy="320" r="2.5" fill="#b89574" fill-opacity="0.2"/>
        <circle cx="20" cy="480" r="2.5" fill="#b89574" fill-opacity="0.25"/>
        <circle cx="15" cy="640" r="2.5" fill="#b89574" fill-opacity="0.2"/>
    </svg>

    {{-- Right Edge --}}
    <svg class="preloader-edge absolute right-0 top-[15%] w-14 h-[70%] dark:hidden" viewBox="0 0 50 800" fill="none" preserveAspectRatio="none" style="opacity:0;">
        <path d="M10 0 Q40 40 22 80 Q8 120 32 160 Q48 200 25 240 Q8 280 35 320 Q50 360 20 400 Q5 440 30 480 Q48 520 22 560 Q8 600 35 640 Q50 680 20 720 Q8 760 32 800" stroke="#4b3621" stroke-opacity="0.12" stroke-width="1.8" fill="none"/>
        <path d="M12 50 Q38 90 24 130 Q12 170 36 210 Q48 250 24 290 Q10 330 34 370 Q48 410 24 450 Q10 490 34 530 Q48 570 24 610 Q10 650 34 690 Q48 730 24 770" stroke="#286050" stroke-opacity="0.08" stroke-width="1" fill="none"/>
        <path d="M22 80 Q32 90 28 100 Q24 92 20 84 Z" fill="#286050" fill-opacity="0.12"/>
        <path d="M25 240 Q35 250 31 260 Q27 252 23 244 Z" fill="#286050" fill-opacity="0.1"/>
        <path d="M20 400 Q30 410 26 420 Q22 412 18 404 Z" fill="#286050" fill-opacity="0.12"/>
        <circle cx="32" cy="160" r="2.5" fill="#b89574" fill-opacity="0.25"/>
        <circle cx="35" cy="320" r="2.5" fill="#b89574" fill-opacity="0.2"/>
        <circle cx="30" cy="480" r="2.5" fill="#b89574" fill-opacity="0.25"/>
        <circle cx="35" cy="640" r="2.5" fill="#b89574" fill-opacity="0.2"/>
    </svg>

    {{-- ============================================= --}}
    {{-- DOUBLE DECORATIVE FRAME                       --}}
    {{-- ============================================= --}}
    <div id="preloader-frame-outer" class="absolute inset-5 md:inset-8 border-[2px] border-[#4b3621]/[0.1] dark:border-emerald-400/[0.12] rounded-2xl pointer-events-none" style="opacity:0;"></div>
    <div id="preloader-frame-inner" class="absolute inset-9 md:inset-12 border border-dashed border-[#286050]/[0.1] dark:border-emerald-400/[0.08] rounded-xl pointer-events-none" style="opacity:0;"></div>

    {{-- ============================================= --}}
    {{-- MID-EDGE ORNAMENTS (Brown tones only)          --}}
    {{-- ============================================= --}}
    
    {{-- Top center --}}
    <svg class="preloader-mid-ornament absolute top-2 left-1/2 -translate-x-1/2 w-10 h-10 dark:hidden" viewBox="0 0 40 40" fill="none" style="opacity:0;">
        <path d="M20 4 L32 20 L20 36 L8 20 Z" stroke="#4b3621" stroke-opacity="0.25" stroke-width="1.5" fill="#4b3621" fill-opacity="0.04"/>
        <line x1="20" y1="8" x2="20" y2="32" stroke="#4b3621" stroke-opacity="0.1" stroke-width="0.6"/>
        <line x1="12" y1="20" x2="28" y2="20" stroke="#4b3621" stroke-opacity="0.1" stroke-width="0.6"/>
    </svg>
    {{-- Bottom center --}}
    <svg class="preloader-mid-ornament absolute bottom-2 left-1/2 -translate-x-1/2 w-10 h-10 dark:hidden" viewBox="0 0 40 40" fill="none" style="opacity:0;">
        <path d="M20 4 L32 20 L20 36 L8 20 Z" stroke="#4b3621" stroke-opacity="0.25" stroke-width="1.5" fill="#4b3621" fill-opacity="0.04"/>
    </svg>
    {{-- Left center --}}
    <svg class="preloader-mid-ornament absolute left-2 top-1/2 -translate-y-1/2 w-10 h-12 dark:hidden" viewBox="0 0 40 48" fill="none" style="opacity:0;">
        <path d="M6 24 Q20 8 34 24 Q20 40 6 24 Z" stroke="#b89574" stroke-opacity="0.25" stroke-width="1.5" fill="#b89574" fill-opacity="0.06"/>
        <path d="M6 24 L34 24" stroke="#b89574" stroke-opacity="0.15" stroke-width="0.8"/>
        <path d="M20 10 L20 38" stroke="#b89574" stroke-opacity="0.12" stroke-width="0.8"/>
    </svg>
    {{-- Right center --}}
    <svg class="preloader-mid-ornament absolute right-2 top-1/2 -translate-y-1/2 w-10 h-12 dark:hidden" viewBox="0 0 40 48" fill="none" style="opacity:0;">
        <path d="M6 24 Q20 8 34 24 Q20 40 6 24 Z" stroke="#b89574" stroke-opacity="0.25" stroke-width="1.5" fill="#b89574" fill-opacity="0.06"/>
        <path d="M6 24 L34 24" stroke="#b89574" stroke-opacity="0.15" stroke-width="0.8"/>
        <path d="M20 10 L20 38" stroke="#b89574" stroke-opacity="0.12" stroke-width="0.8"/>
    </svg>

    {{-- Dark mode mid ornaments --}}
    <svg class="preloader-mid-ornament hidden dark:block absolute top-2 left-1/2 -translate-x-1/2 w-10 h-10" viewBox="0 0 40 40" fill="none" style="opacity:0;">
        <path d="M20 4 L32 20 L20 36 L8 20 Z" stroke="#94a3b8" stroke-opacity="0.25" stroke-width="1.5" fill="#94a3b8" fill-opacity="0.05"/>
    </svg>
    <svg class="preloader-mid-ornament hidden dark:block absolute bottom-2 left-1/2 -translate-x-1/2 w-10 h-10" viewBox="0 0 40 40" fill="none" style="opacity:0;">
        <path d="M20 4 L32 20 L20 36 L8 20 Z" stroke="#94a3b8" stroke-opacity="0.25" stroke-width="1.5" fill="#94a3b8" fill-opacity="0.05"/>
    </svg>
    <svg class="preloader-mid-ornament hidden dark:block absolute left-2 top-1/2 -translate-y-1/2 w-10 h-12" viewBox="0 0 40 48" fill="none" style="opacity:0;">
        <path d="M6 24 Q20 8 34 24 Q20 40 6 24 Z" stroke="#94a3b8" stroke-opacity="0.25" stroke-width="1.5" fill="#94a3b8" fill-opacity="0.05"/>
    </svg>
    <svg class="preloader-mid-ornament hidden dark:block absolute right-2 top-1/2 -translate-y-1/2 w-10 h-12" viewBox="0 0 40 48" fill="none" style="opacity:0;">
        <path d="M6 24 Q20 8 34 24 Q20 40 6 24 Z" stroke="#94a3b8" stroke-opacity="0.25" stroke-width="1.5" fill="#94a3b8" fill-opacity="0.05"/>
    </svg>

    {{-- ============================================= --}}
    {{-- FLOATING PARTICLES - Many, varied sizes       --}}
    {{-- ============================================= --}}
    <div id="preloader-particles" class="absolute inset-0 pointer-events-none overflow-hidden">
        {{-- Light --}}
        <div class="preloader-particle dark:hidden absolute w-[8px] h-[8px] rounded-full bg-[#4b3621]/20" style="top:16%;right:8%;"></div>
        <div class="preloader-particle dark:hidden absolute w-[9px] h-[9px] rounded-full bg-[#b89574]/20" style="top:76%;right:6%;"></div>
        <div class="preloader-particle dark:hidden absolute w-[7px] h-[7px] rounded-full bg-[#4b3621]/18" style="top:48%;right:4%;"></div>
        <div class="preloader-particle dark:hidden absolute w-[7px] h-[7px] rounded-full bg-[#b89574]/24" style="top:86%;left:40%;"></div>
        <div class="preloader-particle dark:hidden absolute w-[6px] h-[6px] rounded-full bg-[#b89574]/22" style="top:45%;left:92%;"></div>
        <div class="preloader-particle dark:hidden absolute w-[4px] h-[4px] rounded-full bg-[#4b3621]/25" style="top:20%;left:28%;"></div>
        <div class="preloader-particle dark:hidden absolute w-[5px] h-[5px] rounded-full bg-[#b89574]/28" style="top:90%;right:28%;"></div>
        <div class="preloader-particle dark:hidden absolute w-[7px] h-[7px] rounded-full bg-[#4b3621]/15" style="top:55%;left:20%;"></div>
        {{-- Dark --}}
        <div class="preloader-particle hidden dark:block absolute w-[6px] h-[6px] rounded-full bg-blue-400/30 shadow-[0_0_8px_rgba(59,130,246,0.3)]" style="top:16%;right:8%;"></div>
        <div class="preloader-particle hidden dark:block absolute w-[4px] h-[4px] rounded-full bg-blue-400/25" style="top:35%;left:3%;"></div>
        <div class="preloader-particle hidden dark:block absolute w-[5px] h-[5px] rounded-full bg-blue-400/25 shadow-[0_0_8px_rgba(59,130,246,0.25)]" style="top:86%;left:40%;"></div>
        <div class="preloader-particle hidden dark:block absolute w-[3px] h-[3px] rounded-full bg-blue-400/25" style="top:55%;left:20%;"></div>
    </div>

    {{-- ============================================= --}}
    {{-- SCATTERED SMALL ORNAMENTAL SHAPES             --}}
    {{-- ============================================= --}}
    {{-- Small crosses scattered --}}
    <svg class="preloader-scatter dark:hidden absolute w-4 h-4" style="top:12%;left:18%;opacity:0;" viewBox="0 0 16 16"><line x1="8" y1="2" x2="8" y2="14" stroke="#4b3621" stroke-opacity="0.2" stroke-width="1.2"/><line x1="2" y1="8" x2="14" y2="8" stroke="#4b3621" stroke-opacity="0.2" stroke-width="1.2"/></svg>
    <svg class="preloader-scatter dark:hidden absolute w-4 h-4" style="top:85%;right:20%;opacity:0;" viewBox="0 0 16 16"><line x1="8" y1="2" x2="8" y2="14" stroke="#4b3621" stroke-opacity="0.2" stroke-width="1.2"/><line x1="2" y1="8" x2="14" y2="8" stroke="#4b3621" stroke-opacity="0.2" stroke-width="1.2"/></svg>
    {{-- Small diamonds scattered --}}
    <svg class="preloader-scatter dark:hidden absolute w-4 h-4" style="top:30%;right:18%;opacity:0;" viewBox="0 0 16 16"><path d="M8 1 L15 8 L8 15 L1 8 Z" stroke="#286050" stroke-opacity="0.2" stroke-width="1" fill="#286050" fill-opacity="0.04"/></svg>
    <svg class="preloader-scatter dark:hidden absolute w-4 h-4" style="top:68%;left:22%;opacity:0;" viewBox="0 0 16 16"><path d="M8 1 L15 8 L8 15 L1 8 Z" stroke="#286050" stroke-opacity="0.2" stroke-width="1" fill="#286050" fill-opacity="0.04"/></svg>
    {{-- Small circles --}}
    <svg class="preloader-scatter dark:hidden absolute w-5 h-5" style="top:42%;left:15%;opacity:0;" viewBox="0 0 20 20"><circle cx="10" cy="10" r="7" stroke="#b89574" stroke-opacity="0.2" stroke-width="1" fill="none"/><circle cx="10" cy="10" r="2" fill="#b89574" fill-opacity="0.2"/></svg>
    <svg class="preloader-scatter dark:hidden absolute w-5 h-5" style="top:52%;right:16%;opacity:0;" viewBox="0 0 20 20"><circle cx="10" cy="10" r="7" stroke="#b89574" stroke-opacity="0.2" stroke-width="1" fill="none"/><circle cx="10" cy="10" r="2" fill="#b89574" fill-opacity="0.2"/></svg>
    {{-- Tiny dot trios --}}
    <svg class="preloader-scatter dark:hidden absolute w-6 h-3" style="top:22%;left:75%;opacity:0;" viewBox="0 0 24 12"><circle cx="4" cy="6" r="2" fill="#4b3621" fill-opacity="0.2"/><circle cx="12" cy="6" r="2" fill="#4b3621" fill-opacity="0.15"/><circle cx="20" cy="6" r="2" fill="#4b3621" fill-opacity="0.1"/></svg>
    <svg class="preloader-scatter dark:hidden absolute w-6 h-3" style="top:78%;left:70%;opacity:0;" viewBox="0 0 24 12"><circle cx="4" cy="6" r="2" fill="#4b3621" fill-opacity="0.2"/><circle cx="12" cy="6" r="2" fill="#4b3621" fill-opacity="0.15"/><circle cx="20" cy="6" r="2" fill="#4b3621" fill-opacity="0.1"/></svg>

    {{-- Dark mode scatters --}}
    <svg class="preloader-scatter hidden dark:block absolute w-4 h-4" style="top:12%;left:18%;opacity:0;" viewBox="0 0 16 16"><line x1="8" y1="2" x2="8" y2="14" stroke="#10b981" stroke-opacity="0.25" stroke-width="1.2"/><line x1="2" y1="8" x2="14" y2="8" stroke="#10b981" stroke-opacity="0.25" stroke-width="1.2"/></svg>
    <svg class="preloader-scatter hidden dark:block absolute w-4 h-4" style="top:85%;right:20%;opacity:0;" viewBox="0 0 16 16"><line x1="8" y1="2" x2="8" y2="14" stroke="#10b981" stroke-opacity="0.25" stroke-width="1.2"/><line x1="2" y1="8" x2="14" y2="8" stroke="#10b981" stroke-opacity="0.25" stroke-width="1.2"/></svg>
    <svg class="preloader-scatter hidden dark:block absolute w-4 h-4" style="top:30%;right:18%;opacity:0;" viewBox="0 0 16 16"><path d="M8 1 L15 8 L8 15 L1 8 Z" stroke="#10b981" stroke-opacity="0.25" stroke-width="1" fill="#10b981" fill-opacity="0.05"/></svg>
    <svg class="preloader-scatter hidden dark:block absolute w-4 h-4" style="top:68%;left:22%;opacity:0;" viewBox="0 0 16 16"><path d="M8 1 L15 8 L8 15 L1 8 Z" stroke="#10b981" stroke-opacity="0.25" stroke-width="1" fill="#10b981" fill-opacity="0.05"/></svg>

    {{-- ============================================= --}}
    {{-- CENTER CONTENT                                --}}
    {{-- ============================================= --}}
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
if (sessionStorage.getItem('preloader_played')) {
    document.getElementById('preloader').style.display = 'none';
} else {
    document.body.classList.add('overflow-hidden');
    
    document.addEventListener('DOMContentLoaded', () => {
        if(typeof gsap === 'undefined') return;

        // Animate floating particles
        document.querySelectorAll('.preloader-particle').forEach((p) => {
            gsap.to(p, {
                y: `${(Math.random() > 0.5 ? '-' : '+')}=${25 + Math.random() * 40}`,
                x: `${(Math.random() > 0.5 ? '-' : '+')}=${12 + Math.random() * 20}`,
                opacity: Math.random() * 0.6 + 0.3,
                duration: 3 + Math.random() * 4,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
                delay: Math.random() * 2
            });
        });

        const tl = gsap.timeline({
            onComplete: () => {
                sessionStorage.setItem('preloader_played', 'true');
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

        // Reveal decorative elements
        tl.to('.preloader-corner', { opacity: 1, scale: 1, duration: 0.7, stagger: 0.08, ease: "back.out(1.2)" })
          .to('.preloader-corner-dark', { opacity: 1, scale: 1, duration: 0.7, stagger: 0.08, ease: "back.out(1.2)" }, "<")
          .to(['#preloader-frame-outer', '#preloader-frame-inner'], { opacity: 1, duration: 0.5, stagger: 0.12, ease: "power2.out" }, "-=0.4")
          .to('.preloader-edge', { opacity: 1, duration: 0.5, stagger: 0.06, ease: "power2.out" }, "-=0.3")
          .to('.preloader-mid-ornament', { opacity: 1, duration: 0.4, stagger: 0.06, ease: "power2.out" }, "-=0.3")
          .to('.preloader-scatter', { opacity: 1, duration: 0.5, stagger: 0.04, ease: "power2.out" }, "-=0.3")
          // Title
          .to('#preloader-title', { y: 0, opacity: 1, duration: 1, ease: "power4.out" }, "-=0.2")
          .to('#preloader-subtitle', { y: 0, opacity: 1, duration: 0.8, ease: "power4.out" }, "-=0.6")
          .to('#preloader-bar-container', { opacity: 1, duration: 0.5 }, "-=0.2")
          .to('#preloader-bar', { width: '100%', duration: 1.2, ease: "power2.inOut" })
          // Fade out all
          .to(['#preloader-title', '#preloader-subtitle', '#preloader-bar-container',
               '.preloader-corner', '.preloader-corner-dark',
               '#preloader-frame-outer', '#preloader-frame-inner',
               '.preloader-edge', '.preloader-mid-ornament', '.preloader-scatter'], {
            y: -30, opacity: 0, duration: 0.6, stagger: 0.02, ease: "power2.in"
          }, "+=0.2");
    });
}
</script>
