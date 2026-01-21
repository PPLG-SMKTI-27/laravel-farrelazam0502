<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Semua Project | Farrel</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

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
      min-height: 100vh;
    }

   
    header {
      padding: 120px 20px 90px;
      text-align: center;
      background:
        radial-gradient(circle at top right, rgba(96,165,250,0.25), transparent 45%),
        radial-gradient(circle at top left, rgba(52,211,153,0.25), transparent 45%);
    }

    header h1 {
      font-size: 3rem;
      margin-bottom: 16px;
    }

    header h1 span {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    header p {
      max-width: 720px;
      margin: auto;
      font-size: 1.1rem;
      color: #c7d2fe;
    }

    section {
      max-width: 1200px;
      margin: auto;
      padding: 80px 20px 120px;
    }

    .projects {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 32px;
    }

    .project-card {
      background: linear-gradient(180deg, var(--bg-card), #020617);
      padding: 36px 30px 42px;
      border-radius: 24px;
      border: 1px solid rgba(255,255,255,0.06);
      transition: all 0.35s ease;
      position: relative;
      overflow: hidden;
    }

    .project-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(
        135deg,
        transparent,
        rgba(52,211,153,0.18),
        transparent
      );
      opacity: 0;
      transition: opacity 0.35s;
    }

    .project-card:hover::before {
      opacity: 1;
    }

    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 30px 70px rgba(52,211,153,0.25);
      border-color: rgba(96,165,250,0.45);
    }

    .project-card h3 {
      font-size: 1.45rem;
      margin-bottom: 12px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .project-card p {
      color: var(--text-muted);
      margin-bottom: 22px;
    }

    .tags {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 28px;
    }

    .tag {
      padding: 6px 16px;
      font-size: 0.8rem;
      border-radius: 999px;
      background: rgba(52,211,153,0.15);
      color: var(--primary);
    }

    .btn {
      display: inline-block;
      padding: 11px 28px;
      border-radius: 999px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: #020617;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 14px 32px rgba(96,165,250,0.45);
    }

    footer {
      background: #020617;
      text-align: center;
      padding: 40px 20px;
      color: var(--text-muted);
      border-top: 1px solid rgba(255,255,255,0.06);
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 2.2rem;
      }
      header p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

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

</body>
</html>
    