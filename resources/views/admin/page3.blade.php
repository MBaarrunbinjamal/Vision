<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Approved Lawyers - Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #121212;
      color: #e0e0e0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding-top: 56px;
    }

    .table thead {
      color: #00d1ff;
    }

    footer {
      text-align: center;
      padding: 15px;
      background-color: #1c1c1c;
      color: #aaa;
      border-top: 1px solid #333;
      margin-top: 30px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item"><a class="nav-link" href="/dashmin"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="/lawyerrequest"><i class="bi bi-person-badge"></i> Lawyers Requests</a></li>
        <li class="nav-item"><a class="nav-link active" href="/approvedlawyers"><i class="bi bi-person-check"></i> Approved Lawyers</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-people"></i> Clients</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-folder"></i> Cases</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-calendar-event"></i> Appointments</a></li>
      </ul>
      <!-- <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">
          <i class="bi bi-box-arrow-right"></i> Logout
        </button> -->
      </form>
    </div>
  </div>
</nav>

<!-- Main Content -->
<main class="container-fluid p-4">
  <h2 class="mb-4">Approved Lawyers</h2>



  <!-- Footer -->
  <footer class="mt-5">
    &copy; 2025 <strong>Legal Connect</strong>. All rights reserved.
  </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
