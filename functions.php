<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Functions</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-light">
  <?php include 'includes/header.php'; ?>

  <div class="container">
    <form method="get" class="mb-3">
      <div class="mb-3">
        <input type="text" name="person" class="form-control" placeholder="Enter name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
      function newCalc($x) {
        $newr = $x * 2;
        echo "The new number is: " . $newr . "<br>";
      }

      $x = 5;
      newCalc($x);

      $a = 6;
      newCalc($a);
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
