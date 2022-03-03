<?php
//Chemin des Dossier 
  define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
  define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
  define("PATH_VIEWS_INC",ROOT."templates".DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR);
  //Dossier Public
  define("WEBROOT","http://localhost:8001/");
  define('NOMBRE_PAR_PAGE',10);

  //////

define("PATTERN_EMAIL","#^[a-zA-Z]{1}\w{4,}@(yahoo|gmail|hotmail)\.[a-zA-Z]{2,3}$#");
define("PATTERN_PASSWORD","#^[a-zA-Z0-9@]{4,15}$#");
define("PATTERN_NAME","#[a-zA-Z]{5,}#");
define("PATTERN_NUMERIC","#^[0-9]$#");
define("PATTERN_VIDE","# #");
define("PATTERN_TELEPHONE","#^(\+|00)?(221)?33[0-9]{7}$#");

 