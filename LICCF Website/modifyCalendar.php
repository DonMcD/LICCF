<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "Donavon McDowell">
    <title>LICCF Login</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

</head>
<body style="background-color: rgb(245,245,221)">
<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();


//This checks to see if the user is authenticated or not
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php");
    exit;
}
require 'header.php';
require 'topBar.php';
?>

<div class='centered-container'>
    <iframe src="https://calendar.google.com/calendar/embed?src=bd4ca999011f6aa262c2e01dffef17922a205434858c2eef7888fa257012c692%40group.calendar.google.com&ctz=America%2FEdmonton" style="border: 0" width="1000" height="600" frameborder="0" scrolling="no"></iframe>
</div>
</body>
</html>
