
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-light">
  <?php include 'includes/header.php'; ?>
  <?php include_once 'includes/database.php'; ?>
  <div class="container">
    <form method="get" class="mb-3">
      <div class="mb-3">
        <input type="text" name="person" class="form-control" placeholder="Enter name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
            $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            echo "User registered. <a href='login.php'>Login</a>";
        }
        ?>
        <form method="post">
            Username: <input name="username" required><br>
            Password: <input name="password" type="password" required><br>
            <button type="submit">Register</button>
        </form>
        <?php
        if (empty($_POST['username']) || empty($_POST['password'])) {
            echo "<p style='color:red;'>Please fill out all fields.</p>";
        } else {
            // existing code
        }
        ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
