<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Propello Admin Dashboard</title>
  <link rel="icon" type="image/png" href="{{ asset('clients/images/ChatGPT Image Aug 16, 2025, 02_24_34 PM.png') }}">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      background: #05000a;
      position: relative;
      z-index: 1;
    }

    /* Background canvas (scoped only to #bg) */
    #bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 15px;
      display: block;
      z-index: -1; /* keep it behind everything */
      background: radial-gradient(circle at 70% 20%, rgba(140, 0, 200, 0.3), transparent 70%),
                  radial-gradient(circle at 20% 80%, rgba(70, 0, 150, 0.2), transparent 80%),
                  #05000a;
    }

    .overlay {
      position: fixed;
      inset: 0;
      pointer-events: none;
      background: repeating-linear-gradient(
        135deg,
        rgba(0, 0, 0, 0) 0px,
        rgba(0, 0, 0, 0) 2px,
        transparent 2px,
        transparent 10px
      );
      mix-blend-mode: overlay;
      z-index: -1;
    }
 
    .navbar {
      background: linear-gradient(90deg, #000000ff, #2c003e);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .navbar-brand, .nav-link, .dropdown-toggle, .btn-logout {
      color: #fff !important;
    }

    .nav-link:hover, .dropdown-toggle:hover, .btn-logout:hover {
      color: #919191 !important;
    }

    .dropdown-menu {
      right: 0;
      left: auto;
    }

    @media (min-width: 992px) {
    .navbar-nav.mx-auto {
      display: flex; /* ensure horizontal flex on large screens */
      gap: 1.2rem;   /* space between links */
      align-items: center;
    }
  }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") !important;
    }

    /* underline hover navlinks */
    .nav-link {
       position: relative;
    padding: 0.45rem 0.2rem;
    transition: color 0.2s ease;
    }

    .nav-link::after {
      content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color: #fff;
    transition: width 0.25s ease;
    }

    .nav-link:hover::after {
      width: 100%;
    }

 /* make mobile menu links centered when collapsed */
  .navbar-collapse .navbar-nav .nav-item { text-align: center; }

  /* keep the logout vertically centered with the navbar */
  .btn-logout-form { display: flex; align-items: center; gap: .25rem; }

    body {
      padding-top: 70px;   /* avoid navbar overlap */
      padding-bottom: 60px; /* avoid footer overlap */
    }

    footer {
      z-index: 2; /* keep footer above background */
    }
  </style>
</head>
<body>

  <!-- Background -->
  <canvas id="bg"></canvas>
  <div class="overlay"></div>

  <!-- Navbar (replace your existing <nav> block) -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="/dashboard">
      <img src="{{ asset('Admin/img/ChatGPT Image Aug 16, 2025, 03_01_01 PM.png') }}"
           alt="Propello Logo" style="height:40px; width:auto;">
    </a>

    <!-- toggler -->
    <button class="navbar-toggler text-white border-0" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- collapse: center the UL using mx-auto -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto gap-3">
        <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="/users">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="/form">Ai Train</a></li>
        <li class="nav-item"><a class="nav-link" href="/question">Ai Questions</a></li>
        <li class="nav-item"><a class="nav-link" href="/addblogs">Add Blogs</a></li>
        <li class="nav-item"><a class="nav-link" href="/">Back To Website</a></li>
        <li class="nav-item"><a class="nav-link" href="/reviews">Reviews</a></li>
        <li class="nav-item"><a class="nav-link" href="/ustudy">Upload Books</a></li>

        <!-- mobile-only logout inside the menu -->
        <li class="nav-item d-lg-none mt-2">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm w-100">
              <i class="bi bi-box-arrow-right"></i> Logout
            </button>
          </form>
        </li>
      </ul>
    </div>

    <!-- desktop logout on the right -->
    <div class="d-none d-lg-block btn-logout-form">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">
          <i class="bi bi-box-arrow-right"></i> Logout
        </button>
      </form>
    </div>
  </div>
