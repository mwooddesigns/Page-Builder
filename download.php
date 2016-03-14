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

  $files_to_download = array(
    './downloads/index.html',
    './downloads/style.css'
  );

  create_zip($files_to_download, 'downloads/download.zip');

  // http headers for zip downloads
  header("Pragma: public");
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header("Cache-Control: public");
  header("Content-Description: File Transfer");
  header("Content-type: application/octet-stream");
  header("Content-Disposition: attachment; filename='download.zip'");
  header("Content-Transfer-Encoding: binary");
  // header("Content-Length: ".filesize('downloads/download.zip'));
  // ob_end_flush();
  // @readfile('downloads/download.zip');

  //Force download of html file
  $fp = fopen('downloads/download.zip',"r");
  fpassthru($fp);
  fclose($fp);

  include('./inc/close.php');
?>
