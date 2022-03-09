<?php

   define("ROOT", str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER["SCRIPT_FILENAME"]));
   //var_dump(ROOT);

//var_dump(dirname(dirname(__FILE__)));
//Chemin sur dossier src contenant les controllers et les modeles
    define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
//Chemin sur dossier contenant les templates ou vues du projet
    define("PATH_VIEW",ROOT."templates".DIRECTORY_SEPARATOR);
//Chemin qui contient le fichier json
    define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");
//Chemin de mes requêtes GET OU POST et l'URL utilisé pour envoyer les requêtes
    define("WEB_ROOT", "http://localhost/sonatel/SA_PRESENTATION/quizz_mvc/public/");
//chemin pointant le dossier public
    define("WEB_PUBLIC", str_replace("index.php","", $_SERVER['SCRIPT_NAME'] ));
    // echo"<pre>"; 
    // var_dump($_SERVER);
    // echo"</pre>";

//Clé d'erreurs
define("KEY_ERROR","errors");

define("KEY_USER_CONNECT", "found_user");//cle utilisateur connecté