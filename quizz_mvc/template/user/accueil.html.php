
<?php
//page de presentation
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>
    
<div class="container">

        
        <h2>Le plaisir de jouer</h2>
        
        
         <div class="header">

            <h4>CRÉEZ ET PARAMÉTREZ VOS QUIZZ</h4>
            <a href="<?='WEB_PUBLIC'."?controller=user&action=deconnexion"?>"><span>Deconnexion</span></a>
        </div>
    <div class="contain">  
        
        <div class="Menu">
            <div class="boxe">
            <img class="rond" src="<?= WEB_ROOT. 'css' . DIRECTORY_SEPARATOR .'logo.webp' ?>" height="40%" width="40%"  alt="avatar" class="avatar">
            </div>
                
                <a class="active" href="<?='WEB_PUBLIC'."?controller=user&action=liste.question"?>">Liste Questions</a><br><br>
                      <?php if(is_admin()):?>
                <a href="<?=WEBROOT."?controller=user&action=creer.admin"?>">Creer Admin</a><br><br>
                <a href="<?=WEBROOT."?controller=user&action=liste.joueur"?>">Liste joueurs</a><br><br>
                <a href="<?=WEBROOT."?controller=user&action=creer.question"?>">Créer Questions</a>
            
        </div>
            
        <div class="liste_des-joueurs">
            <?php endif?>
            <?php 
                //contenu des views
                echo $content_for_views;
            ?>
        </div>                       

                            

    </div>
                   
</div>           
    
        

        

    <?php
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
    ?>
</div>    

