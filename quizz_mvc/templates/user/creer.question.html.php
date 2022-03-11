<h1>PARAMZTRER VOTRE QUESTION</h1>
<div class="container">
    

    <div class="champs">
        <div class="insc">
            
            
        </div>
        
        <div class="pren">
            <label for="">Questions</label>
            <input class="txt" type="text" name="" id=""><br><br>
        </div>
        
        <div class="nom">
            <label for="">Nombre de point</label>
            <input type="number" name="" id=""><br><br>
        </div>
       
        <div class="type">
            <label for="">Type de reponse</label>
            <select class="option" name="" id="">
            <option  value="">Donnez le type de reponse</option>
                <option value="">Choix multiple</option>
                <option value="">Choix unique</option>
                <option value="">Choix à saisir</option>
            </select><br><br>
            <input class="btnn" type="button" value="+">
        </div>
        
        <div class="Reponse1">
            <label for="">Reponse1</label>
            <input class="resp" type="text" name="password" id="password">
            <input type="checkbox" name="" id="">  
        </div>

        
        

        <div class="enreg">
            <span></span>
            <input class="b" type="submit" name="" id="insc" value="Enregistrer">
        </div>
        

        </form>
       
    </div>




</div>








<?php
    require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."footer.inc.html.php");

    
    unset($_SESSION["errors"]);
?>