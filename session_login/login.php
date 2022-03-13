<?php  

session_start();   // session starts with the help of this function 


if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

      if($user == "Daniel" && $pass == "1234")  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}

 ?>
<html>
<head>

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registration Module </title>
    <style>
        #form-cont {
            position: relative;
            margin-top: 100px;
            margin-right: 400px;
            margin-left: 400px;
            padding: 30px;
        }

        #php-code h1 {
            text-align: center;
        }

        @media only screen and (max-width: 1000px)  {
            #form-cont {
                position: relative;
                margin-top: 100px;
                margin-right: 0px;
                margin-left: 0px;
                padding: 30px;
            }
        }
    </style>
</head>

</head>

<body>

<form action="" method="post">
        <div id="form-cont" class="text-center border-4 rounded">
            <h1 class="font-bold text-3xl bg-emerald-600 p-3 text-white rounded ">Login Form</h1>
            <div class="m-5 ">
                <label for="username">Username:</label>
                <input class="border-4 rounded" type="text" id="user" name="user"/>
            </div>
            <div class="m-5">
                <label for="passwored">Password:</label>
                <input class="border-4 rounded" type="password" id="pass" name="pass"/>
            </div>
            <div class="m-5">
                <label for="vehicle3">Remember me</label>
                <input type="checkbox" id="remember" name="remember" value="check"/>
            </div>

            <button type="submit" name="login" value="LOGIN" class="btn p-3 m-3 rounded-lg text-white btn-primary bg-emerald-600">Login</button>

        </div>
    </form>

</body>
</html>