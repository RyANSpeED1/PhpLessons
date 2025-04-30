<?php

$_SESSION['username'] = "Ryan";
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-custom mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Tools Hub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="calculator.php">Calculator</a></li>
        <li class="nav-item"><a class="nav-link" href="calendar.php">Calendar</a></li>
        <li class="nav-item"><a class="nav-link" href="arrays.php">Arrays</a></li>
        <li class="nav-item"><a class="nav-link" href="conditionals.php">Conditionals</a></li>
        <li class="nav-item"><a class="nav-link" href="datatypes.php">Datatypes</a></li>
        <li class="nav-item"><a class="nav-link" href="functions.php">Functions</a></li>
        <li class="nav-item"><a class="nav-link" href="loops.php">Loops</a></li>
        <li class="nav-item"><a class="nav-link" href="operators.php">Operators</a></li>
        <li class="nav-item"><a class="nav-link" href="superglobals.php">Superglobals</a></li>
        <li class="nav-item"><a class="nav-link" href="contacts.php">Contacts</a></li>
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
        <li class="nav-item"><a class="nav-link" href="Register.php">Register</a></li>
      </ul>
    </div>
  </div>
</nav>


<?php

$_session ['username'] = "Ryan";
echo $_session['username'];
if (isset($_session['username'])) {
    echo "You are logged in.";
} else {
    echo "You are not logged in.";
}





?>
<nav>
    <?php if (isset($_SESSION["userid"])): ?>
        <p>Welcome, you are signed in!</p>
    <?php else: ?>
        <p>You are not signed in!</p>
    <?php endif; ?>
</nav>
