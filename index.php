<?php
  if($_COOKIE['LoggedIn'] != 1) {
    header('Location: login.php');
  }

  include('./inc/connect.php');

  $user = $_GET['u'];

  $sql = "SELECT * FROM pages";
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>

  <link rel="stylesheet" href="./css/site.css">
</head>
<body>

</body>
</html>

<div class="container" id="dashboard">

  <h1>Dashboard</h1>

  <h2>Pages</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Template</th>
      <th>Form ID</th>
      <th>Creator</th>
    </tr>

  <?php
    mysqli_data_seek($result, 0);
    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>{$row['page_id']}</td>
        <td><a href='page-preview.php?pid={$row['page_id']}'>{$row['page_title']}</a></td>
        <td>{$row['template']}</td>
        <td>{$row['form_id']}</td>
        <td>{$row['created_by']}</td>
        </tr>";
      }
    }
  ?>
  </table>

</div>

<?php include('./inc/close.php'); ?>
