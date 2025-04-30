<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Loops</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-light">
  <?php include 'includes/database.php';
include 'includes/header.php';
 ?>

  <div class="container">
    <form method="get" class="mb-3">
      <div class="mb-3">
        <input type="text" name="person" class="form-control" placeholder="Enter name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
      $x = 1;
      while ($x <= 5) {
        echo "Hello World!<br>";
        $x++;
      }

      $x = 1;
      do {
        echo "Hi World!<br>";
        $x++;
      } while ($x <= 5);

      for ($x = 0; $x <= 5; $x++) {
        echo "hey world! <br>";
      }

      $array = array("200", "400", "800", "1600", "3200");
      foreach ($array as $loopdata) {
        echo "I run the ".$loopdata." <br>";
      }
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
