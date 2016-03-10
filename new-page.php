<?php
  $user = $_COOKIE['User'];
  $title = $_POST['title'];
  $template = $_POST['template'];
  $head = $_POST['head_content'];
  $headline = $_POST['headline'];
  $subhead = $_POST['subhead'];
  $form_id = $_POST['form_id'];
  $main_content = $_POST['main_content'];
  $sec_content = $_POST['sec_content'];

  echo "$user<br />";
  echo "$title<br />";
  echo "$template<br />";
  echo "$head<br />";
  echo "$headline<br />";
  echo "$subhead<br />";
  echo "$form_id<br />";
  echo "$main_content<br />";
  echo "$sec_content<br />";

  include('./inc/connect.php');

  $sql = "INSERT INTO pages (page_title, template, created_by, head_content) VALUES($title, $template, $user, $head)";
  $result = $conn->query($sql);

  include('./inc/close.php');
?>
