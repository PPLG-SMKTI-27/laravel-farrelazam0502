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
      @foreach($project as $p)

      <div class="project-card">
        <h3>{{ $p['project'] }}</h3>
        <p>Website personal dengan desain modern dan responsif.</p>
        <div class="tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
        </div>
        <a href="#" class="btn">Lihat Detail</a>
      </div>
      @endforeach
  </section>
@endsection

    