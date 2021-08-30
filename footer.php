<?php
function checkLoginLogOut() {
    if (isset($_SESSION["rol"])) {
        echo "<a href='logout.php'>Logout</a>";
    } else {
        echo "<a href='login.php'>Login</a>";
    }
}

?>



<footer>
    <a href="index.php">Home</a><p> - </p>
    <a href="over.php">Over ons</a><p> - </p>
    <a href="ditdat.php">Ditjes & Datjes</a><p> - </p>
    <a href="dagje.php">Dagje 't Zjirafke</a><p> - </p>
    <a href="contact.php">Contact</a><p> - </p>
    <?php checkLoginLogOut()?>
</footer>
