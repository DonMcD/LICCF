<?php
// Connect to the database (replace with your own database credentials)
require 'serverDetails.php';

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

// Check for errors
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Get the search term from the text input field
$searchTerm = $_GET['term'];

// Construct the SQL query to search for members
$sql = "SELECT * FROM members WHERE f_name LIKE '%$searchTerm%' OR l_name LIKE '%$searchTerm%'";

$result = mysqli_query($conn, $sql);


// Output the results as a dropdown list
while ($row = $result->fetch_assoc()) {
    $pid = $row['pid'];
    $fname = $row['f_name'];
    $lname = $row['l_name'];
    echo "<option value='{$pid}'>{$fname} {$lname}</option>";
}

// Close the database connection
mysqli_close($conn);
?>
