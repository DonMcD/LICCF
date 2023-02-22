<?php
require 'serverDetails.php';

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the data from the "members" table
//$query = "SELECT f_name, l_name, dob, type, status FROM members WHERE status = 0";

function getFormData($fieldName, $default = '') {
  if (isset($_POST[$fieldName])) {
    return $_POST[$fieldName];
  } else {
    return $default;
  }
}

//Variables for the filters
$baptized = getFormData('baptized');
$confirmed = getFormData('confirmed');
$gender = getFormData('gender', 'All');
$member = getFormData('member');
$administrator = getFormData('administrator');
$volunteer = getFormData('volunteer');

// Build the filters based on the selected checkboxes
$filters = [];
if ($member) {
  $filters[] = "m.type = '1'";
}
if ($administrator) {
  $filters[] = "m.type = '0'";
}
if ($volunteer) {
  $filters[] = "m.type = '2'";
}
$filterClause = '';
if (!empty($filters)) {
  $filterClause = 'AND (' . implode(' OR ', $filters) . ')';
}

if ($gender === 'All') {
  $genderFilter = '';
} else {
  $genderFilter = "m.gender = '$gender' AND";
}

if (isset($_POST['searchBar'])) {
  $searchBar = $_POST['searchBar'];
  $query = "SELECT m.f_name, m.l_name, m.dob, m.type, m.status, f.name, t.title, m.pid, m.baptized, m.gender, m.confirmation, m.start_date, m.city
  FROM members m
  LEFT JOIN family f ON m.fid = f.fid
  LEFT JOIN titles t ON m.pid = t.pid
  WHERE $genderFilter m.status = 0 $filterClause AND
  (m.f_name LIKE '%$searchBar%' OR
  m.l_name LIKE '%$searchBar%' OR
  f.name LIKE '%$searchBar%' OR
  m.city LIKE '%$searchBar%')";
} else {
  $query = "SELECT m.f_name, m.l_name, m.dob, m.type, m.status, f.name, t.title, m.pid, m.baptized, m.gender, m.confirmation, m.start_date, m.city, m.attendance
  FROM members m
  LEFT JOIN family f ON m.fid = f.fid
  LEFT JOIN titles t ON m.pid = t.pid
  WHERE $genderFilter m.status = 0 $filterClause";
}

$result = mysqli_query($conn, $query);
// Create an HTML table to display the data
echo "<table id='results-table' border='0'>";
echo "<thead>";
echo "<tr>";
echo "<th onclick='sortTable(0)'>Title</th>";
echo "<th onclick='sortTable(1)'>First Name</th>";
echo "<th onclick='sortTable(2)'>Last Name</th>";
echo "<th onclick='sortTable(3)'>Attendance</th>";
echo "<th onclick='sortTable(4)'>Date of Birth</th>";
echo "<th onclick='sortTable(5)'>Type</th>";
echo "<th onclick='sortTable(6)'>Gender</th>";
echo "<th onclick='sortTable(7)'>Baptized</th>";
echo "<th onclick='sortTable(8)'>Confirmation</th>";
echo "<th onclick='sortTable(9)'>Start Date</th>";
echo "<th onclick='sortTable(10)'>City</th>";
echo "<th onclick='sortTable(11)'>Family</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
$i = 0;
while ($row = mysqli_fetch_assoc($result)) {
  //Change the background color from dark to light to make it easier to read
  $row_class = ($i % 2 == 0) ? "dark-row" : "light-row";
  echo "<tr class='$row_class' onclick='submitForm({$row["pid"]})'>";
  $i = $i + 1;
  
    echo "<td>" . $row["title"] . "</td>";
    echo "<td>" . $row["f_name"] . "</td>";
    echo "<td>" . $row["l_name"] . "</td>";
    switch($row["attendance"]){
      case 0:
        $attendance = 'In Person';
        break;
      case 1:
        $attendance = 'Online';
        break;
      case 2:
        $attendance = 'Hybrid';
        break;
    }
    echo "<td>" . $attendance . "</td>";
    echo "<td>" . $row["dob"] . "</td>";
    switch($row["type"]){
      case 0:
        $type = 'Administrator';
        break;
      case 1:
        $type = 'Member';
        break;
      case 2:
        $type = 'Volunteer';
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
// Close the database connection
mysqli_close($conn);
?>

<script>
function sortTable(n) {
  let table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("results-table");
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
