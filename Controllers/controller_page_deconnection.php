<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

session_start();
session_destroy();
header('location: /Forum/Controllers/controller_page_accueil.php');
exit;