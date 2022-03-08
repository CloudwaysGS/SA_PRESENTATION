<?php
    //Ce fichier à son tour va charger les fichiers controllers
    //en utilisant la variable super Global $_REQUEST fusionnant GET et POST
    if(isset($_REQUEST['controller'])){
        switch($_REQUEST['controller']){
            case "security": 
                require_once(PATH_SRC."controllers/security.controllers.php");
                break;
            case "user":
                require_once(PATH_SRC."controllers/user.controllers.php");
                break;
        }
    }else{
        require_once(PATH_SRC."controllers/security.controllers.php");
    }