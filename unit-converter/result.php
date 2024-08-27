<?php
$length =  (int)($_POST["unit-to-convert"]);
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

require "result.view.php";
