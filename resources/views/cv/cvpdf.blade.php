<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $cv->full_name }} - CV</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; margin: 30px; }
        h1 { text-align: center; font-size: 24px; }
        p { margin: 4px 0; }
        hr { margin: 15px 0; }
        h3 { margin-top: 20px; color: #333; }
    </style>
</head>
<body>
    <h1>{{ $cv->full_name }}</h1>
    <p style="text-align:center;">{{ $cv->email }} | {{ $cv->phone }}</p>
    <hr>
    <h3>Summary</h3>
    <p>{{ $cv->summary }}</p>

    <h3>Education</h3>
    <p>{{ $cv->education }}</p>

    <h3>Experience</h3>
    <p>{{ $cv->experience }}</p>

    <h3>Skills</h3>
    <p>{{ $cv->skills }}</p>
</body>
</html>
