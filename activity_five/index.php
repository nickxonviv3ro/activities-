<!DOCTYPE html>
<html>
<head>
    <title>Navigation Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .topnav {
            background-color: #000; 
            overflow: hidden;
        }

        .topnav a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .topnav a:hover {
            background-color: #005a8d;
        }

        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="topnav">
        <a href="login.php">Login</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="register.php">Register</a>
    </div>

    <h1>Navigation Page</h1>
</body>
</html>
