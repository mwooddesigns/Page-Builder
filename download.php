<?php

  include('./inc/functions.php');
  include('./inc/connect.php');

  $page_id = $_GET['pid'];

  $sql = "SELECT * FROM pages WHERE page_id='$page_id'";
  $result = $conn->query($sql);

  $result->data_seek(0);
  if($result->num_rows > 0) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $template = $row['template'];
      $title = $row['page_title'];
    }
  }

  //Begin file handling for HTML
  //Link to page to download
  $url = "http://localhost/page-builder/page-preview.php?pid=$page_id";

  //Grab HTML from page preview
  $data = file_get_contents($url);

  //Filepath for HTML file on server
  $filename = "downloads/index.html";

  //Save HTML file
  $fh1 = fopen($filename,"w");
  fwrite($fh1,$data);
  fclose($fh1);

  //Begin file handling for download zip
  //Link to css file for page
  $css = "http://localhost/page-builder/templates/$template/style.css";

  $data = file_get_contents($css);

  $filename = "downloads/style.css";

  $fh2 = fopen($filename,"w");
  fwrite($fh2, $data);
  fclose($fh2);

  echo $css;

  $files = array('downloads/index.html','downloads/style.css');

  # create new zip opbject
  $zip = new ZipArchive();

  # create a temp file & open it
  $tmp_file = tempnam('.','');
  $zip->open($tmp_file, ZipArchive::CREATE);

  # loop through each file
  foreach($files as $file){

      # download file
      $download_file = file_get_contents($file);

      #add it to the zip
      $zip->addFromString(basename($file),$download_file);

  }

  # close zip
  $zip->close();

  if (headers_sent())
  {
      // HTTP header has already been sent
      return false;
  }
  // clean buffer(s)
  while (ob_get_level() > 0)
  {
      ob_end_clean();
  }

  # send the file to the browser as a download
  ob_start();
  header($_SERVER['SERVER_PROTOCOL'].' 200 OK');
  header('Content-disposition: attachment; filename=' . $title . '.zip');
  header('Content-type: application/zip');
  header("Content-Transfer-Encoding: Binary");
  header('Pragma: no-cache');
  header("Content-Length: ".filesize($tmp_file));
  ob_flush();
  ob_clean();
  readfile($tmp_file);
  unlink($tmp_file);
  unlink("downloads/index.html");
  unlink("downloads/style.css");

  include('./inc/close.php');
?>
