<?php
require_once 'database.php';

if (isset($_GET['matric'])) {
    $matric = $_GET['matric'];
    $query = "SELECT matric, name, role FROM users WHERE matric = '$matric'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $role = $row['role'];
    } else {
        header("Location: read_users.php");
        exit();
    }
} else {
    header("Location: read_users.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
            color: #333; /* Text color */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            width: 80%;
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Update User</h2>
    <form action="edit_user.php" method="POST">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" value="<?php echo $matric; ?>" readonly><br>
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required><br>
        <label for="role">Role:</label>
        <select name="role" required>
            <option value="student" <?php if ($role == "student") echo "selected"; ?>>Student</option>
            <option value="lecturer" <?php if ($role == "lecturer") echo "selected"; ?>>Lecturer</option>
        </select><br>
        <input type="submit" value="Update">
    </form>
    <a href="read_users.php">Cancel</a>
</body>
</html>
