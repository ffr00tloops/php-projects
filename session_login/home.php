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
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:Login.php");  
       }

        echo "<div class=\"text-center font-bold my-52 text-lg\"> Hello ";
          echo $_SESSION['use'];

          echo "<h1 class=\"text-2xl\">Login Success</h1>";

          echo "<a href='logout.php'> Logout</a> "; 

        echo "</div>";
?>
</body>
</html>