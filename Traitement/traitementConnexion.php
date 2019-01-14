<?php

session_start();
include('../APP/connexionPDO.php');
$req = $bdd->prepare('SELECT mail, mdp, id FROM information WHERE mail = :mail AND mdp = :mdp');
$req->execute(array('mail' => $_POST['mail'], 'mdp' => $_POST['mdp']));
$result = $req->fetch();

if(empty($_POST['mail']) OR empty($_POST['mdp'])) { // Si un des 2 champs est vide
    // Création de la session message pour y afficher le message d'erreur
    $_SESSION['message']='Erreur de champ';
    header('location: ../index.php');
}
elseif ($req->rowCount() == 1) { // Si le formulaire correspond à une ligne de la base de données information
    setcookie('id', $result['id'], time() + 3600, '/');
    $_SESSION['message']='Connexion réussie';
    header('location: ../index.php');
} else {
    // Création de la session message pour y afficher le message d'erreur
    $_SESSION['message']='Erreur de connexion';
    header('location: ../index.php');
}
?>
