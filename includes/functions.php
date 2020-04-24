<?php

define('LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS', [
  'bucket' => 4,
  'butt' => 108,
  'firkin' => 9,
  'hogshead' => 54,
  'gallon' => 1,
  'pint' => 0.125,
]);

define('LENGTH_MEASUREMENT_TO_CENTIMETERS', [
  'grain' => 0.7,
  'thumb-length' => 2.1,
  'palm' => 3.3,
  'fist' => 10.4,
  'foot' => 25,
  'step' => 62.5,
  'double-step' => 1500,
  'rod' => 3000,
  'centimeter' => 1,
]);

// Convert Liquids

function convert_to_gallons($value, $fromUnit) {
  if(array_key_exists($fromUnit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS)) {
    return $value * LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$fromUnit];
  }
  else {
    return "Unsupported unit.";
  }
}

function convert_from_gallons($value, $toUnit) {
  if(array_key_exists($toUnit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS)) {
    return $value / LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$toUnit];
  }
  else {
    return "Unsupported unit.";
  }
}

function convert_liquid($value, $fromUnit, $toUnit) {
  $gallonValue = convert_to_gallons($value, $fromUnit);
  $newValue = convert_from_gallons($gallonValue, $toUnit);
  return $newValue;
}

// Convert Lengths

function convert_to_centimeters($value, $fromUnit) {
  if(array_key_exists($fromUnit, LENGTH_MEASUREMENT_TO_CENTIMETERS)) {
    return $value * LENGTH_MEASUREMENT_TO_CENTIMETERS[$fromUnit];
  }
  else {
    return "Unsupported unit.";
  }
}

function convert_from_centimeters($value, $toUnit) {
  if(array_key_exists($toUnit, LENGTH_MEASUREMENT_TO_CENTIMETERS)) {
    return $value / LENGTH_MEASUREMENT_TO_CENTIMETERS[$toUnit];
  }
  else {
    return "Unsupported unit.";
  }
}

function convert_length($value, $fromUnit, $toUnit) {
  $centimeterValue = convert_to_centimeters($value, $fromUnit);
  $newValue = convert_from_centimeters($centimeterValue, $toUnit);
  return $newValue;
}
