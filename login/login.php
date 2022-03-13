<?php



if (isset($_POST['remember'])) {
    setcookie(
    $cookie_username = "cookie_user",
    $value = $_GET['username'],
    );

    setcookie(
        $cookie_password = "cookie_pass",
        $value = $_GET['password'],
    );
}

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


    <form method="post">
        <div id="form-cont" class="text-center border-4 rounded">
            <h1 class="font-bold text-3xl bg-emerald-600 p-3 text-white rounded ">Login Form</h1>
            <div class="m-5 ">
                <label for="username">Username:</label>
                <input class="border-4 rounded" type="text" id="username" value=<?php echo $_COOKIE[$cookie_username]?> name="username"/>
            </div>
            <div class="m-5">
                <label for="passwored">Password:</label>
                <input class="border-4 rounded" type="password" id="password" value=<?php echo $_COOKIE[$cookie_password]?>  name="password"/>
            </div>
            <div class="m-5">
                <label for="vehicle3">Remember me</label>
                <input type="checkbox" id="remember" name="remember" value="check"/>
            </div>

            <button class="btn p-3 m-3 rounded-lg text-white btn-primary bg-emerald-600">Login</button>

        </div>
    </form>



</body>
</html>