<?php
require_once 'database.php';

if (isset($_GET['matric'])) {
    $matric = $_GET['matric'];
    $query = "DELETE FROM users WHERE matric = '$matric'";

    if ($conn->query($query) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();

header("Location: read_users.php");
exit();
?>
