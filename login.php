<?php
  if($_COOKIE['LoggedIn'] == 1) {
    header('Location: index.php');
  }

  include('./inc/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Login</title>

  <?php include('./inc/file-links.php'); ?>

  <link rel="stylesheet" href="./css/site.css">
</head>
<body>

  <div class="form-container">

      <?php
        if(isset($_GET["e"])) {
          if($_GET["e"]==1) {
            echo '<p class="login-error">Please enter a valid username and password.</p>';
          }
        }
      ?>

    <form action="auth_login.php" method="POST">
        <h2>Login</h2>
      Username:<br>
      <input type="text" name="user_name"><br><br>
      Password:<br>
      <input type="password" name="user_pass"><br><br>
      <input type="submit" value="Login">
    </form>
  </div>

</body>
</html>
