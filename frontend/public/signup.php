<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "Donavon McDowell">
    <title>Signup</title>
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
?>
<div class="signup-form-main">
  <div class="signup-form">
    <h1>Signup</h1>
    <hr class="signup-divider" />
    <form action="../../backend/processSignupForm.php" method="POST" class="signup-form-container">
      <div class="signup-form-section">
        <h2>Personal Information</h2>
        <div class="signup-form-row">
          <div class="signup-form-label">
            <label for="first_name">First Name</label>
          </div>
          <div class="signup-form-input">
            <input type="text" name="first_name" id="first_name" placeholder="Enter your first name" required>
          </div>
        </div>
        <div class="signup-form-row">
          <div class="signup-form-label">
            <label for="last_name">Last Name</label>
          </div>
          <div class="signup-form-input">
            <input type="text" name="last_name" id="last_name" placeholder="Enter your last name" required>
          </div>
        </div>
        <div class="signup-form-row">
          <div class="signup-form-label">
            <label for="gender">Gender</label>
          </div>
          <div class="signup-form-input">
            <select name="gender" id="gender" required>
              <option value="">Select your gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>
        <div class="signup-form-row">
          <div class="signup-form-label">
            <label for="dob">Date of Birth</label>
          </div>
          <div class="signup-form-input">
            <input type="date" name="dob" id="dob" required>
          </div>
          <div>
            <label>Attendance</label>
            <select name='attendance' id='attendance' required>
              <option value=''>Select Attendance</option>
                <option value='0'>In Person</option>
                <option value='1'>Online</option>
                <option value='2'>Hybrid</option>
            </select>
        </div>
        </div>
      </div>
      <div class="signup-form-section">
        <h2>Contact Information</h2>
        <div class="signup-form-row">
          <div class="signup-form-label">
            <label for="email">Email</label>
          </div>
          <div class="signup-form-input">
            <input type="text" name="email" id="email" placeholder="Enter your email address" required>
          </div>
        </div>
        <div class="signup-form-row">
          <div class="signup-form-label">
            <label for="home_number">Home Number</label>
          </div>
          <div class="signup-form-input">
            <input type="tel" name="home_number" id="home_number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Enter your home number">
          </div>
        </div>
        <div class="signup-form-row">
          <div class="signup-form-label">
            <label for="cell_number">Cell Number</label>
          </div>
          <div class="signup-form-input">
            <input type="tel" name="cell_number" id="cell_number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Enter your cell number">
          </div>
        </div>
        <div class="signup-form-row">
          <div class="signup-form-label">
            <label for="work_number">Work Number</label>
          </div>
          <div class="signup-form-input">
            <input type="tel" name="work_number" id="work_number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Enter your work number">
          </div>
        </div>
      </div>
      <div class="signup-form-section">
        <h2>Address</h2>
        <div>
            <label>Street Address</label>
            <input type='text' name='address' placeholder="Enter your street address">
        </div>
        <div>
            <label>City</label>
            <input type='text' name='city' placeholder="Enter your city">
        </div>
        <div>
            <label>Postal Code</label>
            <input type='text' name='postalCode' pattern="[A-Za-z]\d[A-Za-z]\d[A-Za-z]\d" placeholder="Enter postal code">
        </div>
        <div>
            <label>Province</label>
            <select name='province' id='province' required>
              <option value=''>Select Province</option>
                <option value='Alberta'>Alberta</option>
                <option value='British Columbia'>British Columbia</option>
                <option value='Saskatchewan'>Saskatchewan</option>
                <option value='Manitoba'>Manitoba</option>
                <option value='Ontario'>Ontario</option>
                <option value='Quebec'>Quebec</option>
                <option value='New Brunswick'>New Brunswick</option>
                <option value='Newfoundland & Labrador'>Newfoundland & Labrador</option>
                <option value='Prince Edward Island'>Prince Edward Island</option>
                <option value='North West Territories'>North West Territories</option>
                <option value='Yukon'>Yukon</option>
                <option value='Other'>Other(US)</option>
            </select>
        </div>
        <div class='signup-form-section'>
          <h2>About Yourself</h2>
          <div>
              <label>Work / Former Work</label>
              <input type='text' name='profession' placeholder="Enter your work / former work">
          </div>
          <div>
              <label>Interests</label>
              <input type='text' name='interest' placeholder="Enter your interests">
          </div>
        </div>
        <div class="signup-form-row">
          <div>
            <label>Role</label>
            <select name='type' id='type' required>
              <option value=''>Select Role</option>
                <option value='1'>Member</option>
                <option value='2'>Volunteer</option>
            </select>
        </div>
        </div>
      </div>
        <h2>Login Credentials</h2>
          <div>
              <label>Username</label>
              <input type='text' name='username' readonly>
          </div>
          <div>
              <label>Password</label>
              <input type='password' name='password' id='password' placeholder="Enter your password" required>
          </div>
          <div>
              <label>Confirm Password</label>
              <input type='password' name='password2' id='password2' placeholder="Confirm your password" required>
          </div>
          <div>
              <input type='submit' name='submit' id='submit' value='Submit'>
          </div>
      </form>
  </div>
</div>
<script>

//Used to update the username field
// Get the first name and last name input fields
const firstNameInput = document.querySelector('input[name="first_name"]');
const lastNameInput = document.querySelector('input[name="last_name"]');

// Get the username input field
const usernameInput = document.querySelector('input[name="username"]');

// Add an event listener to the first name and last name input fields
// that updates the username field whenever they change
firstNameInput.addEventListener('input', updateUsername);
lastNameInput.addEventListener('input', updateUsername);

// Function that updates the username field based on the first and last name fields
function updateUsername() {
  // Get the values of the first name and last name input fields
  const firstName = firstNameInput.value.trim().toLowerCase();
  const lastName = lastNameInput.value.trim().toLowerCase();

  // If either field is empty, clear the username field
  if (!firstName || !lastName) {
    usernameInput.value = '';
    return;
  }

  // Create the username by combining the first and last name with a period
  const username = `${firstName}.${lastName}`;

  // Update the value of the username input field
  usernameInput.value = username;
}

const form = document.querySelector('form');
const password1 = document.querySelector('input[name="password"]');
const password2 = document.querySelector('input[name="password2"]');
const submitButton = document.querySelector('#submit');

function onSubmit(event) {
  if (password1.value !== password2.value) {
    event.preventDefault(); // prevent form from submitting
    toastr.error('Passwords do not match');
    password1.value = '';
    password2.value = '';
    submitButton.disabled = true;
    form.removeEventListener('submit', onSubmit); // unbind submit event listener
    setTimeout(() => {
      form.addEventListener('submit', onSubmit); // rebind submit event listener after a short delay
      submitButton.disabled = false; // enable submit button
    }, 1000);
  }
}

form.addEventListener('submit', onSubmit);

</script>
<script src="../../js/sidebar.js"></script>


</body>
</html>