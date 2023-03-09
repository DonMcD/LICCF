<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>Spiritual Direction</title>
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
    <div class="text">Spiritual Direction</div>
</div><br><br>

<style>
      .text-box {
        background-color: #C9DCA9;
        border: 2px solid #3E702D;
        border-radius: 5px;
        padding: 10px;
        margin-top: 20px;
      }
 </style>
 
 <body>
    
    <div class="text-box">
      <h2>What is this?</h2>
      <p>This is a spiritual direction service provided by Spiritual Directors Lethbridge.
			We offer one-on-one sessions for individuals seeking guidance on their spiritual journeys.</p>
      <h2>What are the benefits?</h2>
      <p>Some potential benefits of spiritual direction include:</p>
      <ul>
        <li>Clarity and insight into one's spiritual path</li>
        <li>Greater sense of peace and purpose</li>
        <li>Deeper connection with oneself, others, and a higher power</li>
      </ul>
      <h2>Cost</h2>
      <p>Please contact us for pricing information.</p>
      <h2>Spiritual companions</h2>
      <p>Our spiritual directors are trained and experienced professionals who are committed to helping individuals explore and deepen their spiritual lives. 
	  Learn more about us <a href="https://spiritualdirectorslethbridge.com/about/">here</a>.</p>
    </div>


    <?php include_once ('..\..\frontend\footers\footer.php'); ?>
    <script src="../../js/sidebar.js"></script>
</body>
</html>