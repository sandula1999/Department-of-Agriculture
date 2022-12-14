<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['farmer_name'])){
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department of Agriculture</title>

   

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- header section starts -->    

<header class="header fixed-top">

    <div class="content">

        <div class="row agn-items-center justify-content-between">

            <a href="home.php" class="logo">  Department Of<span> Agriculture.</span></a>


      <nav class="nav">
             <a href="home.php">home</a>
             <a href="services.php">services</a>
             <a href="about.php">about</a>
             <a href="news.php">news</a>
             <a href="gallery.html">gallery</a>
             <a href="contact.php">contact</a>

        
      </nav>
        
   </div>
</div>
</header>

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
            <div class=content">
                <h3>let us bring you a healthy life</h3>
                <P>It's time to transition beyond our fossil fuel addiction to a just 
                economy based on green jobs, renewable energy, and local organic food.</P>
                <a href="login_form.php" class="btn">login</a>
                <a href="register_form.php" class="btn">register</a>
                <a href="logout.php" class="btn">logout</a>

            </div>
            </div>
        </div>    
    </div>
</section>
<!-- home section ends -->

<section class="home-2">
<h4>why ecological farming?</h4>
<img class="float-img" src="Images/ecologica1.jpg" alt="" />
<p>Ecological farming, also called organic or biological, is based on the premise that the crops take advantage of natural resources to, for example, fight pests, maintain or increase soil fertility, etc., without resorting to synthetic chemicals such as fertilizers, pesticides, antibiotics, and without using any organisms that have been genetically modified. This way, more natural, healthy and nutritious foods are obtained. In addition, it helps to achieve greater sustainability of the environment causing minimal environmental impact.</p>    
<p>There are several types of ecological farming that are based on balance and respect for the environment, such as biodynamic agriculture, natural agriculture or Fukuoka, synergistic agriculture, messianic agriculture, permaculture, etc.</p>

<h4>The benefits or ecological farming</h4>
<p>Ecological products are healthier since they are free from persistent toxic waste from pesticides, insecticides, antibiotics, synthetic fertilizers, additives and preservatives, many of which are used in conventional agriculture to eliminate insects or pests and fight diseases and to add color (like in the case of apples, oranges, etc.) On the medium or long term such produce can have negative effects on human health. Since they don’t contain artificial substances, the foods from ecological farming are assimilated correctly by the organism without altering the metabolic functions. According to nutritionists, most degenerative diseases have their origin in food.</p>
<p>Another characteristic of ecological farming is that, when growing food in balanced soils by natural fertilizers, the products are more nutritious because they contain higher levels of vitamins, essential minerals, antioxidants, carbohydrates and proteins.</p>
</section>




<!-- footer section start -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="news.php"><i class="fas fa-angle-right"></i> news</a>
            <a href="gallery.php"><i class="fas fa-angle-right"></i> gallery</a>
            <a href="contact"><i class="fas fa-angle-right"></i>contact</a> 
        </div>

        <div class="box">
            <h3>external links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> need Help?</a>
            <a href="#"><i class="fas fa-angle-right"></i> Abous us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>  
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +94-11-2034300 </a>
            <a href="#"> <i class="fas fa-phone"></i> +94 812 388122 </a>
            <a href="#"> <i class="fas fa-envelope"></i> service@agrimin.gov.lk </a>
            <a href="#"> <i class="fas fa-map"></i> colombo, sri lanka - 241/B </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
    </div>
    <div class="credit"> created by - <span> A.M.Sandula Jeewantha </span> | all rights reserved! </div>


</section>





<!-- footer section start -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
 
   