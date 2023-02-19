<div class="top-bar">
    <a href='../private/dashboard.php'><div id="dashboard">Dashboard</div></a>
    <a href='../private/personSelect.php'><div id="manage-people">Manage People</div></a>
    <a href='../private/createNewFamily.php'><div id="manage-families">Manage Families</div></a>
    <a href=''><div id="manage-donations">Manage Donations</div></a>
    <a href=''><div id="issue-tax-receipts">Issue Tax Reciepts</div></a>
    <a href='../private/sendMassEmail.php'><div id="send-mass-email">Send Mass Email</div></a>
    <a href=''><div id="view-attendance">View Attendance</div></a>
    <a href='../private/modifyZoomLink.php'><div id="modify-zoom-link">Modify Zoom Link</div></a>
    <a href='../private/modifyCalendar.php'><div id="modify-calendar">Modify Calendar</div></a>
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
if (currentPageURL.includes("personSelect.php")) {
  document.getElementById("manage-people").style.border = selected;
}

// Check if the URL matches the manage families page
if (currentPageURL.includes("createNewFamily.php")) {
  document.getElementById("manage-families").style.border = selected;
}

// Check if the URL matches the send mass email page
if (currentPageURL.includes("sendMassEmail.php")) {
  document.getElementById("send-mass-email").style.border = selected;
}

// Check if the URL matches the modify zoom link page
if (currentPageURL.includes("modifyZoomLink.php")) {
  document.getElementById("modify-zoom-link").style.border = selected;
}

// Check if the URL matches the modify calendar page
if (currentPageURL.includes("modifyCalendar.php")) {
  document.getElementById("modify-calendar").style.border = selected;
}

</script>