<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>Donate</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/eucharist.css">
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
            <source src="../../assets/banner7.mp4" type="video/mp4">
            <source src="banner7.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video> 
        <div class="text">Liturgies</div>
    </div><br><br>
<section class="donate-content">
  <div class="donate-top">
  <div style="border: 5px solid #C9DCA9; border-radius: 10px; padding: 10px; text-align: center;">
  <p>
  Centrally located, the Theatre Gallery site is barrier free and spacious. To protect those who are immune 
  comprised we ask that you wear a mask. We celebrate with chairs in a circular arrangement to emphasize 
  equality of all. The liturgical prayers and readings are in inclusive language and often representative of 
  contemporary spiritual writers. Readings are guided by the Comprehensive Catholic Lectionary 
  (Women’s Ordination Conference) and the Christian scripture is often read from the First Nations Version of
  the New Testament translation. We prepare both wheat and gluten-free breads for consecration. Come sing
   with live musicians. Come celebrate as one body. All are welcome at the table of thanksgiving.
  </p>
</section>
<section class="donate-content">
  <div class="donate-top">
    <div class="mailing-recomendation">
      <p>
        <h3 style=" text-align: center;">ZOOM MASS</h3>
          Join folks from across Canada and beyond the first Sunday of each month at 10 am Calgary time.
          We invite you to bring a candle, bread, and wine or alternates to the table Link up with us by 
          Zoom on a device or by telephone. We sing along with YouTube music, and for 10 minutes in breakout 
          rooms we share our noticings in regard to the readings and homily before consecrating the gifts
          together and sharing in a final blessing.
          Ask to be put on the mailing list for a link <a href="mailto:LICComm2022@gmail.com">here.</a>
      </p>
     
    </div>
  </div>
</section>


    <?php include_once('..\..\frontend\footers\footer.php'); ?>

    </body>
</html>
