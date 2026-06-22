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

        <form method="POST" action="{{ route('password.email') }}"
              class="w-full max-w-md
                     bg-slate-900/95
                     border border-white/10
                     rounded-2xl
                     shadow-2xl
                     p-8">

            @csrf

            <h2 class="text-2xl font-semibold text-center text-white mb-6">
                Lupa Password
            </h2>

            <p class="text-slate-400 text-xs leading-relaxed text-center mb-6">
                Masukkan alamat email Anda untuk menerima tautan pembuatan ulang sandi baru.
            </p>

            @if ($errors->any())
                <div class="mb-5 bg-rose-500/10 border border-rose-500/20 text-rose-400 p-4 rounded-xl text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('status'))
                <div class="mb-5 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 p-4 rounded-xl text-sm">
                    {{ session('status') }}
                </div>
            @endif

            {{-- EMAIL --}}
            <div class="mb-6">
                <label class="block text-sm mb-2 text-slate-300">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="w-full px-4 py-3 rounded-lg
                              bg-slate-800 border border-white/10
                              focus:ring-2 focus:ring-emerald-400
                              text-white outline-none"
                       required autofocus>
            </div>

            {{-- BUTTONS --}}
            <button
                class="w-full py-3 rounded-lg font-semibold
                       bg-gradient-to-r from-emerald-400 to-blue-400
                       text-slate-900 hover:scale-105 transition mb-3">
                Kirim Tautan Reset
            </button>

            <a href="{{ route('login') }}"
               class="block text-center w-full py-3 rounded-lg font-semibold
                      border border-white/10 text-white hover:bg-white/10 transition">
                Kembali ke Login
            </a>
        </form>
    </div>
</div>

</x-guest-layout>
