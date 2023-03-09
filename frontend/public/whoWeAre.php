<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
<style>

        .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: 40px;
                width: 30%;

}

        .txt {
    	        height: auto;
	            display: block;
	            margin: 0 auto;
                width: 200px;
                border: 1px solid black;
                border-radius: 30px;
                width: 400px;
                font-size: 25px;
                font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
                text-align:center;   
}
        .img-OP{
            max-width: 200px;
	        height: auto;
	        display: block;
	        margin: 0 auto;

            
}
        .img-Council{
            max-width: 100%;
	        height: auto;
	        display: block;
	        margin: 0 auto;
	        border: 2px solid #ccc;
	        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            
}
        .img-liturgy{
            max-width: 200px;
	        height: auto;
	        display: block;
	        margin: 0 auto;     
}
        .div{
                width:100%;
                margin: 100px;
}
        .one{
            background-color:#C9DCA9;
            width:33.33%;
            float:left;
            text-align: center;
            padding-top: 90px;
            padding-bottom: 90px;
            margin-left:20px;
            border-radius: 10px;
            border: 1px solid black;
            font-size: 25px;
            font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            text-align:center;  
}
        .two{
            background-color:#C9DCA9;
            width: 40%;
            float:right;
            padding: 50px;
            margin-right:20px;
            border-radius: 10px;
            border: 1px solid black;
            font-size: 25px;
            font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; 
}

    </style>
    <meta charset="utf-8">
    <meta name= "author" content= "VARchitects">
    <title>Who Are We?</title>
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
<!--This code create the Image and the text in the page-->
<div class="gif-container">
        <video autoplay muted loop class="gif">
            <source src="../../assets/banner13.mp4" type="video/mp4">
            <source src="banner13.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video> 
        <div class="text"><span class="letter-highlight">W</span>ho <span class="letter-highlight">w</span>e <span class="letter-highlight">a</span>re </div>
    </div><br><br>

<!--This code is to create Council image-->
<div class="img-Council">
        <img src="../../assets/council-img.png" alt="Council img">
    </div>
<br><br><br><br>
<!--This code is to show our priest and its images-->

<div class="container">
    <div class="img-OP">
        <img src="../../assets/ourPriestimg.png" alt="Our Priest img">
    </div>
    <div class="txt">
    <h2><u><i>Teresa Hanlon</i></u><h2>
    <img src="../../assets/ourPriestimage.png" alt="Our Priest img" style="height: 300px">
    </div>
</div><br><br>

<!--This code is to create liturgy-->
<div class="img-liturgy">
        <img src="../../assets/liturgy.png" alt="Liturgy img">
    </div>
    
<br><br>

<!--This code is to create Social Justice-->
<div class="img-socialjustice">
        <img src="../../assets/socialjustice.png" alt="Social Justice img">
    </div>
<br><br>

<!--Books Images-->
<center><img src="../../assets/books.png" alt="books img" style=" border: 4 px solid black; margin: 40px; margin-left:100px; border-radius: 20px;"></center>

<div class="div">
            <div class="one">
            <h3>Treaty People</h3>
            </div>
            <div class="two">
            <h3>A moment for Church Renewal</h3>
                <h3>1. Servant Leadership</h3>
                <h3>2. Roman Catholic Women Priest Canada</h3>
            </div>
    </div>


    <?php include_once('../footers/footer.php'); ?>
<script src="../../js/sidebar.js"></script>

</body>
</html>