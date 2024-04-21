<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book</title>

   <!-- Swiper CSS -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- Header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Wedding Planner</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About Us</a>
      <a href="services.php">Services</a>
      <a href="book.php">Book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Header section ends -->

<div class="heading" style="background:url(booknow.jpg) no-repeat">
  
</div>

<!-- Booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Plan Your Dream Wedding</h1>

   <form action="book_form.php" method="post" class="book-form">

   <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- Booking section ends -->

<!-- Footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"><i class="fas fa-angle-right"></i> About Us</a>
         <a href="services.php"><i class="fas fa-angle-right"></i> Services</a>
         <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
      </div>

      <div class="box">
         <h3>Extra Links</h3>
         <a href="#"><i class="fas fa-angle-right"></i> FAQs</a>
         <a href="#"><i class="fas fa-angle-right"></i> Testimonials</a>
         <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
         <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
      </div>

      <div class="box">
         <h3>Contact Info</h3>
         <a href="#"><i class="fas fa-phone"></i>1234567890</a>
         <a href="#"><i class="fas fa-envelope"></i>nikhi@gmail.com</a>
         <a href="#"><i class="fas fa-map"></i>Udupi dist</a>
      </div>

      <div class="box">
         <h3>Follow Us</h3>
         <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
         <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
         <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
         <a href="#"><i class="fab fa-pinterest"></i> Pinterest</a>
      </div>

   </div>

   <div class="credit"> &copy; 2024 Wedding Planner. All rights reserved.</div>

</section>

<!-- Footer section ends -->

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Custom JS -->
<script src="script.js"></script>

</body>
</html>
