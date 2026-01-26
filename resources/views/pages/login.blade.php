<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Farrel</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

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
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background:
        radial-gradient(circle at top right, rgba(96,165,250,0.25), transparent 45%),
        radial-gradient(circle at bottom left, rgba(52,211,153,0.25), transparent 45%),
        #020617;
      color: var(--text-main);
    }

    
    .login-card {
      width: 100%;
      max-width: 380px;
      padding: 40px;
      border-radius: 22px;
      background: linear-gradient(180deg, var(--bg-card), #020617);
      border: 1px solid rgba(255,255,255,0.06);
      box-shadow: 0 20px 60px rgba(0,0,0,0.6);
    }

    .login-card h2 {
      text-align: center;
      margin-bottom: 30px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    
    .form-group {
      margin-bottom: 18px;
    }

    label {
      font-size: 14px;
      color: var(--text-muted);
      display: block;
      margin-bottom: 6px;
    }

    input {
      width: 100%;
      padding: 12px 14px;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,0.08);
      background: #0b1220;
      color: white;
      outline: none;
      transition: 0.3s;
    }

    input:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 2px rgba(52,211,153,0.2);
    }

    /* Button */
    button {
      width: 100%;
      margin-top: 15px;
      padding: 12px;
      border-radius: 999px;
      border: none;
      font-weight: 600;
      cursor: pointer;
      color: #020617;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      transition: 0.3s;
    }

    button:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(111, 250, 96, 0.4);
    }

    /* Footer text */
    .extra {
      text-align: center;
      margin-top: 18px;
      font-size: 14px;
      color: var(--text-muted);
    }

    .extra a {
      color: var(--primary);
      text-decoration: none;
    }

    
.error-alert {
  position: fixed;
  top: 17px;
  right: 20px;
  z-index: 9999;

  display: flex;
  align-items: center;
  gap: 12px;

  padding: 12px 18px;
  max-width: 320px;

  background: #e70909;
  color: white;

  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.25);

  font-size: 14px;
  font-weight: 500;

  animation: slideIn 0.35s ease-out;
  transition: 0.3s;
}


.close-btn {
  background: transparent;
  border: none;
  color: white;
  cursor: pointer;
  font-size: 17px;
  opacity: 0.8;

  position: relative;
  top: -8px; 
}


@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateX(20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}


.error-alert.hide {
  opacity: 0;
  transform: translateX(20px);
}

  </style>
</head>
<body>

  <form class="login-card" action="/login" method="POST">

    @csrf

    
@if ($errors->has('login'))
<div id="error-alert" class="error-alert">
    <span>{{ $errors->first('login') }}</span>

    <button onclick="closeError()" class="close-btn">
        ✕
    </button>
</div>

<script>
    const errorEl = document.getElementById('error-alert');

    function closeError() {
        errorEl.classList.add('hide');
        setTimeout(() => errorEl.remove(), 300);
    }

    setTimeout(closeError, 3000);
</script>
@endif


    <h2>Login</h2>

    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" placeholder="email@gmail.com" required>
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" placeholder="••••••••" required>
    </div>

    <button type="submit">Masuk</button>
  </form>

</body>
</html>
