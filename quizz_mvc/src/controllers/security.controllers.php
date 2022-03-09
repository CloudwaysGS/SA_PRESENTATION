
<?php
    //Ce fichier permet de gérer tout ce qui est connexion/déconnexion
    //elle vérifie si la requête est du POST OU GET la page par défaut est celle de connexion

    require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_REQUEST['action'])){
            if($_REQUEST['action']=="connexion"){
                // die("je suis sur l'action de connexion");
                //echo "traiter le formulaire de connexion";
                $log = $_POST['login'];
                $passw= $_POST['password'];
                
                connexion($log, $passw);
            }
           
            //Recupération données formulaire
            if($_REQUEST['action']=="inscription"){
                $prn=$_POST['prenom'];
                $nom=$_POST['nom'];
                $log=$_POST['login'];
                $pass=$_POST['password'];
                $c=$_POST['conf'];
                // var_dump($_POST); die();
                inscription($prn, $nom, $log, $pass, $c);
                
            }


            
        }
    }

    if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(isset($_REQUEST['action'])){
            if($_REQUEST['action']=="connexion"){
                //echo "charger la page de connexion";
                require_once(PATH_VIEW."security".DIRECTORY_SEPARATOR."connexion.html.php" );
            }elseif($_REQUEST['action']=="deconnexion"){
                logout();
                //Deconnexion
            }elseif($_REQUEST['action']=="inscription"){
                require_once(PATH_VIEW."user".DIRECTORY_SEPARATOR."inscription.html.php");
            }

        }else{
            //echo "charger la page de connexion";
            require_once(PATH_VIEW."security".DIRECTORY_SEPARATOR."connexion.html.php" );
        }
    }


















    
    //US1
    function connexion(String $login, String $password): void{
        $error=[];
        champ_obligatoire('login', $login, $error, "Login Obligatoire!");

        if(count($error)==0){
            valide_mail('login', $login, $error);
        }

        champ_obligatoire('password', $password, $error);
        if(count($error)==0){
            //valide_password('password', $passw, $error);
            $user= find_user_login_password($login, $password);
        //appel d'une fonction du modele
            if(count($user)!=0){
                //exitence de l'utiliesatur
                
                $_SESSION[KEY_USER_CONNECT]=$user;
                header("location:".WEB_ROOT."?controller=user&action=accueil");
                exit();
            }else{
                //pas d'utilisateur
                $error['connexion']="Login ou Mot de Passe incorrect!";
                $_SESSION[KEY_ERROR]=$error;

                header("location: ".WEB_ROOT);
                exit();
            }
        }else
        {
            $_SESSION[KEY_ERROR]=$error; //stockage des erreurs dans la session
            header("location: ".WEB_ROOT);
            exit(); //arret de la redirection
        }
    }

    //fonction logout();
    function logout(){
        session_destroy(); 
        header("location: ".WEB_ROOT);
        exit();

    }