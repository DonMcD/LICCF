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
require_once '../../backend/getDonationData.php';
?>
<script>
        $(document).ready(function(){
            // Initially setting all input fields to disabled
            $('input[type="text"]').prop('readonly', true);
            $('select').prop('disabled', true);
            $('input[type="date"]').prop('readonly', true);
            // Hide delete and submit buttons initially
            $('#deleteButton').hide();
            $('#submitButton').hide();
            $('#cancelButton').hide();
            $('#submitButton2').hide();
            $('#cancelButton2').hide();
            

            $('#editButton').click(function(){
                // Enable all input fields
                $('input[type="text"]').prop('readonly', false);
                $('select').prop('disabled', false);
                $('input[type="date"]').prop('readonly', false);

                // Show delete and submit buttons
                $('#deleteButton').show();
                $('#submitButton').show();
                $('#cancelButton').show();
                $('#submitButton2').show();
                $('#cancelButton2').show();
            });
            $('#cancelButton').click(function(){
                // Enable all input fields
                $('input[type="text"]').prop('readonly', true);
                $('select').prop('disabled', true);
                $('input[type="date"]').prop('readonly', true);

                // Show delete and submit buttons
                $('#deleteButton').hide();
                $('#submitButton').hide();
                $('#cancelButton').hide();
                $('#submitButton2').hide();
                $('#cancelButton2').hide();

            });
            $('#cancelButton2').click(function(){
                // Enable all input fields
                $('input[type="text"]').prop('readonly', true);
                $('select').prop('disabled', true);
                $('input[type="date"]').prop('readonly', true);

                // Show delete and submit buttons
                $('#deleteButton').hide();
                $('#submitButton').hide();
                $('#cancelButton').hide();
                $('#submitButton2').hide();
                $('#cancelButton2').hide();

            });
            $('#submitButton').click(function(){
                // Enable all input fields
                $('input[type="text"]').prop('readonly', true);
                $('select').prop('disabled', true);
                $('input[type="date"]').prop('readonly', true);

                // Show delete and submit buttons
                $('#deleteButton').hide();
                $('#submitButton').hide();
                $('#cancelButton').hide();
                $('#submitButton2').hide();
                $('#cancelButton2').hide();

            });
            $('#submitButton2').click(function(){
                // Enable all input fields
                $('input[type="text"]').prop('readonly', true);
                $('select').prop('disabled', true);
                $('input[type="date"]').prop('readonly', true);

                // Show delete and submit buttons
                $('#deleteButton').hide();
                $('#submitButton').hide();
                $('#cancelButton').hide();
                $('#submitButton2').hide();
                $('#cancelButton2').hide();

            });
        });
</script>

<div class="profile-main-container">
    <div class='profile-inner-container'>
        <div class='profile-section'>
            <form id="profileForm" action='../../backend/updateProfile.php' method='POST'>
                <table>
                    <tr>
                        <td colspan="2"><input type='button' id='editButton' value='Edit' name='editButton'></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type='button' value='Cancel' id='cancelButton'/></td>
                    </tr>
                    <tr>
                        <td><input type='button' value='Delete' id='deleteButton'/></td>
                        <td><input type='submit' value='Submit' id='submitButton'/></td>
                    </tr>
                    <tr>
                        <td><h2>Donation Information</h2></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="did" id="did" value='<?php echo $did ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>First Name</h3></td>
                        <td><input type="text" name="first_name" id="first_name" value='<?php echo $fName ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Last Name</h3></td>
                        <td><input type="text" name="last_name" id="last_name" value='<?php echo $lName ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Amount</h3></td>
                        <td><input type="text" name="amount" id="amount" value='$<?php echo $amount ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Date</h3></td>
                        <td><input type="date" name="date" id="date" value='<?php echo $date ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Type</h3></td>
                        <td>
                            <select name="type-drop" id="type-drop">
                                <option value='0' id='in-person' <?php if ($type == 0) {echo 'selected';} ?>>Cash</option>
                                <option value='1' id='online'<?php if ($type == 1) {echo 'selected';} ?>>E-Transfer</option>
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
                        <td><input type="text" name="env_number" id="env_number" value='#<?php echo $envNumber ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>E-Transfer Email</h3></td>
                        <td><input type="text" name="email" id="email" value='<?php echo $transfer_email ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Security Question Answer</h3></td>
                        <td><input type="text" name="sec_question" id="sec_question" value='<?php echo $secQuestion ?>'/></td>
                    </tr>
                    <tr>
                        <td><input type='button' value='Cancel' id='cancelButton2'/></td>
                        <td><input type='submit' value='Submit' id='submitButton2'/></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<script>
  // Get the delete button
  const deleteButton = document.getElementById("deleteButton");

  // Add a click event listener to the delete button
  deleteButton.addEventListener("click", () => {
    // Display a confirmation popup
    const confirmed = confirm("Are you sure you want to delete this profile?");

    // If the user confirmed the deletion, redirect to delete.php with the DID field POSTed
    if (confirmed) {
      const did = document.getElementById("did").value;
      const form = document.createElement("form");
      form.setAttribute("method", "POST");
      form.setAttribute("action", "../../backend/deleteDonation.php");

      const didInput = document.createElement("input");
      didInput.setAttribute("type", "hidden");
      didInput.setAttribute("name", "did");
      didInput.setAttribute("value", did);

      form.appendChild(didInput);
      document.body.appendChild(form);
      form.submit();
    }
  });


  //Used for AJAX
    $(document).ready(function() {
  // Attach a submit handler to the form
  $("#profileForm").submit(function(event) {
    // Stop the form from submitting normally
    event.preventDefault();
  
    // Serialize the form data into a JavaScript object
    var formData = $(this).serialize();
    
    // Send an AJAX request to the server
    $.ajax({
      type: "POST",
      url: "../../backend/updateDonation.php",
      data: formData,
      success: function(response) {
        // Handle a successful response from the server here
        toastr.success('Success! Donatation has been modified');
        console.log(response);
      },
      error: function(xhr, status, error) {
        // Handle errors here
        console.error(xhr, status, error);
      }
    });
  });
});
</script>

</body>
</html>