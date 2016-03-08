<?php
  include('inc/connect.php');

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

  include("./templates/$page_template/template.php");

  include('inc/close.php');
?>
