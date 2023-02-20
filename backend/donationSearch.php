<?php
require 'serverDetails.php';

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Used to simplify the filter selection
function getFormData($fieldName, $default = '') {
  if (isset($_POST[$fieldName])) {
    return $_POST[$fieldName];
  } else {
    return $default;
  }
}

//Variables for the filters
$confirmed = getFormData('confirmed');

$query = 'SELECT d.amount, d.date, d.type, d.env_number, d.transfer_email, d.did, f.name
FROM donations d
LEFT JOIN family f
ON d.fid = f.fid
WHERE d.status = 0';
$result = mysqli_query($conn, $query);
// Create an HTML table to display the data
echo "<table id=id='results-table'>";
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
      echo "<tr class='dark-row' onclick=\"window.location='../private/profile.php?pid={$row['did']}'\">";
    }
    else {
      echo "<tr class='light-row' onclick=\"window.location='../private/profile.php?pid={$row['did']}'\">";
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
