<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>LICCF Home</title>
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
            <source src="../../assets/banner1.mp4" type="video/mp4">
            <source src="banner1.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video> 
        <div class="text"><span class="letter-highlight">L</span>ethbridge <span class="letter-highlight">I</span>nclusive <br><span class="letter-highlight">C</span>atholic <span class="letter-highlight">C</span>ommunity <span class="letter-highlight">F</span>ellowship</div>
    </div><br><br>

    <h1 id="page-title"><u> NEXT EVENTS </u></h1><BR></BR>
    
    
    <div style="background-color: #C9DCA9; padding: 1em; border-radius: 10px;">
      <div class="event">
      <div class="event-date"><b> FEBRUARY 12TH, 2023</b></div>
      <div class="event-name"><b> ZOOM MASS </b></div>
      <div class="event-details"><b> TIME 10 A.M </b></div>
    </div>
    </div><br><br><br>
 
    <h1 id="donate-title">Donate</h1><br>

    <div style="background-color: #C9DCA9; padding: 1em; border-radius: 10px;">
    <p>We encourage donations by e-transfer with your mailing address in the message box to <a href="mailto:Liccomm2022@gmail.com">Liccomm2022@gmail.com</a> because they are direct and pose no queries from the Canada Revenue Agency.</p>
    <p>Tax Receipts - please include your mailing address in the “message box” unless you have signed up with your current address as a member.</p>
    </div><br><br><br>

    <h1 id="calendar-title">Calendar</h1>
    <iframe src="https://calendar.google.com/calendar/embed?src=bd4ca999011f6aa262c2e01dffef17922a205434858c2eef7888fa257012c692%40group.calendar.google.com&ctz=America%2FEdmonton" style="border: 0" width="1000" height="600" frameborder="0" scrolling="no"></iframe><br>
    <?php include_once('..\..\frontend\footers\footer.php'); ?>
    <script src="../../js/sidebar.js"></script>
</body>
</html>