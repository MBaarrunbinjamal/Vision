<!DOCTYPE html>
<html>

<head>
  <title>Modern CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .cv-card {
    max-width: 850px;
    margin: 40px auto;
    padding: 50px;
    background: linear-gradient(145deg, #6a11cb, #2575fc);
    border-radius: 15px;
    color: #fff;
    font-family: 'Montserrat', sans-serif;
    box-shadow: 0 15px 35px rgba(0,0,0,0.3);
}

.cv-card h1 {
    font-size: 2.5rem;
    text-align: center;
    margin-bottom: 10px;
}

.cv-card p.text-center {
    text-align: center;
    font-size: 1rem;
    color: #eee;
    margin-bottom: 40px;
}

.cv-card h3 {
    margin-top: 25px;
    font-size: 1.4rem;
    border-left: 6px solid #fff;
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