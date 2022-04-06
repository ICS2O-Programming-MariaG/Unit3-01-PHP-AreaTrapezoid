<?php
  $height = floatval($_POST["height"]);
  $sideA = floatval($_POST["side-a"]);
  $sideB = floatval($_POST["side-b"]);
  $sumOfSides = $sideA + $sideB;
  $area = number_format($sumOfSides / 2 * $height, 2);
?>

The area of the trapezoid is <?php echo "$area"; ?> cm<sup>2</sup>.