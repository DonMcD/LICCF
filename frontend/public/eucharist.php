<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>Eucharist</title>
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
        <source src="../../assets/banner3.mp4" type="video/mp4">
        <source src="banner3.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video> 
    <div class="text">Eucharist</div>
</div><br><br>
<h1><u>Our Ministry Statement</u></h1>
    <div style="text-align:center; width:75%; border: 8px solid #3E702D; border-radius: 10px; background-color: #C9DCA9;">
    <br><br> LICCF provides Christian ministry to individuals, families and society 
        in solidarity with the guidance and prophetic vision of the international Roman Catholic Women priests movement. We 
        are rooted in the the life-giving aspects of the Roman Catholic sacramental tradition, while maintaining a 
        commitment to ecumenical sharing, spiritual openness and interfaith dialogue.We are inspired by the women and men 
        who lived with Jesus. These were people who listened with their hearts to Jesus’ message and who gave witness to the
        transformative power of his intimate relationship with God. </p>
        <p>Jesus’ earliest disciples responded with their whole 
        selves to his call for compassionate action. This is our model for ministry. As a community, we celebrate, share 
        and rejoice in the love that God our Creator offers us as we break bread together and strive to become a centre of
        love, hope and service for one another and the wider world.All people who wish to join us are welcome in our 
        community and at the Eucharistic table.</p><br>
</div><br><br>

<div class="boxes">
    <div class="row">
      <div class="box">
      <a href="../../frontend/public/liturgies.php"><img src="../../assets/bread.jpg" alt="" /></a>
        <br/>
        <a href="../../frontend/public/liturgies.php" class="button">Liturgies</a> 
      </div>
      <div class="box">
      <a href="../../frontend/public/sacraments.php"><img src="../../assets/pic.jpg" alt="" /></a>
        <br/>
        <a href="../../frontend/public/sacraments.php" class="button">Sacraments</a> 
      </div>
      <div class="box">
      <a href="../../frontend/public/SpiritualDirection.php"><img src="../../assets/candles.jpg" alt="" /></a>
        <br/>
        <a href="../../frontend/public/SpiritualDirection.php" class="button">Spiritual Direction</a> 
      </div>
    </div>
</div>
<br><br>
    <?php include_once('../footers/footer.php'); ?>
    <script src="../../js/sidebar.js"></script>
</body>
</html>