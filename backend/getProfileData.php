<?php
        require '../backend/serverDetails.php';

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