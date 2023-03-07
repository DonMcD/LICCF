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
        <div class="inner-side-bar">
            <form method='POST' action='managePeople.php'>
                <input type='button' value='New' id='newMemberButton'>
                <h2>Filters</h2>
                <div>
                        <input type='text' name='searchBar' id='searchBar' placeHolder='Search'>
                    </div>
                    <div>
                        <h3>Gender</h3>
                        <select name='gender' id='gender'>
                            <option value='All'>All</option>
                            <option value='Male'>Male</option>
                            <option value='Female'>Female</option>
                            <option value='Other'>Other</option>
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
                            <input type='checkbox' name='administrator' value='administrator' checked>
                        </div>
                        <div>
                            <label>Volunteer: </label>
                            <input type='checkbox' name='volunteer' value='volunteer' checked>
                        </div>
                </div>
            </form>
        </div>
    </div>
<div>
        <?php
            //Dont delete
            //require '../misc/loading.php';
        ?>
    </div>
    <div class="results">
        <?php
            require '../../backend/peopleSearch.php';
        ?>
    </div>
</div>

<!--USED FOR AJAX CALL TO SEARCH.PHP - DO NOT TOUCH -->
<script>
$(document).ready(function() {
    // Attach event handlers to all checkboxes, radio buttons, textbox, and dropdown
    $("input[type='checkbox'], input[type='radio'], input[type='text'], select").change(function() {
        // Submit the form
        $("form").submit();
    });
    $("#searchBar").on('input', function() {
        // Submit the form
        $("form").submit();
    });

    $("form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../../backend/peopleSearch.php",
            data: $("form").serialize(),
            success: function(data) {
                $(".results").html(data);
            }
        });
    });
});



//Submit using POST instead of GET
function submitForm(pid) {
  // Create a new form element
  var form = document.createElement('form');
  form.method = 'POST';
  form.action = '../private/profile.php';

  // Add a hidden input field for the pid value
  var pidInput = document.createElement('input');
  pidInput.type = 'hidden';
  pidInput.name = 'pid';
  pidInput.value = pid;
  form.appendChild(pidInput);

  // Submit the form
  document.body.appendChild(form);
  form.submit();
}

const newDonationButton = document.getElementById('newMemberButton');
  newDonationButton.addEventListener('click', () => {
    window.location.href = './addMember.php';
  });

</script>
<script src="../../js/sidebar.js"></script>
</body>
</html>



