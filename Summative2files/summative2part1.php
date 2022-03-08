<?php
$nameArr = ["Banana","Apple","Grapes","Watermelon", "Lemon", "Pear", "Orange","Strawberry", "Coconut", "Cherry"];
$description =[ "Yellow", "Red circle shape", "Purple", "Green with stripes", "Circular yellow", "Like a coconut but green inside", "Orange color", "Small but red color", "Sturdy and brown", "Like grapes but red"];
$facts =[ "A banana is a berry not a fruit.", "Apples Are High in Fiber.", "Grapes Are Actually Berries.", "Watermelons are both fruit and vegetable.", "Lemons are native to Asia.", "A medium pear has about 100 calories.", "Oranges are the largest citrus fruit in the world.", "The average strawberry has 200 seeds.", "On average a coconut tree produces 30 fruits each year.", "The average cherry tree has 7,000 cherries."];

$imageSrc = ["https://upload.wikimedia.org/wikipedia/commons/8/8a/Banana-Single.jpg","https://www.collinsdictionary.com/images/full/apple_158989157.jpg","https://www.collinsdictionary.com/images/full/grape_229112122.jpg","https://www.gardeningknowhow.com/wp-content/uploads/2021/05/whole-and-slices-watermelon.jpg", "https://i.ndtvimg.com/mt/cooks/2014-11/lemon.jpg", "https://static.wikia.nocookie.net/cultivation-chat-group/images/d/d4/Pear.jpg/revision/latest?cb=20180307104841", "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Oranges_-_whole-halved-segment.jpg/1200px-Oranges_-_whole-halved-segment.jpg","https://cdn-prod.medicalnewstoday.com/content/images/articles/320/320894/strawberry-on-white-background-to-represent-strawberry-tongue.jpg", "https://solidstarts.com/wp-content/uploads/Coconut-for-Babies-scaled.jpg", "https://upload.wikimedia.org/wikipedia/commons/f/f6/Cherry_season_%2848216568227%29.jpg"];


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
    </style>

</head>
<body>
    <table class="text-center container border-4">
        <thead >
            <h1 class="p-3 text-center">List of names</h1>
        </thead>
        <tbody>
            <tr>
                <th class="p-3">Image</td>
                <th class="p-3">Name</td>
                <th class="p-3">Description</td>
                <th class="p-3">Facts</td>
            </tr>
            <?php
                $arrayCount = count($nameArr);
                for ($i = 0;$i < $arrayCount; $i++) {
                    echo "<tr>";
                    echo "<td class=\"p-3\">";
                    echo "<img src=\"$imageSrc[$i]\"/>";
                    echo "</td>";
                    echo "<td class=\"p-3\">$nameArr[$i]</td>";
                    echo "<td class=\"p-3\">$description[$i]</td>";
                    echo "<td class=\"p-3\">$facts[$i]</td>";
                    echo "</tr>";
                }

            ?>
        </tbody>
    </table>
    
</body>
</html>