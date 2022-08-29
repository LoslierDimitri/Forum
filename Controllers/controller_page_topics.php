<?php
// $path = $_SERVER["DOCUMENT_ROOT"];
// $path_new = $path . "./Forum/Views/components/component_connection_status.php";
// include($path_new);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
class Comment
{
    public $id;
    public $text;
    public $id_user;
    public $id_topic;
    public $date;
    public $User;

    public function build($id, $text, $id_user, $id_topic, $date)
    {
        $this->id = $id;
        $this->text = $text;
        $this->id_user = $id_user;
        $this->id_topic = $id_topic;
        $this->date = $date;

        $database_user = new Database();
        $this->User = new User();

        $result_id = $id_user;
        $result_image = $database_user->get_user_information("image", "id", $id_user);
        $result_name = $database_user->get_user_information("name", "id", $id_user);
        $result_mail = $database_user->get_user_information("mail", "id", $id_user);
        $result_type = $database_user->get_user_information("type", "id", $id_user);
        $result_password = $database_user->get_user_information("password", "id", $id_user);

        $this->User->build($result_id, $result_image, $result_name, $result_mail, $result_type, $result_password);
    }
}

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

$topic_id;
$url = $_SERVER["REQUEST_URI"];
$url_components = parse_url($url);
parse_str($url_components['query'], $params);

$topic_id = $params['topic_id'];

$Comment_table = [];

/*
get id of comments
*/
$result = $database->get_commments_information_by_topic_id("id", $topic_id);
$table_comment_id = [];
for ($i = 0; $i < count($result); $i++) {
    $table_comment_id[$i] = $result[$i]["id"];
}

/*
get text of comments
*/
$result = $database->get_commments_information_by_topic_id("text", $topic_id);
$table_comment_text = [];
for ($i = 0; $i < count($table_comment_id); $i++) {
    $table_comment_text[$i] = $result[$i]["text"];
}

/*
get id_user of comments
*/
$result = $database->get_commments_information_by_topic_id("id_user", $topic_id);
$table_comment_id_user = [];
for ($i = 0; $i < count($table_comment_id); $i++) {
    $table_comment_id_user[$i] = $result[$i]["id_user"];
}

/*
get id_topic of comments
*/
$result = $database->get_commments_information_by_topic_id("id_topic", $topic_id);
$table_comment_id_topic = [];
for ($i = 0; $i < count($table_comment_id); $i++) {
    $table_comment_id_topic[$i] = $result[$i]["id_topic"];
}

/*
get date of comments
*/
$result = $database->get_commments_information_by_topic_id("date", $topic_id);
$table_comment_date = [];
for ($i = 0; $i < count($table_comment_id); $i++) {
    $table_comment_date[$i] = $result[$i]["date"];
}

/*
make comment table
*/
for ($i = 0; $i < count($table_comment_id); $i++) {
    $new_comment = new Comment();
    $new_comment->build($table_comment_id[$i], $table_comment_text[$i], $table_comment_id_user[$i], $topic_id, $table_comment_date[$i]);
    // $Comment_table[$i] = $new_comment;
    array_push($Comment_table, $new_comment);
}
// echo "<pre>";
// print_r($Comment_table);
// echo "</pre>";
?>

<?php
/*
send info to view
*/
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Views/html/page_topics.php";
include($path_new);
?>

<?php
/*
form gestion
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $database->add_comment($_POST["comment_text"], $_SESSION["id"], $topic_id);

    echo ("<script>location.href = '/Forum/Controllers/controller_page_topics.php?topic_id=$topic_id';</script>");
    exit();
    // header("Refresh:0");
    // exit();
}
?>