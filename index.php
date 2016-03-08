<?php
  if($_COOKIE['LoggedIn'] != 1) {
    header('Location: login.php');
  }

  include('./inc/connect.php');

  $user = $_GET['u'];

  $sql = "SELECT * FROM pages INNER JOIN content ON pages.page_id=content.page_id";
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>

  <?php include('./inc/file-links.php'); ?>

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
      <th>Controls</th>
    </tr>

  <?php
    mysqli_data_seek($result, 0);
    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $creator = $row['created_by'];
        if($row['created_by'] == $user) {$creator = "You";}
        echo "<tr>
        <td>{$row['page_id']}</td>
        <td><a href='page-preview.php?pid={$row['page_id']}'>{$row['page_title']}</a></td>
        <td>{$row['template']}</td>
        <td>{$row['form_id']}</td>
        <td>{$creator}</td>
        <td class='controls'><i class='fa fa-2x fa-pencil'></i><i class='fa fa-2x fa-trash'></i></td>
        </tr>";
      }
    }
  ?>
  </table>

</div>

<?php include('./inc/close.php'); ?>
