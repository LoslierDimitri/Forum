<?php
session_start();
session_destroy();
header('location: /Forum/Controllers/controller_page_accueil.php');
exit;
?>