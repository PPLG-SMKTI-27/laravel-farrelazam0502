@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')

<div class="bg-slate-950 text-slate-200 font-sans">

    @include('section.hero')
    @include('section.about')
    @include('section.skill')
    @include('section.project')
    @include('section.contact')

    <footer class="text-center py-8 text-slate-500 border-t border-white/5">
        © {{ date('Y') }} Farrel. All rights reserved.
    </footer>

</div>

@endsection
