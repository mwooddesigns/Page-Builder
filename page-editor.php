<?php
  if($_COOKIE['LoggedIn'] != 1) {
    header('Location: login.php');
  }

  include('./inc/connect.php');

  $user = $_GET['u'];
  $page_id = $_GET['pid'];

  $sql = "SELECT *  FROM pages INNER JOIN content ON pages.page_id=content.page_id WHERE pages.page_id = '$page_id'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
      while($row = $result->fetch_array(MYSQLI_ASSOC)) {
          $page_template = $row['template'];
          $form_id = $row['form_id'];
          $head = $row['head_content'];
          $page_title = $row['page_title'];
          $headline = $row['headline'];
          $subhead = $row['subhead'];
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

    <?php include('./inc/file-links.php'); ?>

    <link rel="stylesheet" href="./css/site.css">
  </head>

  <body>
    <div class="container">
      <h1>You are editing <?php echo $page_title; ?> as <?php echo $user; ?></h1>
      <form action="update.php" method="POST">
        Page Title:
        <br>
        <input type="text" name="title" value="<?php echo $page_title; ?>">
        <br>
        <br> Template:
        <br>
        <input type="text" name="template" value="<?php echo $page_template; ?>">
        <br>
        <br> Head Content:
        <br>
        <textarea type="textarea" cols="50" rows="10" name="head_content" value="<?php echo $head; ?>"></textarea>
        <br>
        <br> Headline:
        <br>
        <input type="text" name="headline" value="<?php echo $headline; ?>"></input>
        <br>
        <br> Sub-headline:
        <br>
        <input type="text" name="subhead" value="<?php echo $subhead; ?>"></input>
        <br>
        <br> Form ID:
        <br>
        <input type="text" name="form_id"></input>
        <br>
        <br> Main Content:
        <br>
        <textarea type="textarea" cols="50" rows="10" name="main_content"></textarea>
        <br>
        <br> Secondary Content:
        <br>
        <textarea type="textarea" cols="50" rows="10" name="sec_content"></textarea>
        <br>
        <br>
        <input type="submit" value="Create New Page">
      </form>
    </div>

    <script>
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      // CKEDITOR.replace('head_content');
      CKEDITOR.replace('main_content');
      CKEDITOR.replace('sec_content');
    </script>
  </body>

  </html>

  <?php include('./inc/close.php'); ?>
