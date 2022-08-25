<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
if (isset($_SESSION["id"]) && isset($_SESSION["name"]) && isset($_SESSION["type"])) {
    echo '<p>you are connected with name: '.$_SESSION["name"].'</p>';
    echo '<p>your account type is: '.$_SESSION["type"].'</p>';
    echo '<p>your account id is: '.$_SESSION["id"].'</p>';
}
?>