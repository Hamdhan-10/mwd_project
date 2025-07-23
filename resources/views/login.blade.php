<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Next Level Apparel</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fafafa;
      margin: 0;
      padding: 0;
    }

    .sub-header {
      background: #f4f4f4;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .sub-header a img {
      height: 60px;
      display: inline-block;
    }

    .sub-header h1 {
      margin-top: 15px;
      font-weight: 700;
      color: #333;
    }

    .login-form-section {
      max-width: 400px;
      margin: 50px auto;
      background: white;
      padding: 30px 40px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    .login-form input {
      width: 100%;
      padding: 12px 15px;
      margin: 15px 0;
      border-radius: 6px;
      border: 1px solid #ddd;
      font-size: 1rem;
    }

    .hero-btn.red-btn {
      width: 100%;
      background-color: #e63946;
      border: none;
      padding: 14px;
      font-weight: 700;
      color: white;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .hero-btn.red-btn:hover {
      background-color: #b92a34;
    }

    .login-form-section p {
      text-align: center;
      color: #666;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <section class="sub-header">
    <a href="{{ url('/home') }}">
      <img src="{{ asset('images/logo2.jpg') }}" alt="Next Level Apparel Logo" />
    </a>
    <h1>Login</h1>
  </section>

  <section class="login-form-section">
    <form action="{{ url('/login') }}" method="post" class="login-form">
      @csrf
      <input type="email" name="email" placeholder="Enter your email" required />
      <input type="password" name="password" placeholder="Enter your password" required />
      <button type="submit" class="hero-btn red-btn">Login</button>
    </form>

    <p>Don't have an account? <a href ="{{ url('/register')}}">Register</a></p>
  </section>

</body>
</html>
