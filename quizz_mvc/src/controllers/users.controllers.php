<?php

require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){

        }
       
    }
    }
    /**
    * Traitement des Requetes GET
    */
    if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="accueil"){
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }

        elseif($_REQUEST['action']=="liste.joueur"){
            
            
            lister_joueur();
        }
    
        if($_GET['action']=="deconnexion"){
            
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
            header("location:".WEB_ROOT);
        }
    
    }

    // creer admin
    
    if($_REQUEST['action']=="creer.admin"){
                 creer_admin();
    }


    if($_REQUEST['action']=="liste.question"){
        liste_question();
}
 }



 function liste_question(){
   
    ob_start();
    $data = find_user('ROLE_ADMIN');
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.question.html.php");
    $content_for_views = ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");



}

 function creer_admin(){
   
        ob_start();
        $data = find_user('ROLE_ADMIN');
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."creer.admin.html.php");
        $content_for_views = ob_get_clean();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
    
    

    }

    // 
    

 function lister_joueur(){
    //Appel du model
    if($_REQUEST['action']=="accueil"){
        $content_for_views="";
        

        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");

        
    }
    if($_REQUEST['action']=="liste.joueur"){
        ob_start();
        $data = find_user('ROLE_JOUEUR');
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php");
        $content_for_views = ob_get_clean();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
    
    }
   
 }


function jeu(){
    //Appel du model
   

    }

