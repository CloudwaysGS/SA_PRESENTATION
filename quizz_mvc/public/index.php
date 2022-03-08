<?php
   //Demarage de la session
   if(session_status()==PHP_SESSION_NONE){
      session_start();
   }

   // echo"<pre>"; 
   //  var_dump(__FILE__);
   //  echo"</pre>";

   //INCLUSION DES CONSTANTES
   require_once(dirname(dirname(__FILE__)))."/config/constantes.php";
   
   //INCLUSION OU CHARGEMENT DU FICHIER ORM
   require_once(dirname(dirname(__FILE__)))."/config/orm.php";

   //INCLUSION OU CHARGEMENT DES ROLES
   require_once(dirname(dirname(__FILE__)))."/config/roles.php";

   //INCLUSION OU CHARGEMENT DU VALIDATOR
   require_once(dirname(dirname(__FILE__)))."/config/validator.php";
   
   //INCLUSION OU CHARGEMENT DU ROUTER
   require_once(dirname(dirname(__FILE__)))."/config/router.php";
   