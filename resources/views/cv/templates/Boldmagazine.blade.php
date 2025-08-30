<!DOCTYPE html>
<html>
<head>
    <title>Classic CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>

.cv-card {
    max-width: 900px;
    margin: 40px auto;
    padding: 60px;
    background: #fff;
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    border-left: 12px solid #e91e63;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.cv-card h1 {
    font-size: 3rem;
    text-align: left;
    color: #e91e63;
}

.cv-card p.text-center {
    text-align: left;
    font-size: 0.95rem;
    color: #555;
}

.cv-card h3 {
    margin-top: 20px;
    font-size: 1.4rem;
    color: #e91e63;
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