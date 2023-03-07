<?php
require 'serverDetails.php';

$aid = $_POST['aid'];
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Connect
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT *
FROM attendance
WHERE aid = '{$aid}'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

//Variables for each table column
$in_person = $row['in_person'];
$online = $row['online'];
$date = $row['date'];
mysqli_close($conn);

?>