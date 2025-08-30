<!DOCTYPE html>
<html>
<head>
    <title>Classic CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
.cv-card {
    max-width: 850px;
    margin: 40px auto;
    padding: 50px;
    background: #fdf6e3;
    border: 2px solid #e6d6b8;
    border-radius: 5px;
    font-family: 'Georgia', serif;
    color: #5c4632;
    box-shadow: 3px 3px 12px rgba(0,0,0,0.15);
}

.cv-card h1 {
    font-size: 2rem;
    text-align: center;
    color: #8b5e3c;
}

.cv-card h3 {
    margin-top: 20px;
    font-size: 1.3rem;
    color: #8b5e3c;
    border-bottom: 2px dotted #8b5e3c;
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