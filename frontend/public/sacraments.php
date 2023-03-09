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
      <source src="../../assets/banner8.mp4" type="video/mp4">
      <source src="banner8.ogg" type="video/ogg">
      Your browser does not support the video tag.
  </video> 
  <div class="text">Sacraments</div>
</div><br><br>
<div style="text-align:center; width:75%; border: 5px solid #C9DCA9; border-radius: 10px; padding: 10px; text-align: center;">
    The word sacrament comes from the Latin word for 'holy', sacer. As signs of the sacred, sacraments are considered to
    be 'set apart' from everyday life. In this sense, they have at times been used to denigrate the body and set women apart from men. 
    We use the sacraments to honour the Holy that is present in all embodied life.<br><br>

    We can see from their symbols that the sacraments are rooted in the physical world: water, fire, bread, wine, oil,
    human hands. Jesus's words at the last supper, "This is my body" and "This is my blood", further reveal the
    sacredness of incarnation. We therefore perform the sacraments as a celebration of our embodiment and God's 
    presence in our lives.
</div>
<section class="sacrements">
  <h2>We minister the following sacraments</h2>
  <div class="cards">
    <div class="row">
      <div class="card">
        <img src="../../assets/pic.jpg" alt="" />
        <br />
        <button class="card-btn">Marriage</button>
      </div>
      <div class="card">
        <img src="../../assets/pic.jpg" alt="" />
        <br />
        <button class="card-btn">Reconciliation</button>
      </div>
      <div class="card">
        <img src="../../assets/pic.jpg" alt="" />
        <br />
        <button class="card-btn">Sacrament of the sick</button>
      </div>
    </div>
    <div class="row">
      <div class="card">
        <img src="../../assets/comm.jpg" alt="" />
        <br />
        <button class="card-btn">First Communion</button>
      </div>
      <div class="card">
        <img src="../../assets/pic.jpg" alt="" />
        <br />
        <button class="card-btn">Baptism</button>
      </div>
      <div class="card">
        <img src="../../assets/pic.jpg" alt="" />
        <br />
        <button class="card-btn">Confirmation and Holy Orders</button>
      </div>
    </div>
  </div>
</section>
     <?php include_once('..\..\frontend\footers\footer.php'); ?>

</body>
</html>