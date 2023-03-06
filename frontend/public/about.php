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
                margin: 40px;
                margin-left:150px;
                border-radius: 30px;
                width: 1000px;
                font-size: 25px;
                font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;   
}
        .shadow-box{
                width: 300px;
                padding: 10px 10px 10px;
                box-sizing: border-box;
                margin: 100px;
                font-size: 20px;
                font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; 
                color: #ffffff; 
                color: ;
                text-align: center;
                background: #3E702D;
                box-shadow: 20px 20px 20px #666;
        }
    </style>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>About us</title>
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
<div class="gif-container">
    <video autoplay muted loop class="gif">
        <source src="../../assets/banner2.mp4" type="video/mp4">
        <source src="banner2.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video> 
    <div class="text">About us</div>
</div><br><br>

<div class="wrapper">
    <div class="shadow-box">
    <h1>LICCF</h1>
    </div>
</div>

<div class="txt">
    <h1><i><u><center></center></u></i></h1>
    <p>Welcome to our inclusive church, a community of faith that is committed to celebrating diversity, welcoming everyone, and creating a safe and inclusive space for all people.

We believe that every person is created in the image of God and has inherent worth and dignity, regardless of their race, ethnicity, gender identity, sexual orientation, age, ability, or socio-economic status. We are committed to affirming and supporting the full inclusion and participation of all people in the life and ministry of our church.

Our community is rooted in the teachings of Jesus, who taught us to love one another as ourselves, to welcome the stranger, and to care for the vulnerable. We strive to live out these teachings by creating a welcoming and inclusive environment where all people can come and experience the love and grace of God.

In our inclusive church, you will find a diverse community of people from all walks of life who are committed to living out their faith in meaningful and impactful ways. We offer a variety of worship services, educational programs, and service opportunities that are designed to meet the needs of our diverse community.

Whether you are a lifelong Christian, new to the faith, or exploring spirituality for the first time, you are welcome in our inclusive church. We invite you to come and see for yourself what makes our community so special and to join us on our journey of faith and service.
</p>
    </div>
<?php include_once('..\..\frontend\footers\footer.php'); ?>


<script src="../../js/sidebar.js"></script>
</body>
</html>