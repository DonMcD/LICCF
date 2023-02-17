<?php

require '../backend/serverDetails.php';
//hellooooooooooooooooooooooooooooooooooooooooooo

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//esffwad
// Get the data from the "members" table
//$query = "SELECT f_name, l_name, dob, type, status FROM members WHERE status = 0";

//Variables for the filters
if(isset($_POST['sortBy'])){
  $sortFor = $_POST['sortBy'];
} else {
  $sortFor = 'person';
}
if(isset($_POST['baptized'])){
  $baptized = $_POST['baptized'];
} else {
  $baptized = ''; 
}
if(isset($_POST['confirmed'])){
  $confirmed = $_POST['confirmed'];
} else {
  $confirmed = '';
}
if(isset($_POST['gender'])){
  $gender = $_POST['gender'];
} else {
  $gender = '';
}
if(isset($_POST['member'])){
  $member = $_POST['member'];
} else {
  $member = '';
}
if(isset($_POST['admin'])){
  $admin = $_POST['admin'];
} else {
  $admin = '';
}
if(isset($_POST['volunteer'])){
  $volunteer = $_POST['volunteer'];
} else {
  $volunteer = '';
}
switch($sortFor){
  case 'person':
      if(isset($_POST['searchBar'])){
        $searchBar = $_POST['searchBar'];
        $query = "SELECT m.f_name, m.l_name, m.dob, m.type, m.status, f.name, t.title, m.pid, m.baptized, m.gender, m.confirmation, m.start_date, m.city
        FROM members m
        LEFT JOIN family f
        ON m.fid = f.fid
        LEFT JOIN titles t
        ON m.pid = t.pid
        WHERE m.status = 0 AND
        m.f_name LIKE '%$searchBar%' OR
        m.l_name LIKE '%$searchBar%' OR
        f.name LIKE '%$searchBar%' OR
        m.city LIKE '%$searchBar%'";
      } else {
        $query = 'SELECT m.f_name, m.l_name, m.dob, m.type, m.status, f.name, t.title, m.pid, m.baptized, m.gender, m.confirmation, m.start_date, m.city
        FROM members m
        LEFT JOIN family f
        ON m.fid = f.fid
        LEFT JOIN titles t
        ON m.pid = t.pid
        WHERE m.status = 0';
      }
      
      $result = mysqli_query($conn, $query);
      // Create an HTML table to display the data
      echo "<table id='member-table'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th onclick='sortTable(0)'>Title</th>";
      echo "<th onclick='sortTable(1)'>First Name</th>";
      echo "<th onclick='sortTable(2)'>Last Name</th>";
      echo "<th onclick='sortTable(3)'>Date of Birth</th>";
      echo "<th onclick='sortTable(4)'>Type</th>";
      echo "<th onclick='sortTable(5)'>Gender</th>";
      echo "<th onclick='sortTable(6)'>Baptized</th>";
      echo "<th onclick='sortTable(7)'>Confirmation</th>";
      echo "<th onclick='sortTable(8)'>Start Date</th>";
      echo "<th onclick='sortTable(9)'>City</th>";
      echo "<th onclick='sortTable(10)'>Family</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
      $i = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        //Change the background color drom dark to light to make it easier to read
          if(($i % 2) == 0){
            echo "<tr class='dark-row' onclick=\"window.location='../frontend/profile.php?pid={$row['pid']}'\">";
          }
          else {
            echo "<tr class='light-row' onclick=\"window.location='../frontend/profile.php?pid={$row['pid']}'\">";
          }
          $i = $i + 1;
          echo "<td>" . $row["title"] . "</td>";
          echo "<td>" . $row["f_name"] . "</td>";
          echo "<td>" . $row["l_name"] . "</td>";
          echo "<td>" . $row["dob"] . "</td>";
          switch($row["type"]){
            case 0:
              $type = 'Administrator';
              break;
            case 1:
              $type = 'Member';
              break;
            case 2:
              $type = 'Member';
              break;
          }
          echo "<td>" . $type . "</td>";
          echo "<td>" . $row["gender"] . "</td>";
          switch($row["baptized"]){
            case 1: 
              $baptized = 'Yes';
              break;
            case 0:
              $baptized = 'No';
              break;
          }
          echo "<td>" . $baptized . "</td>";

          switch($row["confirmation"]){
            case 1: 
              $confirmed = 'Yes';
              break;
            case 0:
              $confirmed = 'No';
              break;
          }
          echo "<td>" . $confirmed . "</td>";
          echo "<td>" . $row["start_date"] . "</td>";
          echo "<td>" . $row["city"] . "</td>";
          echo "<td>" . $row["name"] . "</td>";
          echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
    break;


  case 'family':
    if(isset($_POST['searchBar'])){
      $searchBar = $_POST['searchBar'];
      $query = "SELECT family.fid, family.name, family.email, COUNT(members.fid) AS member_count
      FROM family
      LEFT JOIN members ON family.fid = members.fid
      WHERE family.status = 0 AND
      family.name LIKE '%$searchBar%'
      GROUP BY family.fid";
    } else {
      $query = "SELECT family.fid, family.name, family.email, COUNT(members.fid) AS member_count
      FROM family
      LEFT JOIN members ON family.fid = members.fid
      WHERE family.status = 0
      GROUP BY family.fid";
    }

    $result = mysqli_query($conn, $query);
    // Create an HTML table to display the data
    echo "<table id='member-table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th onclick='sortTable(0)'>Name</th>";
    echo "<th onclick='sortTable(1)'>Email</th>";
    echo "<th onclick='sortTable(2)'>Members</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        //Change the background color drom dark to light to make it easier to read
        if(($i % 2) == 0){
          echo "<tr class='dark-row' onclick=\"window.location='../frontend/profile.php?pid={$row['fid']}'\">";
        }
        else {
          echo "<tr class='light-row' onclick=\"window.location='../frontend/profile.php?pid={$row['fid']}'\">";
        }
        $i = $i + 1;
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["member_count"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  break;

  case 'donations':
    //$query = 'SELECT amount, date, type, env_number, transfer_email FROM donations WHERE status = 0';
    $query = 'SELECT d.amount, d.date, d.type, d.env_number, d.transfer_email, d.did, f.name
    FROM donations d
    LEFT JOIN family f
    ON d.fid = f.fid
    WHERE d.status = 0';

    $result = mysqli_query($conn, $query);
    // Create an HTML table to display the data
    echo "<table id='member-table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th onclick='sortTable(0)'>Amount</th>";
    echo "<th onclick='sortTable(1)'>Type</th>";
    echo "<th onclick='sortTable(2)'>Envelope Number</th>";
    echo "<th onclick='sortTable(3)'>Email</th>";
    echo "<th onclick='sortTable(4)'>From</th>";
    echo "<th onclick='sortTable(5)'>Date</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        //Change the background color drom dark to light to make it easier to read
        if(($i % 2) == 0){
          echo "<tr class='dark-row' onclick=\"window.location='../frontend/profile.php?pid={$row['did']}'\">";
        }
        else {
          echo "<tr class='light-row' onclick=\"window.location='../frontend/profile.php?pid={$row['did']}'\">";
        }
        $i = $i + 1;
        echo "<td>$" . $row["amount"] . "</td>";
        echo "<td>" . $row["type"] . "</td>";
        echo "<td>" . $row["env_number"] . "</td>";
        echo "<td>" . $row["transfer_email"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  break;
}


// Close the database connection
mysqli_close($conn);
?>


<script>
function sortTable(n) {
  let table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("member-table");
  switching = true;
  // Set the sorting direction to ascending
  dir = "asc"; 
  // Make a loop that will continue until no switching has been done
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    // Loop through all table rows (except the first, which contains table headers):
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      // If a switch has been marked, make the switch and mark that a switch has been done:
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      // If no switching has been done AND the direction is "asc", set the direction to "desc" and run the while loop again.
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
