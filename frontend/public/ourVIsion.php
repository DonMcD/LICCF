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
                width: 300px;
                border: 1px solid black;
                padding: 50px;
                margin: 120px;
                margin-left:220px;
                border-radius: 30px;
                width: 1000px;
                font-size: 25px;
                font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;   
}
    </style>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>LICCF Login</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body class="backgrounds">
<?php
require '../headers/header.php';
?>
    <div class="wrapper">
    <img src="../../assets/crossSignForCommunityPage.jpg" alt="church vision" style = "width:1520px;height:800px;border-top: 6px solid #3E702D;">
    <div class="centered">Our Vision</div>
    </div>
    <div class="txt">
    <h1><i><u><center>Vision Statement</center></u></i></h1>
    <p>Based on Early Christian ritual and ordination of women then, the Lethbridge Inclusive Catholic Community Fellowship welcomes all people to come to pray, sing and receive from the table. We celebrate with inclusive language, feel the call to social justice action and look with respect to Indigenous culture and teachings.    </p>
    </div>
</div>


<?php include_once('..\..\frontend\footers\footer.php'); ?>
</body>
</html>