<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$path_new = $path . "./Forum/Models/Database.php";
require($path_new);

$database = new Database();

$result = $database->get_commments_information_by_topic_id("text", 1);

echo "<pre>";
print_r($result);
echo "</pre>";
?>

<?php
$date = "";

// echo "<pre>";
// print_r(getdate());
// echo "</pre>";

// echo "<pre>";
// print_r(getdate()["seconds"]);
// echo "</pre>";

// $date = $date.getdate()["year"]."-".getDate()["mon"]."-".getDate()["mday"]." ".getDate()["hours"].":".getDate()["minutes"].":".getDate()["seconds"];
// echo $date;

// echo $_SERVER["REQUEST_URI"];




// $url = "fezafze/fezf/fezf?504";
// $data = "";
// for ($i = 0; $i < $url; $i++) {
//     if ($url[$i] == "?") {
//         for ($j = 0; $j < $url; $j++) {
//             $data = $data . $j;
//         }
//     }
// }
// echo $data;
?>

<?php
// class Comment
// {
//     private $id;
//     private $text;
//     private $id_user;
//     private $id_topic;
//     private $date;

//     public function __construct($id, $text, $id_user, $id_topic, $date)
//     {
//         $this->id = $id;
//         $this->text = $text;
//         $this->id_user = $id_user;
//         $this->id_topic = $id_topic;
//         $this->date = $date;
//     }
// }
?>