<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

//This checks to see if the user is authenticated or not
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true || $_SESSION['type'] == 1) {
    header("Location: ../public/login.php");
    exit;
}
?>