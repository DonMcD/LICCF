<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>LICCF Prayer</title>
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
    <div class="text">Prayer</div>
</div><br><br>

<style>
		.textbox {
			border: 2px solid #C9DCA9;
			border-radius: 10px;
			padding: 10px;
			margin: 10px auto;
			width: 80%;
			max-width: 500px;
		}
	</style>
</head>
<body>
	<h1 style="text-align:center">Stillness Practice with Vickie MacArthur</h1>
	<div class="textbox">
		<a href="https://www.vickiemacarthur.ca/spiritual-direction/" style="text-align: center;">Click here to access the Stillness Practice</a>
	</div>
	
<h1 style="text-align:center">Lectio Divina</h1>
<div class="textbox">
	<p>Instructions for praying Lectio Divina:</p>
	<ul>
		<li>Choose a passage from Scripture</li>
		<li>Read the passage slowly and meditatively</li>
		<li>Reflect on the passage and what it means to you</li>
		<li>Respond to the passage in prayer</li>
		<li>Rest in God's presence</li>
	</ul>
</div>

<h1 style="text-align:center">CinemaDivina</h1>
<div class="textbox">
	<a href="https://vimeo.com/channels/cinemadivina" style="text-align: center;">Click here to access CinemaDivina</a>
</div>

<h1 style="text-align:center">Listen for Joy</h1>
<div class="textbox">
	<a href="https://listenforjoy.com/" style="text-align: center;">Click here to access Listen for Joy</a>
</div>

<h1 style="text-align:center">BraveJoy sharing</h1>
<div class="textbox">
	<a href="https://bravejoy.net/" style="text-align: center;">Click here to access BraveJoy sharing</a>
</div>

<?php include_once ('..\..\frontend\footers\footer.php'); ?>
    <script src="../../js/sidebar.js"></script>
</body>
</html>