<!DOCTYPE html>
<html>

<head>
  <title>Modern CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
.cv-card {
    max-width: 850px;
    margin: 40px auto;
    padding: 40px;
    background: #1e1e2f;
    border-radius: 12px;
    font-family: 'Poppins', sans-serif;
    color: #f1f1f1;
    box-shadow: 0 10px 25px rgba(0,0,0,0.5);
}

.cv-card h1 {
    font-size: 2.2rem;
    text-align: center;
    color: #00d1b2;
    margin-bottom: 10px;
}

.cv-card p.text-center {
    text-align: center;
    font-size: 0.95rem;
    color: #aaa;
    margin-bottom: 25px;
}

.cv-card h3 {
    font-size: 1.3rem;
    margin-top: 20px;
    color: #00d1b2;
    border-left: 4px solid #00d1b2;
    padding-left: 10px;
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