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

    /* Card Login */
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

    /* Input */
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
      box-shadow: 0 12px 30px rgba(96,165,250,0.4);
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
  </style>
</head>
<body>

  <form class="login-card" action="/login" method="POST">

    @csrf

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
