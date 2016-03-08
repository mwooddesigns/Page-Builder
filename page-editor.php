<?php
  include('./inc/connect.php');

  $user = $_GET['u'];
  $page_id = $_GET['pid'];

  $sql = "SELECT *  FROM pages INNER JOIN content ON pages.page_id=content.page_id WHERE pages.page_id = '$page_id'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          $page_template = $row['template'];
          $form_id = $row['form_id'];
          $page_title = $row['page_title'];
          $main_head = $row['headline'];
          $main_subhead = $row['subhead'];
          $content_one = $row['content_one'];
          $content_two = $row['content_two'];
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Page Editor</title>
</head>
<body>
  <h1>You are editing <?php echo $page_title; ?> as <?php echo $user; ?></h1>
</body>
</html>

<?php include('./inc/close.php'); ?>
