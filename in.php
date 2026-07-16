<?php
include "db.php";

// Insert data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];

    if (!empty($name) && !empty($age)) {
        $stmt = $conn->prepare("INSERT INTO students (name, age, status) VALUES (?, ?, 0)");
        $stmt->bind_param("si", $name, $age);
        $stmt->execute();
        $stmt->close();

        header("Location: in.php");
        exit();
    }
}

// Get all records from database
$result = $conn->query("SELECT * FROM students ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Information Entry Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Students Information Entry Website</h1>

    <form method="POST" action="in.php" class="form">
        <input type="text" name="name" placeholder="Enter student name" required>
        <input type="number" name="age" placeholder="Enter age" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <h2>Students Records</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Toggle</th>
            </tr>
        </thead>

        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo htmlspecialchars($row["name"]); ?></td>
                    <td><?php echo $row["age"]; ?></td>
                    <td id="status-<?php echo $row["id"]; ?>">
                        <?php echo $row["status"]; ?>
                    </td>
                    <td>
                        <button class="toggle-btn" onclick="toggleStatus(<?php echo $row['id']; ?>)">
                            Toggle
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script src="script.js"></script>
</body>
</html>
