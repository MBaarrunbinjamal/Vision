@extends('admin.headerfooter')
@section('content')
 <style>
body {
  /* background: linear-gradient(90deg, #000000, #1a0023, #2c003e);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  color: #fff;     Optional: ensures text stays readable */
}

body {
  background: linear-gradient(-45deg, #2c003e, #000000, #444444, #2c003e);
  background-size: 400% 400%;
  animation: gradientFlow 20s ease infinite;
  color: #fff;
  min-height: 100vh;
  margin: 0;
  padding: 0;
}

@keyframes gradientFlow {
  0% {
    background-position: 0% 50%;
  }
  25% {
    background-position: 50% 100%;
  }
  50% {
    background-position: 100% 50%;
  }
  75% {
    background-position: 50% 0%;
  }
  100% {
    background-position: 0% 50%;
  }
}




  </style>
  <body>
    
    <!-- Main Content -->
<main>
<h1 class="text-white text-center mt-2">Welcome {{ auth()->user()->name }}</h1>

</main>
   
   
@endsection

















