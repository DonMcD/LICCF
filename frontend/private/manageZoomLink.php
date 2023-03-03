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

<form>
    <div class='centered-container'>
        <h2>Modify Zoom Link</h2>
        <label>New Link:<label>
        <input type='text'name='first_name' required>
        <input type='submit' name='submit' value='Submit'>
    </div>
</form>
</body>
</html>
