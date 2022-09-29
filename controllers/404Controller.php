<?php 

    require_once(__DIR__.'/../config/config.php');
    include(__DIR__.'/../views/404.php');

    $numberArticle = $_COOKIE['article'];
    $valueCookie = unserialize($_COOKIE['categorie']);

        