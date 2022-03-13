<?php 

$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$dBirth = $_GET['date_of_birth'];
$gender = $_GET['gender'];
$email = $_GET['email'];
$number = $_GET['mobile_number'];
$address = $_GET['address'];
$city = $_GET['city'];


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body {
            text-align: center;
            background-color: SlateBlue; 
        }

        .container {
            display: flex;
            flex-direction: column;
            position: relative;
            top: 10%;
            margin-right: 25%;
            margin-left: 25%;
            border: 2px solid grey; 
            border-radius: 3px;
        }

        .container * {
            margin: 5px;
        }

        .small-field {
            width: 30%;
            margin: 0 auto;
        }

    </style>
</head>
<body>

    <h1>Student Registration Form</h1>

    <form name="form" method="get" >
        <div class="container">
            <label for="first_name">First Name:</label>
            <input type="text" name="firstName" id="firstName" maxlength="30">
            <label for="last_name">Last Name:</label>
            <input type="text" name="lastName" maxlength="30">
            <div style="display: flex;">
                <label  for="date_of_birth">Date of birth:</label>
                <input class="small-field" type="date" name="date_of_birth">
                <label for="gender">Gender:</label>
                <select class="small-field" name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <label for="email">Email:</label>
            <input type="email" name="email">
            <label for="mobile_number">Mobile Number:</label>
            <input type="text" name="mobile_number" maxlength="11">
            <label for="address">Address:</label>
            <input type="address" name="address">
            <label for="city">City:</label>
            <input type="city" name="city">

            <div style="margin: 30px;">
                <button type="submit">Send Form</button>
            </div>

        </div>
        
    </form>


    <div style="margin: 30px;">
        <h1>Results:</h1>
        <?php
            echo "<p>$firstName</p>";
            echo "<p>$lastName</p>";
            echo "<p>$dBirth</p>";
            echo "<p>$gender</p>";
            echo "<p>$email</p>";
            echo "<p>$number</p>";
            echo "<p>$address</p>";
            echo "<p>$city</p>";
        ?>
    </div>
</body>
</html>