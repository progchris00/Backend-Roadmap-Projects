<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Converter</title>
</head>

<body>
    <h1>Unit Converter</h1>
    <p>Result of your calculation</p>
    <?php
    $length =  (int)($_POST["length"]);
    $unitsFrom = htmlspecialchars($_POST["convert_unit_from"]);
    $unitsTo = htmlspecialchars($_POST["convert_unit_to"]);

    function convertUnit($length, $unitsFrom, $unitsTo)
    {
        if (strcmp($unitsFrom, $unitsTo) == 0) {
            return $length;
        } else if (strcmp($unitsFrom, "foot") == 0 && strcmp($unitsTo, "millimeter") == 0) {
            return $length * 30.48;
        }
    }

    $convertedUnit = convertUnit($length, $unitsFrom, $unitsTo);

    echo  "<p>{$length} {$unitsFrom} = {$convertedUnit} {$unitsTo}</p>";
    ?>
    <button>reset</button>
</body>

</html>