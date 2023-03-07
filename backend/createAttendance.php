<?php
// Get the form data
$aid = $_POST['aid'];
$in_person = $_POST['in_person'];
$online = $_POST['online'];
$date = $_POST['date'];

require 'serverDetails.php';

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

// Check for errors
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Construct the SQL query to insert the donation into the database
$sql = "INSERT INTO attendance (aid, date, in_person, online) VALUES ('$aid', '$date', '$in_person', '$online')";

// Execute the query
if (mysqli_query($conn, $sql)) {
  echo "Donation added successfully!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>