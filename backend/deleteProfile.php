<?php
require 'serverDetails.php';

// Make sure the PID value is set and is a valid integer
if (isset($_POST['pid']) && filter_var($_POST['pid'], FILTER_VALIDATE_INT)) {
  // Connect to the database
  $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
  if ($conn->connect_error) {
    die('Failed to connect to the database: ' . $conn->connect_error);
  }

  // Prepare and execute the delete statement
  $stmt = $conn->prepare('DELETE FROM members WHERE pid = ?');
  $stmt->bind_param('i', $_POST['pid']);
  if (!$stmt->execute()) {
    echo 'Failed to delete the record: ' . $stmt->error;
  } else {
    echo 'Record deleted successfully';
  }

  // Close the database connection
  $stmt->close();
  $conn->close();
  header("Refresh: 1; url=../frontend/public/login.php");
} else {
  echo 'Invalid PID value';
}
?>
