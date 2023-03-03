<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lusitana:wght@700&family=Quintessential&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="../../assets/icon.svg">
<header>
<a href="../../frontend/public/index.php"><h2>LICCF</h2></a>
  <nav class='nav-head'>
    <ul>
      <li><a href="../../frontend/public/index.php">Home</a></li>
      <li class="dropdown">
        <a href="../../frontend/public/about.php">About</a>
        <ul class="dropdown-content">
          <li><a href="../../frontend/public/whoWeAre.php">Who we are</a></li>
          <li><a href="../../frontend/public/ourVision.php">Vision Statement</a></li>
          <li><a href="../../frontend/public/ourHistory.php">Our History</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="../../frontend/public/eucharist.php">Eucharist</a>
        <ul class="dropdown-content">
          <li><a href="../../frontend/public/liturgies.php">Liturgies</a></li>
          <li><a href="../../frontend/public/sacraments.php">Sacraments</a></li>
          <li><a href="#">Special Services and Blessings</a></li>
          <li><a href="#">Prayer</a></li>
          <li><a href="#">Spiritual Direction</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="../../frontend/public/community.php">Community</a>
        <ul class="dropdown-content">
          <li><a href="#">News and Events</a></li>
          <li><a href="#">Get Involved</a></li>
          <li><a href="#">Indigenous Allyship</a></li>
        </ul>
      </li>
      <li><a href="../../frontend/public/contact.php">Contact</a></li>
      <li><a href="../../frontend/public/donate.php">Donate</a></li>
      <?php displayAuthticatedLink(); ?>
    </ul>
  </nav>
  <div class="sidebar_toggler">
    <span></span>
    <span></span>
    <span></span>
  </div>
</header>

<?php
//This function determines if the button should say login or logout based on the Authenticated SESSION variable
function displayAuthticatedLink() {
    if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
      echo "<li class='dropdown'>
      <a href='../../frontend/public/login.php'>{$_SESSION['username']}</a>
      <ul class='dropdown-content'>
        <li><a href='../private/profile.php'>Profile</a></li>
        <li><a href='../../backend/logout.php'>Logout</a></li>
      </ul>
    </li>";
    } else {
      echo "<li><a href='../../frontend/public/login.php'>Login</a></li>";
    }
}
?>