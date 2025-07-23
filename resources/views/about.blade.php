<!DOCTYPE html>
<html>
 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Next Level Apparel</title>
   <link rel="stylesheet" href="{{ asset('style.css') }}">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>
 <body>
   <section class="sub-header">
     <nav>
      <a href="#"><img src="{{ asset('images/logo2.jpg') }}" class="mmm"></a>
      <div class="nav-links">
        <ul>
          <li><a href="{{ url('/hello') }}">HOME</a></li>
          <li><a href="{{ url('/about') }}">ABOUT</a></li>
          <li><a href="{{ url('/products') }}">PRODUCTS</a></li>
          <li><a href="{{ url('/contact') }}">CONTACT</a></li>

        </ul>
      </div>
    </nav>
    <h1>About Us</h1>
   </section>

   <section class="about-us">
     <div class="row">
       <div class="about-col">
         <h1>We are the NEXT LEVEL APPAREL</h1>
         <p>Lorem ipsum dolor sit amet... [rest of content]</p>
         <a href="https://www.google.com/search?..." class="hero-btn red-btn">Explore Now</a>
       </div>
       <div class="about-col">
         <img src="{{ asset('images/aboutjpg.jpg') }}">
       </div>
     </div>
   </section>

   <section class="footer">
     <h4>About Us</h4>
     <p>Lorem ipsum dolor sit amet...</p>
     <div class="icons">
       <i class="fa-brands fa-facebook-f"></i>
       <i class="fa-brands fa-twitter"></i>
       <i class="fa-brands fa-instagram"></i>
       <i class="fa-brands fa-linkedin-in"></i>
     </div>
   </section>
 </body>
</html>
