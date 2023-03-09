<?php
require '../../backend/authenticatePage.php'
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "Donavon McDowell">
    <title>LICCF Signup</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/signup.css">

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
<div class="signup-form-main">
  <div id='form'>
    <div class="signup-form">
      <h1>Create Event Attendance</h1>
      <hr class="signup-divider" />
      <form class="attendance-form" method='POST'>
        <div class="signup-form-section">
          <div class="signup-form-row">
            <div class="signup-form-label">
              <label for="date">Date</label>
            </div>
            <div class="signup-form-input">
              <input type="date" name="date" id="date" required>
            </div>
          </div>
          <div class="signup-form-row">
            <div class="signup-form-label">
              <label for="in_person">In Person</label>
            </div>
            <div class="signup-form-input">
              <input type="text" name="in_person" id="in_person" required>
            </div>
          </div>
          <div class="signup-form-row">
            <div class="signup-form-label">
              <label for="online">Online</label>
            </div>
            <div class="signup-form-input">
              <input type="text" name="online" id="online" required>
            </div>
          </div>         
        </div>
      </form>
    </div>
  </div>
  <div class='forms-footer'>
    <button onclick="duplicateForm()">Add Another Form</button>
    <button onclick="submitAllForms()">Submit All Forms</button>
  </div>
  <br>
</div>

<script>
function duplicateForm() {
  var form = document.querySelector('.signup-form');
  var body = document.querySelector('#form');
  var clone = form.cloneNode(true);
  body.appendChild(clone);
}
function submitAllForms() {
  var forms = document.querySelectorAll('.attendance-form');
  for (var i = 0; i < forms.length; i++) {
    var formData = $(forms[i]).serialize();
    $.ajax({
      url: "../../backend/createAttendance.php",
      type: "POST",
      data: formData,
      success: function(response) {
        toastr.success("Attendance successfully created!");
      },
      error: function(xhr, status, error) {
        toastr.error("Error: " + error);
      }
    });
  }
}
</script>

<script src="../../js/sidebar.js"></script>
</body>
</html>