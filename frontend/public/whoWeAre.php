<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

?>
<!DOCTYPE html>
<head>
<style>

.center {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin-top: 40px;
}

.txt {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: auto;
  width: 400px;
  max-width: 400px;
  border: 1px solid black;
  border-radius: 30px;
  font-size: 25px;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  text-align: center;
}

.img-OP {
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 100%;
  height: auto;
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
        .div {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin: 50px 0;
}

        .one {
            background-color: #C9DCA9;
            max-width: 400px;
            margin: 20px;
            border-radius: 10px;
            border: 1px solid black;
            font-size: 20px;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            text-align: center;
            padding: 20px;
}

        .two {
            background-color: #C9DCA9;
            max-width: 600px;
            margin: 20px;
            border-radius: 10px;
            border: 1px solid black;
            font-size: 20px;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            text-align: center;
            padding: 20px;
}


@media screen and (min-width: 768px) {
        .div {
            flex-direction: row;
  }
  
        .one {
            width: 50%;
            margin: 20px;
  }
  
        .two {
            width: 50%;
            margin: 20px;
  }
  .books-img {
  max-width: 100%;
  height: auto;
  display: block;
  margin: 0 auto;
  border: 2px solid #C9DCA9;
  border-radius: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
Explanation:

The class attribute is added to the img tag with the value of responsive-img.
In the CSS code, the .responsive-img class is defined to make the image responsive. max-width: 100% is used to make sure that the image does not overflow its container on smaller screens, while height: auto allows the image to scale proportionally. display: block and margin: 0 auto center the image horizontally within its container. The border and border-radius properties are kept to give a border and rounded corners to the image.






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
<!--This code create the Image and the text in the page-->
<div class="gif-container">
        <video autoplay muted loop class="gif">
            <source src="../../assets/banner13.mp4" type="video/mp4">
            <source src="banner13.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video> 
        <div class="text">Who we are </div>
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
<center><img src="../../assets/books.png" alt="books img" class="books-img"></center>

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