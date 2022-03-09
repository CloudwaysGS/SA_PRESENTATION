
<?php
    require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>

<div class="container">
    

    <div class="champs">
        <div class="insc">
            <h1>S'INSCRIRE</h1>
            
            <p>Pour tester votre niveau de culture générale</p>
        </div>
        <hr>
        <form action="<?=WEB_ROOT?>" method="post" id="form" onsubmit="return validForm()">

        <div class="pren">
            <label for="">Prénom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <small id="errorprenom"></small>

        <div class="nom">
            <label for="">Nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <small id="errornom"></small>

        <div class="logmail">
            <label for="">Login</label>
            <input type="text" name="login" id="login">
        </div>
        <small id="errorlogin"></small>

        <div class="passw">
            <label for="">Password</label>
            <input type="text" name="password" id="password">
        </div>
        <small id="errorpassword"></small>

        <div class="confpassw">
            <label for="">Confirmer Password</label>
            <input type="text" name="conf" id="conf">
        </div>
        <small id="errorconf"></small>

        <div class="get_file">
            <h3>Avatar</h3>
            <input class="choose_file" type="submit" name="" id="" value="Choisir un fichier">
        </div>

        <div class="pren">
            <span></span>
            <input class="btn_creat" type="submit" name="" id="insc" value="Créer un compte">
        </div>
        

        </form>
       
    </div>


    <div class="avat">
            <img class="avat_img" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."logo.webp"?>" alt="" height="25%" width="50%">
            <p>Avatar du joueur</p>
    </div>


</div>








<?php
    require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>