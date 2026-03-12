<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />


    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body class="font-sans antialiased bg-slate-950 text-slate-200 overflow-x-hidden">
    @include('components.preloader')
    @include('components.page-transition')
    
    <div id="content-wrapper" class="opacity-0 transition-opacity duration-1000 min-h-screen bg-slate-950">
        @if(!Route::is('dashboard'))
            @include('components.navbar')
        @endif

        @isset($header)
            <header class="bg-slate-900 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main>
            @yield('content')
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
  

    <script>
      // Reveal page after big bang preloader finishes
      window.addEventListener('load', () => {
          const wrapper = document.getElementById('content-wrapper');
          if (!wrapper) return;
          setTimeout(() => {
              wrapper.classList.remove('opacity-0');
          }, 3800);
      });

      gsap.registerPlugin(ScrollTrigger);
      gsap.utils.toArray("section").forEach(section => {
        gsap.from(section, {
          scrollTrigger: {
            trigger: section,
            start: "top 80%",
            toggleActions: "play none none none"
          },
          opacity: 0,
          y: 50,
          duration: 1,
          ease: "power2.out"
        });
      });
    </script>
</body>
