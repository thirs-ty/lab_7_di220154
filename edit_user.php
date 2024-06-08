<?php
require_once 'database.php';

$matric = $_POST['matric'];
$name = $_POST['name'];
$role = $_POST['role'];

$query = "UPDATE users SET name = '$name', role = '$role' WHERE matric = '$matric'";

if ($conn->query($query) === TRUE) {
    echo "User updated successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

header("Location: read_users.php");
exit();
?>
