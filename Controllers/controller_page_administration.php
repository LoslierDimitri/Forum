<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Views/components/component_connection_status.php";
include($path_new);
?>

<?php

?>

<?php
/*
send info to view
*/
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Views/html/page_administration.php";
include($path_new);
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST["delete"] == "user") {

    }
    if ($_POST["delete"] == "topic") {
        
    }
    if ($_POST["delete"] == "comment") {
        
    }

    // $database->add_topic($_POST["topic_name"]);

    // $new_topic_id;
    // $result = $database->get_topics_information("id");
    // $table_topics_id = [];
    // for ($i = 0; $i < count($result); $i++) {
    //     $new_topic_id = $result[$i]["id"];
    // }
    // $database->add_comment($_POST["comment_text"], $_SESSION["id"], $new_topic_id);

    // header("Location: ./controller_page_topics.php?topic_id=" . $new_topic_id . "");
    // exit();
}
?>