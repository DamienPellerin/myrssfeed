<!-- Config -->
<?php
require_once __DIR__ . '/../config/helpers/fonctions.php';

$title = "Votre flux d'actualités";

$numberArticle = $_COOKIE['article'];
$valueCookie = unserialize($_COOKIE['categorie']);


// include
include __DIR__ . './../views/templates/header.php';
include __DIR__ . './../views/pages.php';
include __DIR__ . './../views/templates/footer.php';
?>