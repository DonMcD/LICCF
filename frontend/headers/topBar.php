<div class="top-bar">
    <a href='../private/dashboard.php' id="dashboard"><div><h3>Dashboard &nbsp</h3><img src='../../assets/dashboard.png' width='25' height='25'/></div></a>
    <a href='../private/managePeople.php' id="manage-people"><div ><h3>People &nbsp</h3><img src='../../assets/person.png' width='25' height='25'/></div></a>
    <!--<a href='../private/manageFamilies.php'><div id="manage-families">Manage Families &nbsp<img src='../../assets/family.png' width='25' height='25'/></div></a> -->
    <a href='../private/manageDonations.php' id="manage-donations"><div ><h3>Donations &nbsp</h3><img src='../../assets/donate.png' width='25' height='25'/></div></a>
    <a href='../private/manageTaxReciepts.php' id="manage-tax-reciepts"><div ><h3>Tax <span class='reciepts'>Reciepts</span> &nbsp</h3><img src='../../assets/reciept.png' width='25' height='25'/></div></a>
    <a href='../private/massEmail.php' id="mass-email"><div><h3>Email &nbsp</h3><img src='../../assets/email.png' width='25' height='25'/></div></a>
    <a href='../private/manageAttendance.php' id="manage-attendance"><div><h3>Attendance &nbsp</h3><img src='../../assets/attendance.png' width='25' height='25'/></div></a>
    <a href='../private/manageZoomLink.php' id="manage-zoom-link"><div><h3>Zoom &nbsp</h3><img src='../../assets/cam.png' width='25' height='25'/></div></a>
    <a href='../private/manageCalendar.php' id="manage-calendar"><div><h3>Calendar &nbsp</h3><img src='../../assets/calendar.png' width='25' height='25'/></div></a>
</div>



<script>
let selected = "#b2c598"

// Get the current page URL
var currentPageURL = window.location.href;

// Check if the URL matches the dashboard page
if (currentPageURL.includes("dashboard.php")) {
  document.getElementById("dashboard").style.color = selected;
}

// Check if the URL matches the manage people page
if (currentPageURL.includes("managePeople.php")) {
  document.getElementById("manage-people").style.color = selected;
}

// Check if the URL matches the manage families page
if (currentPageURL.includes("manageFamilies.php")) {
  document.getElementById("manage-families").style.color = selected;
}

// Check if the URL matches the manage people page
if (currentPageURL.includes("manageDonations.php")) {
  document.getElementById("manage-donations").style.color = selected;
}

// Check if the URL matches the manage people page
if (currentPageURL.includes("manageTaxReciepts.php")) {
  document.getElementById("manage-tax-reciepts").style.color = selected;
}

// Check if the URL matches the send mass email page
if (currentPageURL.includes("massEmail.php")) {
  document.getElementById("mass-email").style.color = selected;
}

// Check if the URL matches the send mass email page
if (currentPageURL.includes("manageAttendance.php")) {
  document.getElementById("manage-attendance").style.color = selected;
}

// Check if the URL matches the modify zoom link page
if (currentPageURL.includes("manageZoomLink.php")) {
  document.getElementById("manage-zoom-link").style.color = selected;
}

// Check if the URL matches the modify calendar page
if (currentPageURL.includes("manageCalendar.php")) {
  document.getElementById("manage-calendar").style.color = selected;
}

</script>