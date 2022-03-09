<?php
    // Fichier permettant de valider toutes les fonctions cotés back
    function champ_obligatoire(String $key, String $data, array &$error, String $message= "Ce champ est obligatoire!"):void{
        if(empty($data)){
            $error[$key]=$message;
        }
    }

    //funtion validant le mail
    function valide_mail(String $key, String $data, array $error, String $message= "email invalid!"):void{
        if (!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $data)){
            $error[$key]=$message;
        }
    }
    //function validant le mot de passe
    function valide_password(String $key, String $data, array $error, $message="Mot de passe invalid"):void{
        $number = preg_match('/[0-9]/', $data);
        $letter = preg_match('/[a-zA-Z]/', $data);
        if(strlen($data) < 6 || !$number || !$letter) {
            $error[$key]=$message;
        }
    }