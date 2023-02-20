<?php

function countMembers() {
    require 'serverDetails.php';
    // Create a connection
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Run a query to count the number of records
    $sql = "SELECT COUNT(*) as total_members FROM members";
    $result = mysqli_query($conn, $sql);

    // Get the result
    $row = mysqli_fetch_assoc($result);
    $count = $row['total_members'];

    // Close the connection
    mysqli_close($conn);

    return $count;
}

function countFamily() {
    require 'serverDetails.php';
    // Create a connection
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Run a query to count the number of records
    $sql = "SELECT COUNT(*) as total_family FROM family";
    $result = mysqli_query($conn, $sql);

    // Get the result
    $row = mysqli_fetch_assoc($result);
    $count = $row['total_family'];

    // Close the connection
    mysqli_close($conn);

    return $count;
}

function sumDonations() {
    require 'serverDetails.php';
    // Create a connection
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Run a query to sum the amount column
    $sql = "SELECT SUM(amount) as total_donations FROM donations";
    $result = mysqli_query($conn, $sql);

    // Get the result
    $row = mysqli_fetch_assoc($result);
    $total = $row['total_donations'];

    // Close the connection
    mysqli_close($conn);

    return round($total, 2);
}

function getLatestMember() {
    require 'serverDetails.php';
    // Create a connection to the database
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the query
    $sql = "SELECT * FROM members ORDER BY start_date DESC LIMIT 1";

    // Execute the query
    $result = $conn->query($sql);

    // Check if there is a result
    if ($result->num_rows > 0) {
        // Fetch the result as an associative array
        $row = $result->fetch_assoc();

        // Close the database connection
        $conn->close();

        // Return the result as an object
        return (object) $row;
    } else {
        // Close the database connection
        $conn->close();

        // Return null if there is no result
        return null;
    }
}

function getLatestDonation() {
    require 'serverDetails.php';
    // Create a connection to the database
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the query
    $sql = "SELECT * FROM donations ORDER BY date DESC LIMIT 1";

    // Execute the query
    $result = $conn->query($sql);

    // Check if there is a result
    if ($result->num_rows > 0) {
        // Fetch the result as an associative array
        $row = $result->fetch_assoc();

        // Close the database connection
        $conn->close();

        // Return the result as an object
        return (object) $row;
    } else {
        // Close the database connection
        $conn->close();

        // Return null if there is no result
        return null;
    }
}

function getLatestMembers() {
    require 'serverDetails.php';
    // Create a new object to store the latest members
    $latestMembers = new stdClass();

    // Connect to your database using mysqli_connect
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    // Prepare and execute a query to select the three latest members from the members table
    $sql = "SELECT * FROM members ORDER BY start_date DESC LIMIT 3";
    $result = mysqli_query($conn, $sql);

    // Fetch the results and store each member as an object within the latestMembers object
    while ($row = mysqli_fetch_assoc($result)) {
        $member = new stdClass();
        $member->pid = $row['pid'];
        $member->f_name = $row['f_name'];
        $member->l_name = $row['l_name'];
        $member->start_date = $row['start_date'];
        $member->province = $row['province'];
        $member->attendance = $row['attendance'];
        switch($member->attendance = $row['attendance']){
            case 1:
                $member->attendance = 'In Person';
            break;
            case 2:
                $member->attendance = 'Online';
            break;
            case 3:
                $member->attendance = 'Hybrid';
            break;
        }
        $latestMembers->{$row['pid']} = $member;
    }

    // Close the database connection
    mysqli_close($conn);

    // Return the latestMembers object
    return $latestMembers;
}

function MembersJoinedInTheLastMonth() {
    require 'serverDetails.php';
    // Connect to your database, for example:
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
  
    // Calculate the date exactly one month ago
    $one_month_ago = date('Y-m-d', strtotime('-1 month'));
  
    // Build the SQL query to count the members who joined in the last month
    $sql = "SELECT COUNT(*) AS num_members FROM member WHERE start_date >= '$one_month_ago'";
  
    // Execute the query and get the result
    $result = mysqli_query($conn, $sql);
  
    // Check if the query was successful
    if (!$result) {
      die('Error: ' . mysqli_error($conn));
    }
  
    // Get the number of members who joined in the last month from the result
    $row = mysqli_fetch_assoc($result);
    $num_members = $row['num_members'];
  
    // Close the database connection
    mysqli_close($conn);
  
    // Return the number of members who joined in the last month
    return $num_members;
}
  


?>
