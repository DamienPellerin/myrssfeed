<main>
    <h1>Formulaire</h1>
    <form   method="GET" id="form">
        <!-- NOMBRE D'ARTICLES SUR UNE PAGE-->
         <!--<div class="articles">
            <label for="six">6 Articles</label>
            <input type="radio" id="six" name="six">
            <label for="nine">9 Articles</label>
            <input type="radio" id="nine" name="nine">
            <label for="twelve">12 Articles</label>
            <input type="radio" id="twelve" name="twelve">
        </div> -->
        <!-- CHOIX DE LA CATÉGORIE-->
        
        <div class="choice">
            <div class="error"><?=$error ?? ''?></div>
            <div class="test"> 
                <label  for="test">Tous les tests</label>
                <input type="checkbox" id="test" value="0" name="choice[]">      
            </div> 
            <div class="actu">   
                <label  for="actu">Actu</label>
                <input type="checkbox" id="actu" value="1" name="choice[]">
            </div>     
            <div class="actuArcade">     
                <label  for="actuArcade">Actualités Arcade</label>
                <input type="checkbox" id="actuArcade" value="2" name="choice[]">
            </div>  
            <div class="astuce" >       
                <label for="astuce">Astuce et Soluces</label>
                <input type="checkbox" id="astuce" value="3" name="choice[]">
            </div>          
        </div>
        <button type="submit">Envoie</button>
    </form>
</main>