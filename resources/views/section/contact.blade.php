<section id="contact" class="max-w-4xl mx-auto py-24 px-5 transition-colors duration-700 bg-transparent">
    
    <!-- Decorative Blurs -->
    <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-emerald-500/10 blur-[100px] rounded-full pointer-events-none -translate-y-1/2"></div>
    <div class="absolute top-1/2 right-1/4 w-64 h-64 bg-blue-500/10 blur-[100px] rounded-full pointer-events-none -translate-y-1/2"></div>

    {{-- TITLE --}}
    <div class="text-center mb-12 relative z-20">
        <h2 class="text-3xl md:text-5xl font-bold mb-4 text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 drop-shadow-sm">
            {{ __('Kontak Saya') }}
        </h2>
        <p class="text-slate-600 dark:text-slate-400 max-w-xl mx-auto px-4 md:px-0 font-light">
            {{ __('Punya ide proyek menarik atau ingin berdiskusi seputar web development? Jangan ragu untuk menghubungi saya!') }}
        </p>
    </div>

    <!-- MAIN CARD -->
    <div class="relative bg-white/60 dark:bg-slate-900/60 backdrop-blur-xl rounded-[2.5rem] border border-[#4b3621]/10 dark:border-white/10 p-8 md:p-12 shadow-2xl overflow-hidden z-20">
        
        <!-- Subtle Grid Pattern Background -->
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 24px 24px;"></div>

        <div class="relative z-10 flex flex-col items-center">
            
            <!-- Floating Icon -->
            <div class="w-16 h-16 bg-[#115e59]/5 dark:bg-emerald-500/10 rounded-2xl flex items-center justify-center border border-[#115e59]/20 dark:border-emerald-500/20 mb-6 shrink-0 shadow-lg">
                <i class="fa-solid fa-paper-plane text-2xl text-[#115e59] dark:text-emerald-400"></i>
            </div>

            <h3 class="text-2xl md:text-3xl font-bold text-[#4b3621] dark:text-white mb-8 text-center drop-shadow-md font-playfair">
                {{ __('Mari Berkolaborasi!') }}
            </h3>
            
            <!-- Contact Cards -->
            <div class="grid md:grid-cols-2 gap-6 w-full max-w-2xl">
                <!-- Email Contact Card (Animations Removed) -->
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=farrelazam64@gmail.com" class="group relative flex items-center p-5 bg-[#4b3621]/5 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 rounded-3xl border border-[#4b3621]/10 dark:border-white/5 hover:border-[#115e59]/40 dark:hover:border-emerald-400/50 hover:shadow-[0_0_20px_rgba(75,54,33,0.05)]">
                    <div class="w-14 h-14 bg-rose-500/10 rounded-2xl flex items-center justify-center mr-5 border border-white/5">
                        <i class="fa-solid fa-envelope text-rose-400 text-2xl"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-[#4b3621]/40 dark:text-slate-400 text-[11px] uppercase tracking-wider font-semibold mb-1">{{ __('Kirim Pesan via') }}</p>
                        <p class="text-[#4b3621] dark:text-white font-bold text-lg group-hover:text-[#115e59] dark:group-hover:text-emerald-400 transition-colors">Email</p>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-emerald-500/20">
                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-emerald-400 opacity-50 group-hover:opacity-100 group-hover:translate-x-1"></i>
                    </div>
                </a>

                <!-- WhatsApp Contact Card -->
                <a href="https://wa.me/6281351408541" target="_blank" class="group relative flex items-center p-5 bg-[#4b3621]/5 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 rounded-3xl border border-[#4b3621]/10 dark:border-white/5 hover:border-[#115e59]/40 dark:hover:border-emerald-400/50 transition-all duration-300 hover:shadow-[0_0_20px_rgba(75,54,33,0.05)]">
                    <div class="w-14 h-14 bg-green-500/10 rounded-2xl flex items-center justify-center mr-5 group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-500 border border-white/5">
                        <i class="fa-brands fa-whatsapp text-green-400 text-3xl"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-[#4b3621]/40 dark:text-slate-400 text-[11px] uppercase tracking-wider font-semibold mb-1">{{ __('Mengobrol di') }}</p>
                        <p class="text-[#4b3621] dark:text-white font-bold text-lg group-hover:text-[#115e59] dark:group-hover:text-emerald-400 transition-colors">WhatsApp</p>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-emerald-500/20 transition-colors">
                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-emerald-400 opacity-50 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                    </div>
                </a>
            </div>
            
            <!-- Social Media -->
            <div class="mt-10 pt-8 border-t border-white/5 w-full text-center">
                <p class="text-[#4b3621]/60 dark:text-slate-500 text-sm mb-5 font-medium tracking-wide">
                    Jelajahi profil saya lainnya
                </p>
                <div class="flex justify-center gap-4">
                    <a href="https://instagram.com/farctyl" target="_blank" class="w-12 h-12 rounded-full bg-[#4b3621]/5 dark:bg-slate-800/80 flex items-center justify-center text-[#4b3621]/70 dark:text-slate-400 hover:text-pink-600 dark:hover:text-pink-400 hover:bg-pink-500/10 hover:border-pink-500/30 border border-[#4b3621]/10 dark:border-white/5 transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-md">
                        <i class="fa-brands fa-instagram text-xl"></i>
                    </a>
                    <a href="#" target="_blank" class="w-12 h-12 rounded-full bg-[#4b3621]/5 dark:bg-slate-800/80 flex items-center justify-center text-[#4b3621]/70 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-500/10 hover:border-blue-500/30 border border-[#4b3621]/10 dark:border-white/5 transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-md">
                        <i class="fa-brands fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="https://github.com/PPLG-SMKTI-27/laravel-farrelazam0502" target="_blank" class="w-12 h-12 rounded-full bg-[#4b3621]/5 dark:bg-slate-800/80 flex items-center justify-center text-[#4b3621]/70 dark:text-slate-400 hover:text-[#115e59] dark:hover:text-white hover:bg-[#115e59]/10 dark:hover:bg-white/10 hover:border-[#115e59]/30 dark:hover:border-white/30 border border-[#4b3621]/10 dark:border-white/5 transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-md">
                        <i class="fa-brands fa-github text-xl"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
