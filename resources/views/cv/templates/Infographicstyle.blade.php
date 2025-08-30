<!DOCTYPE html>
<html>

<head>
  <title>Modern CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .cv-card {
    max-width: 950px;
    margin: 40px auto;
    padding: 40px;
    background: #fff;
    border-radius: 12px;
    font-family: 'Nunito', sans-serif;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.cv-card h1 {
    font-size: 2.3rem;
    color: #e74c3c;
    text-align: center;
    margin-bottom: 10px;
}

.cv-card p.text-center {
    text-align: center;
    color: #7f8c8d;
    margin-bottom: 30px;
}

.cv-card h3 {
    font-size: 1.2rem;
    color: #e74c3c;
    margin: 20px 0 10px;
    position: relative;
}

.cv-card h3::after {
    content: "";
    display: block;
    width: 40px;
    height: 3px;
    background: #e74c3c;
    margin-top: 5px;
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