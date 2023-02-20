<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>LICCF Login</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <style>
      #container {
        position: relative;
        width: 1920px;
        height: 456px;
      }
      
      #image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
      
      #text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 48px;
        text-align: center;
        color: white;
        text-shadow: 2px 2px 4px black;
      }
    </style>
</head>
<body class="backgrounds">
<?php
require '../headers/header.php';
?>
<!--This code create the Image and the text in the page-->
    <div id="container">
        <img src="" alt="">
        <div id="text">
            Welcome to LICCF <br>
            Lethbridge Inclusive Catholic Community Felloship
        </div>
    </div>


</body>
</html>