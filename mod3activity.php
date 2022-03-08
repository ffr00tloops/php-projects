


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        img {
            width: 50px;
            height: 50px;
        }


        table {
            position: absolute;
            top: 10%;
            right: 25%;
            left: 25%;
            border: 2px solid grey;
            padding: 40px;
        }

        .table-body {
            text-align: center;
            padding: 30px;
            margin: 30px;
        }

        .table-row-data td {
            padding: 30px;
            margin: 30px;
        }


    </style>
</head>
<body>
    <?php
    
    echo "<table>";

    echo "<tbody class=\"table-body\">";

    echo "<tr>    
                <th>Student Number</th>
                <th>Name</th>
                <th>Picture</th>
                <th>Age</th>
                <th>Birthdate</th>
                <th>Contact Number</th>
            </tr>";

    for ($i = 0; $i < 10; $i++) {
        echo "<tr class=\"table-row-data\">";
            echo "<td>$i</td>";
            echo "<td>Name$i</td>";
            echo "<td><img src=\"https://mpng.subpng.com/20180404/sqe/kisspng-computer-icons-user-profile-clip-art-big-5ac5283827d286.2570974715228703281631.jpg\" /></td>";
            echo "<td>age$i</td>";
            echo "<td>birthday$i</td>";
            echo "<td>098283823</td>";
        echo "</tr>";

    }
    
    echo "</tbody>";

    echo "</table>";
    
    ?>
</body>
</html>