<?php
  include('inc/connect.php');

  $user_name = $_POST["user_name"];
  $user_pass = $_POST["user_pass"];

  if($user_name != "" && $user_pass != "") {
    echo "Received info.";
    $_POST["user_name"] = "";
    $_POST["user_pass"] = "";
  } else {
    $_POST["login_error"] = true;
    header('Location: login.php');
  }
?>
