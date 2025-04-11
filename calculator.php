<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-light">
  <?php include 'includes/header.php'; ?>

  <div class="container">
    <h3 class="mb-4">Simple Calculator</h3>
    <form method="get" class="row g-3 mb-4">
      <div class="col-md-4">
        <input type="number" name="num1" class="form-control" placeholder="First number" required>
      </div>
      <div class="col-md-4">
        <input type="number" name="num2" class="form-control" placeholder="Second number" required>
      </div>
      <div class="col-md-4">
        <select name="operator" class="form-select" required>
          <option value="">Choose operation</option>
          <option value="add">Add (+)</option>
          <option value="subtract">Subtract (−)</option>
          <option value="multiply">Multiply (×)</option>
          <option value="divide">Divide (÷)</option>
        </select>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Calculate</button>
      </div>
    </form>

    <?php
      if (isset($_GET['num1'], $_GET['num2'], $_GET['operator'])) {
        $a = (float) $_GET['num1'];
        $b = (float) $_GET['num2'];
        $op = $_GET['operator'];
        switch ($op) {
          case "add": $result = $a + $b; break;
          case "subtract": $result = $a - $b; break;
          case "multiply": $result = $a * $b; break;
          case "divide": $result = $b != 0 ? $a / $b : "Cannot divide by zero"; break;
          default: $result = "Invalid operator.";
        }
        echo "<div class='alert alert-info'><strong>Result:</strong> $result</div>";
      }
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
