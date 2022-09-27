<?php 
require_once(__DIR__.'/../config/config.php');
include(__DIR__.'/../views/templates/header.php');
//DONNÉES RECU EN METHOD POST//
include(__DIR__.'/../views/home.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $choices = filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];
    if (count($choices) < 2 || 3 > count($choices) ) {
        echo 'Donée non valide';
    }else{
        
       
    }

}