<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Views/components/component_connection_status.php";
include($path_new);
?>

<?php
class Topic
{
    public $id;
    public $name;
    public $date;

    public function build($id, $name, $date)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
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

$Topic_table = [];

/*
get id of topics
*/
$result = $database->get_topics_information("id");
$table_topics_id = [];
for ($i = 0; $i < count($result); $i++) {
    $table_topics_id[$i] = $result[$i]["id"];
}

/*
get name of topics
*/
$result = $database->get_topics_information("name");
$table_topics_name = [];
for ($i = 0; $i < count($result); $i++) {
    $table_topics_name[$i] = $result[$i]["name"];
}

/*
get date of topics
*/
$result = $database->get_topics_information("date");
$table_topics_date = [];
for ($i = 0; $i < count($result); $i++) {
    $table_topics_date[$i] = $result[$i]["date"];
}

/*
make topic table
*/
for ($i = 0; $i < count($table_topics_id); $i++) {
    $new_topic = new Topic();
    $new_topic->build($table_topics_id[$i], $table_topics_name[$i], $table_topics_date[$i]);
    array_push($Topic_table, $new_topic);
}
?>

<?php
/*
send info to view
*/
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Views/html/page_accueil.php";
include($path_new);
?>

<?php
/*
form gestion
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $database->add_topic($_POST["topic_name"]);

    $new_topic_id;
    $result = $database->get_topics_information("id");
    $table_topics_id = [];
    for ($i = 0; $i < count($result); $i++) {
        $new_topic_id = $result[$i]["id"];
    }
    $database->add_comment($_POST["comment_text"], $_SESSION["id"], $new_topic_id);

    header("Location: ./controller_page_topics.php?topic_id=" . $new_topic_id . "");
    exit();
}
?>