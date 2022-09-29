<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/./public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Nav -->
        <nav class="navbar">
            <div>
                <a href="/./controllers/homeControllers.php"><span>logo</span></a>
            </div>
            <div class="user-actuality">
                <div>
                    <h2>Votre actualités</h2>
                </div>
                <!-- Choix users -->
                <div class="categories-choice-desktop">
                    <span>
                        <a href=<?= "/./controllers/pagesControllers.php?categories=$valueCookie[0]" ?>><?php dislayMainTitleArticle($valueCookie[0]) ?></a>
                    </span>
                    <span>
                        <a href=<?= "/./controllers/pagesControllers.php?categories=$valueCookie[1]" ?>><?php dislayMainTitleArticle($valueCookie[1]) ?></a>
                    </span>
                    <span>
                        <a href=<?= "/./controllers/pagesControllers.php?categories=$valueCookie[2]" ?>><?php dislayMainTitleArticle($valueCookie[2]) ?></a>
                    </span>
                </div>
            </div>
            <!-- Settings -->
            <div class="settings">
                <a href="/controllers/parametersController.php">
                    <i class="fa-solid fa-gears"></i>
                    <span>Options</span>
                </a>
            </div>
        </nav>
    </header>