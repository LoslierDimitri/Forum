<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Views/components/component_connection_status.php";
include($path_new);
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
$path_new = $path . "./Forum/Views/html/page_connection_registration.php";
include($path_new);
?>

<?php
/*
form gestion
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST["type"] == "connection") {
        $result_name = $database->get_user_information("id", "name", $_POST["name"]);
        $result_password = $database->get_user_information("id", "password", $_POST["password"]);

        if ($result_name == $result_password) {
            echo "you are connected";
            // $_SESSION["name"] = $database->get_user_information("name", "id", $result_name)[0]->name;
            // $_SESSION["type"] = $database->get_user_information("type", "id", $result_name);
            // $_SESSION["id"] = $database->get_user_information("id", "id", $result_name);
        }
    }
    if ($_POST["type"] == "registration") {
        $database->add_user($_POST["name"], $_POST["mail"], $_POST["password"]);
    }

    // header("Location: /Forum/Controllers/controller_page_accueil.php");
    // exit();
}
?>