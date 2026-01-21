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

      <div class="project-card">
        <h3>Website Portofolio</h3>
        <p>Website personal dengan desain modern dan responsif.</p>
        <div class="tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
        </div>
        <a href="#" class="btn">Lihat Detail</a>
      </div>

      <div class="project-card">
        <h3>Web Rental Mobil</h3>
        <p>Aplikasi manajemen data dengan Laravel dan MySQL.</p>
        <div class="tags">
          <span class="tag">Laravel</span>
          <span class="tag">MySQL</span>
        </div>
        <a href="#" class="btn">Lihat Detail</a>
      </div>

      <div class="project-card">
        <h3>Landing Page Produk</h3>
        <p>Landing page fokus UI/UX untuk meningkatkan konversi.</p>
        <div class="tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
          <span class="tag">UI/UX</span>
        </div>
        <a href="#" class="btn">Lihat Detail</a>
      </div>

      <div class="project-card">
        <h3>Sistem Login</h3>
        <p>Sistem login & register sederhana dengan validasi.</p>
        <div class="tags">
          <span class="tag">PHP</span>
          <span class="tag">MySQL</span>
        </div>
        <a href="#" class="btn">Lihat Detail</a>
      </div>

    </div>
  </section>

  <footer>
    <p>© 2026 Farrel • All Projects</p>
  </footer>
@endsection

    