<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <style>
        .history-txt {
            width: 80%; /* use percentages instead of pixels for width to make it responsive */
            margin: 5vw auto; 
            border: 2px solid black; 
            padding: 5vw; 
            border-radius: 2vw; 
            border: 5px solid #C9DCA9;
            font-size: 1.5vw; 
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            display: flex; /* use display flex to make the element responsive */
            justify-content: center; /* center the content horizontally */
            align-items: center; /* center the content vertically */
            flex-direction: column; /* set the flex direction to column to stack the content vertically */
}
    </style>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>History</title>
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
            <source src="../../assets/banner18.mp4" type="video/mp4">
            <source src="banner18.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video> 
        <div class="text">Our History </div>
    </div><br><br>
<!---->
    <div class="history-txt">
    <p>Roman Catholic Women Priests Canada
<ul>
    <li>In the 1970s Catholic women, called to the priesthood, many of them religious, believed their call to ordination would be realized as a fulfillment of Vatican II documents which called for the Church to pay attention to the “signs of the times.”</li>
    <li>One by one Episcopalian (in the USA), Anglican, Lutheran and other main line protestant denominations opened their doors to women clergy.</li>
    <li>After several decades of not being listened to by the Catholic hierarchy which was backed by Pope John Paul II’s prohibition of speaking about the ordination of women, groups of educated women ready for female ordination realized that necessary change included more than the issue of female priesthood.</li>
</ul>
<p>The Danube Seven:</p>
<ul>
    <li>2002: The first RC women priests and bishop ordained by male bishops. Ordinations took place on ships, the first seven ordinations taking place on the Danube River in June.</li>
    <li>2005: Nine ordinations on the St. Lawrence River in July.</li>
    <li>The women created changes to hierarchical structures, clericalism and prejudices embedded in canon law was essential in a movement of renewal.</li>
    <li>RCWP liturgies now embrace inclusive language, contemporary spiritual writings and prayers and share the homily with participation from the community.</li>
    <li>The movement is also inclusive of all genders and colours, non-clerical, non-hierarchical servant leaders and structured by communal governance rather than institutions.</li>
</ul></p>
</div>
<?php include_once('..\..\frontend\footers\footer.php'); ?>
</body>
</html>