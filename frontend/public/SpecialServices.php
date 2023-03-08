<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>Services & Blessings</title>
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
<div class="gif-container">
    <video autoplay muted loop class="gif">
        <source src="../../assets/banner3.mp4" type="video/mp4">
        <source src="banner3.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video> 
    <div class="text">Special Services and Blessings</div>
</div><br><br>


<style>
      .textbox {
        background-color: #C9DCA9;
        border: 5px solid #3E702D;
        border-style: ridge;
        padding: 10px;
        margin-top: 20px;
      }

      h1 {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="textbox">
    <p><b> We will help you plan </b></p>
      <ul>
        <li>Weddings</li>
        <li>Anniversaries</li>
        <li>House blessings</li>
        <li>Funerals</li>
        <li>and Gatherings for other intentions</li>
      </ul>
    </div>


<?php include_once ('..\..\frontend\footers\footer.php'); ?>
    <script src="../../js/sidebar.js"></script>
</body>
</html>