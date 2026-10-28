<?php
// OPERATOR BITWISE
// Operator bitwise digunakan untuk melakukan operasi pada level bit. Operator bitwise yang umum digunakan antara

$x = 14;
$y = 8;
 
// bitwise AND
$z = $x & $y;
echo "$x & $y = $z";
echo "<br>";
 
// bitwise OR
$z = $x | $y;
echo "$x | $y = $z";
echo "<br>";
 
// bitwise XOR
$z = $x ^ $y;
echo "$x ^ $y = $z";
echo "<br>";
 
// Shift Left
$z = $x << $y;
echo "$x << $y = $z";
echo "<br>";
 
// Shift Right
$z = $x >> $y;
echo "$x >> $y = $z";
echo "<br>";
 
?>