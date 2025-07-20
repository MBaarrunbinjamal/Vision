<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #1f0036, #000000);
    }

    .form-container {
      border: 1.5px solid rgba(94, 23, 235, 0.5);
      background: rgba(255, 255, 255, 0.05);
      border-radius: 20px;
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.6);
      padding: 40px;
      width: 350px;
      color: white;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
      color: #ffffff;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #e0e0e0;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.15);
      color: white;
    }

    .form-group input::placeholder {
      color: #ccc;
    }

    .checkbox-group {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 20px;
      font-size: 14px;
    }

    .checkbox-group input {
      accent-color: #5e17eb;
    }

    .forgot-password {
      text-align: right;
      font-size: 14px;
      margin-bottom: 20px;
    }

    .forgot-password a {
      color: #a671f8;
      text-decoration: none;
    }

    .forgot-password a:hover {
      text-decoration: underline;
    }

    .btn {
      width: 100%;
      padding: 12px;
      background-color: #5e17eb;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      /* transition: background 0.3s; */
    }

    .btn:hover {
      background-color: #7e3ff2;
    }

    .validation-errors {
      background-color: rgba(255, 0, 0, 0.1);
      border-left: 4px solid red;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 8px;
      color: #ffbfbf;
    }

    .session-status {
      margin-bottom: 20px;
      color: #90ee90;
      background-color: rgba(0, 255, 0, 0.1);
      padding: 10px;
      border-left: 4px solid limegreen;
      border-radius: 8px;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Log In</h2>

    {{-- Session Status --}}
    @if (session('status'))
      <div class="session-status">
        {{ session('status') }}
      </div>
    @endif

    {{-- Validation Errors --}}
    @if ($errors->any())
      <div class="validation-errors">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autofocus />
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required />
      </div>

      <div class="checkbox-group">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember me</label>
      </div>

      <div class="forgot-password">
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}">Forgot your password?</a>
        @endif
      </div>

      <button type="submit" class="btn">Log in</button>
    </form>
  </div>
</body>
</html>
