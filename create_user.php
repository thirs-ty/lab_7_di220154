<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right, #2980b9, #2c3e50); /* Gradient Background */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 300px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #fff;
            margin-bottom: 20px;
        }

        .create-user-heading {
            font-size: 24px;
            color: #3498db; /* Color for Create User Text */
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Button Animation */
        }

        input[type="submit"]:hover {
            background-color: #2980b9; /* Button Hover Color */
        }

    </style>
</head>
<body>
    <div class="form-container">
        
        <h3 class="create-user-heading">Create User</h3>
        <form action="insert_user.php" method="POST">
            <label for="matric">Matric:</label>
            <input type="text" name="matric" required><br>
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <label for="role">Role:</label>
            <select name="role" required>
                <option value="">Please select</option>
                <option value="student">Student</option>
                <option value="lecturer">Lecturer</option>
            </select><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
