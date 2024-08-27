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
    echo  "<p>{$length} {$unitsFrom} = {$convertedUnit} {$unitsTo}</p>";
    ?>
    <button>reset</button>
</body>

</html>