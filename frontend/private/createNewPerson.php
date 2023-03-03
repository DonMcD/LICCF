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
require '../headers/topBar.php';
?>
<form style="width: 100%;">
    <div class='centered-container'>
        <h1>Create New Person</h1>
        <div>
            <label>First Name:<label>
            <input type='text'name='first_name' required>
        </div>
        <div>
            <label>Last Name:</label>
            <input type='text' name='last_name' required>
        </div>
        <div>
            <label>Title:</label>
            <input type='text' name='title'>
        </div>
        <div>
            <label>Gender:<label>
            <select name='gender' id='gender' required>
            <option value=''></option>
                <option value='male'>Male</option>
                <option value='female'>Female</option>
                <option value='other'>Other</option>
            </select>
        </div>
        <div>
            <label>Date of Birth:</label>
            <input type='date' name='title' required>
        </div>
        <div>
            <label>Work / Former Work:</label>
            <input type='text' name='title'>
        </div>
        <div>
            <label>Interests:</label>
            <input type='text' name='intererests'>
        </div>
        <div>
            <label>Account Type</label>
            <select name='accountType' id='accountType' required>
                <option value='1'>Member</option>
                <option value='2'>Volunteer</option>
                <option value='0'>Admin</option>
            </select>
        </div>

        <h2>Contact Information</h2>
        <div>
            <label>Email:</label>
            <input type='text' name='email' required>
        </div>
        <div>
            <label>Home Number:</label>
            <input type='text' name='homeNumber'>
        </div>
        <div>
            <label>Cell Number:</label>
            <input type='text' name='cellNumber'>
        </div>
        <div>
            <label>Work Number:</label>
            <input type='text' name='workNumber'>
        </div>

        <h2>Address</h2>
        <div>
            <label>Address:</label>
            <input type='text' name='address'>
        </div>
        <div>
            <label>City:</label>
            <input type='text' name='city'>
        </div>
        <div>
            <label>Postal Code:</label>
            <input type='text' name='postalCode'>
        </div>
        <div>
            <label>Province:</label>
            <select name='province' id='province'>
                <option value='alberta'>Alberta</option>
                <option value='british columbia'>British Columbia</option>
                <option value='saskatchewan'>Saskatchewan</option>
                <option value='manitoba'>Manitoba</option>
                <option value='ontario'>Ontario</option>
                <option value='quebec'>Quebec</option>
                <option value='new brunswick'>New Brunswick</option>
                <option value='newfoundland & labrador'>Newfoundland & Labrador</option>
                <option value='prince edward island'>Prince Edward Island</option>
                <option value='north west territories'>North West Territories</option>
                <option value='yukon'>Yukon</option>
                <option value='other'>Other(US)</option>
            </select>
        </div>

        <h2>Login Credentials</h2>
        <div>
            <label>Username:</label>
            <input type='text' name='username' required>
        </div>
        <div>
            <label>Password:</label>
            <input type='text' name='password' required>
        </div>
        <div>
            <input type='submit' name='submit' id='submit' value='Submit'>
        </div>
    </div>
</form>
</body>
</html>