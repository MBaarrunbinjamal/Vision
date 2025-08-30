<!DOCTYPE html>
<html>

<head>
  <title>Modern CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .cv-card {
    max-width: 880px;
    margin: 40px auto;
    padding: 55px;
    background: linear-gradient(135deg, #1a1a1a, #2d0f0f);
    border-radius: 20px;
    font-family: 'Montserrat', sans-serif;
    color: #f5c542;
    box-shadow: 0 0 25px rgba(255, 69, 0, 0.4);
}

.cv-card h1 {
    text-align: center;
    font-size: 2.6rem;
    color: #ff4500;
}

.cv-card h3 {
    margin-top: 20px;
    color: #ff6347;
    border-bottom: 2px solid #ff4500;
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