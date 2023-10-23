<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "users";


$connection = mysqli_connect($host, $username, $password, $database);


if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($connection, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    
    
    mysqli_close($connection);
}
?>
