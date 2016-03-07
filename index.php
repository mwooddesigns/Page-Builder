<?php
  if($_COOKIE['LoggedIn'] != 1) {
    header('Location: login.php');
  }
  echo "<h1>Dashboard</h1>";
?>
