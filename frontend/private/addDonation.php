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
            <form id="profileForm" class='donation-form' method='POST'>
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
                </table>
            </form>
        </div>
    </div>
    <div class='forms-footer'>
        <button onclick="duplicateForm()">Add Another Form</button>
        <button onclick="submitAllForms()">Submit All Forms</button>
    </div>
</div>
<script>
function duplicateForm() {
  var form = document.querySelector('.donation-form');
  var body = document.querySelector('.profile-inner-container');
  var clone = form.cloneNode(true);
  body.appendChild(clone);
}
function submitAllForms() {
    var dropBox = document.getElementById('searchResults');
    var amount = document.getElementById('amount');
    var date = document.getElementById('date');
    var forms = document.querySelectorAll('.donation-form');
    if (dropBox.value === '') {
        toastr.error("Please select a member.");
    } else {
        if (amount.value === '') {
        toastr.error("Please select an amount.");
        } else {
            if (date.value === '') {
            toastr.error("Please select a date.");
            } else {
                for (var i = 0; i < forms.length; i++) {
                    var formData = $(forms[i]).serialize();
                    $.ajax({
                        url: "../../backend/createDonation.php",
                        type: "POST",
                        data: formData,
                        success: function(response) {
                            toastr.success("Donation successfully created!");
                        },
                        error: function(xhr, status, error) {
                            toastr.error("Error: " + error);
                        }
                    });
                }
            }
        }
    }
}

// Get the text input field and the div to display the search results
var searchField = document.getElementById('searchField');
var searchResults = document.getElementById('searchResults');

// Listen for changes in the text input field
searchField.addEventListener('input', function() {
  // Get the search term from the text input field
  var searchTerm = searchField.value;

  // Send an AJAX request to the PHP script
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Update the div with the search results
        searchResults.innerHTML = xhr.responseText;
      } else {
        console.error('Error: ' + xhr.status);
      }
    }
  };
  xhr.open('GET', '../../backend/getMembers.php?term=' + searchTerm, true);
  xhr.send();
});
</script>
<script src="../../js/sidebar.js"></script>
</body>
</html>