<section id="contact" class="max-w-4xl mx-auto py-24 px-5">
    
    <!-- Decorative Blurs -->
    <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-emerald-500/10 blur-[100px] rounded-full pointer-events-none -translate-y-1/2"></div>
    <div class="absolute top-1/2 right-1/4 w-64 h-64 bg-blue-500/10 blur-[100px] rounded-full pointer-events-none -translate-y-1/2"></div>

    {{-- TITLE --}}
    <div class="text-center mb-12 relative z-20">
        <h2 class="text-3xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-emerald-400 to-blue-400 bg-clip-text text-transparent drop-shadow-sm">
            Kontak Saya
        </h2>
        <p class="text-slate-400 max-w-xl mx-auto px-4 md:px-0 font-light">
            Punya ide proyek menarik atau ingin berdiskusi seputar web development? Jangan ragu untuk menghubungi saya!
        </p>
    </div>

    <!-- MAIN CARD -->
    <div class="relative bg-slate-900/60 backdrop-blur-xl rounded-[2.5rem] border border-white/10 p-8 md:p-12 shadow-2xl overflow-hidden z-20">
        
        <!-- Subtle Grid Pattern Background -->
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 24px 24px;"></div>

        <div class="relative z-10 flex flex-col items-center">
            
            <!-- Floating Icon -->
            <div class="w-16 h-16 bg-gradient-to-br from-emerald-400/20 to-blue-400/20 rounded-full flex items-center justify-center border border-emerald-400/20 mb-6 shrink-0 shadow-[0_0_30px_rgba(52,211,153,0.15)] animate-pulse">
                <i class="fa-solid fa-paper-plane text-2xl text-emerald-400"></i>
            </div>

            <h3 class="text-2xl md:text-3xl font-bold text-white mb-8 text-center drop-shadow-md">
                Mari Berkolaborasi!
            </h3>
            
            <!-- Contact Cards -->
            <div class="grid md:grid-cols-2 gap-6 w-full max-w-2xl">
                <!-- Email Contact Card -->
                <a href="mailto:emailkamu@gmail.com" class="group relative flex items-center p-5 bg-slate-800/50 hover:bg-slate-800 rounded-3xl border border-white/5 hover:border-emerald-400/50 transition-all duration-300 hover:shadow-[0_0_20px_rgba(52,211,153,0.15)]">
                    <div class="w-14 h-14 bg-rose-500/10 rounded-2xl flex items-center justify-center mr-5 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-500 border border-white/5">
                        <i class="fa-solid fa-envelope text-rose-400 text-2xl"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-slate-400 text-[11px] uppercase tracking-wider font-semibold mb-1">Kirim Pesan via</p>
                        <p class="text-white font-bold text-lg group-hover:text-emerald-400 transition-colors">Email</p>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-emerald-500/20 transition-colors">
                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-emerald-400 opacity-50 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                    </div>
                </a>

                <!-- WhatsApp Contact Card -->
                <a href="https://wa.me/628351408541" target="_blank" class="group relative flex items-center p-5 bg-slate-800/50 hover:bg-slate-800 rounded-3xl border border-white/5 hover:border-emerald-400/50 transition-all duration-300 hover:shadow-[0_0_20px_rgba(52,211,153,0.15)]">
                    <div class="w-14 h-14 bg-green-500/10 rounded-2xl flex items-center justify-center mr-5 group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-500 border border-white/5">
                        <i class="fa-brands fa-whatsapp text-green-400 text-3xl"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-slate-400 text-[11px] uppercase tracking-wider font-semibold mb-1">Mengobrol di</p>
                        <p class="text-white font-bold text-lg group-hover:text-emerald-400 transition-colors">WhatsApp</p>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-emerald-500/20 transition-colors">
                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-emerald-400 opacity-50 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                    </div>
                </a>
            </div>
            
            <!-- Social Media -->
            <div class="mt-10 pt-8 border-t border-white/5 w-full text-center">
                <p class="text-slate-500 text-sm mb-5 font-medium">
                    Jelajahi profil saya lainnya
                </p>
                <div class="flex justify-center gap-4">
                    <a href="#" target="_blank" class="w-12 h-12 rounded-full bg-slate-800/80 flex items-center justify-center text-slate-400 hover:text-pink-400 hover:bg-pink-500/10 hover:border-pink-500/30 border border-white/5 transition-all duration-300 hover:scale-110 shadow-lg">
                        <i class="fa-brands fa-instagram text-xl"></i>
                    </a>
                    <a href="#" target="_blank" class="w-12 h-12 rounded-full bg-slate-800/80 flex items-center justify-center text-slate-400 hover:text-blue-400 hover:bg-blue-500/10 hover:border-blue-500/30 border border-white/5 transition-all duration-300 hover:scale-110 shadow-lg">
                        <i class="fa-brands fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="#" target="_blank" class="w-12 h-12 rounded-full bg-slate-800/80 flex items-center justify-center text-slate-400 hover:text-white hover:bg-white/10 hover:border-white/30 border border-white/5 transition-all duration-300 hover:scale-110 shadow-lg">
                        <i class="fa-brands fa-github text-xl"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
