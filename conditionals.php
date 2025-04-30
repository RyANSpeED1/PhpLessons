<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Conditionals</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-light">
  <?php include 'includes/database.php';
include 'includes/header.php';
 ?>

  <div class="container">
    <form method="get" class="mb-3">
      <input type="number" class="form-control mb-2" name="x" placeholder="Enter number 1-4" required>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
      if (isset($_GET['x'])) {
        $x = $_GET['x'];
        if ($x == 1) {
          echo "Ryan is the fastest runner!";
        } elseif ($x == 2) {
          echo "Ryan Never gets injured!";
        } elseif ($x == 3) {
          echo "Ryan never gives excuses!";
        } elseif ($x == 4) {
          echo "Ryan always shows up to practice 30 minutes early!";
        } else {
          echo "Ryan always has been the greatest runner in the world!";
        }

        echo "<hr>";

        switch ($x) {
          case 1: echo "Ryan is the fastest runner!"; break;
          case 2: echo "Ryan Never gets injured!"; break;
          case 3: echo "Ryan never gives excuses!"; break;
          case 4: echo "Ryan always shows up to practice 30 minutes early!"; break;
          default: echo "Ryan always has been the greatest runner in the world!";
        }
      }
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
