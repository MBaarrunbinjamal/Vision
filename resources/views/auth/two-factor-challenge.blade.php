<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Two-Factor Authentication</title>
  <script src="https://unpkg.com/alpinejs" defer></script>
  <style>
    * {
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }

    body {
      margin: 0;
      background: linear-gradient(135deg, #1e1e2f, #2c3e50);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 18px;
      padding: 40px 30px;
      width: 100%;
      max-width: 420px;
      backdrop-filter: blur(15px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
      color: white;
    }

    h2 {
      margin-bottom: 20px;
      font-size: 22px;
      text-align: center;
    }

    p {
      font-size: 14px;
      color: #ddd;
      margin-bottom: 20px;
    }

    label {
      font-size: 14px;
      display: block;
      margin-bottom: 6px;
      color: #ccc;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px 12px;
      border: none;
      border-radius: 8px;
      margin-bottom: 20px;
      background-color: rgba(255, 255, 255, 0.1);
      color: white;
    }

    input[type="text"]::placeholder {
      color: #aaa;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 10px;
    }

    .link-button {
      background: transparent;
      border: none;
      color: #bbb;
      font-size: 13px;
      cursor: pointer;
      text-decoration: underline;
      padding: 0;
    }

    .btn {
      padding: 10px 20px;
      background-color: #6c63ff;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 14px;
      cursor: pointer;
      /* transition: background 0.3s ease; */
    }

    .btn:hover {
      background-color: #857dff;
    }

    .error {
      background-color: rgba(255, 0, 0, 0.1);
      color: #ffbdbd;
      border-left: 4px solid #ff3e3e;
      padding: 10px;
      border-radius: 6px;
      font-size: 13px;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <div class="card" x-data="{ recovery: false }">
    <h2>Two-Factor Authentication</h2>

    <p x-show="!recovery">
      Please confirm access to your account by entering the authentication code provided by your authenticator application.
    </p>
    <p x-cloak x-show="recovery">
      Please confirm access to your account by entering one of your emergency recovery codes.
    </p>

    @if ($errors->any())
      <div class="error">
        {{ $errors->first() }}
      </div>
    @endif

    <form method="POST" action="{{ route('two-factor.login') }}">
      @csrf

      <div x-show="! recovery">
        <label for="code">Authentication Code</label>
        <input type="text" id="code" name="code" inputmode="numeric" autofocus x-ref="code" autocomplete="one-time-code" placeholder="123456" />
      </div>

      <div x-cloak x-show="recovery">
        <label for="recovery_code">Recovery Code</label>
        <input type="text" id="recovery_code" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" placeholder="your-backup-code" />
      </div>

      <div class="actions">
        <button type="button" class="link-button"
                x-show="! recovery"
                x-on:click="
                  recovery = true;
                  $nextTick(() => { $refs.recovery_code.focus() })
                ">
          Use a recovery code
        </button>

        <button type="button" class="link-button"
                x-cloak x-show="recovery"
                x-on:click="
                  recovery = false;
                  $nextTick(() => { $refs.code.focus() })
                ">
          Use an authentication code
        </button>

        <button type="submit" class="btn">Log in</button>
      </div>
    </form>
  </div>
</body>
</html>
