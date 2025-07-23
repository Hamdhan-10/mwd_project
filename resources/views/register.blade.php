<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - Next Level Apparel</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
    }
    .register-form-section {
      max-width: 400px;
      margin: 80px auto;
      background: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .register-form input {
      width: 100%;
      padding: 12px 15px;
      margin: 10px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 16px;
    }
    .register-form button {
      width: 100%;
      padding: 12px;
      background-color: #3498db;
      color: #fff;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    .register-form button:hover {
      background-color: #2980b9;
    }
    .register-form-section p {
      text-align: center;
      margin-top: 15px;
    }
  </style>
</head>
<body>

  <section class="register-form-section">
    <form method="POST" action="{{ url('/register') }}" class="register-form">
      @csrf
      <h2 style="text-align:center">Register</h2>
      <input type="text" name="name" placeholder="Enter your name" />
      <input type="email" name="email" placeholder="Enter your email" required />
      <input type="password" name="password" placeholder="Enter your password" required />
      @if(session('success'))
  <script>alert("{{ session('success') }}");</script>
@endif

@if($errors->any())
  <script>
    alert("{{ implode(', ', $errors->all()) }}");
  </script>
@endif

      <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="{{ url('/login') }}">Login</a></p>
  </section>

</body>
</html>
