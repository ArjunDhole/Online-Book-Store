<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
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
         <p>At our online bookstore, we offer a wide selection of books for all interests and ages, as well as personalized recommendations and excellent customer service. With fast and reliable shipping options, affordable prices, and a commitment to promoting literacy and education worldwide, we're dedicated to providing you with the best possible shopping experience. </p>
         
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/logo.png" alt="">
         <p>I love shopping at this online bookstore! They have such a great selection of books, and their personalized recommendations are always spot-on. Plus, their customer service is top-notch - they're always quick to respond and super helpful. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Arjun</h3>
      </div>

      <div class="box">
         <img src="images/logo.png" alt="">
         <p>I've ordered several books from this online bookstore, and I've been impressed with their fast and reliable shipping every time. I appreciate that they offer sales and discounts regularly. Overall, I'm really happy with my experience shopping here.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Karan</h3>
      </div>

      <div class="box">
         <img src="images/logo.png" alt="">
         <p>This online bookstore is doing amazing work to promote literacy and education worldwide. I love that they support programs in underserved communities and make books more accessible to people around the world.Highly recommend supporting this great company! </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bikram</h3>
      </div>

      <div class="box">
         <img src="images/logo.png" alt="">
         <p>I had a great experience shopping at this online bookstore. Their website is really user-friendly, and I appreciated that I could create an account to save my preferences and order history. When I had a question about my order, their customer service team was really responsive and helpful. And when my book arrived, it was in perfect condition. I'll definitely be shopping here again!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sujit</h3>
      </div>

      <div class="box">
         <img src="images/logo.png" alt="">
         <p>I recently ordered a book from this online bookstore, and I was blown away by their commitment to sustainability. They use eco-friendly packaging materials and even offer a recycling program for old books. It's great to see a company that's so dedicated to reducing their environmental impact. Plus, their customer service team was really friendly .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Govind</h3>
      </div>

      <div class="box">
         <img src="images/logo.png" alt="">
         <p>I've been a loyal customer of this online bookstore for years, and I continue to be impressed with their selection and service. They always have the latest releases and hard-to-find titles, and their prices are really competitive. I also appreciate that they support local authors and book events. If you're a book lover, you have to check out this amazing online bookstore!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Babblu Phatak</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Kusumagraj</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Gulzar</h3>
      </div>

      <div class="box">
         <img src="images/author-3.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Arundhati Roy</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Shashi Tharoor</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3> Aravind Adiga</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Kiran Desai</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>