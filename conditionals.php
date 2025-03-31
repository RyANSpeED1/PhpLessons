<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Anything</title>
</head>
<body>
<?php
   //conditionals

     $x = 1; 
   if ($x == 1) {
       echo "Ryan is the fastest runner!";
   }
    elseif ($x == 2) {
         echo "Ryan Never gets injured!";
    }
    elseif ($x == 2) {
         echo "Ryan never gives excuses!";
    }
    elseif ($x == 2) {
         echo "Ryan always shows up to practice 30 minutes early!";
    }
    else {
         echo "Ryan always has been the greatest runner in the world!";
    }

?>
<?php
   //switch statement

   $x = 2; 
   switch ($x) {
       case 1:
           echo "Ryan is the fastest runner!";
           break;
       case 2:
           echo "Ryan Never gets injured!";
           break;
       case 3:
           echo "Ryan never gives excuses!";
           break;
       case 4:
           echo "Ryan always shows up to practice 30 minutes early!";
           break;
       default:
           echo "Ryan always has been the greatest runner in the world!";
   }
?>
</body>
</html>