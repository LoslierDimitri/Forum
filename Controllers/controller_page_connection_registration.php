<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Views/components/component_connection_status.php";
include($path_new);
?>

<?php
error_reporting(E_ALL ^ E_WARNING);
$password_limit_size_min = 6;

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
        $result_password = $database->get_user_information("password", "id", $result_name[0]["id"]);

        if (password_verify($_POST["password"], $result_password[0]["password"])) {
            $_SESSION["name"] = $database->get_user_information("name", "name", $_POST["name"])[0]["name"];
            $_SESSION["type"] = $database->get_user_information("type", "name", $_POST["name"])[0]["type"];
            $_SESSION["id"] = $database->get_user_information("id", "name", $_POST["name"])[0]["id"];

            header("Location: /Forum/Controllers/controller_page_accueil.php");
            exit();
        }
    }
    if ($_POST["type"] == "registration") {
        $request_test_name = $database->get_user_information("name", "name", $_POST["name"]);
        $request_test_mail = $database->get_user_information("mail", "mail", $_POST["mail"]);

        if ($request_test_name[0]["name"] != $_POST["name"] && $request_test_mail[0]["mail"] != $_POST["mail"]) {
            if (($_POST["password"] == $_POST["password_verification"]) && (strlen($_POST["password"]) >= $password_limit_size_min)) {
                /*
                password hash
                */
                $password_before_hash = $_POST["password"];
                $password_after_hash = password_hash($password_before_hash, PASSWORD_DEFAULT);

                $database->add_user($_POST["name"], $_POST["mail"], $password_after_hash);

                $_SESSION["name"] = $database->get_user_information("name", "name", $_POST["name"])[0]["name"];
                $_SESSION["type"] = $database->get_user_information("type", "name", $_POST["name"])[0]["type"];
                $_SESSION["id"] = $database->get_user_information("id", "name", $_POST["name"])[0]["id"];

                header("Location: /Forum/Controllers/controller_page_accueil.php");
                exit();
            } else {
                echo "ERROR PASSWORD: <br>";
                if ($_POST["password"] != $_POST["password_verification"]) {
                    echo "PASSWORDS NEED TO MATCH <br>";
                }
                if (strlen($_POST["password"]) < $password_limit_size_min) {
                    echo "PASSWORD NEED TO CONTAIN AT LEAST " . $password_limit_size_min . " CARACTERS <br>";
                }
            }
        } else {
            echo "error name or mail: <br>";
            if ($request_test_name[0]["name"] == $_POST["name"]) {
                echo "NAME ALREADY TAKEN <br>";
            }
            if ($request_test_mail[0]["mail"] == $_POST["mail"]) {
                echo "MAIL ALREADY TAKEN <br>";
            }
        }
    }
}
?>