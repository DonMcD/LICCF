<?php

require 'cleanInput.php';

//Get the username from the user
$username = cleanInput($_POST['username']);
//Get the password from the user
$password = cleanInput($_POST['password']);

require 'serverDetails.php';

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

// Connect
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username, hash FROM users where username = '$username'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();


if($row){
    session_start();
    if(($row['username'] == $username) && ($row['hash'] == $password)){
        $_SESSION['authenticated'] = true;
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