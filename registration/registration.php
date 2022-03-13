<?php

$lastname = $_GET['lastName'];
$firstname = $_GET['firstName'];
$gender = $_GET['gender'];
$birth = $_GET['birth'];
$username = $_GET['password'];
$password = $_GET['password'];
$confirmpassword = $_GET['confirmpassword'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body>


    <form>
        <div id="form-cont" class="text-center border-4 rounded">
            <h1 class="font-bold text-3xl bg-emerald-600 p-3 text-white rounded ">My Personal Information</h1>
            <div class="m-5 ">
                <label for="lastName">Last Name:</label>
                <input class="border-4 rounded" type="text" id="lastName" name="lastName"/>
            </div>
            <div class="m-5">
                <label for="firstName">First Name:</label>
                <input class="border-4 rounded" type="text" id="firstName" name="firstName"/>
            </div>
            <div class="m-5">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="m-5">
                <label for="birth">Date of birth:</label>
                <input class="border-4 rounded" type="date" id="birth" name="birth"/>
            </div>
            <div class="m-5">
                <label for="username">Username:</label>
                <input class="border-4 rounded" type="text" id="username" name="username"/>
            </div>
            <div class="m-5">
                <label for="password">Password:</label>
                <input class="border-4 rounded" type="password" id="password" name="password"/>
            </div>
            <div class="m-5">
                <label for="password">Confirm Password:</label>
                <input class="border-4 rounded" type="password" id="confirmpassword" name="confirmpassword"/>
            </div>

            <button class="btn p-3 m-3 rounded-lg text-white btn-primary bg-emerald-600">Send Data</button>

        </div>
    </form>


    <div class="text-center">
        <h1 id="php-code">Result</h1>
        <?php 

        echo "<h1>Fullname : $firstname, $lastname</h1>";
        echo "<h1>Gender: $gender</h1>";
        echo "<h1>Birth: $birth</h1>";
        echo "<h1>Username: $username</h1>";

        
        if ($password != $confirmpassword) {
            echo "Password not the same";
        }
        else {
            echo "<h1>Password: $password</h1>";
        }
        ?>
    </div>

</body>
</html>