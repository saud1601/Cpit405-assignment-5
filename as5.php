<?php

// WARNING: NEVER DO THIS IN PRODUCTION
$servername = "localhost";
$username = "saud1601";
$password = "";
$database = "car";

$conn = new mysqli($servername, $username, $password, $database);

// check the connection
if ($conn->connect_error) {
    // exit and kill this process
    echo "Failed to connect to database!";
    die("Connection failed: ");
}

?>
