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
    // echo "okd";die;
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        
        if(isset($_GET['action'])){
            //obliger le user à se connecter avant d'atteindre la page accueil
            if(!is_connect()){
                header("location: ".WEB_ROOT);
                exit();
            }

            if($_GET['action']=="accueil"){
                
                
                if(is_admin()){
                    
                    lister_joueur();
                }elseif(is_joeur()){

                    jeu();
                }else{
                    
                }
                
            }
            elseif ($_REQUEST['action']=="liste.joueur") {
                lister_joueur();
            }//liste.joueur


        }
        

        // creer admin
    
        if($_REQUEST['action']=="creer.admin"){
        creer_admin();
        }

            //Liste question
        if($_REQUEST['action']=="liste.question"){
        liste_question();
        }

            //creer admin
            if($_REQUEST['action']=="creer.question"){
                creer_question();
            }
    }


    
    function jeu(){
   
        ob_start();
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."jeu.html.php");
        $content_for_views = ob_get_clean();
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."accueil.html.php");

    }
    function liste_question(){
        $data = json_to_array('question');  
        ob_start();

        $data=json_to_array("question");
        $page = (!empty($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
        $limit = 5;
        $totalPages = ceil(count($data) / $limit);
        $page = max($page, 1);
        $page = min($page, $totalPages);
        $offset = ($page - 1) * $limit;
        $offset = ($offset < 0) ? 0 : $offset;
        $items = array_slice($data, $offset, $limit);
       
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."liste.question.html.php");
        $content_for_views = ob_get_clean();
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."accueil.html.php");
    
    
    
    }
    
     function creer_admin(){
       
            ob_start();
            $data = find_users('ROLE_ADMIN');
            require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."creer.admin.html.php");
            $content_for_views = ob_get_clean();
            require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."accueil.html.php");
    }
    
    function creer_question(){
       
        ob_start();
        $data = json_to_array('question');
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."creer.question.html.php");
        $content_for_views = ob_get_clean();
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."accueil.html.php");
}
    //fonction Lister les joeurs

        function lister_joueur(){
           
            if($_REQUEST['action']=="accueil"){  
                $content_for_views ="";
                
            require_once(PATH_VIEW."user/accueil.html.php" );
            }
        if($_REQUEST['action']=="liste.joueur"){ 
        //recupération des données et chargement de la vue
        //appel du modèle
        ob_start();

        $data=find_users("ROLE_JOUEUR");
        $page = (!empty($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
        $limit = 4;
        $totalPages = ceil(count($data) / $limit);
        $page = max($page, 1);
        $page = min($page, $totalPages);
        $offset = ($page - 1) * $limit;
        $offset = ($offset < 0) ? 0 : $offset;
        $items = array_slice($data, $offset, $limit);
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."liste.joueur.html.php" );
        $content_for_views = ob_get_clean();
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."accueil.html.php" );

        $data=find_users("ROLE_JOUEUR");
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."liste.joueur.html.php" );
        $content_for_views = ob_get_clean();
        require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."accueil.html.php" );

        }
    }