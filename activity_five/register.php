<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
            background-color: white;
            color: black;
            text-align: center;
        }

        h1 {
            color: black;
        }

        form {
            background-color: white;
            color: black;
            display: inline-block;
            padding: 30px;
            border: 1px solid black;
            margin: 20px;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Registration Page</h1>
    <form method="post" action="process_registration.php">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Register">
    </form>
</body>
</html>
