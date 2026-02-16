<x-guest-layout>

<div class="fixed inset-0">

    {{-- BACKGROUND FULL --}}
    <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style="background-image: url('/backgroundlogin.png');">
    </div>

    {{-- DARK OVERLAY --}}
    <div class="absolute inset-0 bg-slate-950/70"></div>


    {{-- CONTENT CENTER --}}
    <div class="relative z-10 h-full w-full flex items-center justify-center px-6">

        <form method="POST" action="{{ route('login') }}"
              class="w-full max-w-md
                     bg-slate-900/95
                     border border-white/10
                     rounded-2xl
                     shadow-2xl
                     p-8">

            @csrf

            <h2 class="text-2xl font-semibold text-center text-white mb-8">
                Login
            </h2>

            {{-- EMAIL --}}
            <div class="mb-5">
                <label class="block text-sm mb-2 text-slate-300">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="w-full px-4 py-3 rounded-lg
                              bg-slate-800 border border-white/10
                              focus:ring-2 focus:ring-emerald-400
                              text-white outline-none"
                       required>
            </div>

            {{-- PASSWORD --}}
            <div class="mb-6">
                <label class="block text-sm mb-2 text-slate-300">Password</label>
                <input type="password" name="password"
                       class="w-full px-4 py-3 rounded-lg
                              bg-slate-800 border border-white/10
                              focus:ring-2 focus:ring-emerald-400
                              text-white outline-none"
                       required>
            </div>

            {{-- BUTTON --}}
            <button
                class="w-full py-3 rounded-lg font-semibold
                       bg-gradient-to-r from-emerald-400 to-blue-400
                       text-slate-900 hover:scale-105 transition">
                Masuk
            </button>
            <a href="/"
                class="block mt-6 text-center  w-full py-3 rounded-lg font-semibold
                       bg-gradient-to-r from-emerald-400 to-blue-400
                       text-slate-900 hover:scale-105 transition">
                Kembali
            </a>
        </form>
    </div>
</div>

</x-guest-layout>
