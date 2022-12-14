<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
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
         <a href="users.php">view users</a>

    
  </nav>
    <li class="search-icon">
        <input type="search" placeholder="search">
        <label class="icon">
            <span class="fas fa-search"> </span>
        </lable>

    </li>
    
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
    <h1>this is admin </h1>
    <h2>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h2>
    <a href="login_form.php" class="btn">login</a>
    <a href="register_form.php" class="btn">register</a>
    <a href="logout.php" class="btn">logout</a>


</body>
</html>