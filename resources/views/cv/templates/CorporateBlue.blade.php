
<!DOCTYPE html>
<html>

<head>
  <title>Corporate Blue</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
.cv-card {
    max-width: 900px;
    margin: 40px auto;
    padding: 50px;
    background: #fefefe;
    border-radius: 8px;
    border-top: 6px solid #2980b9;
    font-family: 'Open Sans', sans-serif;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}

.cv-card h1 {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 5px;
    color: #2980b9;
}

.cv-card p.text-center {
    text-align: center;
    font-size: 1rem;
    color: #555;
    margin-bottom: 30px;
}

.cv-card h3 {
    font-size: 1.2rem;
    color: #2980b9;
    margin-top: 20px;
    border-bottom: 2px solid #2980b9;
    display: inline-block;
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