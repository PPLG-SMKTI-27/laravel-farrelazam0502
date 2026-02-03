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
      padding: 12px 18px;
      background: #22c55e;
      color: white;
      border-radius: 12px;
    }

    .container, header, section, footer, nav {
      position: relative;
      z-index: 1;
    }
    </style>
</head>

<body>

@if (session('success'))
<div id="success-alert" class="success-alert">
    {{ session('success') }}
</div>
@endif

<div class="container">
    <x-navbar />
    @yield('content')
    <x-footer />
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {

  const canvas = document.createElement("canvas");

  Object.assign(canvas.style, {
    position: "fixed",
    inset: 0,
    zIndex: 0,
    pointerEvents: "none"
  });

  document.body.prepend(canvas);

  const ctx = canvas.getContext("2d");

  function resize(){
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  }
  resize();
  window.addEventListener("resize", resize);

  const drops = Array.from({length: 350}, () => ({
    x: Math.random()*canvas.width,
    y: Math.random()*canvas.height,
    s: 4+Math.random()*5,
    l: 10+Math.random()*15
  }));

  function rain(){
    ctx.clearRect(0,0,canvas.width,canvas.height);
    ctx.strokeStyle="rgba(255,255,255,0.3)";

    for(const d of drops){
      ctx.beginPath();
      ctx.moveTo(d.x,d.y);
      ctx.lineTo(d.x+2,d.y+d.l);
      ctx.stroke();

      d.y+=d.s;

      if(d.y>canvas.height){
        d.y=-20;
        d.x=Math.random()*canvas.width;
      }
    }

    requestAnimationFrame(rain);
  }

  rain();
});
</script>

@stack('scripts')

</body>
</html>
