<?php

function getLength()
{
    return [
        "kilometer" => 1,
        "meter" => 1000,
        "centimeter" => 100000,
        "millimeter" => 1000000,
        "inch" => 39370.1,
        "foot" => 3280.84,
        "yard" => 1093.61,
        "mile" => 0.621371,
    ];
}

function getWeight()
{
    return [
        "kilogram" => 1,
        "gram" => 1000,
        "milligram" => 1000000,
        "ounce" => 35.274,
        "pound" => 2.20462,

    ];
}

function convertUnit($value, $unitsFrom, $unitsTo, $unit)
{
    $baseValue = $value / $unit[$unitsFrom];
    $convertedValue = $baseValue * $unit[$unitsTo];
    return $convertedValue;
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}
