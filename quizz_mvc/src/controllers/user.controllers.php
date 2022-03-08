<?php
    //Ce fichier gère tout ce qui tourne autour de la structure de données; les fonctionnalités

    //chargement du modèle
    require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");


    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        
        if(isset($_REQUEST['action'])){
            if($_REQUEST['action']=="connexion"){
                // echo "traiter le formulaire de connexion";
                $log = $_POST['login'];
                $passw= $_POST['password'];
                connexion($log, $passw);
                
            }
            
        }
    }

    if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(isset($_REQUEST['action'])){
            //obliger le user à se connecter avant d'atteindre la page accueil
            if(!is_connect()){
                header("location: ".WEB_ROOT);
                exit();
            }

            if($_REQUEST['action']=="accueil"){
                // echo "charger la page de connexion";
                require_once(PATH_VIEW."user/accueil.html.php" );
            }
            if ($_REQUEST['action']=="liste.joueur") {
                lister_joueur();
            }//liste.joueur


        }else{
            //echo "charger la page de connexion";
            require_once(PATH_VIEW."user/accueil.html.php" );
            // echo "page réservée au Formulaire d'accueil'!";
        }
    }


    //fonction Lister les joeurs
    function lister_joueur(){
        //recupération des données et chargement de la vue
        //appel du modèle
        $data=find_users("ROLE_JOUEUR");
        ob_start();
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."liste.joueur.html.php" );
        $listj= ob_get_clean();
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."accueil.html.php" );

    }