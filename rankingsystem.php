<?php

$value = $_GET['gradeValue'];

$result;


if ($value >= 93 and $value <= 100 ) {
    $result = "A";
}
else if ($value >= 90 and $value <= 92 ) {
    $result = "A-";
}
else if ($value >= 87 and $value <= 89 ) {
    $result = "B+";
}
else if ($value >= 83 and $value <= 86 ) {
    $result = "B";
}
else if ($value >= 80 and $value <= 82 ) {
    $result = "B-";
}
else if ($value >= 77 and $value <= 79 ) {
    $result = "C+";
}
else if ($value >= 73 and $value <= 76 ) {
    $result = "C";
}
else if ($value >= 70 and $value <= 72 ) {
    $result = "C-";
}
else if ($value >= 67 and $value <= 69 ) {
    $result = "D+";
}
else if ($value >= 63 and $value <= 66 ) {
    $result = "D";
}
else if ($value >= 60 and $value <= 62 ) {
    $result = "D-";
}
else if ($value < 60) {
    $result = "F";
}
else {
    $result = "Invalid Grade Value";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ranking System</title>

    <style>
        #form-cont {
            position: absolute;
            top: 25%;
            right: 25%;
            left: 25%;
        }
    </style>
    
</head>
<body>

    <div id="form-cont" class="border-4 text-center">
        <h1 class="p-3 m-3 text-xl border-4 ">Grade Ranking</h1>
        <form class="p-3 m-3 border-4 " name="form" method="get">
            <label for="gradeValue">Enter your Grade:</label>
            <input class="border-4 text-center" name="gradeValue" type="text" placeholder="Grade : 92">
            <button class="bg-blue-300 btn btn-primary p-3 m-3 border-2 rounded" type="submit">Determine Rank</button>
        </form>

        <div class="p-3 m-3 border-4">
            <h1 class="text-xl">Your Rank is:</h1>
            <h1 class="text-5xl">
                <?php
                    echo $result
                ?>
             </h1>
        </div>
    </div>    
    

    
</body>
</html>