<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>Home</title>

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

	<style>
		.text-box {
			display: flex;
			margin-top: 40px;
			background-color: #C9DCA9;
            border-radius: 10px;
			box-shadow: 10px 10px 20px #3E702D;
		}
		.left-box {
			flex: 1;
			text-align: center;
			padding: 20px;
		}
		.right-box {
			flex: 2;
			padding: 20px;
		}
	</style>

	<div class="text-box">
		<div class="left-box">
			<h1 style="color:#3E702D;">New Events</h1>
		</div>
		<div class="right-box">
			<p><strong>Event Date:</strong> March 12th, 2023</p>
			<p><strong>Event Name:</strong> ZOOM Mass</p>
			<p><strong>Event Time:</strong> 10:00 AM</p>
		</div>
	</div>


    <div style="margin-top: 40px;">
        <div style="border: 5px solid #C9DCA9; padding: 10px; border-radius: 20px;">
            <h1 style="text-align: center; color: #3E702D;">Donate</h1>
            <p> We encourage donations by e-transfer with your mailing address in the message box to 
            <a href="mailto:LICComm2022@gmail.com">LICComm2022@gmail.com</a> because they are direct 
            and pose no queries from the Canada Revenue Agency.</p>
    
            <p>Tax Receipts - please include your mailing address in the “message box” unless you have 
            signed up with your current address as a member.</p>
        </div>
    </div>

    <div style="margin-top: 20px; margin-bottom:20px;">
        <h1 style="text-align: center; color: #3E702D;">Calendar</h1>
        <iframe src="https://calendar.google.com/calendar/embed?src=bd4ca999011f6aa262c2e01dffef17922a205434858c2eef7888fa257012c692%40group.calendar.google.com&amp;ctz=America%2FEdmonton" 
        style="border: 10" width="1000" height="600" frameborder="0" scrolling="no"></iframe>
    </div>

    <?php include_once('..\..\frontend\footers\footer.php'); ?>
    <script src="../../js/sidebar.js"></script>
</body>
</html>