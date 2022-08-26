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

        // echo "<pre>";
        // print_r($result_name);
        // echo "</pre>";
        // echo "<pre>";
        // print_r($result_password);
        // echo "</pre>";
        // die();

        if ($result_name == $result_password && isset($result_name)) {
            $_SESSION["name"] = $database->get_user_information("name", "name", $_POST["name"])[0]["name"];
            $_SESSION["type"] = $database->get_user_information("type", "name", $_POST["name"])[0]["type"];
            $_SESSION["id"] = $database->get_user_information("id", "name", $_POST["name"])[0]["id"];

            // echo $_SESSION["name"];
            // echo $_SESSION["type"];
            // echo $_SESSION["id"];
            // die();
            
            header("Location: /Forum/Controllers/controller_page_accueil.php");
            exit();
        }
    }
    if ($_POST["type"] == "registration") {
        $database->add_user($_POST["name"], $_POST["mail"], $_POST["password"]);

        $result_name = $database->get_user_information("id", "name", $_POST["name"]);
        $result_password = $database->get_user_information("id", "password", $_POST["password"]);

        if ($result_name == $result_password && isset($result_name)) {
            $_SESSION["name"] = $database->get_user_information("name", "name", $_POST["name"])[0]["name"];
            $_SESSION["type"] = $database->get_user_information("type", "name", $_POST["name"])[0]["type"];
            $_SESSION["id"] = $database->get_user_information("id", "name", $_POST["name"])[0]["id"];
            
            header("Location: /Forum/Controllers/controller_page_accueil.php");
            exit();
        }
    }

    // if ($_POST["type"] == "registration") {
    //     if (isset($_POST["name"]) && isset($_POST["mail"]) && isset($_POST["password"]) && isset($_POST["password_verification"])) {
    //         $result_name = $database->get_user_information("id", "name", $_POST["name"]);

    //         if ($result_name != []) {
    //             if ($_POST["password"] == $_POST["password_verification"]) {
    //                 $database->add_user($_POST["name"], $_POST["mail"], $_POST["password"]);

    //                 $result_name = $database->get_user_information("id", "name", $_POST["name"]);
    //                 $result_password = $database->get_user_information("id", "password", $_POST["password"]);

    //                 if ($result_name == $result_password && isset($result_name)) {
    //                     $_SESSION["name"] = $database->get_user_information("name", "name", $_POST["name"])[0]["name"];
    //                     $_SESSION["type"] = $database->get_user_information("type", "name", $_POST["name"])[0]["type"];
    //                     $_SESSION["id"] = $database->get_user_information("id", "name", $_POST["name"])[0]["id"];

    //                     header("Location: /Forum/Controllers/controller_page_accueil.php");
    //                     exit();
    //                 }
    //             }
    //         }
    //     }

    //     header("Refresh:0");
    //     exit();
    // }

    // header("Location: /Forum/Controllers/controller_page_accueil.php");
    // exit();
}
?>