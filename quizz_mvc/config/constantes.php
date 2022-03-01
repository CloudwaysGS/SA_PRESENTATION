<?php 
/**
* Chemin sur dossier racine du projet
*/
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
// var_dump(ROOT);
/**
* Chemin sur dossier src qui contient les controllers et les modeles
*/
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
/**
* Chemin sur dossier templates du projet
*/
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
/**
* Chemin sur data qui contient le fichier Json db.json
*/
define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");
/** 
* Requete GET et POST
*/
define("WEB_ROOT","http://localhost/sonatel/SA_PRESENTATION/quizz_mvc/public/");
/**
* Chemin sur le dossier public , pour inclusion des images,css et js*/
define("WEBROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
/**
* Chemin sur l'action des formulaires
*/
define("PATH_POST","http://localhost:8001");
//cle d'erreurs
define("KEY_ERRORS","errors");

define("KEY_USEUR_CONNECT","user-connect");