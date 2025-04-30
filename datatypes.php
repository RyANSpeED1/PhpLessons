<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Datatypes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-light">
  <?php include 'includes/database.php';
include 'includes/header.php';
 ?>

  <div class="container">
    <?php
      $name = "Running is hard"; // string
      $name = 5; // integer
      $name = 5.5; // float
      $names = array("Madison", "Academic", "Track"); // array
      echo $names[2]; // outputs: Track
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
