<?php
// $url = $urlrss;
// $rss = simplexml_load_file($url);
// $rssString = simplexml_load_string($rss);
// $elem = new SimpleXMLElement($url, 0, true);
// $itemNumber = 6;

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
                    <img src=' . $elem->channel->item[$i]->enclosure->attributes() . ' alt="">
                </div>
                <div class="title-article">
                    <h4>' . $elem->channel->item[$i]->title . '</h4>
                </div>
            </div>
        </div>
        ';
    }
}

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
                    <p>' . $dates . '</p>
                </div>
                <div><p>' . $elem->channel->item[$i]->description . '</p></div>
                <div class="button-title-section">
                    <a href=' . $elem->channel->item[$i]->link . '>Voir l\'article</a>
                </div>
            </div>
            <div class="img-article-pages">
                <img src=' . $elem->channel->item[$i]->enclosure->attributes() . ' >
            </div>
        </div>
        ';
    }
}
