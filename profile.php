<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

//This checks to see if the user is authenticated or not
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "Donavon McDowell">
    <title>LICCF Login</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

</head>
<body style="background-color: rgb(245,245,221)">
<?php
require 'header.php';
require 'topBar.php';
?>
<div class="main-container">
    <div class='centered-container'>
        <?php
        require 'serverDetails.php';

        //Personal ID
        $pid = $_GET['pid'];

        // Create connection
        $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

        // Connect
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT *
        FROM members
        LEFT JOIN family ON members.fid = family.fid
        LEFT JOIN titles ON members.pid = titles.tid
        WHERE members.pid = {$pid}";

        $result = $conn->query($sql);

        $row = $result->fetch_assoc();

        echo "
        Name: {$row['f_name']}  {$row['l_name']} <br>
        Family: {$row['name']} <br>
        DOB: {$row['dob']} <br>
        Gender: {$row['gender']} <br>
        Start Date: {$row['start_date']} <br>
        Profession: {$row['profession']} <br>
        Baptized: {$row['baptized']} <br>
        Confirmation: {$row['confirmation']} <br>
        Confirmation Date: {$row['confirmation_date']} <br>
        Cell Number: {$row['c_number']} <br>
        Home Number: {$row['h_number']} <br>
        Work Number: {$row['w_number']} <br>
        Email: {$row['email']} <br>
        Address: {$row['address']} <br>
        City: {$row['city']} <br>
        Postal Code: {$row['postal_code']} <br>
        Province: {$row['province']} <br>




        
        
        
        
        ";

        mysqli_close($conn);

        ?>    
    </div>
</div>
</body>
</html>

