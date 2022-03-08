<?php
    // Fichier permettant de valider toutes les fonctions cotés back
    function champ_obligatoire(String $key, String $data, array &$error, String $message= "Ce champ est obligatoire!"):void{
        if(empty($data)){
            $error[$key]=$message;
        }
    }

    //funtion validant le mail
    function valide_mail(String $key, String $data, array $error, String $message= "email invalid!"):void{
        if(!filter_var($data, FILTER_VALIDATE_EMAIL)){
            $error[$key]=$message;
        }
    }

    //function validant le mot de passe
    function valide_password(String $key, String $data, array $error, $message="Mot de passe invalid"):void{
        if(!filter_var($data, FILTER_VALIDATE_EMAIL)){
            $error[$key]=$message;
        }
    }