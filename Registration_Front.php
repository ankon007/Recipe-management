<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Management - Registration</title>
    <style>
        /* Basic CSS for styling the registration form */
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
            color: #333;
        }
        .container {
            max-width: 400px;
            width: 100%;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.95);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #4CAF50;
            text-align: center;
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        .form-group input:focus {
            border-color: #4CAF50;
        }
        .form-group label {
            position: absolute;
            left: 14px;
            top: 12px;
            padding: 0 4px;
            background: rgba(255, 255, 255, 0.95);
            color: #888;
            font-size: 14px;
            pointer-events: none;
            transition: top 0.3s ease, font-size 0.3s ease, color 0.3s ease;
        }
        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: -8px;
            font-size: 12px;
            color: #4CAF50;
        }
        button {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Create an Account</h1>
        <form action="register.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder=" " required>
                <label for="name">Full Name</label>
            </div>
            <div class="form-group">
                <input type="text" name="id" id="id" placeholder=" " required>
                <label for="id">Unique ID</label>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" id="phone" placeholder=" " pattern="[0-9]{10}" required>
                <label for="phone">Phone Number</label>
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder=" " required>
                <label for="email">Email Address</label>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" placeholder=" " required>
                <label for="password">Password</label>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>

</body>
</html>
