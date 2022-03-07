<?php


/**
* Traitement des Requetes POST
*/
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_REQUEST['action'])){
    if($_REQUEST['action']=="connexion"){
        $_login = $_POST['login'];
        $_password = $_POST['password'];
        connexion($_login,$_password);
    }
   
}
}
/**
* Traitement des Requetes GET
*/
if($_SERVER["REQUEST_METHOD"]=="GET"){
if(isset($_REQUEST['action'])){
    if($_REQUEST['action']=="connexion"){
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
    }
    else{
        echo"charger la page de connexion";
    }
}else{
    require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
}

}



function connexion(string $login,string $password){
    $errors = [];
    champ_obligatoire('login',$login,$errors);
    if(count($errors)==0){
        valid_email('login',$login,$errors);
    }
    champ_obligatoire('password',$password,$errors);
    if(count($errors)==0){
        $user = find_user_login_password($login,$password);
        if(count($user)!= 0){

            $_SESSION[KEY_USEUR_CONNECT]=$user;
            header("location:".WEB_ROOT."?controller=user&action=accueil");
            exit();
        }else{

            $errors['connexion'] = "Login ou Mot de Passe Incorrect";
            $_SESSION[KEY_ERRORS]=$errors;
             header("location:".WEB_ROOT);
    exit();
        }
}else{
    $_SESSION[KEY_ERRORS] = $errors;
    header("location:".WEB_ROOT);
    exit();
}
}