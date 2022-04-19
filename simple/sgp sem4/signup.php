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
  <link rel="stylesheet" href="plugins/themefisher-font.v-2/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
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

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'particle/_dbconn.php';

    $name = $_POST["Fname"];
    $Email = $_POST["Email"];
    $number = $_POST["number"];
    $type = $_POST["type"];
    $password = $_POST["pass"];






if(isset($_POST["Fname"])&&isset($_POST["Email"])&&isset($_POST["number"])&&isset($_POST["pass"])){
     
      if($type=="Beginner"){
        
        $sql = "select * from `login` where Email='$Email'";
        $result1 = mysqli_query($conn, $sql); 
        $num = mysqli_num_rows($result1);
        if($num==0){
         
        $sql = "INSERT INTO `login` (`Name`, `Email`, `Number`, `Password`,`about`,`status`) VALUES ('$name', '$Email', '$number', '$password','0','1')";
        $result = mysqli_query($conn, $sql);
        
        }else{
          echo "Email is already register";
        } 
      }

      if($type=="Expert"){

        $sql = "select * from `login` where Email='$Email'";
        $result1 = mysqli_query($conn, $sql); 
        $num = mysqli_num_rows($result1);
        if($num==0){

          $sql = "INSERT INTO `login` (`Name`, `Email`, `Number`, `Password`,`about`,`status`) VALUES ('$name', '$Email', '$number', '$password','1','0')";
          $result = mysqli_query($conn, $sql);


        }else{
          echo "Email is already register";
        }

       
      }
      


        
    }else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      PLEASE FILL ALL THE INFORMATION...!!
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>'
     ;

    }

       

}

?>
<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="block text-center">
          <h2 class="text-center">Create Your Account</h2>
          <form class="text-left clearfix mt-30" method="POST" action="signup.php">
            <div class="form-group">
              <input type="text" class="form-control"  name="Fname"placeholder="Full Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control"  name="Email"placeholder="Email">
            </div>
            <div class="form-group">
              <input type="tel" id="phone" pattern="[0-9]{10}" class="form-control"  name="number" placeholder="phone number">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password">
            </div>
            <div class="form-group">
            <input type="radio" class="radio" name="type" value="Beginner">Beginner
            <input type="radio" class="radio" name="type" value="Expert">Expert
          
           </div>
            <button type="submit" class="btn btn-main text-center">Sign In</button>
          </form>
          <p class="mt-20">Already hava an account ?<a href="login.php"> Login</a></p>
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'particle/footer.php' ?> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->

    
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>

  </body>
  </html> 