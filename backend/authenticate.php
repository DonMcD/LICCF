<?php

require '../backend/cleanInput.php';

//Get the username from the user
$username = strtolower(cleanInput($_POST['username']));
//Get the password from the user
$password = cleanInput($_POST['password']);

require 'serverDetails.php';

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

// Connect
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT pid, username, hash, email, type FROM members where username = '$username' OR email = '$username'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();


if($row){
    session_start();
    if(($row['username'] == $username or $row['email'] == $username) && (password_verify($password, $row['hash']))){
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['pid'] = $row['pid'];
        $_SESSION['type'] = $row['type'];
        echo "valid";
    }
    else {
        $_SESSION['authenticated'] = false;
        echo "password";
    }
}
else {
    $_SESSION['authenticated'] = false;
    echo "username";
}
mysqli_close($conn);
?>