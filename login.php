<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Login</title>

  <link rel="stylesheet" href="css/login.css">
</head>
<body>

  <div class="form-container">

      <?php
        if($_GET["e"]==1) {
            echo '<p class="login-error">Please enter a valid username and password.</p>';
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
