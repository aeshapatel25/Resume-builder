<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html>
<head>
    <title>My website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>

        *{
            padding: 0;
            margin: 0;
            font-family: 'Poppins, sans-serif';
        }


        .c1{
            width: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 50%;
            text-align: center;
            padding: 41px;
            border-radius: 5px;
            background-color: #2D4263;
        }
        .c1 a{
            text-decoration: none;
            color: black;
        }
        
        .wrapper{
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right top, #edd2f3, #d9d9ff, #bbe3ff, #99ecff, #85f4ff);
        }

        button{
            border: none;
            padding: 10px 30px;
            color: #fff;
            background-color: #42C2FF;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        button:hover{
           opacity: 0.7;
           color: black;
      }

        span{
            color: white;
            font-family: 'Poppins, sans-serif';
            text-transform: uppercase;
        }


    </style>
</head>
<body>


    <div class="wrapper">
        <div class="c1">
            <button><a href="logout.php">Logout</a></button>
            <br> <br>
            <button><a href="signup.php"> Sign Up </a></button>
            <br> <br>
           <button><a href="sgp sem4/index (1).php"> Home Page </a></button>
        
            <!-- <h1>This is the index page</h1> -->
        
            <br><br><br>
            <span>Hello, <?php echo $user_data['user_name']; ?></span>
        </div>
    </div>
   
</body>
</html>
