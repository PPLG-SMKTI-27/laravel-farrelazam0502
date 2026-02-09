<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-slate-950">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="font-sans antialiased bg-slate-950 text-slate-200 overflow-x-hidden">

    <div class="min-h-screen bg-slate-950">

        @include('components.navbar')

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

</body>
</html>
