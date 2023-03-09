<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

//This checks to see if the user is authenticated or not
if (isset($_SESSION['authenticated'])) {
  if($_SESSION['authenticated'] == true && $_SESSION['type'] == 0){
    header("Location: ../private/dashboard.php");
    exit;
  }
  else if($_SESSION['authenticated'] == true && $_SESSION['type'] == 1){
    header("Location: ./index.php");
  }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "Donavon McDowell">
    <title>Login</title>

    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body class="backgrounds">
<?php
require '../headers/header.php';
require './sidebar.php';
?>
  <div class='login-container'>
    <div class='center-container'>
      <h2 style='font-size: 30px;'>Login</h2>
      <div class="form">
        <label>Username</label>
        <input class="input" name='username' id='username' type="text" placeHolder='Type your username' required>
        <span class="input-border"></span>
        </div>
        <div class="form">
        <label>Password</label>
        <input class="input" name='password' id='password' type="password" placeHolder='Type your password' required>
        <span class="input-border"></span>
      </div>
      <br></br>
      <input class='login-btn' type="submit" id="submit" value='Login' autofocus/>
      <br></br>
      <a href='./signup.php'>Don't have an account? Signup</a>
    </div>
  </div>
<script>
//Use ajax to check if the credentials are correct through the authenticate.php script
document.getElementById("submit").addEventListener("click", function() {
$.ajax({
  type: "POST",
  url: "../../backend/authenticate.php",
  data: { username: $("#username").val(), password: $("#password").val() },
  success: function(result) {
    if (result == "valid") {
        window.location.href = "../../backend/redirection.php";
    } else if (result == "password"){
      toastr.error("Invalid password.");
    }
    else if (result == "username"){
      toastr.error("Invalid username.");
    }
    else {
        //toastr.error("An error has occured");
        toastr.error("An error has occured, contact Donavon McDowell to get access to the Database");
    }
  }
});
})

// Get the input field
var input = document.getElementById("password");

// Execute a function when the user presses a key on the keyboard
input.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submit").click();
  }
});

</script>
<script src="../../js/sidebar.js"></script>
</body>
</html>