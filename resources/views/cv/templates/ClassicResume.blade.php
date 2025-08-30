<!DOCTYPE html>
<html>

<head>
  <title>Modern CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
 body {
    font-family: 'Times New Roman', serif;
    background: #fafafa;
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