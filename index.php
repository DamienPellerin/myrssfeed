<?php
if(empty ($_COOKIE['article']) && (empty ($_COOKIE['categorie']))){
header('location:http://myrssfeed.localhost/formulaire');
}else{
    header('location:http://myrssfeed.localhost/home');
}
