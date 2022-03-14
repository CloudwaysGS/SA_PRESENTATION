
<?php
    require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>

<div class="containinscription">
    

    <div class="champsinscription">
        <div class="inscrire">
            <h1>S'INSCRIRE</h1>
            
            <p>Pour tester votre niveau de culture générale</p>
        </div>
        <hr>
        <form action="<?=WEB_ROOT?>" method="post" id="form"  onsubmit="return validForm()">
        <input type="hidden" name="controller" value="security">
        <input type="hidden" name="action" value="inscription">
        <small><?= isset($messagesuccess)? $messagesuccess:""?></small>
        <div class="pren">
            <label for="">Prénom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <small id="errorprenom"></small>
        <small id="errorprenom"><?= isset($_SESSION["errors"]["prenom"])? $_SESSION["errors"]["prenom"]: "" ?></small>

        <div class="nom">
            <label for="">Nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <small id="errornom"></small>
        <small id="errornom"><?= isset($_SESSION["errors"]["nom"])? $_SESSION["errors"]["nom"]: "" ?></small>

        <div class="logmail">
            <label for="">Login</label><br><br>
            <input type="text" name="login" id="login">
        </div>
        <small id="errorlogin"></small>
        <small id="errorlogin"><?= isset($_SESSION["errors"]["login"])? $_SESSION["errors"]["login"]: "" ?></small>

        <div class="passw">
            <label for="">Password</label>
            <input type="text" name="password" id="password">
        </div>
        <small id="errorpassword"><?= isset($_SESSION["errors"]["password"])? $_SESSION["errors"]["password"]: "" ?></small>

        <div class="confpassw">
            <label for="">Confirmer Password</label>
            <input type="text" name="conf" id="conf">
        </div>
        <small id="errorconf"></small>
        <small id="errorconf"><?= isset($_SESSION["errors"]["conf"])? $_SESSION["errors"]["conf"]: "" ?></small>


        
        <div class="pren">
            <span></span>
            <input class="btn_creat" type="submit" name="" id="insc" value="Créer un compte">
        </div>
        

        </form>
       
    </div>

    <input type="file" name=""  id="image" onchange="upload(this)">
    <div class="avat">
        <label for="image">
        <img class="avat_img" id="taff" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."logo.webp"?>" alt="" height="25%" width="60%">
           
        </label>
        <p>Avatar du joueur</p>
    </div>


</div>








<?php
    require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."footer.inc.html.php");

    
    unset($_SESSION["errors"]);
?>