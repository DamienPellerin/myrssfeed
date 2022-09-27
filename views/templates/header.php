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
                <h1>logo</h1>
            </div>
            <div class="user-actuality">
                <div>
                    <h1>Votre actualités</h1>
                </div>
                <!-- Choix users -->
                <div>
                    <span>
                        <a href="/./controllers/pages_controllers.php">Premiere actu</a>
                    </span>
                    <span>
                        <a href="/./controllers/pages_controllers.php">Deuxieme actu</a>
                    </span>
                    <span>
                        <a href="/./controllers/pages_controllers.php">troisieme actu</a>
                    </span>
                </div>
            </div>
            <!-- Settings -->
            <div class="settings">
                <a href="/./controllers/parameters_controller.php">
                    <i class="fa-solid fa-gears"></i>
                    <span>settings</span>
                </a>
            </div>
        </nav>
    </header>