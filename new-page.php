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

  $sql = "INSERT INTO pages (page_title, template, created_by, head_content) VALUES('$title', '$template', '$user', '$head')";
  $result = $conn->query($sql);

  $page_id = mysqli_insert_id($conn);

  $sql = "INSERT INTO content (page_id, form_id, headline, subhead, content_one, content_two) VALUES ($page_id,$form_id,'$headline','$subhead','$main_content', '$sec_content')";
  $result = $conn->query($sql);

  echo $page_id;

  header("Location: page-preview.php?pid=$page_id");

  include('./inc/close.php');
?>
