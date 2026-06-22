<x-guest-layout>

<div class="fixed inset-0 overflow-hidden bg-gradient-to-br from-slate-950 via-[#0a0f1d] to-[#020617] flex items-center justify-center font-sans">
    
    {{-- GLOWING BACKGROUND ORBS --}}
    <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-emerald-500/10 blur-[150px] rounded-full animate-pulse pointer-events-none" style="animation-duration: 8s;"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-blue-500/10 blur-[150px] rounded-full animate-pulse pointer-events-none" style="animation-duration: 12s;"></div>
    <div class="absolute top-[30%] right-[20%] w-[300px] h-[300px] bg-purple-500/5 blur-[120px] rounded-full pointer-events-none"></div>

    {{-- STARRY SKY EFFECT --}}
    <div class="absolute inset-0 opacity-40 pointer-events-none" style="background-image: radial-gradient(white 1px, transparent 0); background-size: 40px 40px;"></div>

    {{-- CONTENT WRAPPER --}}
    <div class="relative z-10 w-full max-w-md px-6">
        
        {{-- CARD CONTAINER --}}
        <div class="w-full bg-[#1e293b]/40 backdrop-blur-2xl border border-white/10 rounded-[2.5rem] p-10 shadow-[0_30px_100px_rgba(0,0,0,0.8)] relative overflow-hidden group">
            
            {{-- Decorative top border glow --}}
            <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-emerald-400 to-blue-500"></div>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                {{-- BRAND / HEADER --}}
                <div class="text-center pb-2">
                    <div class="w-16 h-16 rounded-3xl bg-gradient-to-br from-emerald-400 to-teal-600 flex items-center justify-center mx-auto mb-5 shadow-[0_10px_25px_rgba(16,185,129,0.3)]">
                        <i class="fa-solid fa-plane-up text-slate-950 text-2xl animate-[bounce_3s_infinite]"></i>
                    </div>
                    <h2 class="text-3xl font-black text-white font-playfair tracking-tight mb-2">
                        Welcome Back
                    </h2>
                    <p class="text-xs text-slate-400 font-light">
                        Silakan login untuk mengelola portofolio digital Anda.
                    </p>
                </div>

                {{-- SESSION STATUS & ERRORS --}}
                @if ($errors->any())
                    <div class="bg-rose-500/10 border border-rose-500/20 text-rose-400 p-4 rounded-2xl text-xs space-y-1">
                        <div class="font-bold flex items-center gap-1.5 mb-1">
                            <i class="fa-solid fa-circle-exclamation"></i> Terjadi kesalahan:
                        </div>
                        <ul class="list-disc list-inside opacity-90 pl-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status'))
                    <div class="bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 p-4 rounded-2xl text-xs flex items-center gap-2">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>{{ session('status') }}</span>
                    </div>
                @endif

                {{-- EMAIL --}}
                <div class="space-y-2">
                    <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 ml-1">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="admin@example.com"
                               class="w-full pl-11 pr-4 py-4 rounded-2xl bg-slate-950/40 border border-white/10 focus:border-emerald-500/50 focus:ring-2 focus:ring-emerald-500/20 text-sm text-white outline-none transition duration-300 placeholder:text-slate-600"
                               required autofocus>
                    </div>
                </div>

                {{-- PASSWORD --}}
                <div class="space-y-2">
                    <div class="flex justify-between items-center px-1">
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Password</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-[10px] font-bold text-emerald-400 hover:text-emerald-300 transition">
                                Lupa Sandi?
                            </a>
                        @endif
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" name="password" placeholder="••••••••"
                               class="w-full pl-11 pr-4 py-4 rounded-2xl bg-slate-950/40 border border-white/10 focus:border-emerald-500/50 focus:ring-2 focus:ring-emerald-500/20 text-sm text-white outline-none transition duration-300 placeholder:text-slate-600"
                               required>
                    </div>
                </div>

                {{-- REMEMBER ME --}}
                <div class="flex items-center px-1">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4.5 h-4.5 bg-slate-950/40 border-white/10 text-emerald-500 rounded focus:ring-emerald-500/20 focus:ring-offset-slate-900">
                        <span class="ml-2.5 text-xs text-slate-400 font-medium select-none">Ingat perangkat ini</span>
                    </label>
                </div>

                {{-- BUTTONS --}}
                <div class="space-y-3 pt-2">
                    <button
                        class="w-full py-4 rounded-2xl font-bold text-slate-950 bg-gradient-to-r from-emerald-400 to-teal-500 hover:from-emerald-300 hover:to-teal-400 shadow-[0_10px_25px_rgba(16,185,129,0.2)] hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 text-sm tracking-wider uppercase">
                        Masuk Ke Dashboard
                    </button>
                    
                    <div class="flex gap-3">
                        <a href="/"
                           class="text-center py-3.5 rounded-2xl font-bold border border-white/10 hover:bg-white/5 text-xs text-white uppercase tracking-wider transition-all duration-300 {{ Route::has('register') ? 'flex-1' : 'w-full' }}">
                            Kembali
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="flex-1 text-center py-3.5 rounded-2xl font-bold bg-white/5 border border-white/10 hover:bg-white/10 text-xs text-white uppercase tracking-wider transition-all duration-300">
                                Daftar
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</x-guest-layout>
