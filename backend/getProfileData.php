<?php
require 'serverDetails.php';


$pid = $_POST['pid'];
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Connect
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT *
FROM members
LEFT JOIN family ON members.fid = family.fid
LEFT JOIN titles ON members.pid = titles.tid
WHERE members.pid = {$pid}";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

//Variables for each table column
$username = $row['username'];
$fname = $row['f_name'];
$lname = $row['l_name'];
$dob = $row['dob'];
$gender = $row['gender'];
$start_date = $row['start_date'];
$profession = $row['profession'];
$baptized = $row['baptized'];
$confirmation = $row['confirmation'];
$confirmation_date = $row['confirmation_date'];
$c_number = $row['c_number'];
$w_number = $row['w_number'];
$h_number = $row['h_number'];
$email = $row['email'];
$address = $row['address'];
$city = $row['city'];
$postal_code = $row['postal_code'];
$province = $row['province'];
$family = $row['name'];
$interest = $row['interest'];
$attendance = $row['attendance'];

mysqli_close($conn);

?>  