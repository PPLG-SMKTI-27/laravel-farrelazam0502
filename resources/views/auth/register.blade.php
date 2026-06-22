<x-guest-layout>

<div class="fixed inset-0 overflow-hidden bg-gradient-to-br from-slate-950 via-[#0a0f1d] to-[#020617] flex items-center justify-center font-sans">
    
    {{-- GLOWING BACKGROUND ORBS --}}
    <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-emerald-500/10 blur-[150px] rounded-full animate-pulse pointer-events-none" style="animation-duration: 8s;"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-blue-500/10 blur-[150px] rounded-full animate-pulse pointer-events-none" style="animation-duration: 12s;"></div>
    <div class="absolute top-[30%] right-[20%] w-[300px] h-[300px] bg-purple-500/5 blur-[120px] rounded-full pointer-events-none"></div>

    {{-- STARRY SKY EFFECT --}}
    <div class="absolute inset-0 opacity-40 pointer-events-none" style="background-image: radial-gradient(white 1px, transparent 0); background-size: 40px 40px;"></div>

    {{-- CONTENT WRAPPER --}}
    <div class="relative z-10 w-full max-w-md px-6 my-8 overflow-y-auto max-h-screen py-6 scrollbar-hide">
        
        {{-- CARD CONTAINER --}}
        <div class="w-full bg-[#1e293b]/40 backdrop-blur-2xl border border-white/10 rounded-[2.5rem] p-10 shadow-[0_30px_100px_rgba(0,0,0,0.8)] relative overflow-hidden group">
            
            {{-- Decorative top border glow --}}
            <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-emerald-400 to-blue-500"></div>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                {{-- BRAND / HEADER --}}
                <div class="text-center pb-1">
                    <div class="w-14 h-14 rounded-3xl bg-gradient-to-br from-emerald-400 to-teal-600 flex items-center justify-center mx-auto mb-4 shadow-[0_10px_25px_rgba(16,185,129,0.3)]">
                        <i class="fa-solid fa-user-plus text-slate-950 text-xl animate-[pulse_2s_infinite]"></i>
                    </div>
                    <h2 class="text-2xl font-black text-white font-playfair tracking-tight mb-1">
                        Daftar Akun
                    </h2>
                    <p class="text-[11px] text-slate-400 font-light">
                        Buat akun administrator baru untuk masuk ke dashboard.
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

                {{-- NAME --}}
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 ml-1">Nama Lengkap</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Farrel Azam"
                               class="w-full pl-11 pr-4 py-3.5 rounded-2xl bg-slate-950/40 border border-white/10 focus:border-emerald-500/50 focus:ring-2 focus:ring-emerald-500/20 text-sm text-white outline-none transition duration-300 placeholder:text-slate-600"
                               required autofocus>
                    </div>
                </div>

                {{-- EMAIL --}}
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 ml-1">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="admin@example.com"
                               class="w-full pl-11 pr-4 py-3.5 rounded-2xl bg-slate-950/40 border border-white/10 focus:border-emerald-500/50 focus:ring-2 focus:ring-emerald-500/20 text-sm text-white outline-none transition duration-300 placeholder:text-slate-600"
                               required>
                    </div>
                </div>

                {{-- PASSWORD --}}
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 ml-1">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" name="password" placeholder="••••••••"
                               class="w-full pl-11 pr-4 py-3.5 rounded-2xl bg-slate-950/40 border border-white/10 focus:border-emerald-500/50 focus:ring-2 focus:ring-emerald-500/20 text-sm text-white outline-none transition duration-300 placeholder:text-slate-600"
                               required autocomplete="new-password">
                    </div>
                </div>

                {{-- CONFIRM PASSWORD --}}
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 ml-1">Konfirmasi Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <input type="password" name="password_confirmation" placeholder="••••••••"
                               class="w-full pl-11 pr-4 py-3.5 rounded-2xl bg-slate-950/40 border border-white/10 focus:border-emerald-500/50 focus:ring-2 focus:ring-emerald-500/20 text-sm text-white outline-none transition duration-300 placeholder:text-slate-600"
                               required>
                    </div>
                </div>

                {{-- BUTTONS --}}
                <div class="space-y-3 pt-3">
                    <button
                        class="w-full py-4 rounded-2xl font-bold text-slate-950 bg-gradient-to-r from-emerald-400 to-teal-500 hover:from-emerald-300 hover:to-teal-400 shadow-[0_10px_25px_rgba(16,185,129,0.2)] hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 text-sm tracking-wider uppercase">
                        Daftar Akun Baru
                    </button>
                    
                    <a href="{{ route('login') }}"
                       class="block text-center w-full py-3.5 rounded-2xl font-bold border border-white/10 hover:bg-white/5 text-xs text-white uppercase tracking-wider transition-all duration-300">
                        Sudah punya akun? Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

</x-guest-layout>
