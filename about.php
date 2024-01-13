<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>There are many reasons to choose The Outer Clove Restaurant for your next meal. Here are just a few: Fresh, Local Ingredients: We use only the freshest, locally-sourced ingredients in our dishes. This ensures that our food is not only delicious but also healthy and sustainable.
Innovative and Delicious Dishes: Our chefs are constantly innovating and creating new dishes that are sure to tantalize your taste buds. We offer a wide variety of options to suit all palates, including vegetarian, vegan, and gluten-free options.
Stunning Views: Our restaurant offers stunning views of the Colombo city skyline. This makes it the perfect place to enjoy a romantic dinner or a special occasion.
Impeccable Service: Our staff is committed to providing our guests with the highest level of service. We are here to ensure that you have a truly enjoyable dining experience.
We are a family-owned and operated business.
We are committed to sustainability.
We offer a wide variety of wines and cocktails.
We have a private dining room available.</p>
         <a href="menu.html" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>The Outer Clove Restaurant offers a variety of Eastern European dishes, including a kids' menu. They also have a selection of beer and wine, and a patio for outdoor dining. You can find their menu online at Outer Clove Restaurant. Here are some of the categories you can order from: Appetizers: Hummus, baba ghanoush, falafel, dolmades, spanakopita, and more. Salads: Greek salad, Caesar salad, and a seasonal salad. Soups: Borscht, lentil soup, and tomato soup. Main Courses: Schnitzel, goulash, pierogi, and more. Desserts: Baklava, cheesecake, and chocolate cake.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>he Outer Clove Restaurant in Colombo, Sri Lanka prioritizes quick and efficient delivery, ensuring your Eastern European feast arrives at your door promptly hot and fresh. Their streamlined system and dedicated delivery staff strive to minimize wait times, so you can savor the delicious flavors within minutes of placing your order. Whether you're craving a comforting borscht on a rainy day or a hearty schnitzel to satisfy your cravings, The Outer Clove Restaurant brings the taste of Eastern Europe straight to your doorstep, fast and satisfying.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>Nestled in the heart of Colombo, Sri Lanka, Outer Clove Restaurant offers a delectable escape into the world of Eastern European cuisine. Step inside and be transported to a cozy, inviting atmosphere, adorned with charming décor and warm lighting. Immerse yourself in the aroma of spices and sizzling sounds from the kitchen, as your anticipation for the culinary journey ahead grows.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            
            <p>Wow excellent, good place to visit. I'm obsessed with their foods.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mahesh Weerasinghe</h3>
         </div>

         <div class="swiper-slide slide">
            
            <p>Good atmosphere with good foods, recommond for everyone.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Chamika Silva</h3>
         </div>

         <div class="swiper-slide slide">
            
            <p>This resort have variety of food category and facilities.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Chathurika Piries</h3>
         </div>

         <div class="swiper-slide slide">
            
            <p>They provide good service.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sheran Fonseka</h3>
         </div>

         <div class="swiper-slide slide">
            
            <p>Delicious foods.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Chamindu Siriwardhane</h3>
         </div>

         <div class="swiper-slide slide">
            
            <p>Good service.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Malika Fernando</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>