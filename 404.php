<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../public/assets/css/style404.css">
    <title>404</title>
</head>
<body>
    
</body>
</html>
<main>
    <div class="title">
        <h1>404</h1>
       <div class="page">La page que vous recherchez semble introuvable</div>
        <div class="return"><a href=<?=(!empty ($_COOKIE['article']) && (!empty ($_COOKIE['categorie'])))? 'http://myrssfeed.localhost/home' : 'http://myrssfeed.localhost/formulaire'?>>ACCUEIL</a></div> 
    </div>
</main>