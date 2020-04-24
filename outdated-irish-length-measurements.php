<?php

include_once('includes/functions.php');

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
  $toValue = convert_length($fromValue, $fromUnit, $toUnit);
}

?>
    <?php $pageTitle = 'Irish Measurements'; ?>
    <?php include_once('includes/header.php'); ?>
    <div id="main-content">

      <h1>Convert Outdated Irish Length Measurements</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $fromValue; ?>" />&nbsp;
          <select name="from_unit">
            <option value="grain"<?php if($fromUnit == 'grain') { echo " selected"; } ?>>Grain</option>
            <option value="thumb-length"<?php if($fromUnit == 'thumb-length') { echo " selected"; } ?>>Thumb-Length</option>
            <option value="palm"<?php if($fromUnit == 'palm') { echo " selected"; } ?>>Palm</option>
            <option value="fist"<?php if($fromUnit == 'fist') { echo " selected"; } ?>>Fist</option>
            <option value="foot"<?php if($fromUnit == 'foot') { echo " selected"; } ?>>Foot</option>
            <option value="step"<?php if($fromUnit == 'step') { echo " selected"; } ?>>Step</option>
            <option value="double-step"<?php if($fromUnit == 'double-step') { echo " selected"; } ?>>Double-Step</option>
            <option value="rod"<?php if($fromUnit == 'rod') { echo " selected"; } ?>>Rod</option>
            <option value="centimeter"<?php if($fromUnit == 'centimeter') { echo " selected"; } ?>>Centimeters</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $toValue; ?>" />&nbsp;
          <select name="to_unit">
            <option value="grain"<?php if($toUnit == 'grain') { echo " selected"; } ?>>Grain</option>
            <option value="thumb-length"<?php if($toUnit == 'thumb-length') { echo " selected"; } ?>>Thumb-Length</option>
            <option value="palm"<?php if($toUnit == 'palm') { echo " selected"; } ?>>Palm</option>
            <option value="fist"<?php if($toUnit == 'fist') { echo " selected"; } ?>>Fist</option>
            <option value="foot"<?php if($toUnit == 'foot') { echo " selected"; } ?>>Foot</option>
            <option value="step"<?php if($toUnit == 'step') { echo " selected"; } ?>>Step</option>
            <option value="double-step"<?php if($toUnit == 'double-step') { echo " selected"; } ?>>Double-Step</option>
            <option value="rod"<?php if($toUnit == 'rod') { echo " selected"; } ?>>Rod</option>
            <option value="centimeter"<?php if($toUnit == 'centimeter') { echo " selected"; } ?>>Centimeters</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
    <?php include_once('includes/footer.php'); ?>
  