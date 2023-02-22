<?php
session_start();


switch($_SESSION['type']){
    case 0:
        header("Location: ../frontend/private/dashboard.php");
        break;
    case 1:
        header("Location: ../frontend/public/index.php");
        break;
}
?>