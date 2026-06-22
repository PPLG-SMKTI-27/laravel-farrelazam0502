@extends('layouts.app')

@section('content')
<div class="min-h-screen pt-32 pb-24 relative bg-transparent">
    <div class="max-w-4xl mx-auto px-6 space-y-10 relative z-20">

        <div class="flex flex-col sm:flex-row justify-between items-center gap-6 mb-12">
            <h1 class="text-4xl md:text-5xl font-black text-[#4b3621] dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-emerald-400 dark:to-blue-400 font-playfair tracking-tight">
                Profile Settings
            </h1>
            <a href="{{ route('dashboard') }}" class="text-[#4b3621]/60 dark:text-slate-400 hover:text-[#115e59] dark:hover:text-white transition flex items-center gap-2 font-bold text-xs uppercase tracking-widest">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>

        {{-- Update Profile --}}
        <div class="profile-card p-8 rounded-3xl bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl border border-[#4b3621]/10 dark:border-white/5 shadow-xl">
            <h3 class="text-2xl font-bold text-[#4b3621] dark:text-white mb-6 font-playfair">Update Profile</h3>
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')

                <label class="block mb-2 text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Name</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}"
                       class="input-field w-full p-3.5 mb-6 rounded-2xl bg-[#fbfaf5]/40 dark:bg-slate-950/40 text-[#4b3621] dark:text-white border border-[#4b3621]/15 dark:border-white/10 focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 outline-none transition text-sm">

                <label class="block mb-2 text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Email</label>
                <input type="email" name="email" value="{{ Auth::user()->email }}"
                       class="input-field w-full p-3.5 mb-8 rounded-2xl bg-[#fbfaf5]/40 dark:bg-slate-950/40 text-[#4b3621] dark:text-white border border-[#4b3621]/15 dark:border-white/10 focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 outline-none transition text-sm">

                <button type="submit" class="action-btn bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white font-bold py-3.5 px-8 rounded-2xl shadow-lg transition duration-300 transform hover:scale-[1.02] active:scale-[0.98] text-sm uppercase tracking-wider">
                    Update Profile
                </button>
            </form>
        </div>

        {{-- Update Password --}}
        <div class="profile-card p-8 rounded-3xl bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl border border-[#4b3621]/10 dark:border-white/5 shadow-xl">
            <h3 class="text-2xl font-bold text-[#4b3621] dark:text-white mb-6 font-playfair">Update Password</h3>
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')

                <label class="block mb-2 text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">New Password</label>
                <input type="password" name="password"
                       class="input-field w-full p-3.5 mb-6 rounded-2xl bg-[#fbfaf5]/40 dark:bg-slate-950/40 text-[#4b3621] dark:text-white border border-[#4b3621]/15 dark:border-white/10 focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 outline-none transition text-sm">

                <label class="block mb-2 text-[#4b3621]/60 dark:text-slate-400 text-xs font-bold uppercase tracking-widest ml-1">Confirm Password</label>
                <input type="password" name="password_confirmation"
                       class="input-field w-full p-3.5 mb-8 rounded-2xl bg-[#fbfaf5]/40 dark:bg-slate-950/40 text-[#4b3621] dark:text-white border border-[#4b3621]/15 dark:border-white/10 focus:border-[#115e59]/50 dark:focus:border-emerald-500/50 focus:ring-2 focus:ring-[#115e59]/20 dark:focus:ring-emerald-500/20 outline-none transition text-sm">

                <button type="submit" class="action-btn bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white font-bold py-3.5 px-8 rounded-2xl shadow-lg transition duration-300 transform hover:scale-[1.02] active:scale-[0.98] text-sm uppercase tracking-wider">
                    Update Password
                </button>
            </form>
        </div>

        {{-- Delete Account --}}
        <div class="profile-card p-8 rounded-3xl bg-white/70 dark:bg-slate-900/60 backdrop-blur-2xl border border-[#4b3621]/10 dark:border-white/5 shadow-xl border-rose-500/20 dark:border-rose-500/20">
            <h3 class="text-2xl font-bold text-rose-600 dark:text-rose-400 mb-2 font-playfair">Delete Account</h3>
            <p class="text-[#4b3621]/60 dark:text-slate-400 text-xs mb-6 font-light">Tindakan ini tidak dapat dibatalkan. Seluruh data akun Anda akan dihapus secara permanen dari sistem database.</p>
            <form method="POST" action="{{ route('profile.destroy') }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="action-btn bg-gradient-to-r from-rose-600 to-red-600 hover:from-rose-500 hover:to-red-500 text-white font-bold py-3.5 px-8 rounded-2xl shadow-lg transition duration-300 transform hover:scale-[1.02] active:scale-[0.98] text-sm uppercase tracking-wider">
                    Delete Account
                </button>
            </form>
        </div>

    </div>
</div>

{{-- GSAP Animations --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Card appear on scroll
        gsap.utils.toArray('.profile-card').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: "top 90%",
                },
                y: 50,
                opacity: 0,
                duration: 1,
                ease: "power2.out",
                delay: i * 0.2
            });
        });

        // Stagger input fields inside each card
        gsap.utils.toArray('.profile-card').forEach(card => {
            gsap.from(card.querySelectorAll('.input-field'), {
                scrollTrigger: {
                    trigger: card,
                    start: "top 90%",
                },
                y: 20,
                opacity: 0,
                stagger: 0.1,
                duration: 0.8,
                ease: "power2.out"
            });
        });
    }
});
</script>
@endsection
