<?php

$arrayListInput = [];


if(isset($_GET['inputValues'])){
    foreach (explode(',', $_GET['inputValues']) as $key => $value){
        $arrayListInput[$key] = $value;
    }
}

$differenc = 0;
$quotient = (float) 0 ;

$arraySize = count($arrayListInput);

for($x = 0; $x < $arraySize; $x++) {
    $difference -= $arrayListInput[$x];
    $quotient /= $arrayListInput[$x];
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
                    <td><?php echo array_sum($arrayListInput)?></td>
                </tr>
                <tr>
                    <td>Subtraction</td>
                    <td><?php echo $difference?></td>
                </tr>
                <tr>
                    <td>Multiplication</td>
                    <td><?php echo array_product($arrayListInput)?></td>
                </tr>
                <tr>
                    <td>Division</td>
                    <td><?php echo $quotient?></td>
                </tr>

            </table>
        </tablevalues>
    </div>
</body>
</html>