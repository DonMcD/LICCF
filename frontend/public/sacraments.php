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
    <link rel="stylesheet" href="../../css/dashboard.css">
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
    <main>
      <div class="section-top">
        <section class="hero">
          <h1>Sacraments</h1>
        </section>
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
              <img src="../../assets/pic.jpg" alt="" />
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
    </main>
     <?php include_once('..\..\frontend\footers\footer.php'); ?>

</body>
</html>