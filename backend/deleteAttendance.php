<?php
session_start();

require 'serverDetails.php';

// Make sure the PID value is set and is a valid integer
if (isset($_POST['aid']) && filter_var($_POST['aid'], FILTER_VALIDATE_INT)) {
  // Connect to the database
  $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
  if ($conn->connect_error) {
    die('Failed to connect to the database: ' . $conn->connect_error);
  }

  // Prepare and execute the delete statement
  $stmt = $conn->prepare('DELETE FROM attendance WHERE aid = ?');
  $stmt->bind_param('i', $_POST['aid']);
  if (!$stmt->execute()) {
    echo 'Failed to delete the record: ' . $stmt->error;
  } else {
    echo 'Record deleted successfully';
  }

  // Close the database connection
  $stmt->close();
  $conn->close();
if($_SESSION['type'] == 0){
  header("Location: ../frontend/private/manageAttendance.php");
} else {
  header("Location: ../backend/logout.php");
}
} else {
  echo 'Invalid AID value';
}
?>
