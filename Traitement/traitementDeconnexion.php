<?php
if(empty($_COOKIE['id'])) {
    $_SESSION['message']='Veuillez vous inscrire ou vous connecter pour accéder à cette rubrique';
    header('location: ../inscription.php');
} else {
    session_start();
// On supprime le cookie id
    setcookie('id', $result['id'], time() - 1, '/');

// Création de la session message pour y afficher le message de confirmation
    $_SESSION['message'] = 'Déconnexion effectuée avec succès';
    header('location: ../index.php');
}
?>
