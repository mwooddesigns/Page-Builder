<?php
  include('./inc/connect.php');

  $user = $_GET['u'];
  $page_id = $_GET['pid'];

  $sql = "SELECT *  FROM pages INNER JOIN content ON pages.page_id=content.page_id WHERE pages.page_id = '$page_id'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
      while($row = $result->fetch_array(MYSQLI_ASSOC)) {
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
  <title>Delete Page</title>
</head>
<body>

</body>
</html>

<?php include('./inc/close.php'); ?>
