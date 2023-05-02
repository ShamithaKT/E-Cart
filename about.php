<?php

include 'config.php';

session_start();                       //session is used to store and pass information from one page to another temporarily

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');      // Tranfering userid to nxt page
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Choosing Ecart can allow you to purchase the best selling books which are being written by some of the most popular authors.<br><br> Apart from the numerous advantages of choosing us, some of the most important ones are Books available at affordable prices,Cash on Delivery facility available,Books available for individuals of all age groups ranging from toddlers and youngsters to the aged.</p>

         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p><B>Atomic Habits: </b>The book is well-written and easy to understand, making it a great read for anyone looking to improve their habits and reach their goals.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p><b>Think Like A Monk: </b>It inspired me alot it is like a mirror which represents our behaviour, character,thinking level and also allow us to change us.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <!-- <i class="fas fa-star-half-alt"></i> -->
         </div>
         <h3>Clarisha</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p><b>Sapiens: </b>There always be limits when its comes to real history knowledge so does this book dispite these facts in mind the book do have decent information..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <!-- <i class="fas fa-star-half-alt"></i> -->
         </div>
         <h3>Neo</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p><b>Eat That Frog!: </b>It's good book before starting daily work. Really it's just amazing book to reduce the procastination, and it help to improve your work line up
</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lara</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p><b>Man's Search For Meaning: </b>It’s a good knowledgeable and yet thrilling book. I have not come across any such book with combination of these two aspects together in one book.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nakul</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p><b>Harry Potter: </b>The series is well-known for its themes of friendship, love, and the fight for good over evil. Overall, it's a must-read for fans of fantasy literature.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <!-- <i class="fas fa-star-half-alt"></i> -->
         </div>
         <h3>Olivia</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images1\Sudha-murty-biography.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div> -->
         <h3>Sudha Murthy</h3>
      </div>

      <div class="box">
         <img src="images1\james-clear.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div> -->
         <h3>James CLear</h3>
      </div>

      <div class="box">
         <img src="images1\jayshetty.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div> -->
         <h3>Jay Shetty</h3>
      </div>

      <div class="box">
         <img src="images1\Viktor.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div> -->
         <h3>Viktor E. Frankl</h3>
      </div>

      <div class="box">
         <img src="images1\yuval.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div> -->
         <h3>Yuval Noah Harari</h3>
      </div>

      <div class="box">
         <img src="images1\jkRowling.jpg" alt="">
         <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div> -->
         <h3>J.K. Rowling</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>