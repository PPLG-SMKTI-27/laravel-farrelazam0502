<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio Farrel</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --bg-main: #0f172a;
      --bg-card: #111827;
      --primary: #34d399;
      --secondary: #60a5fa;
      --text-main: #e5e7eb;
      --text-muted: #9ca3af;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(180deg, #020617, var(--bg-main));
      color: var(--text-main);
      line-height: 1.7;
    }

   
    header {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 40px 20px;
      background:
        radial-gradient(circle at top right, rgba(96,165,250,0.25), transparent 45%),
        radial-gradient(circle at top left, rgba(52,211,153,0.25), transparent 45%);
    }

    .profile-photo {
      width: 150px;
      height: 150px;
      margin: 0 auto 25px;
      border-radius: 50%;
      padding: 5px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
    }

    .profile-photo img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      object-fit: cover;
      background: #020617;
    }

    header h1 {
      font-size: 3rem;
      margin-bottom: 12px;
    }

    header h1 span {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    header p {
      color: #c7d2fe;
      font-size: 1.1rem;
    }

    
    section {
      max-width: 1100px;
      margin: auto;
      padding: 90px 20px;
    }

    section h2 {
      text-align: center;
      font-size: 2.3rem;
      margin-bottom: 45px;
    }

    section h2::after {
      content: "";
      width: 90px;
      height: 4px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      display: block;
      margin: 16px auto 0;
      border-radius: 4px;
    }

    .about {
      text-align: center;
      max-width: 800px;
      margin: auto;
      color: var(--text-muted);
    }

    .skills {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
      gap: 24px;
    }

    .skill-card {
      background: linear-gradient(180deg, var(--bg-card), #020617);
      padding: 30px;
      border-radius: 20px;
      text-align: center;
      font-weight: 600;
      border: 1px solid rgba(255,255,255,0.06);
      transition: 0.3s;
    }

    .skill-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 45px rgba(52,211,153,0.25);
    }

  
    .projects {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 40px;
    }

    .project-item {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .project-card {
      width: 100%;
      background: linear-gradient(180deg, var(--bg-card), #020617);
      padding: 35px;
      border-radius: 24px;
      border: 1px solid rgba(255,255,255,0.06);
      transition: 0.35s;
    }

    .project-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 60px rgba(96,165,250,0.3);
    }

    .project-card h3 {
      margin-bottom: 12px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .project-card p {
      color: var(--text-muted);
    }

    .project-btn {
      margin-top: 18px;
      padding: 12px 32px;
      border-radius: 999px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: #020617;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .project-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 14px 35px rgba(96,165,250,0.45);
    }

    
    .contact-box {
      max-width: 700px;
      margin: auto;
      background: linear-gradient(180deg, var(--bg-card), #020617);
      padding: 45px;
      border-radius: 26px;
      border: 1px solid rgba(255,255,255,0.06);
      text-align: center;
    }

    .contact-box p {
      color: var(--text-muted);
      margin-bottom: 30px;
    }

    .contact-links {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .contact-item {
      padding: 16px;
      border-radius: 16px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: #020617;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .contact-item:hover {
      transform: translateY(-4px);
      box-shadow: 0 14px 35px rgba(52,211,153,0.4);
    }

    
    footer {
      background: #020617;
      text-align: center;
      padding: 35px 20px;
      color: var(--text-muted);
      border-top: 1px solid rgba(255,255,255,0.06);
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 2.2rem;
      }
    }
  </style>
</head>

<body>

<header>
  <div>
    <div class="profile-photo">
      <img src="roblox.png" alt="Foto Farrel">
    </div>
    <h1>Halo, Saya <span>Farrel</span></h1>
    <p>Pelajar • Web Developer • Laravel</p>
  </div>
</header>

<section>
  <h2>Tentang Saya</h2>
  <p class="about">
    Saya adalah pelajar yang fokus pada web development modern menggunakan
    HTML, CSS, JavaScript, dan Laravel.
  </p>
</section>

<section>
  <h2>Skill</h2>
  <div class="skills">
    <div class="skill-card">HTML</div>
    <div class="skill-card">CSS</div>
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
        <p>Aplikasi manajemen data menggunakan Laravel & MYSQL</p>
      </div>
      <a href="Project" class="project-btn">Lihat Detail Project</a>
    </div>

    <div class="project-item">
      <div class="project-card">
        <h3>Landing Page</h3>
        <p>Landing page profesional dengan fokus UI/UX.</p>
      </div>
    </div>

  </div>
</section>

<section id="contact">
  <h2>Kontak Saya</h2>
  <div class="contact-box">
    <p>Jika tertarik bekerja sama atau ingin menghubungi saya:</p>

    <div class="contact-links">
      <a href="mailto:farrelazam05@gmail.com" class="contact-item">📧 Email</a>
      <a href="https://wa.me/6281351408541" class="contact-item">💬 WhatsApp</a>
      <a href="https://Instagram.com/farctyl" class="contact-item">📷 Instagram</a>
      <a href="#" class="contact-item">💻 GitHub</a>
    </div>
  </div>
</section>

<footer>
  <p>© 2026 Farrel • Dark Portfolio</p>
</footer>

</body>
</html>
