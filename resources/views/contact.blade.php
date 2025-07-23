<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NEXT LEVEL APPAREL INDUSTRY</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <section class="sub-header">
   <nav>
    <a href="index.html"><img src="Images/logo2.jpg" class="mmm"></a>
     <div class="nav-links">

      <ul>
       <li><a href="{{ url('/hello') }}">HOME</a></li>
       <li><a href="{{ url('/about') }}">ABOUT</a></li>
       <li><a href="{{ url('/products') }}">PRODUCTS</a></li>
       <li><a href="{{ url('/contact') }}">CONTACT</a></li>


  </ul>
 </div>

 </nav>

 <h1>Contact Us</h1>
</section>
<!---- contact us ---->
<section class="location">

  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15829.11872372019!2d80.6228923!3d7.3224491!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3697fac612d17%3A0x7d9ba29c3f69d772!2sNext%20Level%20Apparels%20%2C%20Katugastota!5e0!3m2!1sen!2slk!4v1720096662425!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>

<section class="contact-us">

  <div class="row">
    <div class="contact-col">
      <div>
        <i class="fa fa-facehome"></i>
        <span>
          <h5>12,Katugasthota Road Kandy</h5>
          <p>Kandy, Colombo, IN</p>
        </span>
      </div>
      <div>
        <i class="fa-fa-phone"></i>
        <span>
          <h5>+94 773574985</h5>
          <p>Monday to saturday, 10AM to 6PM</p>
        </span>
      </div>
      <div>
        <i class="fa-fa-envelope"></i>
        <span>
          <h5>infotech@gmail.com</h5>
          <p>E-mail us your query</p>
        </span>
      </div>
    </div>
    <div class="contact-col">

    <form action="{{ route('contact.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="enter your name" required>
    <input type="email" name="email" placeholder="enter email address" required>
    <input type="text" name="subject" placeholder="enter your subject" required>
    <textarea rows="8" name="message" placeholder="message" required></textarea>
    <button type="submit" class="hero-btn red-btn">Send Message</button>
</form>

@if(session('success'))
  <p style="color:green;">{{ session('success') }}</p>
@endif









    </div>

  </div>



</section>



<!----  Footer  ---->

<section class="footer">
<h4>About Us</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip<br> ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
<div class="icons">
  <i class="fa-brands fa-facebook-f"></i>
       <i class="fa-brands fa-twitter"></i>
       <i class="fa-brands fa-instagram"></i>
       <i class="fa-brands fa-linkedin-in"></i>


</div>

</section>

</body>
</html>
