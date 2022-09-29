<!-- Config -->
<?php
require_once __DIR__ . '/../config/helpers/fonctions.php';

$numberArticle = $_COOKIE['article'];
$valueCookie = unserialize($_COOKIE['categorie']);

$title = "Votre flux d'actualités";




// include
include __DIR__ . './../views/templates/header.php';
include __DIR__ . './../views/pages.php';
include __DIR__ . './../views/templates/footer.php';
?>