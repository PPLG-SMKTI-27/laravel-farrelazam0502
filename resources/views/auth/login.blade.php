<x-guest-layout>

<div class="min-h-screen flex items-center justify-center bg-slate-950 px-4">

    <form method="POST" action="{{ route('login') }}"
          class="w-full max-w-md bg-slate-900 border border-white/5
                 rounded-3xl p-8 shadow-xl">

        @csrf

        <h2 class="text-2xl font-bold text-center mb-6 text-white">
            Login
        </h2>

        {{-- GLOBAL ERROR --}}
        @if ($errors->any())
            <div id="error-alert"
                 class="mb-4 px-4 py-3 rounded-lg
                        bg-red-500/20 text-red-400 text-sm">
                {{ $errors->first() }}
            </div>
        @endif


        {{-- EMAIL --}}
        <div class="mb-4">
            <label class="block text-sm mb-2 text-slate-300">Email</label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="w-full px-4 py-2 rounded-lg
                       bg-slate-800 border border-white/10
                       focus:ring-2 focus:ring-emerald-400
                       outline-none text-white"
                required
            >

            @error('email')
                <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>


        {{-- PASSWORD --}}
        <div class="mb-6">
            <label class="block text-sm mb-2 text-slate-300">Password</label>

            <input
                type="password"
                name="password"
                class="w-full px-4 py-2 rounded-lg
                       bg-slate-800 border border-white/10
                       focus:ring-2 focus:ring-emerald-400
                       outline-none text-white"
                required
            >

            @error('password')
                <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>


        {{-- BUTTON --}}
        <button
            class="w-full py-2 rounded-lg font-semibold
                   bg-gradient-to-r from-emerald-400 to-blue-400
                   text-slate-900 hover:scale-105 transition">
            Masuk
        </button>

    </form>

</div>

{{-- AUTO HIDE ERROR --}}
<script>
const alertBox = document.getElementById('error-alert');
if(alertBox){
    setTimeout(() => alertBox.remove(), 3000);
}
</script>

</x-guest-layout>
