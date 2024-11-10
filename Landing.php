<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Management - Landing Page</title>
    <style>
        /* Basic CSS for styling the landing page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent background */
        }
        h1 {
            color: #333;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn-user {
            background-color: #4CAF50;
        }
        .btn-admin {
            background-color: #2196F3;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .register-link {
            margin-top: 20px;
            font-size: 14px;
        }
        .register-link a {
            color: #007bff;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Recipe Management</h1>
        <p>Please choose your login type:</p>
        <a href="Login_Front.php" class="btn btn-user">Login as User</a>
        <a href="Login_Front.php" class="btn btn-admin">Login as Admin</a>
        <div class="register-link">
            <p>Not registered yet? <a href="Registration_Front.php">Register here</a></p>
        </div>
    </div>

</body>
</html>
