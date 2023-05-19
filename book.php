<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Booking</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <section class="header">

      <a href="home.php" class="logo">Travel Root</a>
      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.php">About Us</a>
         <a href="package.php">Packages</a>
         <a href="book.php">Booking</a>
         <a href="../phpcrud/index.php">Travellers</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>book your trip now</h1>
   </div>

   <section class="booking">

      <h1 class="heading-title">once in a lifetime chance!</h1>

      <form action="book_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>first name :</span>
               <input type="text" placeholder="Enter Your First Name" name="fname">
            </div>
            <div class="inputBox">
               <span>last name :</span>
               <input type="text" placeholder="Enter Your Last Name" name="lname">
            </div>
            <div class="inputBox">
               <span>Phone :</span>
               <input type="number" placeholder="Enter Your Phone Number" name="phone">
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="Enter Your Email Address" name="email">
            </div>
            <div class="inputBox">
               <span>Address :</span>
               <input type="text" placeholder="Enter Your Address" name="address">
            </div>
            <div class="inputBox">
               <span>Password :</span>
               <input type="password" placeholder="Enter Your Password" name="password">
            </div>
         </div>

         <input type="submit" value="submit" class="btn" name="send">

      </form>

   </section>

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>

         <div class="box">
            <h3>other links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 01736633510 </a>
            <a href="#"> <i class="fas fa-phone"></i> 01518392120 </a>
            <a href="#"> <i class="fas fa-envelope"></i> contact@travelroot.com​ </a>
            <a href="#"> <i class="fas fa-map"></i> 13/A, Panthapath, Dhaka, Bangladesh </a>
         </div>

      </div>

      <div class="credit"> Copyright © 2022 Travel Root | all rights reserved! </div>
   </section>
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

</body>

</html>