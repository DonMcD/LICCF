<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

//This checks to see if the user is authenticated or not
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: ../public/login.php");
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
            <br>
            <div>
                <label>Minimum ($)</label>
                <input type='text' name='min' value='1'/>
                <label>Maximum ($)</label>
                <input type='text' name='max' value='5000'/>
            </div>
            <br>
            <div>
                <select name="year">
                    <?php
                    //Dynamically adjusts the dropdown for the current year
                    $currentYear = date('Y');
                    echo "<option value=''>Year</option>";
                    for ($i = $currentYear; $i >= $currentYear - 10; $i--) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    }
                    ?>
                </select>

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
            require '../../backend/donationSearch.php';
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
            url: "../../backend/donationSearch.php",
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

//Submit using POST instead of GET
function submitForm(did) {
  // Create a new form element
  var form = document.createElement('form');
  form.method = 'POST';
  form.action = '../private/viewDonation.php';

  // Add a hidden input field for the pid value
  var pidInput = document.createElement('input');
  pidInput.type = 'hidden';
  pidInput.name = 'did';
  pidInput.value = did;
  form.appendChild(pidInput);

  // Submit the form
  document.body.appendChild(form);
  form.submit();
}
</script>