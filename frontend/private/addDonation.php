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
if($_SESSION['type'] == 0){
    require '../headers/topBar.php';
}
?>

<div class="profile-main-container">
    <div class='profile-inner-container'>
        <div class='profile-section'>
            <form id="profileForm" method='POST'>
                <table>
                    <tr>
                        <td><h2>Donation Information</h2></td>
                    </tr>
                        <td><h3>Member</h3></td>
                        <td>
                        <input type="text" id="searchField" placeholder="Search for a member...">
                        <select name='searchResults' id='searchResults' required><?php require '../../backend/getMembers.php'; ?></select>
                        <input type="text" name="pid" id="pid" value='' hidden>
                        <script>
                            const dropdown = document.getElementById('searchResults');
                            const pid = document.getElementById('pid');
                            pid.value = dropdown.value;
                            
                            dropdown.addEventListener('change', () => {
                                pid.value = dropdown.value;
                            });
                        </script>

                        </td>
                    <tr>
                        <td><h3>Amount</h3></td>
                        <td><input type="text" name="amount" id="amount" placeHolder='$' required/></td>
                    </tr>
                    <tr>
                        <td><h3>Date</h3></td>
                        <td><input type="date" name="date" id="date" value='' required/></td>
                    </tr>
                    <tr>
                        <td><h3>Type</h3></td>
                        <td>
                            <select name="type-drop" id="type-drop" required>
                                <option value='0' id='in-person'>Cash</option>
                                <option value='1' id='online'>E-Transfer</option>
                            </select>
                            <td><input type="text" name="type" id="type" value='' hidden/></td>
                            <script>
                                $dropdown = document.getElementById('type-drop');
                                $type = document.getElementById('type');
                                $type.value = $dropdown.value;

                                $dropdown.addEventListener("click", () => {
                                    $type.value = $dropdown.value;
                                });
                            </script>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Envelope Number</h3></td>
                        <td><input type="text" name="env_number" id="env_number" placeHolder='#'/></td>
                    </tr>
                    <tr>
                        <td><h3>E-Transfer Email</h3></td>
                        <td><input type="text" name="email" id="email" value=''/></td>
                    </tr>
                    <tr>
                        <td><h3>Security Question Answer</h3></td>
                        <td><input type="text" name="sec_question" id="sec_question" value=''/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type='submit' value='Submit' id='submitButton2'/></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<script>




$(document).ready(function() {
  $("#profileForm").submit(function(event) {
    // Prevent default form submission
    event.preventDefault();

    // Serialize form data
    var formData = $(this).serialize();

    // Send AJAX request
    $.ajax({
      url: "../../backend/createDonation.php",
      type: "POST",
      data: formData,
      success: function(response) {
        // Display toastr alert
        toastr.success("Donation successfully created!");
      },
      error: function(xhr, status, error) {
        toastr.error("Error: " + error);
      }
    });
  });
});



</script>
<script src="../../js/sidebar.js"></script>
</body>
</html>