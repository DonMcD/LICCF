<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
<<<<<<< HEAD
    <title>LICCF Login</title>
    <link rel="stylesheet" href="../../css/about.css">
=======
    <title>History</title>
>>>>>>> c6344b21c5c351f44c1ff332fb057a845c4c5c52
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
    <div class="womenhistory-txt">
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
</div><br><br>


  <div class="teresaStory-txt">
    <p><i>Teresa’s</i> story of call to ordination can be read <a href="https://rcwpcanada.altervista.org/2021-docs/TeresaHanlonDiaconateOrdination/TeresaDiaconateOrdination.html">here</a>.</p>
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
    <p>Mass in the Library Theatre Gallery<br>
    3rd Sundays of the month LICCF celebrates an in-person eucharist at the downtown Lethbridge public library Theatre Gallery at 11 AM.</p>
    <p>Weekday Mass<br>
    Since August 2022 we have celebrated eucharist in Teresa & Vincent’s home Wednesdays at 11 AM. Call 403-381-1845 for directions.</p>
    <p>Collage of Pictures “All Souls Day” “First Eucharist in the Theatre Gallery” “Celebrating at Hanlons” “Ordination to Diaconate” “Ashes for Lent” “Ordination to Priesthood” “Tobacco Ceremony at Thanksgiving”</p>
    <p>Whatever your journey or background, you are welcome to<a href="get-involved">“join us”</a> which links to Get Involved (found under Community).</p>
  </div><br><br>

<?php include_once('..\..\frontend\footers\footer.php'); ?>
</body>
</html>