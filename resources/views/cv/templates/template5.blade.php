<!DOCTYPE html>
<html>

<head>
  <title>Modern CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
body {
    background: #fdfcf9;
    font-family: 'Georgia', serif;
  }

  .cv-card {
    max-width: 820px;
    margin: auto;
    background: #fff;
    padding: 50px;
    border: 2px solid #e0c97f;
    border-radius: 8px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
  }

  .cv-card h1 {
    font-size: 36px;
    text-align: center;
    color: #3e3e3e;
    margin-bottom: 5px;
  }

  .cv-card h3 {
    margin-top: 25px;
    font-size: 18px;
    font-weight: bold;
    color: #a67c00;
    border-bottom: 1px solid #e0c97f;
    padding-bottom: 3px;
  }

  .cv-card p {
    font-size: 15px;
    color: #4b4b4b;
    line-height: 1.7;
  }

  hr {
    border: none;
    border-top: 1px dotted #e0c97f;
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