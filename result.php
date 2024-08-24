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

    echo  "{$length} {$unitsFrom} = {$length} {$unitsTo}";
    ?>
    <button>reset</button>
</body>

</html>