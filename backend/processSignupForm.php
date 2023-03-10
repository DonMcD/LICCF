<?php
require './serverDetails.php';

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// Collect form data
$f_name = test_input($_POST["first_name"]);
$l_name = test_input($_POST["last_name"]);
$dob = test_input($_POST["dob"]);
$gender = test_input($_POST["gender"]);
$profession = test_input($_POST["profession"]);
$c_number = test_input($_POST["cell_number"]);
$w_number = test_input($_POST["work_number"]);
$h_number = test_input($_POST["home_number"]);
$email = test_input($_POST["email"]);
$address = test_input($_POST["address"]);
$city = test_input($_POST["city"]);
$postal_code = test_input($_POST["postalCode"]);
$province = test_input($_POST["province"]);
$attendance = test_input($_POST["attendance"]);
$start_date = date('Y-m-d');
$interest = test_input($_POST["interest"]);
$type = test_input($_POST["type"]);
//Get details for credentials table
// Collect form data
$username = test_input($_POST["username"]);
$password = test_input($_POST["password"]);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


// Store form data in database
$sql = "INSERT INTO members (f_name, l_name, dob, gender, profession, c_number, w_number, h_number, email, address, city, postal_code, province, start_date, username, hash, attendance, interest, type) VALUES ('$f_name', '$l_name', '$dob', '$gender', '$profession', '$c_number', '$w_number', '$h_number', '$email', '$address', '$city', '$postal_code', '$province', '$start_date', '$username', '$hashed_password', '$attendance', '$interest', '$type')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully.";
  header("Location: ../frontend/public/index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  header("Location: ../frontend/public/signup.php");
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
