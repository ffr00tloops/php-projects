
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>

    <style>
        #form-cont {
            position: relative;
            margin-top: 50px;
            margin-right: auto;
            margin-left: auto;

        }

    </style>
</head>
<body>
    <div class="text-center">
        <h1 class="p-3 m-3">Multiplication Table</h1>
        <?php
        echo "<table id=\"form-cont\" class=\"table-auto p-3 m-3 border-4\">";

        echo "<tbody class=\"form-cont\">";

        for ($row=0; $row<=10; $row++){
            echo "<tr>\n";
            for ($col=0; $col<=10; $col++){
                $x=$col * $row;
                echo "<td class=\"p-4 m-4 border-2\">$x</td>\n";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
    </div>

</body>
</html>