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
$path_new = $path . "./Forum/Views/html/page_administration.php";
include($path_new);
$error = "";
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //delete by user_name
    if ($_POST["delete"] == "user") {
        if ($_POST["user"] == $_POST["user_verification"] && $database->get_user_information("type", "name", $_POST["user"])[0]["type"] != "a") {
            //delete all comment of the user

            $database->delete_user($_POST["user"]);
        } else {
            if ($_POST["user"] != $_POST["user_verification"]) {
                $error = "NAME NEED TO BE BOTH IDENTICAL";
                $_SESSION["error"] = $error;
                header("Refresh:0");
                exit();
            }
            if ($database->get_user_information("type", "name", $_POST["user"])[0]["type"] == "a") {
                $error = "CANNOT DELETE AN ADMINISTRATOR";
                $_SESSION["error"] = $error;
                header("Refresh:0");
                exit();
            }
        }
    }
    //delete by topic_id
    if ($_POST["delete"] == "topic") {
        if ($_POST["topic"] == $_POST["topic_verification"]) {
            //delete all comment of the topic

            $database->delete_topic($_POST["topic"]);
        } else {
            if ($_POST["topic"] != $_POST["topic_verification"]) {
                $error = "TOPIC_ID NEED TO BE BOTH IDENTICAL";
                $_SESSION["error"] = $error;
                header("Refresh:0");
                exit();
            }
        }
    }
    //delete by comment_id
    if ($_POST["delete"] == "comment") {
        if ($_POST["comment"] == $_POST["comment_verification"]) {
            $database->delete_comment($_POST["comment"]);
        } else {
            if ($_POST["comment"] != $_POST["comment_verification"]) {
                $error = "COMMENT_ID NEED TO BE BOTH IDENTICAL";
                $_SESSION["error"] = $error;
                header("Refresh:0");
                exit();
            }
        }
    }

    header("Refresh:0");
    exit();
}
?>