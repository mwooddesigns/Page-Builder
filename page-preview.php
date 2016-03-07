<?php
  include('inc/connect.php');

  $page_id = $_GET['pid'];

  $sql = "SELECT * FROM pages WHERE page_id = '$page_id'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          $page_template = $row['template'];
          $form_id = $row['form_id'];
          $page_title = $row['page_title'];
          $main_head = $row['headline'];
          $main_subhead = $row['subhead'];
          $content = $row['main_content'];
          $sub_content = $row['sub_content'];
      }
  }

  include("./templates/$page_template");

  include('inc/close.php');
?>
