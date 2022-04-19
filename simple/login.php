<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";

echo '<script>alert("Oops!! Wrong Username or Password. Please enter correct information.")</script>';
  
		}else
		{
			echo "wrong username or password!";
    
// PHP program to pop an alert
// message box on the screen
  
// Display the alert box 
echo '<script>alert("Oops!! Wrong Username or Password. Please enter correct information.")</script>';
  
		}
	}

?>



<!DOCTYPE html>
<html>
  <head>
    <title>Signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body>
    <style type="text/css">
      * {
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
      }
      .wrapper{
          background: linear-gradient(to right top, #edd2f3, #d9d9ff, #bbe3ff, #99ecff, #85f4ff);
          width: 100%;
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
      }

      #text {
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
      }

      #button {
        padding: 10px 30px;
        color: white;
        background-color: #42C2FF;
        border: none;
        border-radius: 5px;
        transition: 0.3s;
      }

      #button:hover{
           opacity: 0.7;
           color: black;
      }

      #box {
        justify-content: center;
        background-color: #2D4263;
        width: 400px;
        padding: 80px;
        border-radius: 10px;
      }

      input{
           border: none;
      }

      input:focus{
           outline: none;
           box-shadow: ;
      }

      label{
           color: #fff;
      }

      #revert{
          text-decoration: none;
          color: white;
          font-size: 14px;
          padding: 5px 10px;
          border-radius: 5px;
          transition: 0.3s;
      }

      #revert:hover{
          color: rgb(167, 166, 166);
      }
    </style>

<div class="wrapper">
         <div id="box">
           <form method="post">
             <div style="font-size: 40px; margin-bottom: 20px; color: white">Login</div>
             <label for="phone">Enter your Name:</label><br />
             <input id="text" type="text" name="user_name" /><br /><br />
             <label for="phone">Enter Password:</label>
             <input id="text" type="password" name="password" /><br /><br />
             <a href="sgp sem4\index (1).html">
               <input id="button" type="submit" value="Login" /><br /><br />
             </a>

            
           </form>
         </div>
    </div>

	
</body>
</html>