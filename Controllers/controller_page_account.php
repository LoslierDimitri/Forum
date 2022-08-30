<?php
// $path = $_SERVER["DOCUMENT_ROOT"];
// $path_new = $path . "./Forum/Views/components/component_connection_status.php";
// include($path_new);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
class User
{
    public $id;
    public $image;
    public $name;
    public $mail;
    public $type;
    public $password;

    public function build($id, $image, $name, $mail, $type, $password)
    {
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        $this->mail = $mail;
        $this->type = $type;
        $this->password = $password;
    }
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

$User = new User();

$result_id = $_SESSION["id"];
$result_image = $database->get_user_information("image", "id", $_SESSION["id"]);
$result_name = $database->get_user_information("name", "id", $_SESSION["id"]);
$result_mail = $database->get_user_information("mail", "id", $_SESSION["id"]);
$result_type = $database->get_user_information("type", "id", $_SESSION["id"]);
$result_password = $database->get_user_information("password", "id", $_SESSION["id"]);

$User->build($result_id, $result_image, $result_name, $result_mail, $result_type, $result_password);
?>

<?php
/*
send info to view
*/
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Views/html/page_account.php";
include($path_new);
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database->update_user($_SESSION["id"], "image", $_POST["image"]);
    echo ("<script>location.href = '/Forum/Controllers/controller_page_account.php';</script>");
    exit();
}
?>