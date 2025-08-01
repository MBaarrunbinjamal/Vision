<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

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
      padding: 20px;
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

    .form-footer {
      margin-top: 15px;
      text-align: center;
      font-size: 14px;
    }

    .form-footer a {
      color: #a671f8;
      text-decoration: none;
    }

    .form-footer a:hover {
      text-decoration: underline;
    }

    .validation-errors {
      background-color: rgba(255, 0, 0, 0.1);
      border-left: 4px solid red;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 8px;
      color: #ffbfbf;
    }


    /* float button css  */
    #floatingButton {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background-color: #6610f2; /* Bootstrap purple */
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      bottom: 40px;
      right: 40px;
      z-index: 9999;
      cursor: move;
      box-shadow: 0 8px 15px rgba(0,0,0,0.2);
      animation: bounce 2s infinite;
      user-select: none;
    }

    @keyframes bounce {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }

    #floatingButton:hover {
      background-color: #520dc2;
      transition-duration: 0.25s;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Register</h2>

    @if ($errors->any())
      <div class="validation-errors">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" value="{{ old('name') }}" required autofocus />
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required />
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required />
      </div>

      <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required />
      </div>

      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="form-group" style="font-size: 13px;">
          <label for="terms">
            <input type="checkbox" name="terms" id="terms" required />
            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" style="color: #a671f8;">'.__('Terms of Service').'</a>',
                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" style="color: #a671f8;">'.__('Privacy Policy').'</a>',
            ]) !!}
          </label>
        </div>
      @endif

      <button type="submit" class="btn">Register</button>

      <div class="form-footer">
        <a href="{{ route('login') }}">Already registered?</a>
      </div>
    </form>
  </div>

  <!-- float button start -->

<!-- Floating Button -->
  
    <div id="floatingButton" title="Back" >
   <i class="fas fa-arrow-left"></i>
  </div>
  

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    
const btn = document.getElementById('floatingButton');
  let isDragging = false;
  let offsetX, offsetY;
  let startX, startY;

  btn.addEventListener('mousedown', (e) => {
    isDragging = true;
    offsetX = e.clientX - btn.getBoundingClientRect().left;
    offsetY = e.clientY - btn.getBoundingClientRect().top;
    startX = e.clientX;
    startY = e.clientY;
  });

  document.addEventListener('mousemove', (e) => {
    if (isDragging) {
      btn.style.left = `${e.clientX - offsetX}px`;
      btn.style.top = `${e.clientY - offsetY}px`;
      btn.style.right = 'auto';
      btn.style.bottom = 'auto';
    }
  });

  document.addEventListener('mouseup', (e) => {
    if (isDragging) {
      const endX = e.clientX;
      const endY = e.clientY;
      const moved = Math.abs(endX - startX) > 5 || Math.abs(endY - startY) > 5;
      isDragging = false;

      // If it wasn't a drag (i.e., a click), go back
      if (!moved) {
        window.location.href = '/'; // Change if needed
      }
    }
  });
    
  </script>

   <!-- float button end -->
</body>
</html>
