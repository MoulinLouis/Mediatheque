<?php
if(isset($_COOKIE['id'])) {
    $_SESSION['message']='Vous êtes déjà connecté';
    header('location: ../index.php');
} else {
    include "../APP/ConnexionPDO.php";
    session_start();
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $mdp2 = $_POST['mdp2'];


    if (empty($_POST['mail']) OR empty($_POST['mdp']) OR empty($_POST['mdp2']) OR strlen($mdp) < 6) { // Gestion d'erreur
        // Création de la session message pour y afficher le message d'erreur
        $_SESSION['message'] = 'Erreur de champ';
        header('location: ../index.php');
    } elseif ($mdp != $mdp2) { // Gestion d'erreur pour que les 2 mots de passes correspondent
        // Création de la session message pour y afficher le message d'erreur
        $_SESSION['message'] = 'Les 2 mdp ne sont pas identiques';
        header('location: ../index.php');
    } else { // S'il n'y a pas d'erreur, on execute la requête SQL pour insérer les données dans la table information
        $req = $bdd->prepare('INSERT INTO information VALUES(:id,:mail,:mdp)');
        $req->execute(array('id' => NULL, 'mail' => $mail, 'mdp' => $mdp));
        // Création de la session message pour y afficher le message de confirmation
        $_SESSION['message'] = 'Inscription effectue avec succes';
        header('location: ../inscription.php');
    }
}
?>
