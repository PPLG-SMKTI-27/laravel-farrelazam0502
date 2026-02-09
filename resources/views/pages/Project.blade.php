@extends('layouts.app')
@section('title', 'Project')
@section('content')

  <header>
    <h1>Project <span>{{ $nama }}</span></h1>
    <p>
      Kumpulan project yang pernah saya kerjakan, mulai dari website sederhana
      hingga aplikasi berbasis Laravel.
    </p>
  </header>

  <section>
    <div class="projects">
      @if ($projects->isEmpty())
    <p>Data project belum tersedia</p>
@else

      @foreach($projects as $p)

      <div class="project-card">
        <h3>{{ $p->title }}</h3>
        <p>{{ $p->description}}</p>
        <div class="tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
        </div>
        <a href="#" class="btn">Lihat Detail</a>
      </div>
      @endforeach
      @endif
  </section>
@endsection

    