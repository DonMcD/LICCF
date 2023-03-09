<?php
if (isset($_FILES['file'])) {
  $file_name = "receipt template.xlsx";
  $file_tmp = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

  $allowed_ext = array('xlsx');

  if (in_array($file_ext, $allowed_ext)) {
    $upload_dir = '../Files/';
    $upload_path = $upload_dir . $file_name;

    if (move_uploaded_file($file_tmp, $upload_path)) {
      echo 'File uploaded successfully';
    } else {
      echo 'Error uploading file';
    }
  } else {
    echo 'Invalid file type';
  }
}
?>
