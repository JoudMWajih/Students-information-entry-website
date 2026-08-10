<?php
$servername = "sql111.infinityfree.com";
$username = "if0_42401046";
$password = "nYqOkaDVxPRoZ6p";
$dbname = "if0_42401046_XXX";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

$result = $conn->query("SELECT status FROM students WHERE id = $id");
$row = $result->fetch_assoc();

if ($row['status'] == 0) {
    $newStatus = 1;
} else {
    $newStatus = 0;
}

$conn->query("UPDATE students SET status = $newStatus WHERE id = $id");

echo $newStatus;

$conn->close();
?>
