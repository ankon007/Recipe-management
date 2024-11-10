<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Categories</title>
    <style>
        /* Basic styling for the category page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('background.jpg') no-repeat center center fixed;
        
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            color: #333;
        }
        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            background: rgba(255, 255, 255, 0.8);
            padding: 10px 20px;
            border-radius: 8px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            max-width: 800px;
            width: 100%;
            padding: 20px;
        }
        .card {
            width: 180px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            background-color: #f5f5f5;
        }
        /* Individual card backgrounds */
        .breakfast { background: linear-gradient(to bottom right, #FFD700, #FFB347); }
        .lunch { background: linear-gradient(to bottom right, #4CAF50, #81C784); }
        .dinner { background: linear-gradient(to bottom right, #FF5722, #FF8A65); }
        .dessert { background: linear-gradient(to bottom right, #9C27B0, #CE93D8); }
    </style>
</head>
<body>

    <h1>Select a Category</h1>
    <div class="container">
        <a href="breakfast.php" class="card breakfast">Breakfast</a>
        <a href="lunch.php" class="card lunch">Lunch</a>
        <a href="dinner.php" class="card dinner">Dinner</a>
        <a href="dessert.php" class="card dessert">Dessert</a>
    </div>

</body>
</html>
