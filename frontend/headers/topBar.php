<div class="top-bar">
    <a href='../private/dashboard.php'><div id="dashboard">Dashboard &nbsp<img src='../../assets/dashboard.png' width='25' height='25'/></div></a>
    <a href='../private/managePeople.php'><div id="manage-people">People &nbsp<img src='../../assets/person.png' width='25' height='25'/></div></a>
    <!--<a href='../private/manageFamilies.php'><div id="manage-families">Manage Families &nbsp<img src='../../assets/family.png' width='25' height='25'/></div></a> -->
    <a href='../private/manageDonations.php'><div id="manage-donations">Donations &nbsp<img src='../../assets/donate.png' width='25' height='25'/></div></a>
    <a href='../private/manageTaxReciepts.php'><div id="manage-tax-reciepts">Tax Reciepts &nbsp<img src='../../assets/reciept.png' width='25' height='25'/></div></a>
    <a href='../private/massEmail.php'><div id="mass-email">Email &nbsp<img src='../../assets/email.png' width='25' height='25'/></div></a>
    <a href='../private/manageAttendance.php'><div id="manage-attendance">Attendance &nbsp<img src='../../assets/attendance.png' width='25' height='25'/></div></a>
    <a href='../private/manageZoomLink.php'><div id="manage-zoom-link">Zoom &nbsp<img src='../../assets/cam.png' width='25' height='25'/></div></a>
    <a href='../private/manageCalendar.php'><div id="manage-calendar">Calendar &nbsp<img src='../../assets/calendar.png' width='25' height='25'/></div></a>
</div>


<script>
let selected = "3px solid #3e702d"

// Get the current page URL
var currentPageURL = window.location.href;

// Check if the URL matches the dashboard page
if (currentPageURL.includes("dashboard.php")) {
  document.getElementById("dashboard").style.border = selected;
}

// Check if the URL matches the manage people page
if (currentPageURL.includes("managePeople.php")) {
  document.getElementById("manage-people").style.border = selected;
}

// Check if the URL matches the manage families page
if (currentPageURL.includes("manageFamilies.php")) {
  document.getElementById("manage-families").style.border = selected;
}

// Check if the URL matches the manage people page
if (currentPageURL.includes("manageDonations.php")) {
  document.getElementById("manage-donations").style.border = selected;
}

// Check if the URL matches the manage people page
if (currentPageURL.includes("manageTaxReciepts.php")) {
  document.getElementById("manage-tax-reciepts").style.border = selected;
}

// Check if the URL matches the send mass email page
if (currentPageURL.includes("massEmail.php")) {
  document.getElementById("mass-email").style.border = selected;
}

// Check if the URL matches the send mass email page
if (currentPageURL.includes("manageAttendance.php")) {
  document.getElementById("manage-attendance").style.border = selected;
}

// Check if the URL matches the modify zoom link page
if (currentPageURL.includes("manageZoomLink.php")) {
  document.getElementById("manage-zoom-link").style.border = selected;
}

// Check if the URL matches the modify calendar page
if (currentPageURL.includes("manageCalendar.php")) {
  document.getElementById("manage-calendar").style.border = selected;
}

</script>