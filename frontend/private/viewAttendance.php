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
require_once '../../backend/getAttendance.php';
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
                        <td><h2>Attendance Information</h2></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="aid" id="aid" value='<?php echo $aid ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Date</h3></td>
                        <td><input type="date" name="date" id="date" value='<?php echo $date ?>'/></td>
                    </tr> 
                    <tr>
                        <td><h3>In Person</h3></td>
                        <td><input type="text" name="in_person" id="in_person" value='<?php echo $in_person ?>'/></td>
                    </tr> 
                    <tr>
                        <td><h3>Online</h3></td>
                        <td><input type="text" name="online" id="online" value='<?php echo $online ?>'/></td>
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
      const aid = document.getElementById("aid").value;
      const form = document.createElement("form");
      form.setAttribute("method", "POST");
      form.setAttribute("action", "../../backend/deleteAttendance.php");

      const didInput = document.createElement("input");
      didInput.setAttribute("type", "hidden");
      didInput.setAttribute("name", "aid");
      didInput.setAttribute("value", aid);

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
      url: "../../backend/updateAttendance.php",
      data: formData,
      success: function(response) {
        // Handle a successful response from the server here
        toastr.success('Success! Attendance has been modified');
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