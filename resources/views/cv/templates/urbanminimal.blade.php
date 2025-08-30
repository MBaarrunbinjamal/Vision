<!DOCTYPE html>
<html>

<head>
  <title>Modern CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
.cv-card {
    max-width: 860px;
    margin: 40px auto;
    padding: 60px;
    background: #fafafa;
    font-family: 'Helvetica Neue', sans-serif;
    border-left: 10px solid #2c3e50;
    border-radius: 8px;
    color: #2c3e50;
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
}

.cv-card h1 {
    text-align: left;
    font-size: 2.5rem;
    color: #34495e;
}

.cv-card h3 {
    margin-top: 25px;
    font-size: 1.3rem;
    color: #2c3e50;
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