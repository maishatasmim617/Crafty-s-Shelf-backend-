<?php

@include 'config.php';

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

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>
<section class="about">

   <div class="row">

      <div class="box">
         <img src="img/why-choose-us-symbol-concept-260nw-2477738763.webp" alt="">
         <h3>why choose us?</h3>
         <p>Our commitment to quality, unique designs, and exceptional customer service sets us apart. We source the finest materials to ensure every product is a masterpiece you'll cherish.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="img/Gemini_Generated_Image_txmibtxmibtxmibt.png" alt="">
         <h3>what we provide?</h3>
         <p>From elegant sarees and dazzling jewellery to stylish bags and exquisite pottery, we offer a curated selection of handcrafted goods that combine tradition with modern aesthetics.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="Client Review">
         <p>Absolutely stunning saree! The fabric quality is superb, and the craftsmanship is truly remarkable. Received so many compliments. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Aisha Khan</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="Client Review">
         <p>The jewellery piece I ordered is even more beautiful in person! The intricate details and sparkle are breathtaking. It's now my go-to for special occasions.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Priya Sharma</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="Client Review">
         <p>Love my new handbag! It's spacious, well-made, and looks incredibly chic. Perfect for everyday use and adds a touch of elegance to any outfit.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Liam O'Connell</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="Client Review">
         <p>The pottery vase I received is a true piece of art. The colors are vibrant, and the design is unique. It's a wonderful addition to my home decor!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sophia Chen</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="Client Review">
         <p>I was hesitant to buy a saree online, but this store exceeded my expectations! The quality is top-notch, and it arrived beautifully packaged. Will be buying more!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David Lee</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="Client Review">
         <p>Fantastic customer service and beautiful jewellery! The earrings are lightweight and sparkle wonderfully. I've already recommended this shop to my friends.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Fatima Zahra</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>