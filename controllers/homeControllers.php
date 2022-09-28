<?php

//--------------------------
// -------------------Config
//--------------------------
require_once __DIR__ . '/../config/helpers/fonctions.php';



var_dump($_COOKIE['category']);
var_dump($category);


if ($_COOKIE['categorie'] && $_COOKIE['article']) {
    $categorieName = unserialize($_COOKIE['categorie']);
}

$title = "Gérer vos parametres";

include(__DIR__ . './../views/templates/header.php');
include(__DIR__ . './../views/home.php');
include(__DIR__ . './../views/templates/footer.php');
