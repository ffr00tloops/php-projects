<?php

$value = $_GET['inputValue'];
$unit = $_GET['unit'];

$result;


switch($unit) {
    case "centimetre":
        $cmMetric = $value * 10 . " Millimetres";
        $cmImperial = $value * 0.3937 . " Inches" ;
        $result = "<h1>$cmMetric</h1><h1>$cmImperial</h1>";
        break;
    case "decimetre":
        $dmMetric = $value * 10 . " Centimetres";
        $result = "<h1>$dmMetric</h1>";
        break;
    case "metre":
        $mMetric = $value * 100 . " Centimetres";
        $mInches = $value * 39.37008 . " Inches";
        $mFeet = $value * 3.28084 . " Feet";
        $mYard = $value * 1.09361 . " Yard";
        $result = "<h1>$mMetric</h1><h1>$mInches</h1><h1>$mFeet</h1><h1>$mYard</h1>";
        break;
    case "kilometre":
        $kmMetre = $value * 1000 . " Metres";
        $kmYard = $value * 1093.6133 . " Yards";
        $kmMiles = $value * 0.62137 . " Miles";
        $result = "<h1>$kmMetre</h1><h1>$kmYard</h1><h1>$kmMiles</h1>";
        break;
    case "foot":
        $fInches = $value * 12 . " Inches";
        $fCM = $value * 30.48 . " Foot";
        $result = "<h1>$fInches</h1><h1>$fCM</h1>";
    case "yard":
        $yFeet = $value * 3 . " Feet";
        $yCM = $value * 91.44 . " Centrimetres";
        $yMetres = $value * 0.9144 . " Centrimetres";
    case "chain":
        $cYard = $value * 22 . " Yards";
        $result = $cYard;
        break;
    case "furlong":
        $fYards = $value * 220 . " Yards" . " or " . $value * 10 . " Chains";
        $result = $fYards;
        break;
    case "mile":
        $mYards = $value * 1760 . " Yards";
        $mMetres = $value * 1609.344 . " Metres";
        $mKM = $value * 1.609344 . " Kilometres";
        $result = "<h1>$mYards</h1><h1>$mMetres</h1><h1>$mKM</h1>";
    case "millimetre":
        $mmInches = $value * 0.39370 . " Inches";
        $result = $mmInches;
        break;
    default:
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Formative 1</title>

    <style>
        #converter {
            display: block;
            margin-right: 500px;
            margin-left: 500px;
            margin-top: 100px;
        }

        @media only screen and (max-width: 1024px) {

            #converter {
            display: block;
            margin-right: auto;
            margin-left: auto;
            margin-top: 100px;
        }
        }

    </style>

</head>
<body>
    <div id="converter" class="bg-black p-3 text-white text-center rounded-lg">

        <h1 class="p-3 m-3 text-2xl">Length Converter</h1>


        <form name="form" method="get">
            <div class="p-3 m-3">
                <input class="text-black" name="inputValue" id="inputValue" type="text" value=1 placeholder="Ex: 1 Feet">

                <select name="unit" id="unit" class="text-black">
                    <option value="centimetre">Centimeter</option>
                    <option value="decimetre">Decimetre</option>
                    <option value="metre">Metre</option>
                    <option value="kilometre">Kilometre</option>
                    <option value="foot">Foot</option>
                    <option value="yard">Yard</option>
                    <option value="chain">Chain</option>
                    <option value="furlong">Furlong</option>
                    <option value="mile">Mile</option>
                    <option value="millimetre">Millimetre</option>

                </select>
                
            </div>
            <button type="submit" class="btn btn-primary bg-gray-300 p-2 m-3 rounded text-black">Convert</button>
        </form>

        <div class="text-white m-3">
            <h1 class="text-xl">Result:</h1>
            <h1><?php echo $result?></h1>
        </div>


    </div>

</body>
</html>

