<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Views/components/component_connection_status.php";
include($path_new);
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

// /*
// get image of user
// */
// $result = $database->get_user_information("image", "id", $_SESSION["id"]);
// $table_user_image = [];
// for ($i = 0; $i < count($result); $i++) {
//     $table_user_image[$i] = $result[$i]["image"];
// }

// /*
// get name of user
// */
// $result = $database->get_user_information("name", "id", $_SESSION["id"]);
// $table_user_name = [];
// for ($i = 0; $i < count($result); $i++) {
//     $table_user_name[$i] = $result[$i]["name"];
// }

// /*
// get mail of user
// */
// $result = $database->get_topics_information("mail");
// $table_topics_mail = [];
// for ($i = 0; $i < count($result); $i++) {
//     $table_topics_mail[$i] = $result[$i]["mail"];
// }

// /*
// get type of user
// */
// $result = $database->get_topics_information("type");
// $table_topics_type = [];
// for ($i = 0; $i < count($result); $i++) {
//     $table_topics_[$i] = $result[$i]["mail"];
// }

// /*
// get password of user
// */
// $result = $database->get_topics_information("mail");
// $table_topics_mail = [];
// for ($i = 0; $i < count($result); $i++) {
//     $table_topics_mail[$i] = $result[$i]["mail"];
// }

// /*
// make user table
// */
// for ($i = 0; $i < count($table_topics_id); $i++) {
//     $new_topic = new Topic();
//     $new_topic->build($table_topics_id[$i], $table_topics_name[$i], $table_topics_date[$i]);
//     array_push($Topic_table, $new_topic);
// }
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
    // $target_dir = "/Forum";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // // Check if image file is a actual image or fake image
    // if (isset($_POST["submit"])) {
    //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //     if ($check !== false) {
    //         echo "File is an image - " . $check["mime"] . ".";
    //         $uploadOk = 1;
    //     } else {
    //         echo "File is not an image.";
    //         $uploadOk = 0;
    //     }
    // }

    $database->update_user($_SESSION["id"], "image", $_POST["image"]);
    // $User->image = $_POST["image"];
    // echo $_POST["image"];
}
?>