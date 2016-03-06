<?php

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$db = "page-builder";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mqli_connect_error());
} else {
    echo "Connection Successful!<br />";
}

?>
