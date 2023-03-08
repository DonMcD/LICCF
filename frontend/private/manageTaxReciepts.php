<?php
require '../../backend/authenticatePage.php'
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "Donavon McDowell">
    <title>LICCF Login</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

</head>
<body class="backgrounds">
<?php
require '../headers/header.php';
require '../headers/topBar.php';
?>
<div>
<br>
<form action='../../backend/createTaxReceipt.php' method='POST' class='tax-center-container'>
    <h2>Would you like to send out tax receipt's?</h2>
    <p>Beware, before pressing the submit button be sure all donations have been filed before you continue because this can not be undone</p>
    <br></br>
    <input type='text' name='year' placeHolder='2023'/>
    <input name='submit' type='submit' id='submit' value='Submit' class='tax-btn'/>
</form>
</div>

<script src="../../js/sidebar.js"></script>
</body>
</html>
