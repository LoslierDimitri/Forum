<?php
// $path = $_SERVER["DOCUMENT_ROOT"];
// $path_new = $path . "./Forum/Views/components/component_connection_status.php";
// include($path_new);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
error_reporting(E_ALL ^ E_WARNING);

/*
get the connection to the database
*/
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Models/Database.php";
require($path_new);
$database = new Database();
?>

<?php
/*
send info to view
*/
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Views/html/page_change_account_type.php";
include($path_new);
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database->update_user($_SESSION["id"], "type", "a");

    $_SESSION["type"] = "a";

    header("Location: ./controller_page_account.php");
    exit();
}
?>