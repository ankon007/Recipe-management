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
            background: #f8f9fa;
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
            background-color: #fff;
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
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Recipe Management</h1>
        <p>Please choose your login type:</p>
        <a href="user_login.php" class="btn btn-user">Login as User</a>
        <a href="admin_login.php" class="btn btn-admin">Login as Admin</a>
    </div>

</body>
</html>
