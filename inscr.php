<?php

if(empty($_POST['mail']) || empty($_POST['mdp'])) {
    // Message d'erreur
    // Redirection
} else {
    $mail=$_POST['mail'];
    $mdp=$_POST['mdp'];

    $bdd=newPDO("mysql:host=localhost;dbname=test,'root', '' ");
    $req = $bdd->prepare("INSERT INTO information VALUES mail = '$mail', mdp = '$mdp'");
    $req->execute();

}


?>