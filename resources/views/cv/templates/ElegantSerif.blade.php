<!DOCTYPE html>
<html>

<head>
  <title>Modern CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .cv-card {
    max-width: 850px;
    margin: 40px auto;
    padding: 60px;
    background: #fcfcfa;
    border: 1px solid #ddd;
    border-radius: 12px;
    font-family: 'Merriweather', serif;
    color: #2c3e50;
    line-height: 1.9;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.cv-card h1 {
    font-size: 2.3rem;
    text-align: center;
    margin-bottom: 10px;
    color: #2c3e50;
    letter-spacing: 1px;
}

.cv-card p.text-center {
    text-align: center;
    color: #7f8c8d;
    font-size: 1rem;
    margin-bottom: 35px;
}

.cv-card h3 {
    font-size: 1.3rem;
    color: #34495e;
    margin: 20px 0 10px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 5px;
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