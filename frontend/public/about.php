<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
<style>

        .txt {
                width: 80%; 
                margin: 0 auto;
                border: 5px solid #C9DCA9;
                border-radius: 2vw; 
                font-size: 1.5vw; 
                font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
                display: flex; 
                justify-content: center; /* center the content horizontally */
                align-items: center; /* center the content vertically */
                flex-direction: column; /* set the flex direction to column to stack the content vertically */
                padding: 2vw;   
}

    </style>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>About us</title>
    <link rel="stylesheet" href="../../css/about.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body class="backgrounds">
<?php
require '../headers/header.php';
?>

<!--This code create the Image and the text in the page-->
<div class="gif-container">
    <video autoplay muted loop class="gif">
        <source src="../../assets/banner2.mp4" type="video/mp4">
        <source src="banner2.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video> 
    <div class="text">About us</div>
</div><br><br>
<br><br>
<div class="txt">
<p>Teresa’s story of call to ordination can be read <a href="https://rcwpcanada.altervista.org/2021-docs/TeresaHanlonDiaconateOrdination/TeresaDiaconateOrdination.html">here</a>.</p>
</div><br><br>
<?php include_once('../../frontend/footers/footer.php'); ?>
<script src="../../js/sidebar.js"></script>

</body>
</html>