<?php
  if($_COOKIE['LoggedIn'] != 1) {
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create New Page</title>
</head>
<body>

<form action="new-page.php" method="POST">
  Page Title:<br>
  <input type="text" name="title"><br><br>
  Template:<br>
  <input type="text" name="template"><br><br>
  Head Content:<br>
  <textarea type="textarea" cols="50" rows ="10" name="head_content"></textarea><br><br>
  Headline:<br>
  <input type="text" name="headline"></input><br><br>
  Sub-headline:<br>
  <input type="text" name="subhead"></input><br><br>
  Form ID:<br>
  <input type="text" name="form_id"></input><br><br>
  Main Content:<br>
  <textarea type="textarea" cols="50" rows ="10" name="main_content"></textarea><br><br>
  Secondary Content:<br>
  <textarea type="textarea" cols="50" rows ="10" name="sec_content"></textarea><br><br>
  <input type="submit" value="Create New Page">
</form>

</body>
</html>
