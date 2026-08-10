<?php
$servername = "sql111.infinityfree.com";
$username = "if0_42401046";
$password = "YOUR_DATABASE_PASSWORD";
$dbname = "if0_42401046_studentsinfodb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
