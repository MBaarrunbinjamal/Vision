<!DOCTYPE html>
<html>

<head>
  <title>Modern CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background: #f1f5f9;
    padding: 20px;
  }

  .cv-card {
    max-width: 800px;
    margin: auto;
    background: #fff;
    padding: 50px;
    border-left: 6px solid #2563eb;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
  }

  .cv-card h1 {
    font-size: 36px;
    font-weight: bold;
    color: #1e293b;
  }

  .cv-card h3 {
    margin-top: 25px;
    font-size: 18px;
    font-weight: 600;
    color: #2563eb;
    border-bottom: 1px solid #2563eb;
    display: inline-block;
    padding-bottom: 3px;
  }

  .cv-card p {
    font-size: 15px;
    color: #334155;
    line-height: 1.6;
  }

  hr {
    border: none;
    border-top: 1px solid #e2e8f0;
    margin: 20px 0;
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
</body>

</html>