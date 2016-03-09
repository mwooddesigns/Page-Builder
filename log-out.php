<?php
  setcookie("LoggedIn", 1, time()-3600);
  setcookie("User", $user_name, time()-3600);
  header('Location: login.php');
?>
