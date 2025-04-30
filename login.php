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
           include 'includes/database.php';
           include 'includes/header.php';
           
           
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
               $username = $_POST['username'];
               $password = $_POST['password'];
           
               $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
               $stmt->bind_param("s", $username);
               $stmt->execute();
               $stmt->store_result();
               
               if ($stmt->num_rows > 0) {
                   $stmt->bind_result($id, $hashed);
                   $stmt->fetch();
                   if (password_verify($password, $hashed)) {
                       $_SESSION["userid"] = $id;
                       header("Location: dashboard.php");
                       exit();
                   }
               }
               echo "Invalid login";
           }
           ?>
           <form method="post">
               Username: <input name="username" required><br>
               Password: <input name="password" type="password" required><br>
               <button type="submit">Login</button>
           </form>
        ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
