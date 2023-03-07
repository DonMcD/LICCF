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
$did = $_POST['did'];
$f_name = test_input($_POST["first_name"]);
$f_name = test_input($_POST["last_name"]);
$amount = trim(test_input($_POST["amount"]), '$');
$type = test_input($_POST["type"]);
$env_number = trim(test_input($_POST["env_number"]), '#');
$email = test_input($_POST["email"]);
$sec_question = test_input($_POST["sec_question"]);
$date = test_input($_POST["date"]);


// Update record in database
$sql = "UPDATE donations SET amount='$amount', type='$type', date='$date', env_number='$env_number', transfer_email='$email', sec_question='$sec_question' WHERE did='$did'";

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

