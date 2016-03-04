<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = @mysql_connect($servername, $username, $password);
//Choose database
@mysql_select_db("marketing_hub");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
