<!DOCTYPE html>
<html>
<head>
    <title>Classic CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
         /* .classic {
        background: #fff;
        color: #000;
        font-family: "Times New Roman", serif;
        border: 2px solid #0d6efd;
        padding: 20px;
    } */
 .cv-card {
    max-width: 800px;
    margin: 40px auto;
    padding: 40px;
    background: #fdfdfd;
    border-left: 5px solid #8e44ad;
    border-radius: 8px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.08);
    font-family: 'Roboto', sans-serif;
}

.cv-card h1 {
    font-size: 2rem;
    font-weight: 700;
    color: #8e44ad;
    margin-bottom: 10px;
}

.cv-card p.text-center {
    font-size: 0.95rem;
    color: #555;
    margin-bottom: 25px;
}

.cv-card h3 {
    position: relative;
    margin: 25px 0 10px;
    font-size: 1.3rem;
    color: #8e44ad;
    padding-left: 30px;
}

.cv-card h3::before {
    content: "●";
    color: #8e44ad;
    position: absolute;
    left: 0;
    font-size: 1.2rem;
    top: 0;
}

.cv-card p {
    margin-left: 30px;
    color: #333;
    font-size: 1rem;
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