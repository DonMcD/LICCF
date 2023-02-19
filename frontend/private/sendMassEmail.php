<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();


//This checks to see if the user is authenticated or not
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: ../frontend/login.php");
    exit;
}
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
<div class='centered-container'>
    <form action="" method="post">
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject">
        <br>
        <label for="message">Message:</label>
        <textarea name="message" id="message"></textarea>
        <br>
        <input type="submit" name="submit" value="Send Emails">
    </form>
</div>
</body>
</html>

