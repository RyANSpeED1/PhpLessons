<?php
// Connect to the database
$servername = "localhost";
$username = "root"; // default XAMPP/WAMP username
$password = ""; // default is empty for localhost
$database = "Phplessons"; // replace with your actual database name

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
<?php include_once 'includes/database.php'; ?>


<h2>Contact Us</h2>
<form method="post" action="">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Message:</label><br>
    <textarea name="message" required></textarea><br><br>

    <button type="submit" name="submit">Send</button>
</form>

</body>
</html>
