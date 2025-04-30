<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "phplessons";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

?>
