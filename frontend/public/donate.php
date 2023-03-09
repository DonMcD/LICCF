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
?>
 <div class="gif-container">
    <video autoplay muted loop class="gif">
        <source src="../../assets/banner6.mp4" type="video/mp4">
        <source src="banner6.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video> 
    <div class="text">Donate</div>
</div> <br><br>
<h1>Would you like to make a donation to support our community?</h1>       
<section class="donate-content">
  <div class="donate-top">
    <div class="mailing-recomendation">
      <p>
        We encourage donations by e-transfer with your mailing address in
        the message box to
        <a href="mailto:LICComm2022@gmail.com">LICComm2022@gmail.com</a>
        because they are direct and pose no queries from the Canada Revenue Agency.
      </p>
      <p>
         Please include your full name for a tax receipt and mailing address with a postal code,
         unless you have signed up with your current address as a member.
     </p>
    </div>
  </div>
  <div class="donate-bottom">
    <div>
    <h4 style=" text-align: center;">Unique Identifier Numbers</h4> <br><br>
      <p class="para">
        Each member who donates has a unique Identifier Number which is
        used for tax reasons. Please contact 403-381-1845 for your number.
      </p>
    </div>
    <div class="second">
    <h4 style=" text-align: center;">Cash & Cheque Donations</h4> <br><br>
      <p class="para">
      Donations in person will be issued a receipt at the time of giving. 
      Finance committee members will be onsite at the library to give you your receipt that Sunday.
      </p>
    </div>
  </div>
</section>
<?php include_once('../footers/footer.php'); ?>
<script src="../../js/sidebar.js"></script>
</body>
</html>
   
   
    
       
  
