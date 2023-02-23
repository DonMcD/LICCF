<?php
require 'serverDetails.php';

$did = $_POST['did'];
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Connect
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT *, donations.type AS donation_type
FROM donations
LEFT JOIN members
ON donations.mid = members.pid
WHERE donations.did = '{$did}'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

//Variables for each table column
$fName = $row['f_name'];
$lName = $row['l_name'];
$amount = $row['amount'];
$type = $row['donation_type'];
$date = $row['date'];
$envNumber = $row['env_number'];
$transfer_email = $row['transfer_email'];
$secQuestion = $row['sec_question'];


mysqli_close($conn);

?>  