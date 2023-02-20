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
$sortFor = getFormData('sortBy', 'person');
$baptized = getFormData('baptized');
$confirmed = getFormData('confirmed');
$gender = getFormData('gender');
$member = getFormData('member');
$admin = getFormData('admin');
$volunteer = getFormData('volunteer');


if(isset($_POST['searchBar'])){
  $searchBar = $_POST['searchBar'];
  $query = "SELECT family.fid, family.name, family.email, COUNT(members.fid) AS member_count
  FROM family
  LEFT JOIN members ON family.fid = members.fid
  WHERE family.status = 0 AND
  family.name LIKE '%$searchBar%'
  GROUP BY family.fid";} 
  else {
  $query = "SELECT family.fid, family.name, family.email, COUNT(members.fid) AS member_count
  FROM family
  LEFT JOIN members ON family.fid = members.fid
  WHERE family.status = 0
  GROUP BY family.fid";
}
$result = mysqli_query($conn, $query);
// Create an HTML table to display the data
echo "<table id='results-table'>";
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
      echo "<tr class='dark-row' onclick=\"window.location='../private/profile.php?pid={$row['fid']}'\">";
    }
    else {
      echo "<tr class='light-row' onclick=\"window.location='../private/profile.php?pid={$row['fid']}'\">";
    }
    $i = $i + 1;
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["member_count"] . "</td>";
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
