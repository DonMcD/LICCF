<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

//This checks to see if the user is authenticated or not
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "Donavon McDowell">
    <title>LICCF Login</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

</head>
<body style="background-color: rgb(245,245,221)">
<?php

require 'header.php';
require 'topBar.php';
?>

<div class="main-container">
    <div class="side-bar">
        <form method='POST' action='home.php'>
            <div class="side-bar-header">
                <h2>Filters</h2>
            </div>
            <div>
            <br>
                <input type='text' name='searchBar' placeHolder='Search'>
                <input type='submit' name='submitSearch' value='Search'>
            </div>
            <div>
                <h3>Sort For</h3>
                <div>
                <label>Person:</label>
                    <input type='radio' name='sortBy' value='person' checked>
                </div>
                <div>
                <label>Family:</label>
                    <input type='radio' name='sortBy' value='family'>
                </div>
                <div>
                <label>Donations:</label>
                    <input type='radio' name='sortBy' value='donations'>
                </div>
            </div>
            <div>
                <h3>Church</h3>
                <div>
                    <label>Baptized: </label>
                    <input type='checkbox' name='baptized' value='baptized'>
                </div>
                <div>
                    <label>Confirmed: </label>
                    <input type='checkbox' name='confirmed' value='confirmed'>
                </div>
            </div>
            <div>
                <h3>Gender</h3>
                <select name='gender' id='gender'>
                    <option value=''>All</option>
                    <option value='male'>Male</option>
                    <option value='female'>Female</option>
                    <option value='other'>Other</option>
                </select>
            </div>
            <div>
                <h3>Type</h3>
                <div>
                    <label>Member: </label>
                    <input type='checkbox' name='member' value='member' checked>
                </div>
                <div>
                    <label>Admin: </label>
                    <input type='checkbox' name='admin' value='admin' checked>
                </div>
                <div>
                    <label>Volunteer: </label>
                    <input type='checkbox' name='volunteer' value='volunteer' checked>
                </div>
            </div>
        </form>
    </div>
    <div class="results">
        <?php
        require 'search.php';
        ?>
    </div>

<!--USED FOR AJAX CALL TO SEARCH.PHP - DO NOT TOUCH -->
<script>
$(document).ready(function() {
    $("form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "search.php",
            data: $("form").serialize(),
            success: function(data) {
                $(".results").html(data);
            }
        });
    });
});
</script>
</div>
</body>
</html>

