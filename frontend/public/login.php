<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

//This checks to see if the user is authenticated or not
if (isset($_SESSION['authenticated'])) {
  if($_SESSION['authenticated'] == true){
    header("Location: ../private/dashboard.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "Donavon McDowell">
    <title>LICCF Login</title>

    <link rel="stylesheet" href="../../css/loginStyles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body class="backgrounds">
    <div class='center-container'>
        <table>
            <tr><h2 style='font-size: 30px;'>LICCF Login</h2></tr>
            <tr>
                <td>Username:</td>
                <td><input type='text' name='username' id='username' required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type='password' name='password' id='password' required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" id="submit" value='Log In'autofocus/></td>
            </tr>
        </table>
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
        window.location.href = "../../frontend/private/dashboard.php";
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
</body>
</html>