<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
      background: linear-gradient(90deg, #000000f0, #2c003e);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      z-index: ;
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
      .center-links {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
      }
    }
    .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }


  /* underline hover navlinks */
  .nav-link {
  position: relative;
  display: inline-block;
  padding-bottom: 4px;
  transition: color 0.3s ease;
}

.nav-link::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 2px;
  background-color: #ffffff; /* underline color */
  transition: width 0.3s ease;
}

.nav-link:hover::after {
  width: 100%;
}

  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="/dashboard">PropelloAdmin</a>
    <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center center-links" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="/users">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="/form">Ai Train</a></li>
         <li class="nav-item"><a class="nav-link" href="/question">Ai Questions</a></li>
        <li class="nav-item"><a class="nav-link" href="/addblogs">Added Blogs</a></li>
        <li class="nav-item d-lg-none mt-2">
          <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">
          <i class="bi bi-box-arrow-right"></i> Logout
        </button>
      </form>

        </li>
      </ul>
    </div>

    <!-- Logout button visible only on large screens -->
    <div class="d-none d-lg-block">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">
          <i class="bi bi-box-arrow-right"></i> Logout
        </button>
      </form>

    </div>
  </div>
</nav>
@yield('content')




<!-- footer start -->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
