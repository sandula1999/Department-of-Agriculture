
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

<section>
<div id="contact-2" >   
<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-6">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                       <hr>
                        <?php
                       $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>'; 
                            }
                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                            
                        ?>      
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2"><br></br>
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2"><br></br>
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2"><br></br>
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea><br></br>
                            <button class="btn btn-success" name="btn-send"> Send </button><br></br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
</body>
</html>

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