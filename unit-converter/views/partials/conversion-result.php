<?php
$length = (int)$_POST["unit-to-convert"];
$unitsFrom = $_POST["convert-unit-from"];
$unitsTo = $_POST["convert-unit-to"];

function convertUnit($length)
{
    return $length;
}

$convertedUnit = convertUnit($length)

?>

<div class="result">
    <p>Result of your calculation</p>
    <p class="actual-result"><?php echo "{$length} {$unitsFrom} = {$convertedUnit} {$unitsTo}" ?></p>
    <button id="reset-button">Reset</button>
</div>