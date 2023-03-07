<?php
require './serverDetails.php';

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

print_r($_POST);

// Collect form data
$aid = $_POST['aid'];
$in_person = $_POST["in_person"];
$online = $_POST["online"];
$date = test_input($_POST["date"]);


// Update record in database
$sql = "UPDATE attendance SET date='$date', in_person='$in_person', online='$online' WHERE aid='$aid'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>