<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>LICCF Login</title>
    <link rel="stylesheet" href="../../css/about.css">
    <title>Who Are We?</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
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
            <source src="../../assets/banner13.mp4" type="video/mp4">
            <source src="banner13.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video> 
        <div class="text">Who we are </div>
    </div><br><br>

<!--This code is to create Council image-->
<div class="img-Council">
        <img src="../../assets/council-img.png" alt="Council img">
    </div>
<br><br><br><br>
<!--This code is to show our priest and its images-->

<div class="container">
    <div class="img-OP">
        <img src="../../assets/ourPriestimg.png" alt="Our Priest img">
    </div>
    <div class="ourPriest-txt">
    <h2><u><i>Teresa Hanlon</i></u><h2>
    <img src="../../assets/ourPriestimage.png" alt="Our Priest img" style="height: 300px">
    </div>
</div><br><br>

<!--This code is to create liturgy-->
<div class="img-liturgy">
        <img src="../../assets/liturgy.png" alt="Liturgy img">
    </div>
    
<br><br>

<!--This code is to create Social Justice-->
<div class="img-socialjustice">
        <img src="../../assets/socialjustice.png" alt="Social Justice img">
    </div>
<br><br>

<!--Books Images-->
<center><img src="../../assets/books.png" alt="books img" class="books-img"></center>

<div class="div">
            <div class="one">
            <h3>Treaty People</h3>
            </div>
            <div class="two">
            <h3>A moment for Church Renewal</h3>
                <h3>1. Servant Leadership</h3>
                <h3>2. Roman Catholic Women Priest Canada</h3>
            </div>
    </div>


    <?php include_once('../footers/footer.php'); ?>
<script src="../../js/sidebar.js"></script>

</body>
</html>