<?php

// Affichage article home
function displayArticleHome($urlrss, $numberItem)
{
    $url = $urlrss;
    $elem = new SimpleXMLElement($url, 0, true);
    $itemNumber = $numberItem;

    for ($i = 0; $i <= $itemNumber; $i++) {
        echo
        '
        <div>
            <div class="article">
                <div class="img-article">
                    <img src=' . $elem->channel->item[$i]->enclosure->attributes() . ' alt=' . $elem->channel->item[$i]->title . '>
                </div>
                <div class="title-article">
                    <h4>' . $elem->channel->item[$i]->title . '</h4>
                </div>
            </div>
        </div>
        ';
    }
}

// Affichage article page
function displayArticlePage($urlrss, $numberItem)
{
    $url = $urlrss;
    $elem = new SimpleXMLElement($url, 0, true);
    $itemNumber = $numberItem;

    for ($i = 0; $i <= $itemNumber; $i++) {
        $rssDates = $elem->channel->item[$i]->xpath('dc:date');
        foreach ($rssDates as $value) {
            $date = new DateTime($value);
            $dates = $date->format('d-m-Y');
        }
        echo
        '
       
        <div class="article-pages">
            <div>
                <div class="title-section title-article-section">
                    <h3>' . $elem->channel->item[$i]->title . '</h3>
                </div>
                <div>
                <p class="title-section-date">' . $dates . '</p>
                <p>' . $elem->channel->item[$i]->description . '</p>
                </div>
                <div class="button-article-section">
                    <a href=' . $elem->channel->item[$i]->link . '>Voir l\'article</a>
                </div>
            </div>
            <div class="img-article-pages">
                <img src=' . $elem->channel->item[$i]->enclosure->attributes() . ' alt=' . $elem->channel->item[$i]->title . ' >
            </div>
        </div>
        ';
    }
}

// Title article main
function displayMainTitleArticle($urlrss)
{
    $url = $urlrss;
    $elem = new SimpleXMLElement($url, 0, true);

    echo  $elem->channel->description;
}

// gestion navigation
function navigationManagement($categories, $numberArticles)
{
    if (strstr($_SERVER['QUERY_STRING'], $categories)) {
?>
        <main>
            <section class="catégorie">
                <div class="title-section main-title-page">
                    <h1><?php displayMainTitleArticle($categories) ?></h1>
                </div>
                <?php
                displayArticlePage($categories, $numberArticles);
                ?>
            </section>
        </main>
        </div>
<?php
    }
}
?>