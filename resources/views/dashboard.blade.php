@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#0b1120] py-12">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Title --}}
        <div class="flex justify-between items-center mb-12">
            <h1 class="text-4xl font-extrabold text-white tracking-tight">
                Dashboard
            </h1>
            {{-- Edit Profile --}}
            <a href="{{ route('profile.edit') }}" 
               class="bg-blue-600 hover:bg-blue-500 transition px-5 py-2 rounded-lg text-white font-medium shadow">
                Edit Profile
            </a>
        </div>

        {{-- Welcome Card --}}
        <div class="bg-gradient-to-r from-cyan-500 to-blue-600 rounded-3xl p-10 shadow-2xl mb-14 text-white relative overflow-hidden">
            <div class="relative z-10">
                <h2 class="text-3xl font-bold">
                    Halo, {{ Auth::user()->name }} 👋
                </h2>
                <p class="mt-3 text-blue-100 text-lg">
                    Selamat datang kembali di dashboard kamu. Lihat statistik dan progress terbaru di bawah!
                </p>
            </div>
            {{-- Glow circles --}}
            <div class="absolute -top-12 -right-12 w-52 h-52 bg-white/10 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-white/5 rounded-full blur-3xl animate-pulse-slow"></div>
        </div>

        {{-- Statistik --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-5xl mx-auto">

            <div class="stat-card bg-[#111827]/80 backdrop-blur-md p-8 rounded-3xl border border-gray-700 shadow-lg transition duration-500">
                <div class="flex items-center space-x-4">
                    <div class="bg-cyan-500/20 p-3 rounded-full text-cyan-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 17v-6h6v6M12 7v2M5 12h14"/>
                        </svg>
                    </div>
                    <h4 class="text-gray-400 text-sm uppercase tracking-widest font-semibold">
                        Total Project
                    </h4>
                </div>
                <p class="text-5xl font-extrabold text-cyan-400 mt-6 count" data-target="12">0</p>
                <div class="mt-4 h-1 w-16 bg-cyan-400 rounded-full"></div>
            </div>

            <div class="stat-card bg-[#111827]/80 backdrop-blur-md p-8 rounded-3xl border border-gray-700 shadow-lg transition duration-500">
                <div class="flex items-center space-x-4">
                    <div class="bg-pink-500/20 p-3 rounded-full text-pink-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 14l9-5-9-5-9 5 9 5zM12 14l6.16-3.422M12 14v7m0 0l-6.16-3.422M12 21l6.16-3.422M6 10v7"/>
                        </svg>
                    </div>
                    <h4 class="text-gray-400 text-sm uppercase tracking-widest font-semibold">
                        Skills
                    </h4>
                </div>
                <p class="text-5xl font-extrabold text-pink-400 mt-6 count" data-target="8">0</p>
                <div class="mt-4 h-1 w-16 bg-pink-400 rounded-full"></div>
            </div>

            <div class="stat-card bg-[#111827]/80 backdrop-blur-md p-8 rounded-3xl border border-gray-700 shadow-lg transition duration-500">
                <div class="flex items-center space-x-4">
                    <div class="bg-yellow-500/20 p-3 rounded-full text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 7v4a1 1 0 001 1h3m10 0h3a1 1 0 001-1V7m-5 10v-4a1 1 0 00-1-1h-4a1 1 0 00-1 1v4"/>
                        </svg>
                    </div>
                    <h4 class="text-gray-400 text-sm uppercase tracking-widest font-semibold">
                        Contacts
                    </h4>
                </div>
                <p class="text-5xl font-extrabold text-yellow-400 mt-6 count" data-target="5">0</p>
                <div class="mt-4 h-1 w-16 bg-yellow-400 rounded-full"></div>
            </div>

        </div>

       

        {{-- Latest Projects Table --}}
        <div class="mt-16 max-w-5xl mx-auto bg-[#111827]/80 backdrop-blur-md rounded-3xl p-6 shadow-lg">
            <h3 class="text-white font-bold text-xl mb-4">Latest Projects</h3>
            <table class="min-w-full table-auto text-white">
                <thead>
                    <tr class="border-b border-gray-700">
                        <th class="px-4 py-2 text-left text-gray-400">Project</th>
                        <th class="px-4 py-2 text-left text-gray-400">Status</th>
                        <th class="px-4 py-2 text-left text-gray-400">Deadline</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-700 hover:bg-gray-800 transition">
                        <td class="px-4 py-2">Website Redesign</td>
                        <td class="px-4 py-2">In Progress</td>
                        <td class="px-4 py-2">2026-03-01</td>
                    </tr>
                    <tr class="border-b border-gray-700 hover:bg-gray-800 transition">
                        <td class="px-4 py-2">Mobile App</td>
                        <td class="px-4 py-2">Completed</td>
                        <td class="px-4 py-2">2026-02-15</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

{{-- GSAP --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    // Animate number counters
    document.querySelectorAll('.count').forEach(el => {
        const target = +el.getAttribute('data-target');
        gsap.fromTo(el, { innerText: 0 }, { 
            innerText: target, 
            duration: 2, 
            snap: { innerText: 1 }, 
            ease: "power1.out"
        });
    });

    // Animate stat cards on hover
    gsap.utils.toArray('.stat-card').forEach(card => {
        card.addEventListener('mouseenter', () => gsap.to(card, { y: -10, duration: 0.5, ease: "power2.out" }));
        card.addEventListener('mouseleave', () => gsap.to(card, { y: 0, duration: 0.5, ease: "power2.out" }));
    });

    // Animate quick links hover
    gsap.utils.toArray('.quick-link').forEach(link => {
        link.addEventListener('mouseenter', () => gsap.to(link, { scale: 1.05, duration: 0.3 }));
        link.addEventListener('mouseleave', () => gsap.to(link, { scale: 1, duration: 0.3 }));
    });
</script>
@endsection
