<?php
include_once("bd.inc.php");
try {
     $bd = new PDO('mysql:host='.$HOST.';charset=utf8;port='.$PORT.';dbname='.$BD, $USER, $PSWD); 
} 
catch (Exception $e){
    echo 'Une erreur est survenue'.'<br />';
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    die();
}
?>
