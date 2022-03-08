<?php


if(isset($_GET['inputValues'])){
    foreach (explode(',', $_GET['inputValues']) as $key => $value){
        ${'var'.$key} = $value;
    }
}

function addition($var0,$var1,$var2) {
    return $var0 + $var1 + $var2;
}

function subtraction($var0,$var1,$var2) {
    return $var0 - $var1 - $var2;
}

function multiplication($var0,$var1,$var2) {
    return $var0 * $var1 * $var2;
}

function division($var0,$var1,$var2) {
    return $var0 / $var1 / $var2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        .container {
            position: absolute;
            left: 25%;
            right: 25%;
            padding: 50px;
            margin: 50px;
        }
        table {
            text-align: center;
        }
        td,tr {
            border: 1px solid grey;
            width: 250px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <form name="form" method="get">
                <label>Your parameter values:</label>
                <input type="text" name="inputValues"></input>
                <button type="submit">Calculate Values</button>
            </form>
        </div>
        <tablevalues>
            <table>
                <tr>
                    <td>Addition</td>
                    <td><?php echo addition($var0,$var1,$var2);?></td>
                </tr>
                <tr>
                    <td>Subtraction</td>
                    <td><?php echo subtraction($var0,$var1,$var2);?></td>
                </tr>
                <tr>
                    <td>Multiplication</td>
                    <td><?php echo multiplication($var0,$var1,$var2);?></td>
                </tr>
                <tr>
                    <td>Division</td>
                    <td><?php echo division($var0,$var1,$var2);?></td>
                </tr>

            </table>
        </tablevalues>
    </div>
</body>
</html>