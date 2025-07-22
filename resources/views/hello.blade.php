<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Level Apparel Industry</title>  
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<section class="header">
    <nav>
        <a href="{{ url('/') }}"><img src="{{ asset('Images/logo2.jpg') }}" class="mmm"></a>
        <div class="nav-links">
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="{{ url('/about') }}">ABOUT</a></li>
                <li><a href="{{ url('/products') }}">PRODUCTS</a></li> 
                <li><a href="{{ url('/contact') }}">CONTACT</a></li>
   
            </ul>
        </div>
    </nav>

    <div class="text-box">
        <h1>NEXT LEVEL APPAREL</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>r sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="hero-btn">Log in / Sign up</a>
    </div>
</section>

<section class="service">
    <h1>Fashion Design</h1>
    <p>Lorem ipsum dolor sit amet, cod tempor ipsum dolorng elit sed do eiusmod tempor incididunt ut labore</p>
    <div class="row">
        <div class="service-col">
            <h3>Stitching</h3>
            <p>Lorem ipsum dolor sit amet, consectetur e quis nostrud exercitation ullamco laboris nisi ut alire dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco . Duis aute irure e eu fugiat nulla pariatur.</p>
        </div>
        <div class="service-col">
            <h3>Production</h3>
            <p>Lorem ipsum dolor sit amet, consectetur e quis nostrud exercitation ullamco laboris nisi ut alire dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco . Duis aute irure e eu fugiat nulla pariatur.</p>
        </div>
        <div class="service-col">
            <h3>Marketing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur e quis nostrud exercitation ullamco laboris nisi ut alire dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco . Duis aute irure e eu fugiat nulla pariatur.</p>
        </div>
    </div>
</section>

<section class="vision">
    <h1>Our Vision</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
    <div class="row">
        <div class="vision-col">
            <img src="{{ asset('Images/innovation2.jpg') }}">
            <div class="layer"><h3>Innovation and Creativity</h3></div>
        </div>
        <div class="vision-col">
            <img src="{{ asset('Images/sustainability5.jpg') }}">
            <div class="layer"><h3>Sustainability and Ethical Practices</h3></div>
        </div>
        <div class="vision-col">
            <img src="{{ asset('Images/customer3.jpg') }}">
            <div class="layer"><h3>Customer Experience and Satisfaction</h3></div>
        </div>
    </div>
</section>

<section class="Facilities">
    <h1>Our Facilities</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
    <div class="row">
        <div class="Facilities-col">
            <img src="{{ asset('Images/design.jpg') }}">
            <h3>Design Studios</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
        <div class="Facilities-col">
            <img src="{{ asset('Images/manufacturing.jpg') }}">
            <h3>Manufacturing Plants</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
        <div class="Facilities-col">
            <img src="{{ asset('Images/textile.jpg') }}">
            <h3>Textile Mills</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
    </div>
</section>

<section class="cta">
    <h1>Next Level Apparel <br> Dealers for marketing of our products in both Domestic and International markets.</h1>
    <a href="#" class="hero-btn">CONTACT US</a>
</section>

<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...<br>...veniam, quis nostrud exercitation ullamco laboris nisi...</p>
    <div class="icons">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin-in"></i>
    </div>
</section>

</body>
</html>
