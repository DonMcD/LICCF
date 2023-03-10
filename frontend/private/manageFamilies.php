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
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body class="backgrounds">
<?php
require '../headers/header.php';
require '../headers/topBar.php';
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
        </form>
</div>
    <div>
        <?php
            //Dont delete
            //require '../misc/loading.php';
        ?>
    </div>
    <div class="results">
        <?php
            require '../../backend/familySearch.php';
        ?>
    </div>
</div>

<!--USED FOR AJAX CALL TO SEARCH.PHP - DO NOT TOUCH -->
<script>
$(document).ready(function() {
    $("form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../../backend/familySearch.php",
            data: $("form").serialize(),
            success: function(data) {
                $(".results").html(data);
            }
        });
    });
    // Attach event handlers to all checkboxes, radio buttons, textbox, and dropdown
    $("input[type='checkbox'], input[type='radio'], input[type='text'], select").change(function() {
        // Submit the form
        $("form").submit();
    });
    $(document).on('click', 'input[type="radio"]', function() {
        // Submit the form
        $("form").submit();
    });
});
</script>
<script src="../../js/sidebar.js"></script>
</body>
</html>


