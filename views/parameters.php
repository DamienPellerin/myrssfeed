<main>
    <h1>Formulaire</h1>

    <form method="POST" id="form">
        <!-- NOMBRE D'ARTICLES SUR UNE PAGE-->
        <div class="article-form">
            <label for="six">6 articles</label>
            <input type="radio" id="six" value="6" name="nbArticles">
            <label for="nine">9 articles</label>
            <input type="radio" id="nine" value="9" name="nbArticles">
            <label for="twelve">12 articles</label>
            <input type="radio" id="twelve" value="12" name="nbArticles">
        </div>

        <!-- CHOIX DE LA CATÉGORIE-->
        <div class="category">
            <div class="error"><?= $error ?? '' ?></div>
            <div class="test">
                <label for="test">Tous les tests</label>
                <input type="checkbox" id="test" value="0" name="category[]">
            </div>
            <div class="actu">
                <label for="actu">Actu</label>
                <input type="checkbox" id="actu" value="1" name="category[]">
            </div>
            <div class="actuArcade">
                <label for="actuArcade">Actualités Arcade</label>
                <input type="checkbox" id="actuArcade" value="2" name="category[]">
            </div>
            <div class="astuce">
                <label for="astuce">Astuce et Soluces</label>
                <input type="checkbox" id="astuce" value="3" name="category[]">
            </div>
        </div>
        <button type="submit">Envoie</button>
    </form>
</main>