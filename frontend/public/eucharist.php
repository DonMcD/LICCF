<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>LICCF Eucharist</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body class="backgrounds">
<?php
require '../headers/header.php';
require './sidebar.php';
?>
<div class="gif-container">
    <video autoplay muted loop>
        <source class="gif" src="../../assets/banner1.mp4" type="video/mp4">
        <source src="banner1.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video> 
    <div class="text">Eucharist</div>
</div><br><br>

    <script src="../../js/sidebar.js"></script>
</body>
</html>