<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>Contact</title>
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
        <source src="../../assets/banner5.mp4" type="video/mp4">
        <source src="banner5.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video> 
    <div class="text">Contact</div>
</div><br><br>

<style>
		body {
			background-color: #C9DCA9;
		}
		h1 {
			color: #3E702D;
			text-align: center;
		}
		.form-container {
			margin: auto;
			max-width: 400px;
			background-color: #C9DCA9;
			padding: 50px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}
		input[type=text], select, textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #3E702D;
			border-radius: 4px;
			resize: vertical;
		}
		input[type=submit] {
			background-color: #3E702D;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #558B3D;
		}
		.container {
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: space-around;
		}
		.text-container {
			width: 50%;
			padding-right: 20px;
		}
		.contact-info {
			width: 50%;
			text-align: center;
			color: #3E702D;
			font-weight: bold;
			font-size: 18px;
		}

	</style>
</head>
<body>
	<h1><u>Questions?</u></h1>
	<div class="container">
		<div class="text-container">
            <div style="border: 5px solid #C9DCA9; border-radius: 10px; padding: 10px; text-align: center;">
			<p>If you have a question about our community or would like more information, 
                please contact us at</p>
			<p><a href="mailto:LICComm2022@gmail.com">LICComm2022@gmail.com</a></p>
			<p>Office Number: 403-381-1845</p>
			<p>Teresa Number: 403-359-0819</p>
            <p>or fill out the adjacent form</p>
            <br></br><p><i><b> We look forward to hearing from you! </b></i><p>
            </div>
		</div>
		<div class="form-container">
			<form action="#" method="post">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>

                <br> </br>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>

                <br> </br>
				<label for="message">Message:</label>
				<textarea id="message" name="message" required></textarea> 

                <br> </br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>

    <h1><u>Directions</u></h1>
    <div style="border: 5px solid #C9DCA9; border-radius: 10px; padding: 10px; text-align: center;">
        <p>“Shipping &amp; receiving” doors. Where is the door? 
            Go to the opposite direction of the Entrance arrows in the lower parked. 
            It is in the North West niche of the building.</p>
        <p style="text-align: center;"><a href="https://www.google.com/maps/place/Lethbridge+Public+Library/@49.6983822,-112.8391051,17z/data=!3m1!4b1!4m5!3m4!1s0x5364888e9d9d7c85:0x16c2a8a23d33d868!8m2!3d49.6983822!4d-112.8369111" target="_blank">
            Map of the Lethbridge Downtown Library</a></p>
    </div>

    <h1><u>Territorial Acknowledgment</u></h1>
    <div style="text-align:center; width:50%; border: 10px solid #3E702D; border-radius: 10px; background-color: #C9DCA9;">
        <p>Treaty 7 territory is both grassland and mountainous territory with water running through from several rivers including the Oldman, Belly and Milk Rivers. It is home to the Blackfoot Confederacy including the First Nations Kainai, Siksika, Piikani, Tsuut‘ina and Stoney Nakoda Nations. It is homeland to the Métis Nation of Region 3 in Alberta.</p>
        <p>Settlers here are responsible to educate themselves about the history of residential schools and what it means to live as treaty people. There is truth to be told. There are sustainable ways of living to be learned to ensure reciprocity of the Creator’s gift of Mother Earth.</p>
        <p>In the spirit of respect, reciprocity and truth, we honour and acknowledge the historical and contemporary Treaty 7 territory and languages of the Blackfoot Confederacy: Siksika, Kainai, Piikani, as well as the Stoney Nakoda of Chiniki, Bearspaw and Wesley First Nations, and the Dene of Tsuut’ina First Nation. The coulees, prairie grassland, mountains, lakes and rivers sustain us generously. We further acknowledge that we are all treaty people with a responsibility to remain true to the nature and intent of the treaties including reciprocity with Mother Earth.</p>
        <p>The City of Lethbridge, Sikooh-kitohki is homeland to Métis Nation of Alberta, Region 3. We also recognize the many Indigenous communities that have been forged in urban centres across Alberta. Finally, we acknowledge all Nations — Indigenous and non — who live, work and play on this land, and whose collective duty it is to give thanks, honour, celebrate, and take care of the land in thanksgiving that the future needs of many generations will be met.</p>
    </div>
    
    <?php include_once ('..\..\frontend\footers\footer.php'); ?>
    <script src="../../js/sidebar.js"></script>
</body>
</html>