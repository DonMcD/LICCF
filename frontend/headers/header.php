<header>
    <h2>LICCF</h2>
    <a href="../../frontend/public/index.php">Home</a>
    <a href="../../frontend/public/eucharist.php">Eucharist</a>
    <a href="../../frontend/public/community.php">Community</a>
    <a href="../../frontend/public/contact.php">Contact</a>
    <a href="../../frontend/public/donate.php">Donate</a>
    <?php
    displayAuthLink();
    ?>
</header>

<?php
function displayAuthLink() {
    if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
      echo '<a href="../../frontend/public/login.php">Logout</a>';
    } else {
      echo '<a href="../../frontend/public/login.php">Login</a>';
    }
}
?>