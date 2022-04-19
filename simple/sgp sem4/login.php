<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'particle/_dbconn.php';

   
    $Email = $_POST["email"];
    
   
    $password = $_POST["pass"];

    session_start();

    $sql = "select * from `login` where `Email`='$Email'";
      $result = mysqli_query($conn, $sql);
    $rec = mysqli_fetch_assoc($result);
    if($password==$rec["Password"])
    {
      
        if($rec["about"]==0){
          
          header('location:beginner/stock market basics.php');
        }
        else if(!$rec["status"])
        {
          $sql = "UPDATE `login` SET `status` = '1' WHERE `login`.`Email` = '$Email'";
          $result = mysqli_query($conn, $sql);
          $_SESSION["EName"]=$rec["Name"];
          $_SESSION["EEmail"]=$rec["Email"];
          header('location:ExForm.php');
        }
        else 
        {header('location:expert/profile.php');}
       
    } 
    else{
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>invalid password!</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
   

}

?>




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="zxx"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>Stock Stars</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <!-- <link rel="stylesheet" href="plugins/themefisher-font.v-2/style.css"> -->
  <!-- bootstrap.min css -->
  <!-- <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css"> -->
  <!-- Slick Carousel -->
  <!-- <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css"> -->
  <!-- <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css"> -->
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class="preloader">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  
<!--
Fixed Navigation
==================================== -->

<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block">
                    <h2 class="text-center">Sign In to Stock Stars</h2>
                    
                    <form class="text-left clearfix mt-50" method="POST" action="login.php" >
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-main" >Sign In</button>
                        
                    </form>
                    <p class="mt-20">New in this site ?<a href="signin.php"> Create New Account</a></p>
                    <p><a href="forget-password.php"> Forgot your password?</a></p>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- end Footer Area
    ========================================== -->

    
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <!-- <script src="plugins/jquery/dist/jquery.min.js"></script> -->
    <!-- Bootstrap -->
    <!-- <script src="plugins/bootstrap/dist/js/popper.min.js"></script> -->
    <!-- <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <!-- Owl Carousel -->
    <!-- <script src="plugins/slick-carousel/slick/slick.min.js"></script> -->
    <!-- <script src="https://cdn.plot.ly/plotly-latest.min.js"></script> -->
    <!-- Smooth Scroll js -->
    <!-- <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script> -->
    
    <!-- Custom js -->
    <!-- <script src="js/script.js"></script> -->

  </body>
  </html>