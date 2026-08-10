<?php
include 'db.php';

if (!isset($_POST['id'])) {
    echo "No ID";
    exit();
}

$id = intval($_POST['id']);

$result = $conn->query("SELECT status FROM students WHERE id = $id");

if (!$result) {
    echo "SQL Error";
    exit();
}

if ($result->num_rows == 0) {
    echo "Not Found";
    exit();
}

$row = $result->fetch_assoc();

if ($row['status'] == 0) {
    $newStatus = 1;
} else {
    $newStatus = 0;
}

$update = $conn->query("UPDATE students SET status = $newStatus WHERE id = $id");

if ($update) {
    echo $newStatus;
} else {
    echo "Update Error";
}

$conn->close();
?>
