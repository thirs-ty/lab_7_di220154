<?php
session_start();
require_once 'database.php';

$matric = $_POST['matric'];
$password = $_POST['password'];

$query = "SELECT password FROM users WHERE matric = '$matric'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['matric'] = $matric;
        header("Location: read_users.php");
        exit();
    } else {
        $error = "Invalid password.";
        header("Location: login.php?error=" . urlencode($error));
        exit();
    }
} else {
    $error = "No user found with that matric.";
    header("Location: login.php?error=" . urlencode($error));
    exit();
}

$conn->close();
?>
