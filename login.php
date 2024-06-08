<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .login-container {
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

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Button Animation */
        }

        .login-button:hover {
            background-color: #2980b9; /* Button Hover Color */
        }

        .register-link {
            display: inline-block;
            background-color: #2ecc71; /* Register Button Color */
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Button Animation */
            text-decoration: none;
        }

        .register-link:hover {
            background-color: #27ae60; /* Register Button Hover Color */
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error-message'>" . htmlspecialchars($_GET['error']) . "</p>";
        }
        ?>
        <form action="authenticate.php" method="POST">
            <label for="matric">Matric:</label>
            <input type="text" name="matric" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <input type="submit" class="login-button" value="Login">
        </form>
        <a href="create_user.php" class="register-link">Register</a>
    </div>
</body>
</html>
