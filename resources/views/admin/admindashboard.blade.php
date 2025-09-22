@extends('admin.headerfooter')
@section('content')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <style>
body {
  /* background: linear-gradient(90deg, #000000, #1a0023, #2c003e);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  color: #fff;     Optional: ensures text stays readable */
}

body {
  background: linear-gradient(-45deg, #2c003e, #000000, #444444, #2c003e);
  background-size: 400% 400%;
  animation: gradientFlow 20s ease infinite;
  color: #fff;
  min-height: 100vh;
  margin: 0;
  padding: 0;
}

@keyframes gradientFlow {
  0% {
    background-position: 0% 50%;
  }
  25% {
    background-position: 50% 100%;
  }
  50% {
    background-position: 100% 50%;
  }
  75% {
    background-position: 50% 0%;
  }
  100% {
    background-position: 0% 50%;
  }
}


/* analytic css start */
 /* Chart responsive container */
    .chart-container {
      position: relative;
      width: 100%;
      max-width: 900px;
      margin: auto;
      height: 400px; /* gives space for animation */
    }
    canvas {
      width: 100% !important;
      height: 100% !important;
    }

    /* Fade-in animation for card */
    .card {
      opacity: 0;
      transform: translateY(30px);
      animation: fadeUp 1s ease forwards;
    }

    @keyframes fadeUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .card{
      background: rgba(0, 0, 0, 0.35);
      border-radius: 15px;
      box-shadow: 0 8px 32px 0 rgba(111, 0, 229, 0.57);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 2px solid #7600ecff !important;
    }

  </style>
  <body>
    <br>
   <h1 class="text-white text-center mt-2">Welcome {{ auth()->user()->name }}</h1>
 <!-- Main Content -->
<main>
<!-- analytics start -->
   <div class="container py-5">
    <h3 class="text-center mb-4">📊 User Analytics (Active/Logged)</h3>

    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <div class="chart-container">
              <canvas id="userTrend"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
    <script>
async function loadUserStats() {
  const response = await fetch("{{ route('admin.user-stats') }}");
  const data = await response.json();

  const ctx2 = document.getElementById('userTrend');
  new Chart(ctx2, {
    type: 'line',
    data: {
      labels: data.labels,
      datasets: [
        {
          label: 'Active Users',
          data: data.active_users,
          borderColor: '#0d6efd',
          fill: true,
          backgroundColor: 'rgba(13,110,253,0.1)',
          tension: 0.4,
          pointBackgroundColor: '#0d6efd',
          pointRadius: 4,
          pointHoverRadius: 6
        },
        {
          label: 'Total Users',
          data: data.total_users,
          borderColor: '#28a745',
          fill: false,
          tension: 0.4,
          pointBackgroundColor: '#28a745',
          pointRadius: 4,
          pointHoverRadius: 6
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      animation: {
        duration: 2000,
        easing: 'easeOutQuart'
      },
      plugins: {
        legend: { position: 'top' },
        tooltip: { mode: 'index', intersect: false }
      },
      interaction: {
        mode: 'nearest',
        axis: 'x',
        intersect: false
      },
      scales: {
        y: { beginAtZero: true, ticks: { stepSize: 50 } },
        x: { ticks: { maxRotation: 0 } }
      }
    }
  });
}

document.addEventListener("DOMContentLoaded", loadUserStats);
</script>

@endsection

















