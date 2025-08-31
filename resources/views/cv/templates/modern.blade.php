<!DOCTYPE html>
<html>

<head>
  <title>Modern CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>

      .cv-card {
    max-width: 800px;
    margin: 40px auto;
    padding: 40px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', Arial, sans-serif;
    color: #333;
    line-height: 1.6;
}

.cv-card h1 {
    font-size: 2.2rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 5px;
}

.cv-card p.text-center {
    font-size: 1rem;
    color: #555;
    margin-bottom: 20px;
}

.cv-card hr {
    border: 0;
    height: 2px;
    background: linear-gradient(to right, #3498db, #8e44ad);
    margin: 25px 0;
    border-radius: 2px;
}

.cv-card h3 {
    margin-top: 25px;
    margin-bottom: 10px;
    color: #34495e;
    font-size: 1.3rem;
    border-left: 5px solid #3498db;
    padding-left: 10px;
}

.cv-card p {
    font-size: 1rem;
    margin-bottom: 15px;
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