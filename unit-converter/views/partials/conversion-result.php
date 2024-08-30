<?php

$value = (int)$_POST["unit-to-convert"];
$unitsFrom = $_POST["convert-unit-from"];
$unitsTo = $_POST["convert-unit-to"];
$lenghtUnits = getLength();
$weightUnits = getWeight();

if (array_key_exists($unitsFrom, $lenghtUnits)) {
    $unit = $lenghtUnits;
} else if (array_key_exists($unitsFrom, $weightUnits)) {
    $unit = $weightUnits;
}

$convertedUnit = convertUnit($value, $unitsFrom, $unitsTo, $unit)

?>

<div class="result">
    <p>Result of your calculation</p>
    <p class="actual-result"><?= "{$value} {$unitsFrom} = {$convertedUnit} {$unitsTo}" ?></p>
    <button id="reset-button">Reset</button>
</div>