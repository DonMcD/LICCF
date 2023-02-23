<?php
session_start();

require 'serverDetails.php';

// Make sure the PID value is set and is a valid integer
if (isset($_POST['did']) && filter_var($_POST['did'], FILTER_VALIDATE_INT)) {
  // Connect to the database
  $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
  if ($conn->connect_error) {
    die('Failed to connect to the database: ' . $conn->connect_error);
  }

  // Prepare and execute the delete statement
  $stmt = $conn->prepare('DELETE FROM donations WHERE did = ?');
  $stmt->bind_param('i', $_POST['did']);
  if (!$stmt->execute()) {
    echo 'Failed to delete the record: ' . $stmt->error;
  } else {
    echo 'Record deleted successfully';
  }

  // Close the database connection
  $stmt->close();
  $conn->close();
if($_SESSION['type'] == 0){
  header("Location: ../frontend/private/manageDonations.php");
} else {
  header("Location: ../backend/logout.php");
}
} else {
  echo 'Invalid PID value';
}
?>
