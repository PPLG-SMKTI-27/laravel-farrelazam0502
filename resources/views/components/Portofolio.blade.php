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
        <p>Buat Web menggunakan native</p>
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

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {

  const canvas = document.createElement("canvas");

  Object.assign(canvas.style, {
    position: "fixed",
    top: 0,
    left: 0,
    width: "100%",
    height: "100%",
    zIndex: 0,
    pointerEvents: "none"
  });

  document.body.prepend(canvas);

  const ctx = canvas.getContext("2d");

  let w, h;
  function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
  }
  resize();
  window.addEventListener("resize", resize);

  const drops = [];

  for (let i = 0; i < 400; i++) {
    drops.push({
      x: Math.random() * w,
      y: Math.random() * h,
      len: 12 + Math.random() * 20,
      speed: 5 + Math.random() * 6
    });
  }

  function draw() {
    ctx.clearRect(0, 0, w, h);

    ctx.strokeStyle = "rgba(255,255,255,0.35)";
    ctx.lineWidth = 1;

    for (let d of drops) {
      ctx.beginPath();
      ctx.moveTo(d.x, d.y);
      ctx.lineTo(d.x + 2, d.y + d.len);
      ctx.stroke();

      d.y += d.speed;
      d.x += 0.5;

      if (d.y > h) {
        d.y = -20;
        d.x = Math.random() * w;
      }
    }

    requestAnimationFrame(draw);
  }

  draw();
});
</script>

<style>
header, section, footer, .navbar {
  position: relative;
  z-index: 1;
}
</style>
@endpush


@endsection




