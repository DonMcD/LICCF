<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>LICCF Donate</title>
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
require './sidebar.php';
?>
 <main>
 <div class="gif-container">
    <video autoplay muted loop>
        <source class="gif" src="../../assets/banner1.mp4" type="video/mp4">
        <source src="banner1.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video> 
    <div class="text">Donate</div>
</div><br><br>
        
        <section class="donate-content">
        <div class="donate-top">
          <div class="mailing-recomendation">
            <p>
              We encourage donations by e-transfer with your mailing address in
              the message box to
              <a href="mailto:LICCmm2022@gmail.com">LICCmm2022@gmail.com</a>
              because they are direct and pose no queries from the Canada
              revenue agency.
            </p>
            <p>
              Tax Recipts - Please include your mailing address in the "message
              box" unless you have signed up with your current address as a
              number.
            </p>
          </div>
        </div>
        <div class="donate-bottom">
          <div>
            <p>Unique Identifier Numbers</p>
            <p class="para">
              Each member who donates has a unique Identifier Number which is
              used for taxt reasons _______________________ contact for your
              number.
            </p>
          </div>
          <div class="second">
            <p>Cash & Cheque Donations</p>
            <p class="para">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint,
              vero neque iste optio voluptatem soluta modi assumenda aperiam
              accusantium facere officia pariatur.
            </p>
          </div>
        </div>
      </section>
    </main>
    <?php include_once('..\..\frontend\footers\footer.php'); ?>
    <script src="../../js/sidebar.js"></script>
    </body>
</html>

   
   
    
       
  
