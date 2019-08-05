<?php

//database connectie
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "fb_clone";

$connection = new mysqli($serverName, $username, $password, $dbName);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($connection, $_POST["username"]);
        $password = mysqli_real_escape_string($connection, $_POST["password"]);

        $sql = "INSERT INTO user (
            username,
            password
        ) VALUES (
            '$username',
            '$password'
        )";

        $query = mysqli_query($connection, $sql);

        header("Location: not_found.html?404");
    }
}
