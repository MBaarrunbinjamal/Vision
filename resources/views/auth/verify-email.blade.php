<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Email Verification</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(to right, #0f0c29, #302b63, #24243e);
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
    }

    .card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 35px 40px;
      width: 400px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(15px);
      text-align: center;
    }

    .card h2 {
      font-size: 24px;
      margin-bottom: 15px;
    }

    .card p {
      font-size: 15px;
      margin-bottom: 20px;
      color: #e0e0e0;
    }

    .status-msg {
      background-color: rgba(0, 255, 0, 0.1);
      border-left: 4px solid #00ff88;
      color: #b9f8d3;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 6px;
      font-size: 14px;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 10px;
    }

    .btn, .link-button {
      background-color: #5e17eb;
      padding: 10px 18px;
      border: none;
      border-radius: 8px;
      color: white;
      cursor: pointer;
      font-size: 14px;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .btn:hover, .link-button:hover {
      background-color: #7837f9;
    }

    .link-button {
      background: transparent;
      border: 1px solid #aaa;
      padding: 10px 14px;
    }

    form.inline {
      display: inline;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Verify Your Email</h2>

    <p>
      Before continuing, please verify your email by clicking on the link we just sent. If you didn’t receive it, we can send another.
    </p>

    @if (session('status') == 'verification-link-sent')
      <div class="status-msg">
        A new verification link has been sent to your email.
      </div>
    @endif

    <div class="actions">
      <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn">Resend Email</button>
      </form>

      <a href="{{ route('profile.show') }}" class="link-button">Edit Profile</a>

      <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf
        <button type="submit" class="link-button">Log Out</button>
      </form>
    </div>
  </div>
</body>
</html>
