<?php

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$db = "page-builder";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connection Successful!<br />";
}

?>
