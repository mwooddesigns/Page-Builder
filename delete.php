<?php
  $user = $_COOKIE['User'];
  $page_id = $_GET['pid'];

  include('./inc/connect.php');

  $sql = "SELECT *  FROM pages INNER JOIN content ON pages.page_id=content.page_id WHERE pages.page_id = '$page_id'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
      while($row = $result->fetch_array(MYSQLI_ASSOC)) {
          $check_user = $row['created_by'];
      }
  }

  echo "$user<br />";
  echo "$check_user<br />";

  if ($user == $check_user) {
    $sql = "DELETE FROM pages WHERE page_id=$page_id";
    $result = $conn->query($sql);
    $sql = "DELETE FROM content WHERE page_id=$page_id";
    $result = $conn->query($sql);
    header("Location: index.php");
  } else {
    header("Location: index.php?e=2");
  }

  include('./inc/close.php');
?>
