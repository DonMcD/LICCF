<?php
$file_url = '';
$file_name = basename($file_url);

header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"".$file_name."\"");

readfile($file_url);
?>