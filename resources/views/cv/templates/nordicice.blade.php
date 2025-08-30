<!DOCTYPE html>
<html>

<head>
  <title>Modern CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
.cv-card {
    max-width: 860px;
    margin: 40px auto;
    padding: 55px;
    background: #eaf6f9;
    border-radius: 12px;
    font-family: 'Lora', serif;
    color: #2c3e50;
    border-left: 8px solid #2980b9;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.cv-card h1 {
    text-align: center;
    font-size: 2.3rem;
    color: #2980b9;
}

.cv-card h3 {
    margin-top: 20px;
    color: #2980b9;
    border-bottom: 1px solid #2980b9;
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