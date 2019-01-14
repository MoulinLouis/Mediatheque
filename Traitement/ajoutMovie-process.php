<?php
if(empty($_COOKIE['id'])) {
    $_SESSION['message']='Veuillez vous inscrire ou vous connecter pour accéder à cette rubrique';
    header('location: ../inscription.php');
} else {

    include "../APP/ConnexionPDO.php";
    session_start();

    $nom = $_POST['nom'];
    $duree = $_POST['duree'];
    $resume = $_POST['resume'];
    $realisateur = $_POST['realisateur'];
    $categorie = $_POST['categorie'];
    $image = $_POST['image'];

    if (empty($nom) || empty($duree) || empty($resume) || empty($realisateur) || empty($categorie) || empty($image)) { // Gestion d'erreur si un des champs est vide
        // Création de la session message pour y afficher le message de confirmation
        $_SESSION['message'] = 'Un des champs est vide';
        header('location: ../ajoutMovie.php');
    } elseif(strlen($nom) > 40 || strlen($duree) > 3 || strlen($resume) > 500 || strlen($realisateur) > 40 || strlen($image) > 500) {
        $_SESSION['message'] = 'Problème d\'insertion dans la base de donnée';
        header('location: ../ajoutMovie.php');
    }
    else { // Si tous les champs sont remplis, on execute la requete SQL
        $req = $bdd->prepare('INSERT INTO film VALUES(:id,:nom,:duree,:resume,:realisateur,:categorie,:image)');
        $req->execute(array(
                'id' => NULL,
                'nom' => $nom,
                'duree' => $duree,
                'resume' => $resume,
                'realisateur' => $realisateur,
                'categorie' => $categorie,
                'image' => $image,)
        );
        // Création de la session message pour y afficher le message de confirmation
        $_SESSION['message'] = 'Ajout du film effectué avec succès';
        header('location: ../mediateque.php');
    }
}
?>