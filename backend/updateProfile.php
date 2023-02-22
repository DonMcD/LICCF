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
$pid = $_POST['pid'];
$attendance = $_POST["attendance"];
$f_name = test_input($_POST["first_name"]);
$l_name = test_input($_POST["last_name"]);
$dob = test_input($_POST["dob"]);
$gender = test_input($_POST["gender"]);
$profession = test_input($_POST["profession"]);
$c_number = test_input($_POST["c_number"]);
$w_number = test_input($_POST["w_number"]);
$h_number = test_input($_POST["h_number"]);
$email = test_input($_POST["email"]);
$address = test_input($_POST["address"]);
$city = test_input($_POST["city"]);
$postal_code = test_input($_POST["postalCode"]);
$province = test_input($_POST["province"]);
$interest = test_input($_POST["interest"]);

//Get details for credentials table
$username = test_input($_POST["username"]);
$password = test_input($_POST["password"]);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


// Update record in database
$sql = "UPDATE members SET f_name='$f_name', l_name='$l_name', dob='$dob', gender='$gender', profession='$profession', c_number='$c_number', w_number='$w_number', h_number='$h_number', email='$email', address='$address', city='$city', postal_code='$postal_code', province='$province', username='$username', hash='$hashed_password', attendance='$attendance', interest='$interest' WHERE pid='$pid'";

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

