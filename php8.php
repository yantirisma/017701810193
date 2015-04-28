<?php
/*Contoh Aritmatika Bersarang */
$x = 2;
$y = 14;
$z = 3;

$x = $y + 2 * $z;
$y = $x % 3;
$z = (20 + $z) / 5;

echo "nilai x = " . $x;
echo "<br> nilai y = " . $y;
echo "<br> nilai z = " . $z;
?>