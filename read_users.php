<?php
session_start();
if (!isset($_SESSION['matric'])) {
    header("Location: login.php");
    exit();
}
require_once 'database.php';

$query = "SELECT matric, name, role FROM users";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .action-column {
            width: 100px;
        }

        .button-container {
            text-align: right;
            margin-bottom: 20px;
        }

        .button-container a {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <a href="create_user.php">Create User</a>
        <a href="logout.php">Logout</a>
    </div>
    <h2>Users List</h2>
    <table>
        <tr>
            <th>Matric</th>
            <th>Name</th>
            <th>Role</th>
            <th class="action-column">Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row["matric"]) . "</td>
                        <td>" . htmlspecialchars($row["name"]) . "</td>
                        <td>" . htmlspecialchars($row["role"]) . "</td>
                        <td class='action-column'>
                            <a href='update_user.php?matric=" . $row["matric"] . "'>Update</a>
                            <a href='delete_user.php?matric=" . $row["matric"] . "' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
