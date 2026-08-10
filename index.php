<?php
$servername = "sql111.infinityfree.com";
$username = "if0_42401046";
$password = "nYqOkaDVxPRoZ6p";
$dbname = "if0_42401046_studentsinfodb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];

    $sql = "INSERT INTO students (name, age, status) VALUES ('$name', '$age', 0)";
    $conn->query($sql);

    header("Location: index.php");
    exit();
}

$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Information Database</h2>

<form method="GET" action="index.php">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Age:</label>
    <input type="number" name="age" required>

    <button type="submit">Submit</button>
</form>

<br>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td id="status-<?php echo $row['id']; ?>"><?php echo $row['status']; ?></td>
        <td>
            <button type="button" onclick="toggleStatus(<?php echo $row['id']; ?>)">Toggle</button>
        </td>
    </tr>
    <?php } ?>
</table>

<script src="script.js"></script>

</body>
</html>
