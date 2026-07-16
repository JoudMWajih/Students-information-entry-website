<?php
$servername = "sql111.infinityfree.com"; 
$username = "if0_42401046";
$password = "nYqOkaDVxPRoZ6p";
$dbname = "if0_42401046_ibnfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
  $name = $_POST["name"];
  $age = $_POST["age"];

  $sql = "INSERT INTO students (name, age, status)
          VALUES ('$name', '$age', 0)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Students Information Entry Website</title>
</head>
<body>

  <h1 style="text-align:center;">Students Information Entry Website</h1>

  <form method="POST" action="in.php" style="text-align:center;">
    <input type="text" name="name" placeholder="Enter student name" required>
    <input type="number" name="age" placeholder="Enter age" required>
    <button type="submit" name="submit">Submit</button>
  </form>

</body>
</html>

<?php
$conn->close();
?>

