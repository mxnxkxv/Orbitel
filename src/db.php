<?php

$servername = "orbitel";
$username = "root";
$password = "";
$dbname = "orbitel";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>