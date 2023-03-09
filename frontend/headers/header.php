<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lusitana:wght@700&family=Quintessential&display=swap" rel="stylesheet">

<link rel="apple-touch-icon" sizes="180x180" href="../../assets/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../assets/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../assets/favicons/favicon-16x16.png">
<link rel="manifest" href="../../assets/favicons/site.webmanifest">
<link rel="mask-icon" href="../../assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#ffffff">
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
          <li><a href="../../frontend/public/SpecialServices.php">Special Services and Blessings</a></li>
          <li><a href="../../frontend/public/prayer.php">Prayer</a></li>
          <li><a href="../../frontend/public/SpiritualDirection.php">Spiritual Direction</a></li>
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
  <?php
    require '../../frontend/public/sidebar.php';
?>
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