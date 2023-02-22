<?php
//USE THIS CODE ON EVERY PAGE THAT REQUIRES USER AUTHENTICATION!!
session_start();

//This checks to see if the user is authenticated or not
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: ../public/login.php");
    exit;
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "Donavon McDowell">
    <title>LICCF Login</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body class="backgrounds">
<?php
require '../headers/header.php';
require '../headers/topBar.php';
require '../../backend/dashboardFunctions.php';
$totalMembers = countMembers();
$totalFamilies = countFamily();
$totalDonations = sumDonations();
$latestMember = getLatestMember();
$latestMembers = getLatestMembers();
?>

<div class="dashboard-main-container">
    <div class='stats-row-container'>
        <div class='stats-container'>
            <h2>Total Members</h2>
            <?php echo "{$totalMembers} Members"?>
        </div>
        <div class='stats-container'>
            <h2>Total Families</h2>
            <?php echo "{$totalFamilies} Families"?>
        </div>
        <div class='stats-container'>
        <h2>Total Donations</h2>
            <?php echo "$"."{$totalDonations}"?>
        </div>
    </div>
    <div class='latest-members-main-container'>
        <h3>Latest Members</h3>
        <hr>
        <div class='latest-members-container'>
            <?php
                foreach ($latestMembers as $member){
                    if($member){
                        echo "
                        <div class='latest-members-wrapper'>
                            <h3>$member->f_name</h3>
                            <h3>$member->l_name</h3>
                            <h3>$member->start_date</h3>
                            <h3>$member->province</h3>
                            <h3>$member->attendance</h3>
                        </div>
                        ";
                    } else {
                        echo "<h2>No members exist</h2>";
                    }
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>