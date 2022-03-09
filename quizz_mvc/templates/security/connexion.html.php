<?php
    //Inclusion du fichier header vue partielle
    require_once(PATH_VIEW."include/header.inc.html.php");

    //Gestion des erreurs: recupération des erreurs
    if(isset($_SESSION[KEY_ERROR])){
        $errors=$_SESSION[KEY_ERROR];
        unset($_SESSION[KEY_ERROR]);
    }
    
?>


<div class="gencontain">
    
    <div id="container">
        <div class="logform" > 
            <h3>Login Form</h3>
            <span></span>
            <img class="add" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>" alt="">
        </div>
                
            <form action="<?=WEB_ROOT?>" method="POST" id="form" onsubmit="return Validate_Email()">
                <!-- zone de connexion hidden-->
                <input type="hidden" name="controller" value="security">
                <input type="hidden" name="action" value="connexion">
            
            
                <!--Zone d'affichage des messages d'erreur saisies-->
                <?php if(isset($errors['connexion'])): ?>
                <p style="color:red"><?php echo $errors['connexion']; ?> </p>
                <?php endif ?>
            
            
            <div>
                <!--Zone d'affichage des messages d'erreur du login avec sa clé name-->
                <div class="log">
                    <input type="text" class="inplog" placeholder="login" name="login" id="mail">
                    <img class="imglogo" src="<?= WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-login.png"?>" height="" width=""  alt="">
                    
                </div> <br>
                <small id="errormail"></small>

                <?php if(isset($errors['login'])): ?>
                <p style="color:red"><?php echo $errors['login']; ?> </p>
            <?php endif ?>
                
                <!--Zone d'affichage des messages d'erreur mot de passe avec sa clé name-->
                 <div class="pw">
                    <input type="password" class="pwinp" placeholder="password" name="password" id="pw">
                    <img class="imgpw" src="<?= WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-password.png"?>" height="" width=""  alt="">

                </div>
                <?php if(isset($errors['password'])): ?>
                <p style="color:red"><?php echo $errors['password']; ?> </p>
                 <?php endif ?>
                <div>
                <small id="errorpassword"></small>
                    <input type="submit" id='submit' value='Connexion' name="conn">
                    <a href="<?=WEB_ROOT."?controller=security&action=inscription"?>" class="sins">S'inscrire pour jouer</a> 
                    <br>
                    
                </div>
                
            </div>

        </form>




    </div>
</div>

<?php
    //Inclusion du fichier footer ou vue partielle
    require_once(PATH_VIEW."include/footer.inc.html.php");
?>

    