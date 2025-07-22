<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Next Level Apparel - Products</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<section class="sub-header">
  <nav>
    <a href="{{ route('home') }}"><img src="{{ asset('Images/logo2.jpg') }}" class="mmm" alt="Logo"></a>
    <ul class="nav-links">
      <li><a href="{{ route('home') }}">HOME</a></li>
      <li><a href="{{ route('about') }}">ABOUT</a></li>
      <li><a href="{{ route('products.index') }}">PRODUCTS</a></li>
      <li><a href="{{ route('contact') }}">CONTACT</a></li>
    </ul>
  </nav>
  <h1>OUR PRODUCTS</h1>
</section>

<section id="product1">
  <form action="{{ url('products') }}" method="GET" class="search-bar">
    <input type="text" name="search" placeholder="Search products..." value="{{ request('search') }}">
    <button type="submit"><i class="fas fa-search"></i></button>
  </form>

  <h2 id="rrr">FEATURED PRODUCTS</h2>
  <p id="www">Discover our latest collection</p>

  <div class="pro-container">
    @forelse ($products as $product)
      <div class="pro">
        <img src="{{ asset('Images/' . $product->image) }}" alt="{{ $product->name }}">
        <div class="des">
          <span>{{ $product->brand }}</span>
          <h5>{{ $product->name }}</h5>
          <div class="star">
            @for ($i = 0; $i < $product->rating; $i++)
              <i class="fas fa-star"></i>
            @endfor
            @for ($i = $product->rating; $i < 5; $i++)
              <i class="far fa-star"></i>
            @endfor
          </div>
          <h4>${{ number_format($product->price, 2) }}</h4>
        </div>
        <a href="#"><i class="fas fa-cart-shopping" id="cart"></i></a>
      </div>
    @empty
      <p>No products found.</p>
    @endforelse
  </div>
</section>

<section class="footer">
  <h4>About Us</h4>
  <p>High-quality fashion apparel, crafted with care.</p>
  <div class="icons">
    <i class="fab fa-facebook-f"></i>
    <i class="fab fa-instagram"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-youtube"></i>
  </div>
  <p>&copy; 2025 Next Level Apparel</p>
</section>
</body>
</html>
