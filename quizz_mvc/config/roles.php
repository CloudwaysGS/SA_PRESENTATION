<?php
    //Ce fichier est pour la gestion des autorisations des utilisateurs et admin


    //Constantes
    define("ROLE_JOEUR","ROLE_JOEUR");
    define("ROLE_ADMIN","ROLE_ADMIN");
    //si la personne est connectée
    function is_connect(){
        return isset($_SESSION[KEY_USER_CONNECT]);
    }

    //si elle joeur
    function is_joeur(){
        return is_connect() && $_SESSION[KEY_USER_CONNECT]['role']==ROLE_JOEUR;
    }

    //si elle admin
    function is_admin(){
        return is_connect() && $_SESSION[KEY_USER_CONNECT]['role']==ROLE_ADMIN;
    }