</nav>

  <!-- Page content -->
  @yield('content')

  <!-- Footer -->
  <footer class="bg-dark text-white text-center text-lg-start mt-auto shadow-sm fixed-bottom">
    <div class="container-fluid py-3 px-4 d-flex flex-column flex-lg-row justify-content-between align-items-center">
      <div class="mb-2 mb-lg-0">
        <span>&copy; 2025 PropelloAdmin. All rights reserved.</span>
      </div>
      <div>
        <a href="#" class="text-white me-3 text-decoration-none">Privacy Policy</a>
        <a href="#" class="text-white text-decoration-none">Terms & Conditions</a>
      </div>
    </div> 
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Background Animation -->
  <script>
    const canvas = document.getElementById("bg");
    const ctx = canvas.getContext("2d");

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    const stars = [], nebula = [], meteors = [];

    for (let i = 0; i < 150; i++) {
      stars.push({ x: Math.random()*canvas.width, y: Math.random()*canvas.height, r: Math.random()*1.8, o: Math.random(), speed: 0.3+Math.random()*0.2 });
    }

    for (let i = 0; i < 25; i++) {
      nebula.push({ x: Math.random()*canvas.width, y: Math.random()*canvas.height, r: 100+Math.random()*200, dx: (Math.random()-0.5)*0.3, dy: (Math.random()-0.5)*0.3, color: `hsla(${270+Math.random()*40}, 100%, 50%, 0.08)` });
    }

    for (let i = 0; i < 20; i++) {
      meteors.push({ x: canvas.width+Math.random()*200, y: Math.random()*-200, dx: -6-Math.random()*2, dy: 4+Math.random()*2, size: 2+Math.random()*1.5, trail: [], color: `hsla(${270+Math.random()*60}, 100%, 70%, 1)` });
    }

    function animate() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      stars.forEach(s => {
        ctx.beginPath(); ctx.arc(s.x,s.y,s.r,0,Math.PI*2);
        ctx.fillStyle = `rgba(180,120,255,${s.o})`; ctx.fill();
        s.o += (Math.random()-0.5)*0.02; s.o = Math.max(0.2, Math.min(1, s.o));
        s.y += s.speed; if (s.y > canvas.height) { s.y = -2; s.x = Math.random()*canvas.width; }
      });

      nebula.forEach(o => {
        ctx.beginPath();
        const g = ctx.createRadialGradient(o.x,o.y,0,o.x,o.y,o.r);
        g.addColorStop(0,o.color); g.addColorStop(1,"transparent");
        ctx.fillStyle = g; ctx.arc(o.x,o.y,o.r,0,Math.PI*2); ctx.fill();
        o.x += o.dx; o.y += o.dy;
        if (o.x<-o.r) o.x=canvas.width+o.r; if (o.x>canvas.width+o.r) o.x=-o.r;
        if (o.y<-o.r) o.y=canvas.height+o.r; if (o.y>canvas.height+o.r) o.y=-o.r;
      });

      meteors.forEach(m => {
        m.trail.push({x:m.x,y:m.y}); if(m.trail.length>25) m.trail.shift();
        const grad = ctx.createLinearGradient(m.x,m.y,m.x-m.dx*10,m.y-m.dy*10);
        grad.addColorStop(0,m.color); grad.addColorStop(1,"transparent");
        ctx.beginPath(); ctx.strokeStyle=grad; ctx.lineWidth=2;
        ctx.moveTo(m.x,m.y); ctx.lineTo(m.x-m.dx*8,m.y-m.dy*8); ctx.stroke();
        ctx.beginPath(); const hg=ctx.createRadialGradient(m.x,m.y,0,m.x,m.y,m.size*4);
        hg.addColorStop(0,m.color); hg.addColorStop(1,"transparent");
        ctx.fillStyle=hg; ctx.arc(m.x,m.y,m.size*2,0,Math.PI*2); ctx.fill();
        m.x+=m.dx; m.y+=m.dy;
        if(m.x<-200||m.y>canvas.height+200){ m.x=canvas.width+Math.random()*300; m.y=Math.random()*-200; m.trail=[]; }
      });

      requestAnimationFrame(animate);
    }
    animate();

    window.addEventListener("resize", () => {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    });
  </script>
</body>
</html>
