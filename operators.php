<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Operators</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-light">
  <?php include 'includes/database.php';
include 'includes/header.php';
 ?>

  <div class="container">
    <?php
      echo 6**6 . "<br>"; // Arithmetic

      $x = 5;
      $x /= 10;
      echo $x . "<br>"; // Assignment

      $x = 5;
      $y = 10;
      echo ($x <> $y ? "True" : "False") . "<br>"; // Comparison

      $x = 5;
      echo $x-- . "<br>";
      echo $x . "<br>"; // Increment/Decrement

      $x = 5;
      $y = 10;
      if ($x == $y xor 1 == 1) {
        echo "True";
      }
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
