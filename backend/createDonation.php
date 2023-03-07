<?php
// Get the form data
$pid = $_POST['pid'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$type = $_POST['type'];
$env_number = $_POST['env_number'];
$email = $_POST['email'];
$sec_question = $_POST['sec_question'];

require 'serverDetails.php';

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

// Check for errors
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Construct the SQL query to insert the donation into the database
$sql = "INSERT INTO donations (mid, amount, date, type, env_number, transfer_email, sec_question) VALUES ('$pid', '$amount', '$date', '$type', '$env_number', '$email', '$sec_question')";

// Execute the query
if (mysqli_query($conn, $sql)) {
  echo "Donation added successfully!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
