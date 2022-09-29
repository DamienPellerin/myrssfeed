<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gérer votre flux d'actualités jeu vidéo</title>
    <link rel="stylesheet" href=".././public/assets/css/style.css">
</head>

<body>

    <main class="background-form">
        <div class="form">
            <h1>options</h1>
            <p>Personnalisez votre flux d'actualités</p>

            <form method="POST" id="form">
                <div class="article-form">
                    <!-- NOMBRE D'ARTICLES SUR UNE PAGE-->
                    <h2>Nombre d'article</h2>
                    <div class="userchoice-number-article">
                        <div>
                            <label for="six">6 articles</label>
                            <input type="radio" id="six" value="5" name="nbArticles">
                        </div>
                        <div>
                            <label for="nine">9 articles</label>
                            <input type="radio" id="nine" value="8" name="nbArticles">
                        </div>
                        <div>
                            <label for="twelve">12 articles</label>
                            <input type="radio" id="twelve" value="11" name="nbArticles">
                        </div>
                        <p class="error-text"><?= $error['nbArticles'] ?? "" ?></p>
                    </div>
                </div>

                <!-- CHOIX DE LA CATÉGORIE-->
                <div class="category">
                    <h2>Catégorie d'article</h2>
                    <p>( Choissisez en 3 )</p>
                    <div class="userchoice-categories-article">
                        <?php foreach ($links as $key => $link) { ?>
                            <div>
                                <input type="checkbox" id="<?= $key ?>" value="<?= $link ?>" name="category[]">
                                <label for="<?= $key ?>"><?= $key ?></label>
                            </div>
                        <?php } ?>
                        <p class="error-text"><?= $error['categories'] ?? "" ?></p>
                    </div>
                </div>
                <button type="submit">Générer</button>
            </form>
        </div>
    </main>

</body>

</html>