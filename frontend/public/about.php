<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
<style>
        .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 60px;
                font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; 
                color: white; 
}
        .txt {
                max-width: 90%;
	            height: auto;
	            display: block;
	            margin: 0 auto;
	            border: 2px solid #ccc;
	            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                background: linear-gradient(to bottom, #EFF4E7 0%, #CADCB3 100%);
                border-radius: 30px;
                font-size: 25px;
                font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;   
}
        .shadow-box{
                width: 300px;
                padding: 10px 10px 10px;
                box-sizing: border-box;
                margin: 100px;
                font-size: 20px;
                font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; 
                color: #ffffff; 
                color: ;
                text-align: center;
                background: #3E702D;
                box-shadow: 20px 20px 20px #666;
        }
    </style>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>About</title>
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
    <div class="text"><span class="letter-highlight">A</span>bout <span class="letter-highlight">u</span>s</div>
</div><br><br>
<br><br>
<div class="txt">
<p>Teresa’s story of call to ordination can be read <a href="https://rcwpcanada.altervista.org/2021-docs/TeresaHanlonDiaconateOrdination/TeresaDiaconateOrdination.html">here</a>.</p>
<p>Working priests:</p>
<ul>
  <li>are not salaried by an institution</li>
  <li>continue to earn a living as they did prior to saying ‘yes’ to ordination (unless they were employed a Catholic institution in which case they lose their jobs)</li>
  <li>work as spiritual care providers, others lawyers, educators, social workers, spiritual directors or pastoral care ministers</li>
  <li>are led by the Spirit</li>
  <li>practice contemplative listening with their communities</li>
  <li>Gathering for Sunday worship by zoom and in person</li>
  <li>share liturgy planning, social justice outreach, and leave governance and financial matters to their communities</li>
</ul>
<p>Sunday Eucharist:</p>
<p>New communities gather initially in homes and then find larger spaces as their numbers grow.</p>
<p>Beginning in 2022 
LICCF’s name is registered with the Alberta Registries and has been meeting for worship since May 1, 2022, the day after Teresa Hanlon’s priestly ordination.</p>
<p>We now offer a zoom eucharist at 10 AM  MT First Sundays of the month. FIND a zoom link <a href="zoom-link">here</a>.</p>
<p>Mass in the Library Theatre Gallery<br>
3rd Sundays of the month LICCF celebrates an in-person eucharist at the downtown Lethbridge public library Theatre Gallery at 11 AM.</p>
<p>Weekday Mass<br>
Since August 2022 we have celebrated eucharist in Teresa & Vincent’s home Wednesdays at 11 AM. Call 403-381-1845 for directions.</p>
<p>Collage of Pictures “All Souls Day” “First Eucharist in the Theatre Gallery” “Celebrating at Hanlons” “Ordination to Diaconate” “Ashes for Lent” “Ordination to Priesthood” “Tobacco Ceremony at Thanksgiving”</p>
<p>Whatever your journey or background, you are welcome to<a href="get-involved">“join us”</a> which links to Get Involved (found under Community).</p>




    </div>
<br><br><br><br>
<?php include_once('../../frontend/footers/footer.php'); ?>
<script src="../../js/sidebar.js"></script>

</body>
</html>