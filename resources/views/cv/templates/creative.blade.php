<!DOCTYPE html>
<html>
<head>
    <title>Creative CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* body { background: linear-gradient(120deg, #6a11cb, #2575fc); color: white; }
        .cv-card { background: rgba(0,0,0,0.6); padding: 20px; border-radius: 15px; }
        h1, h3 { color: #ffd700; } */
        .cv-card {
    max-width: 800px;
    margin: 40px auto;
    padding: 40px;
    background: linear-gradient(135deg, #fdfbfb, #ebedee);
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', Arial, sans-serif;
    color: #2c3e50;
    line-height: 1.6;
}

.cv-card h1 {
    font-size: 2.5rem;
    font-weight: 800;
    color: #3498db;
    margin-bottom: 5px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.cv-card p.text-center {
    font-size: 1rem;
    color: #555;
    margin-bottom: 25px;
}

.cv-card hr {
    border: 0;
    height: 3px;
    background: #3498db;
    margin: 25px 0;
    border-radius: 2px;
}

.cv-card h3 {
    margin-top: 25px;
    margin-bottom: 10px;
    color: #2980b9;
    font-size: 1.4rem;
    border-bottom: 2px solid #3498db;
    display: inline-block;
    padding-bottom: 4px;
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