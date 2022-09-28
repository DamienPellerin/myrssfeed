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
            <h3>Tous les tests</h3>
            <span><a href="">voir tout</a></span>
        </div>
        <div class="all-articles">
            <?php
            displayArticleHome('https://www.jeuxactu.com/rss/tests.rss', 5);
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
            displayArticleHome('https://www.jeuxactu.com/rss/pc.rss', 5);
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
            displayArticleHome('https://www.jeuxactu.com/rss/tips.rss', 5);
            ?>
        </div>
    </section>
</main>