<?php 

    require_once(__DIR__.'/../config/config.php');
    include(__DIR__.'/../views/templates/header.php');
    include(__DIR__.'/../views/home.php');
   
    // DONNÉES RECU EN METHOD POST //

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // COOKIE NOMBRE D'ARTICLE //
        $nbArticles= filter_input(INPUT_POST, 'nbArticles', FILTER_SANITIZE_NUMBER_INT);
        if(empty($nbArticles)){
            echo 'Error';
            
        } else if ($nbArticles == 6 || $nbArticles == 9 || $nbArticles == 12){  
                setcookie(
                    'article',
                    $nbArticles,
                    time() + (86400 * 30),
                    "/"); 
                    $nbArticles == true;
            }else{
            echo 'donnée non valide';
            
            }

            //COOKIE CHOIX DE LA CATEGORIE //
        $categorys = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];
        if (empty($categorys)) {
            echo 'Remplir le formulaire';
    
        } else if (count($categorys) < 2 || 3 > count($categorys)) {
            echo 'Donée non valide';
             
            } else {
                $valueCookie = serialize($categorys);
                setcookie(
                    'categorie',
                    $valueCookie,
                    time() + (86400 * 30),
                    "/");
                    $categorys== true;     
            }  
            if ($nbArticles == true && $categorys == true){
                echo 'hello';
            }else{
                echo 'return'; 
            }      
    } 
    $test = unserialize($_COOKIE['categorie']);
    var_dump($test[0]);
 
   
    