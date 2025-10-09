<!DOCTYPE html>
<html>

<head>
  <title>Classic Resume</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
 body {
        background: linear-gradient(135deg, #2d0050ff, #161616ff);
        font-family: 'Georgia', serif;
  }

  .cv-card {
    max-width: 780px;
    margin: auto;
    background: #fff;
    padding: 60px;
    border: 1px solid #d1d5db;
    border-radius: 4px;
  }

  .cv-card h1 {
    font-size: 32px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 10px;
    color: #111827;
  }

  .cv-card h3 {
    margin-top: 30px;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #374151;
    border-bottom: 1px solid #9ca3af;
    padding-bottom: 4px;
  }

  .cv-card p {
    font-size: 14px;
    line-height: 1.6;
    color: #4b5563;
  }

  hr {
    border: none;
    border-top: 1px dashed #d1d5db;
    margin: 20px 0;
  }

  /* float button css  */
    #floatingButton {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background-color: #6610f2; /* Bootstrap purple */
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      bottom: 40px;
      right: 40px;
      z-index: 9999;
      cursor: move;
      box-shadow: 0 8px 15px rgba(0,0,0,0.2);
      animation: bounce 2s infinite;
      user-select: none;
    }

    @keyframes bounce {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }

    #floatingButton:hover {
      background-color: #520dc2;
      transition-duration: 0.25s;
    }
  </style>
</head>
  @if(!app()->runningInConsole() && !request()->routeIs('cv.download'))
    <a href="{{ route('cv.download', $cv->id) }}" class="btn btn-primary">Download PDF</a>
@endif

<body class="p-5">
  <div class="container cv-card">
    <h1 class="text-center">{{ $cv->full_name }}</h1>
    <p class="text-center">{{ $cv->email }} | {{ $cv->phone }}</p>
    <hr>
    <h3>Summary</h3>
    <p>{{ $cv->summary }}</p>
    <h3>Education</h3>
    <p>{{ $cv->education }}</p>
    <h3>Experience</h3>
    <p>{{ $cv->experience }}</p>
    <h3>Skills</h3>
    <p>{{ $cv->skills }}</p>
  </div>

   <!-- float button start -->

<!-- Floating Button -->
  
    <div id="floatingButton" title="Back" >
    <i class="fas fa-arrow-left"></i>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const btn = document.getElementById('floatingButton');
  let isDragging = false;
  let offsetX, offsetY;
  let startX, startY;

  btn.addEventListener('mousedown', (e) => {
    isDragging = true;
    offsetX = e.clientX - btn.getBoundingClientRect().left;
    offsetY = e.clientY - btn.getBoundingClientRect().top;
    startX = e.clientX;
    startY = e.clientY;
  });

  document.addEventListener('mousemove', (e) => {
    if (isDragging) {
      btn.style.left = `${e.clientX - offsetX}px`;
      btn.style.top = `${e.clientY - offsetY}px`;
      btn.style.right = 'auto';
      btn.style.bottom = 'auto';
    }
  });

  document.addEventListener('mouseup', (e) => {
    if (isDragging) {
      const endX = e.clientX;
      const endY = e.clientY;
      const moved = Math.abs(endX - startX) > 5 || Math.abs(endY - startY) > 5;
      isDragging = false;

      // If it wasn't a drag (i.e., a click), go back
      if (!moved) {
        window.location.href = '/cv'; // Change if needed
      }
    }
  });
  </script>

   <!-- float button end -->
</body>

</html>