<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Anything</title>
</head>
<body>
<?php
   //arithmetic operators
   echo 6**6;

?>
<?php
   //assignment operators
   $x = 5;
   $x /= 10;
   echo $x;
?>
<?php
   //comparison operators
   $x = 5;
   $y = 10;
   if ($x <> $y) {
       echo "True";
   }
    else {
       echo "False";
   }
?>
<?php
   //increment/decrement operators
   $x = 5;
   echo $x--;
   echo $x;
?>
<?php
   //logical operators
   $x = 5;
   $y = 10;
   if ($x == $y xor 1 == 1) {
       echo "True";
   }
?>
</body>
</html>