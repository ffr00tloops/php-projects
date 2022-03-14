<?php   
session_start();  

?>
<html>
  <head>
        <script src="https://cdn.tailwindcss.com"></script>
       <title> Home </title>
  </head>
  <body>
    <?php
    if(!isset($_SESSION['login'])) // If session is not set then redirect to Login Page
    {
     header("Location:Login.php");  
    }

    function logout() {

      session_destroy();

      header("Location:login.php"); 
    }

    if(isset($_POST['logout'])) {
      logout();
    }

    ?>

    <form method="post">
    <div class="border-8 my-52 lg:mx-64 p-5 ">
      <h1 class="text-white text-lg font-bold p-5 bg-emerald-600">User Information Form</h1>
      <div class="bg-white m-5 p-5">
        <h1><?php echo $_SESSION['firstname']?></h1>
        <h1><?php echo $_SESSION['lastname']?></h1>
      </div>

      <button type="submit" name="logout" value="logout" class="text-center btn p-3 m-3 rounded-lg text-white btn-primary bg-emerald-600">Logout</button>
    </div>
  </form>



  </body>
</html>