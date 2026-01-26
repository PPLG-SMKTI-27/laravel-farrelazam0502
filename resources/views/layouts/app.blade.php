<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
.success-alert {
  position: fixed;
  top: 17px;
  right: 20px;
  z-index: 9999;

  display: flex;
  align-items: center;
  gap: 12px;

  padding: 12px 18px;
  max-width: 320px;

  background: #22c55e;
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
  font-size: 16px;
  opacity: 0.8;
}

.close-btn:hover {
  opacity: 1;
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


.success-alert.hide {
  opacity: 0;
  transform: translateX(20px);
}
</style>
</head>
<body>
   @if (session('success'))
<div id="success-alert" class="success-alert">
    <span>
        {{ session('success') }}
    </span>

    <button onclick="closeAlert()" class="close-btn">
        ✕
    </button>
</div>

<script>
    const alertEl = document.getElementById('success-alert');

    function closeAlert() {
        alertEl.classList.add('hide');
        setTimeout(() => alertEl.remove(), 300);
    }

    setTimeout(closeAlert, 3000);
</script>
@endif

    <div class="container">
        <x-navbar />
        @yield('content')
        <x-footer />
    </div>
</body>
</html>
