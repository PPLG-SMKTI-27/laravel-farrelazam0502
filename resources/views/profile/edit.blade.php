@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#0b1120] py-12">
    <div class="max-w-4xl mx-auto px-6 space-y-10">

        <h1 class="text-4xl font-bold text-white mb-6">Profile</h1>

        {{-- Update Profile --}}
        <div class="profile-card p-8 rounded-3xl bg-[#111827]/80 backdrop-blur-md border border-gray-700 shadow-xl">
            <h3 class="text-2xl font-bold text-white mb-6">Update Profile</h3>
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')

                <label class="block mb-2 text-gray-300 font-medium">Name</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}"
                       class="input-field w-full p-3 mb-6 rounded-xl bg-[#1f2937] text-white border border-green-500 focus:ring-2 focus:ring-green-500 outline-none transition">

                <label class="block mb-2 text-gray-300 font-medium">Email</label>
                <input type="email" name="email" value="{{ Auth::user()->email }}"
                       class="input-field w-full p-3 mb-8 rounded-xl bg-[#1f2937] text-white border border-green-500 focus:ring-2 focus:ring-green-500 outline-none transition">

                <button type="submit" class="action-btn bg-green-500 hover:bg-green-600 px-6 py-2 rounded-xl text-white font-semibold shadow-lg transition-all">
                    Update Profile
                </button>
            </form>
        </div>

        {{-- Update Password --}}
        <div class="profile-card p-8 rounded-3xl bg-[#111827]/80 backdrop-blur-md border border-gray-700 shadow-xl">
            <h3 class="text-2xl font-bold text-white mb-6">Update Password</h3>
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')

                <label class="block mb-2 text-gray-300 font-medium">New Password</label>
                <input type="password" name="password"
                       class="input-field w-full p-3 mb-6 rounded-xl bg-[#1f2937] text-white border border-green-500 focus:ring-2 focus:ring-green-500 outline-none transition">

                <label class="block mb-2 text-gray-300 font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation"
                       class="input-field w-full p-3 mb-8 rounded-xl bg-[#1f2937] text-white border border-green-500 focus:ring-2 focus:ring-green-500 outline-none transition">

                <button type="submit" class="action-btn bg-green-500 hover:bg-green-600 px-6 py-2 rounded-xl text-white font-semibold shadow-lg transition-all">
                    Update Password
                </button>
            </form>
        </div>

        {{-- Delete Account --}}
        <div class="profile-card p-8 rounded-3xl bg-[#111827]/80 backdrop-blur-md border border-gray-700 shadow-xl">
            <h3 class="text-2xl font-bold text-white mb-6">Delete Account</h3>
            <form method="POST" action="{{ route('profile.destroy') }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="action-btn bg-red-600 hover:bg-red-700 px-6 py-2 rounded-xl text-white font-semibold shadow-lg transition-all">
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

// Button hover animation
document.querySelectorAll('.action-btn').forEach(btn => {
    btn.addEventListener('mouseenter', () => gsap.to(btn, { scale: 1.05, duration: 0.3 }));
    btn.addEventListener('mouseleave', () => gsap.to(btn, { scale: 1, duration: 0.3 }));
});
</script>
@endsection
