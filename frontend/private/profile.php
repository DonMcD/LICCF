
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
session_start();
require '../headers/header.php';
if($_SESSION['type'] == 0){
    require '../headers/topBar.php';
}
require_once '../../backend/getProfileData.php';
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
                        <td><h2>Personal Information</h2></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="pid" id="pid" value='<?php echo $pid ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>First Name</h3></td>
                        <td><input type="text" name="first_name" id="first_name" value='<?php echo $fname ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Last Name</h3></td>
                        <td><input type="text" name="last_name" id="last_name" value='<?php echo $lname ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Gender</h3></td>
                        <td><input type="text" name="gender" id="gender" value='<?php echo $gender ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Attendance</h3></td>
                        <td>
                            <select name="atten-drop" id="atten-drop">
                                <option value='0' id='in-person' <?php if ($attendance == 0) echo 'selected'; ?>>In Person</option>
                                <option value='1' id='online'<?php if ($attendance == 1) echo 'selected'; ?>>Online</option>
                                <option value='2' id='hybrid' <?php if ($attendance == 2) echo 'selected'; ?>>Hybrid</option>
                            </select>
                            <td><input type="text" name="attendance" id="attendance" value='' hidden/></td>
                        <script>
                            $dropdown = document.getElementById('atten-drop');
                            $attendance = document.getElementById('attendance');
                            $attendance.value = $dropdown.value;

                            $dropdown.addEventListener("click", () => {
                                $attendance.value = $dropdown.value;
                            });
                        </script>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>DOB</h3></td>
                        <td><input type="date" name="dob" id="dob" value='<?php echo $dob ?>'/></td>
                    </tr>
                    <tr>
                        <td><h2>Contact Information</h2></td>
                    </tr>
                    <tr>
                        <td><h3>Email</h3></td>
                        <td><input type="text" name="email" id="email" value='<?php echo $email ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Home Number</h3></td>
                        <td><input type="text" name="h_number" id="h_number" value='<?php echo $h_number ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Cell Number</h3></td>
                        <td><input type="text" name="c_number" id="c_number" value='<?php echo $c_number ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Work Number</h3></td>
                        <td><input type="text" name="w_number" id="w_number" value='<?php echo $w_number ?>'/></td>
                    </tr>
                    <tr>
                        <td><h2>Address</h2></td>
                    </tr>
                    <tr>
                        <td><h3>Street Address</h3></td>
                        <td><input type="text" name="address" id="address" value='<?php echo $address ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>City</h3></td>
                        <td><input type="text" name="city" id="city" value='<?php echo $city ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Postal Code</h3></td>
                        <td><input type="text" name="postalCode" id="postalCode" value='<?php echo $postal_code ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Province</h3></td>
                        <td><input type="text" name="province" id="province" value='<?php echo $province ?>'/></td>
                    </tr>
                    <tr>
                        <td><h2>About Yourself</h2></td>
                    </tr>
                    <tr>
                        <td><h3>Work / Former Work</h3></td>
                        <td><input type="text" name="profession" id="profession" value='<?php echo $profession ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Interests</h3></td>
                        <td><input type="text" name="interest" id="interest" value='<?php echo $interest ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Role</h3></td>
                        <td>
                            <select name="type-drop" id="type-drop">
                                <?php if($_SESSION['type'] == 0): ?>
                                    <option value="0" id="admin"<?php if ($type == 0) echo ' selected'; ?>>Admin</option>
                                <?php endif; ?>
                                <option value="1" id="member"<?php if ($type == 1) echo ' selected'; ?>>Member</option>
                                <option value="2" id="volunteer"<?php if ($type == 2) echo ' selected'; ?>>Volunteer</option>
                            </select>
                            <input type="hidden" name="type" id="type" value="">
                            <script>
                                const dropdown = document.getElementById('type-drop');
                                const attendance = document.getElementById('type');
                                attendance.value = dropdown.value;

                                dropdown.addEventListener("change", () => {
                                    attendance.value = dropdown.value;
                                });
                            </script>
                        </td>
                    </tr>

                    <tr>
                        <td><h2>Login Credentials</h2></td>
                    </tr>
                    <tr>
                        <td><h3>Username</h3></td>
                        <td><input type="text" name="username" id="username" value='<?php echo $username ?>'/></td>
                    </tr>
                    <tr>
                        <td><h3>Password</h3></td>
                        <td><input type="password" name="password" id="password"/></td>
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

  // If the user confirmed the deletion, redirect to delete.php with the PID field POSTed
  if (confirmed) {
    const pid = document.getElementById("pid").value;
    const form = document.createElement("form");
    form.setAttribute("method", "POST");
    form.setAttribute("action", "../../backend/deleteProfile.php");

    const pidInput = document.createElement("input");
    pidInput.setAttribute("type", "hidden");
    pidInput.setAttribute("name", "pid");
    pidInput.setAttribute("value", pid);

    form.appendChild(pidInput);
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
      url: "../../backend/updateProfile.php",
      data: formData,
      success: function(response) {
        // Handle a successful response from the server here
        toastr.success('Success! User Profile has been modified');
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

