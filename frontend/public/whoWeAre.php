<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
    <style>
        .wrapper{
                width:100%;
        }
        .one{
            background-color:#C9DCA9;
            width:33.33%;
            float:left;
            text-align: center;
            padding-top: 50px;
            padding-bottom: 50px;
            border-radius: 10px;
            border: 1px solid black;
        }
        .two{
            background-color:#C9DCA9;
            width:33.33%;
            float:right;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 10px;
            border: 1px solid black;
        }
    </style>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Who we are</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body class="backgrounds">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
require '../headers/header.php';
?>
<img src="../../assets/churchstainglass.jpg" class="img-fluid" alt="church Stainles Glass" style = "width:1600px;height:800px;border-top: 6px solid #3E702D;">
        <div class = "container">
        <div class = "about-priest">
        <div class="text-center">
        <img src="../../assets/ourPriest1.png" class="img-fluid my-5" alt="This is a picture of Priest">
        </div>
        <div class="card" style="width: 16rem; margin-left: 40%;">
        <img src="../../assets/ourPriestPic.png" class="card-img-top rounded" alt="Teresa-Img">
        <div class="card-body">
        <p class="card-text text-center"><u>Teresa Hanlon</u></p>
    </div>
</div>
        <div class="text-center">
        <img src="../../assets/council-img.png" class="img-fluid my-5" alt="council-img">
        </div>
        <div class="text-center">
        <img src="../../assets/books.png" class="img-fluid my-5" alt="Books image in who we are" style="width: 800px; height:400px; border: 4px solid black; border-radius: 7px;">
</div>
</div>
        <div class = "wrapper">
            <div class="one">
            <h3>Treaty People</h3>
            </div>
            <div class="two">
            <h3>A moment for Church Renewal</h3>
                <h3>1. Servant Leadership</h3>
                <h3>2. Roman Catholic Women Priest Canada</h3>
            </div>
    </div>
    </div>
    <br><br><br>
    <?php include_once('..\..\frontend\footers\footer.php'); ?>
    
</body>
</html>