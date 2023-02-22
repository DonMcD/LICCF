<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

//This checks to see if the user is authenticated or not
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: ../frontend/login.php");
    exit;
}
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
require '../headers/topBar.php';
require '../../backend/getProfileData.php';
?>
<div class="profile-main-container">
    <div class='profile-inner-container'>
        <div class='profile-section'>
            <table>
                <tr>
                    <td><h2>Personal Information</h2></td>
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
                    <td><h3>DOB</h3></td>
                    <td><input type="text" name="dob" id="dob" value='<?php echo $dob ?>'/></td>
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
        </div>
    </div>
</div>
</body>
</html>

