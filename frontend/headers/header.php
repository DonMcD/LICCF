<header>
  <h2>LICCF</h2>
  <nav>
    <ul>
      <li><a href="../../frontend/public/index.php">Home</a></li>
      <li class="dropdown">
        <a href="../../frontend/public/about.php">About</a>
        <ul class="dropdown-content">
          <li><a href="#">Who we are</a></li>
          <li><a href="#">Vision Statement</a></li>
          <li><a href="#">Our History</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="../../frontend/public/eucharist.php">Eucharist</a>
        <ul class="dropdown-content">
          <li><a href="#">Liturgies</a></li>
          <li><a href="#">Sacraments</a></li>
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
</header>

<?php
//This function determines if the button should say login or logout based on the Authenticated SESSION variable
function displayAuthticatedLink() {
    if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
      echo "<a href='../../backend/logout.php' id='login-btn'>{$_SESSION['username']}</a>";
    } else {
      echo "<a href='../../frontend/public/login.php'>Login</a>";
    }
}
?>