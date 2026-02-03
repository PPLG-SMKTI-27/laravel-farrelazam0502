
<style>/* RESET KECIL */
* {
  box-sizing: border-box;
}

/* BASE NAVBAR */
#mainNav {
  position: sticky;
  top: 0;
  z-index: 50;

  width: 100%;
  margin: 0 auto;

  padding: 20px 32px;
  background: transparent;

  transition:
    width 0.45s cubic-bezier(.4,0,.2,1),
    padding 0.35s cubic-bezier(.4,0,.2,1),
    border-radius 0.35s ease,
    background 0.35s ease,
    box-shadow 0.35s ease,
    top 0.35s ease;
}

/* ISI NAV */
.nav-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
}

/* MENU */
.nav-menu {
  display: flex;
  align-items: center;
  gap: 22px;
  list-style: none;
  margin: 0;
  padding: 0;
}

li .link {
  text-decoration: none;
  color: #0bfa96;
}

/* LOGO */
.logo {
  font-weight: 600;
  font-size: 18px;
}

/* BUTTON */
.cta-btn {
  padding: 6px 14px;
  border-radius: 6px;
  background: #0bfa96;
  color: #000000;
  text-decoration: none;
}

/* FLOAT STATE (SCROLL) */
#mainNav.is-float {
  position: fixed;
  top: 1.5rem;
  left: 0;
  right: 0;

  width: calc(100% - 4rem);
  max-width: 64rem;
  margin: 0 auto;

  padding: 10px 20px;
  border-radius: 999px;

  background: rgba(255, 255, 255, 0.75);
  backdrop-filter: blur(16px);

  box-shadow: 0 10px 40px rgba(0,0,0,0.12);
}</style>

<nav id="mainNav">
  <div class="nav-container">
    <div class="logo">Farrel</div>

    <ul class="nav-menu">
      <li><a class="link" href="#home">Home</a></li>
      <li><a class="link" href="#about">Tentang</a></li>
      <li><a class="link" href="#skill">Skill</a></li>
      <li><a class="link" href="#project">Project</a></li>
      <li><a class="link" href="#contact">Kontak</a></li>
 
      <li>
        <a href="/login" class="cta-btn">Login</a>
      </li>
    </ul>
  </div>
</nav>


<script>
document.addEventListener('DOMContentLoaded', () => {
  const nav = document.getElementById('mainNav');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 80) {
      nav.classList.add('is-float');
    } else {
      nav.classList.remove('is-float');
    }
  });
});
</script>