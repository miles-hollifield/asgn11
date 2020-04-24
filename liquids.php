<?php

function convert_to_gallons($value, $fromUnit) {
  switch($fromUnit) {
    case 'bucket':
      return $value * 4;
      break;
    case 'butt':
      return $value * 108;
      break;
    case 'firkin':
      return $value * 9;
      break;
    case 'hogshead':
      return $value * 54;
      break;
    case 'gallon':
      return $value;
      break;
    case 'pint':
      return $value * 0.125;
      break;
    default:
      return "Unsupported unit.";
  }
}
  
function convert_from_gallons($value, $toUnit) {
  switch($toUnit) {
    case 'bucket':
      return $value / 4;
      break;
    case 'butt':
      return $value / 108;
      break;
    case 'firkin':
      return $value / 9;
      break;
    case 'hogshead':
      return $value / 54;
      break;
    case 'gallon':
      return $value;
      break;
    case 'pint':
      return $value / 0.125;
      break;
    default:
      return "Unsupported unit.";
  }
}

function convert_liquid($value, $fromUnit, $toUnit) {
  $gallonValue = convert_to_gallons($value, $fromUnit);
  $newValue = convert_from_gallons($gallonValue, $toUnit);
  return $newValue;
}

$fromValue = '';
$fromUnit = '';
$toUnit = '';
$toValue = '';

if(!isset($_POST['submit'])) {
  $_POST['submit'] = '';
}
elseif($_POST['submit']) {
  $fromValue = $_POST['from_value'];
  $fromUnit = $_POST['from_unit'];
  $toUnit = $_POST['to_unit'];
  $toValue = convert_liquid($fromValue, $fromUnit, $toUnit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Liquid</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Liquid</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $fromValue; ?>" />&nbsp;
          <select name="from_unit">
            <option value="bucket"<?php if($fromUnit == 'bucket') { echo " selected"; } ?>>Buckets</option>
            <option value="butt"<?php if($fromUnit == 'butt') { echo " selected"; } ?>>Butts</option>
            <option value="firkin"<?php if($fromUnit == 'firkin') { echo " selected"; } ?>>Firkins</option>
            <option value="hogshead"<?php if($fromUnit == 'hogshead') { echo " selected"; } ?>>Hogs Heads</option>
            <option value="gallon"<?php if($fromUnit == 'gallon') { echo " selected"; } ?>>Imperial Gallons</option>
            <option value="pint"<?php if($fromUnit == 'pint') { echo " selected"; } ?>>Pints</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $toValue; ?>" />&nbsp;
          <select name="to_unit">
            <option value="bucket"<?php if($toUnit == 'bucket') { echo " selected"; } ?>>Buckets</option>
            <option value="butt"<?php if($toUnit == 'butt') { echo " selected"; } ?>>Butts</option>
            <option value="firkin"<?php if($toUnit == 'firkin') { echo " selected"; } ?>>Firkins</option>
            <option value="hogshead"<?php if($toUnit == 'hogshead') { echo " selected"; } ?>>Hogs Heads</option>
            <option value="gallon"<?php if($toUnit == 'gallon') { echo " selected"; } ?>>Imperial Gallons</option>
            <option value="pint"<?php if($toUnit == 'pint') { echo " selected"; } ?>>Pints</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
