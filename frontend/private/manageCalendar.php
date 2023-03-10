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
<div class='centered-container'>
<div><a href='https://calendar.google.com/calendar/u/2/r/settings/calendar/YmQ0Y2E5OTkwMTFmNmFhMjYyYzJlMDFkZmZlZjE3OTIyYTIwNTQzNDg1OGMyZWVmNzg4OGZhMjU3MDEyYzY5MkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t'>Click here to edit</a></div>
    <iframe src="https://calendar.google.com/calendar/embed?src=bd4ca999011f6aa262c2e01dffef17922a205434858c2eef7888fa257012c692%40group.calendar.google.com&ctz=America%2FEdmonton" style="border: 0" width="100%" height="700" frameborder="0" scrolling="no"></iframe>
</div>
<script src="../../js/sidebar.js"></script>
</body>
</html>
