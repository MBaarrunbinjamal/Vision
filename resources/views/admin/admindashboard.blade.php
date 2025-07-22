@extends('admin.headerfooter')
@section('content')
 <style>
    body {
      background-color: #121212;
      color: #e0e0e0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding-top: 56px;
    }

    .card {
      background-color: #1e1e1e;
      border: none;
      color: #fff;
      box-shadow: 0 0 10px rgba(0, 209, 255, 0.2);
    }

    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 0 20px rgba(0, 209, 255, 0.4);
    }

    .card-title {
      font-weight: bold;
    }

    .table-striped > tbody > tr:nth-of-type(odd) {
      background-color: #1b1b1b;
    }

    .card-header {
      background-color: #2a2a2a;
      border-bottom: 1px solid #444;
    }

    footer {
      text-align: center;
      padding: 15px;
      background-color: #1c1c1c;
      color: #aaa;
      border-top: 1px solid #333;
      margin-top: 30px;
      font-size: 0.9rem;
    }

    h2, h5 ,h1{
      color: #00d1ff;
    }
    h1{
      font-size: 50px;
    }
  </style>
<!-- Main Content -->
<main class="container-fluid p-4">
 <center> <h1 class="mb-4">Welcome {{ auth()->user()->name }}</h1></center>


@endsection

