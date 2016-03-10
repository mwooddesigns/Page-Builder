<?php
  if($_COOKIE['LoggedIn'] != 1) {
    header('Location: login.php');
  }

  include('./inc/connect.php');

  if(isset($_GET['u'])) {
    $user = $_GET['u'];
  } else if($_COOKIE['LoggedIn'] == 1) {
    $user = $_COOKIE['User'];
  }

  $sql = "SELECT * FROM pages INNER JOIN content ON pages.page_id=content.page_id";
  $result = $conn->query($sql);
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
  <a href="log-out.php">Log out</a><br>
  <a href="create-page.php">Add New</a>

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
    $result->data_seek(0);
    if($result->num_rows > 0) {
      while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $creator = $row['created_by'];
        if($row['created_by'] == $user) {$creator = "You";}
        echo "<tr>
        <td>{$row['page_id']}</td>
        <td><a href='page-preview.php?pid={$row['page_id']}'>{$row['page_title']}</a></td>
        <td>{$row['template']}</td>
        <td>{$row['form_id']}</td>
        <td>{$creator}</td>
        <td class='controls'><a href='page-editor.php?u=$user&pid={$row['page_id']}'><i class='fa fa-2x fa-pencil'></a></i><a href='delete-page.php?u=$user&pid={$row['page_id']}'><i class='fa fa-2x fa-trash'></i></a></td>
        </tr>";
      }
    }
  ?>
  </table>

</div>

<?php include('./inc/close.php'); ?>
