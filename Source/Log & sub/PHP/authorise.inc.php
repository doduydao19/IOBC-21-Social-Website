<?php
    //verifie si la session "joueur" existe
    if(!isset($_SESSION['utilisateur'])){
        //si elle n'existe pas, renvoyer à l'index
        header("Location:login.php");
        exit();
    }
?>
