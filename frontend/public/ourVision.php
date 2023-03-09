<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
<style>
        .centered {
            display: flex;
            justify-content: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 60px;
                font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;   
                color: white; 
}
        .txt {
                width: 300px;
                border: 1px solid black;
                padding: 50px;
                margin: 0 auto;
                margin-left:220px;
                border-radius: 30px;
                width: 1000px;
                font-size: 25px;
                font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;   
}
    </style>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>Vision</title>
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
            <source src="../../assets/banner17.mp4" type="video/mp4">
            <source src="banner17.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video> 
        <div class="text"><span class="letter-highlight">O</span>ur <span class="letter-highlight">V</span>ision </div>
    </div><br><br>
    <!--Text inside the vision statement-->
    <div class="txt">
    <h1><i><u><center>Vision Statement</center></u></i></h1>
    <p>
    A new model of ordained ministry in a renewed Roman Catholic Church.<br>
     For LICCF this means that  
    <ul>
    <li>We base our liturgies on the Early Christian ritual of a welcoming table rather than a sacrificing altar.</li>
    <li>We read the ‘signs of the times’ and welcome all people to be part of change through prayer, song, body practice and social justice action.</li>
    <li>We receive and give love and healing with those in need.</li>
    <li>We celebrate, study and act with inclusive language.</li>
    <li>We interact with Indigenous people of this land, respecting their cultures, languages, and teachings.</li>
</ul></p>
    </div>
</div>


<?php include_once('..\..\frontend\footers\footer.php'); ?>
</body>
</html>