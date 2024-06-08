<?php
require_once 'database.php';

$matric = $_POST['matric'];
$name = $_POST['name'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$role = $_POST['role'];

$query = "INSERT INTO users (matric, name, password, role) VALUES ('$matric', '$name', '$password', '$role')";

if ($conn->query($query) === TRUE) {
    echo "User created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

header("Location: read_users.php");
exit();
?>
