<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Calendar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-light">
  <?php include 'includes/database.php';
include 'includes/header.php';
 ?>

  <div class="container">
    <?php
      $dayofweek = date("N");
      switch ($dayofweek) {
        case 1: echo "Today is Monday!"; break;
        case 2: echo "Today is Tuesday!"; break;
        case 3: echo "Today is Wednesday!"; break;
        case 4: echo "Today is Thursday!"; break;
        case 5: echo "Today is Friday!"; break;
        case 6: echo "Today is Saturday!"; break;
        case 7: echo "Today is Sunday!"; break;
        default: echo "Unknown day of the week.";
      }
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
