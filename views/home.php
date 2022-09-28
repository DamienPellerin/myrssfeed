<main>
    <h1>Formulaire</h1>
    
    <form   method="POST" id="form">
        <!-- NOMBRE D'ARTICLES SUR UNE PAGE-->
         <div class="article">
            <label for="six">6 articles</label>
            <input type="radio" id="six" value="6" name="nbArticles">
            <label for="nine">9 articles</label>
            <input type="radio" id="nine" value="9" name="nbArticles">
            <label for="twelve">12 articles</label>
            <input type="radio" id="twelve"value="12" name="nbArticles">
        </div> 
     
        <!-- CHOIX DE LA CATÉGORIE-->
        <div class="category">
             <?php foreach($links as $key => $link){?>
                <label  for="test"><?=$key?></label>
                <input type="checkbox" id="test" value="<?=$link?>" name="category[]">      
                <?php }?>                   
                                      
        </div>
        <button type="submit">Envoie</button>
    </form>
</main>