<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Next Level Apparel - Products</title>

  <link rel="stylesheet" href="{{ asset('style.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />

  <style>
    /* Additional inline styles for enhancements */

    /* Search bar */
    .search-bar {
      max-width: 400px;
      margin: 20px auto 40px auto;
      display: flex;
      border: 1px solid #ddd;
      border-radius: 30px;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .search-bar input[type="text"] {
      flex-grow: 1;
      border: none;
      padding: 10px 20px;
      font-size: 1rem;
      font-family: 'Poppins', sans-serif;
      outline: none;
    }
    .search-bar button {
      background-color: #e63946;
      border: none;
      color: white;
      padding: 0 20px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .search-bar button:hover {
      background-color: #d62839;
    }

    /* Product card hover */
    .product-card:hover {
      box-shadow: 0 6px 12px rgba(230, 57, 70, 0.3);
      transform: translateY(-5px);
      transition: all 0.3s ease;
    }

    /* Button style */
    .btn-details {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 15px;
      background-color: #e63946;
      color: #fff;
      border-radius: 25px;
      font-weight: 600;
      text-decoration: none;
      font-size: 0.9rem;
      transition: background-color 0.3s ease;
    }
    .btn-details:hover {
      background-color: #d62839;
    }

    /* Empty message button */
    .empty-state button {
      margin-top: 15px;
      padding: 10px 25px;
      border: none;
      background-color: #e63946;
      color: white;
      font-weight: 600;
      border-radius: 25px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .empty-state button:hover {
      background-color: #d62839;
    }

    /* Responsive tweaks */
    @media (max-width: 900px) {
      .about-col {
        flex: 1 1 100% !important;
      }
      .search-bar {
        max-width: 90%;
      }
    }
  </style>
</head>
<body>
  <section class="sub-header">
    <nav>
      <a href="{{ url('/home') }}"><img src="{{ asset('images/logo2.jpg') }}" class="mmm" alt="Next Level Apparel Logo" /></a>
      <div class="nav-links">
        <ul>
          <li><a href="{{ url('/hello') }}">HOME</a></li>
          <li><a href="{{ url('/about') }}">ABOUT</a></li>
          <li><a href="{{ url('/products') }}">PRODUCTS</a></li>
          <li><a href="{{ url('/contact') }}">CONTACT</a></li>
        </ul>
      </div>
    </nav>
    <h1>Our Products</h1>
  </section>

  <!-- Search form -->
  <form action="{{ url('/products') }}" method="GET" class="search-bar" role="search" aria-label="Search Products">
    <input type="text" name="search" placeholder="Search products..." value="{{ request('search') }}" aria-label="Search products" />
    <button type="submit" aria-label="Submit Search"><i class="fas fa-search"></i></button>
  </form>

  <section class="about-us">
    <div class="row">
      <!-- Left Column: Products Grid -->
      <div class="about-col" style="flex: 2;">
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
          @forelse ($products as $product)
            <div
              class="product-card"
              style="
                flex: 1 1 calc(33% - 20px);
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 15px;
                box-shadow: 0 2px 5px rgb(0 0 0 / 0.1);
                text-align: center;
                background: #fff;
                transition: box-shadow 0.3s ease, transform 0.3s ease;
              "
            >
              <img
                src="{{ asset('images/' . $product->image) }}"
                alt="{{ $product->name }} image"
                style="width: 100%; height: auto; border-radius: 6px;"
                loading="lazy"
              />
              <h3 style="margin: 10px 0 5px;">{{ $product->name }}</h3>
              <p style="font-weight: 600; color: #555;">Brand: {{ $product->brand }}</p>
              <div style="color: #f8b500; margin-bottom: 5px;">
                @for ($i = 0; $i < $product->rating; $i++)
                  <i class="fas fa-star"></i>
                @endfor
                @for ($i = $product->rating; $i < 5; $i++)
                  <i class="far fa-star"></i>
                @endfor
              </div>
              <p style="font-size: 1.1rem; color: #e63946; font-weight: 700;">
                ${{ number_format($product->price, 2) }}
              </p>
              <a href="{{ url('/products/' . $product->id) }}" class="btn-details" aria-label="View details of {{ $product->name }}">View Details</a>
            </div>
          @empty
            <div class="empty-state" style="padding: 40px; width: 100%; text-align: center; color: #444;">
              <h2>No Products Available</h2>
              <p style="font-size: 1.1rem; max-width: 600px; margin: 10px auto;">
                Sorry, we currently don't have any products listed. Please check back soon for exciting new arrivals and exclusive deals!
              </p>
              <a href="{{ url('/hello') }}">
                <button type="button" aria-label="Go back to home page">Back to Home</button>
              </a>
            </div>
          @endforelse
        </div>
      </div>

      <!-- Right Column: Optional Banner or Info -->
      <div class="about-col" style="flex: 1; display: flex; align-items: center; justify-content: center;">
        <img src="{{ asset('images/products-banner.jpg') }}" alt="Products Banner" style="max-width: 100%; border-radius: 8px;" />
      </div>
    </div>
  </section>

  <section class="footer" style="background-color: #f9f9f9; padding: 20px 0; margin-top: 60px;">
    <h4>About Us</h4>
    <p>
      High-quality fashion apparel, crafted with care.
    </p>
    <div class="icons" style="font-size: 1.5rem; color: #555;">
      <i class="fa-brands fa-facebook-f" aria-label="Facebook"></i>
      <i class="fa-brands fa-twitter" aria-label="Twitter"></i>
      <i class="fa-brands fa-instagram" aria-label="Instagram"></i>
      <i class="fa-brands fa-linkedin-in" aria-label="LinkedIn"></i>
    </div>
  </section>
</body>
</html>
