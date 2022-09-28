<?php

//--------------------------
// -------------------Config
//--------------------------
require_once __DIR__ . '/../config/helpers/fonctions.php';

$numberArticle = $_COOKIE['article'];
$valueCookie = unserialize($_COOKIE['categorie']);

$title = "Gérer vos parametres";

include(__DIR__ . './../views/templates/header.php');
include(__DIR__ . './../views/home.php');
include(__DIR__ . './../views/templates/footer.php');
