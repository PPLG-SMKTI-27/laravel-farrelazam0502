@extends('layouts.app')
@section('title', 'Portofolio')
@section('content')




<header>
  <section id="home">
    <div class="profile-photo">
      <img src="roblox.png" alt="Foto Farrel">
    </div>
    <h1>Halo, Saya <span>Farrel</span></h1>
    <p>Pelajar • Web Developer • Laravel</p>
  </section>
</header>

<section id ="about">
  <h2>Tentang Saya</h2>
  <p class="about">
    Saya adalah pelajar yang fokus pada web development modern menggunakan
    HTML, CSS, JavaScript, dan Laravel.
  </p>
</section>

<section id="skill">
  <h2>Skill</h2>
  <div class="skills">
    <div class="skill-card">HTML</div>
    <div class="skill-card">CSS</div>
    <div class="skill-card">JavaScript</div>
    <div class="skill-card">Laravel</div>
    <div class="skill-card">MySQL</div>
    <div class="skill-card">Git</div>
  </div>
</section>

<section id="project">
  <h2>Project</h2>
  <div class="projects">

    <div class="project-item">
      <div class="project-card">
        <h3>Website Portofolio</h3>
        <p>Website personal modern dengan desain bersih.</p>
      </div>
    </div>

    <div class="project-item">
      <div class="project-card">
        <h3>Aplikasi CRUD Laravel</h3>
        <p>Aplikasi manajemen data menggunakan Laravel</p>
      </div>
      <a href="Project" class="project-btn">Lihat Detail Project</a>
    </div>

    <div class="project-item">
      <div class="project-card">
        <h3>Web cylc Rent Car</h3>
        <p>Buat Web menggunakan native dan MySQL</p>
      </div>
    </div>

  </div>
</section>

<section id="contact">
  <h2>Kontak Saya</h2>
  <div class="contact-box">
    <p>Jika tertarik bekerja sama atau ingin menghubungi saya:</p>

    <div class="contact-links">
      <a href="mailto:emailkamu@gmail.com" class="contact-item">📧 Email</a>
      <a href="https://wa.me/628351408541" class="contact-item">💬 WhatsApp</a>
      <a href="https://www.instagram.com/farctyl" class="contact-item">📷 Instagram</a>
      <a href="#" class="contact-item">💻 GitHub</a>
    </div>
  </div>
</section>

@endsection



