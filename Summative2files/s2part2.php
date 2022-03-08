<?php

function cube($area) {
    return pow($area,3) ; 
}


function cylinder($radius, $height) {
    return pi() * $height * pow($radius,2) ; 
}

function prism($base, $height) {
    return $base * $height ; 
}

function rectangle($length, $weight, $height) {
    return $length * $weight * $height ; 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .table-heading {
            margin-right: 200px;
            margin-left: 200px;
        }

        img {
            width: 100px;
            height: 100px;
        }
    </style>s
</head>
<body>
<table class="text-center container border-4">
        <thead class="border-4">
            <th class="p-3"></td>
            <th class="p-3">Volume of shapes</td>
            <th class="p-3"></td>
        </thead>
        <tbody>
            <tr>
                <th class="p-3">Values</td>
                <th class="p-3">Formula</td>
                <th class="p-3">Answer</td>
            </tr>
            <tr>
                <td>a = 5</td>
                <td>V = a3</td>
                <td><?php echo cube(5); ?></td>
            </tr>
            <tr>
                <td>r = 10
                    h = 30
                </td>
                <td>V = πr2h</td>
                <td><?php echo cylinder(10,30); ?></td>
            </tr>
            <tr>
                <td>B = 30
                    h = 30
                </td>
                <td>V = B × h</td>
                <td><?php echo prism(30,30); ?> </td>
            </tr>
            <tr>
                <td>l = 25
                    w = 30
                    h = 1
                </td>
                <td>V = l × w × h</td>
                <td><?php echo rectangle(25,30,1); ?></td>
            </tr>
        </tbody> 
    </table>
</body>
</html>