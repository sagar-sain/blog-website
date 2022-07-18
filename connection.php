<?php

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbName = 'blog';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "";
}


?>