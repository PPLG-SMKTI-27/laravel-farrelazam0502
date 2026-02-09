<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Farrel</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
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
