<main>
    <div class="herobanner">
        <div class="title-herobanner">
            <h1>retro jv</h1>
            <p>Votre actu JV personnalisé</p>
        </div>
    </div>
    <!-- Premiére section catégorie -->
    <section class="catégorie">
        <div class="title-section">
            <!-- Variable catégorie -->
            <h3><?= $valueCookie[0]; ?></h3>
            <span><a href="">voir tout</a></span>
        </div>
        <div class="all-articles">
            <?php
            displayArticleHome($valueCookie[0], $numberArticle);
            ?>
        </div>
    </section>
    <!-- Deuxieme section catégorie-->
    <section class="catégorie">
        <div class="title-section">
            <!-- Variable catégorie -->
            <h3>Tous les tests</h3>
            <span><a href="">voir tout</a></span>
        </div>
        <div class="all-articles">
            <?php
            displayArticleHome($valueCookie[1], $numberArticle);
            ?>
        </div>
    </section>
    <!-- Troisiéme section catégorie -->
    <section class="catégorie">
        <div class="title-section">
            <!-- Variable catégorie -->
            <h3>Tous les tests</h3>
            <span><a href="">voir tout</a></span>
        </div>
        <div class="all-articles">
            <?php
            displayArticleHome($valueCookie[2], $numberArticle);
            ?>

        </div>
    </section>
</main>