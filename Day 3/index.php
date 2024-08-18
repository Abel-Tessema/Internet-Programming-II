<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "testdb";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}

echo "Connected successfullyyyyy.";