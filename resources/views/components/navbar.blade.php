<nav class="navbar">
  <style>.nav-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav-menu {
  display: flex;
  align-items: center;
  gap: 22px;
  list-style: none;
  margin: 0;
  padding: 0;
}


.auth-item form {
  margin: 0;
}


.cta-btn {
  padding: 6px 14px;
  border-radius: 6px;
  background: #34d399;
  color: white;
  text-decoration: none;
  border: none;
  cursor: pointer;
}

.logout {
  background: #ef4444;
}
</style>
  <div class="nav-container">

    <div class="logo">Farrel</div>

    <ul class="nav-menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">Tentang</a></li>
      <li><a href="#skill">Skill</a></li>
      <li><a href="#project">Project</a></li>
      <li><a href="#contact">Kontak</a></li>

      
      <li class="auth-item">
        @if (!session('is_login'))
          <a href="/login" class="cta-btn">Login</a>
        @else
          <form action="/logout" method="POST" style="margin:0;">
            @csrf
            <button type="submit" class="cta-btn logout">Logout</button>
          </form>
        @endif
      </li>
    </ul>

  </div>
</nav>
