<?php

//--------------------------
// -------------------Config
//--------------------------
require_once __DIR__ . '/../config/helpers/fonctions.php';

var_dump();

switch ($category) {
    case 0:
        $category = "https://www.jeuxactu.com/rss/tests.rss";
    case 1:
        $category = "https://www.jeuxactu.com/rss/ja.rss";
    case 2:
        $category = "https://www.jeuxactu.com/rss/arcade.rss";
    case 3:
        $category = "https://www.jeuxactu.com/rss/tips.rss";
    case 4:
        $category = "https://www.jeuxactu.com/rss/pc.rss";
}

var_dump($_COOKIE['category']);
var_dump($category);


if ($_COOKIE['categorie'] && $_COOKIE['article']) {
    $categorieName = unserialize($_COOKIE['categorie']);
}

$title = "Gérer vos parametres";

include(__DIR__ . './../views/templates/header.php');
include(__DIR__ . './../views/home.php');
include(__DIR__ . './../views/templates/footer.php');
