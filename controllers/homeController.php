<?php 

    require_once(__DIR__.'/../config/config.php');
    include(__DIR__.'/../views/templates/header.php');

    //DONNÉES RECU EN METHOD POST//

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        $choices = filter_input(INPUT_GET, 'choice', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];
        if (empty($choices)) {
            echo 'Remplir le formulaire';
        } else if (count($choices) < 2 || 3 > count($choices)) {
            echo 'Donée non valide';
        } else {
            $valueCookie = serialize($choices);
            setcookie(
                'test',
                $valueCookie,
                time() + (86400 * 30),
                "/"
            );
        }
        
    }        
        include(__DIR__.'/../views/home.php');
    