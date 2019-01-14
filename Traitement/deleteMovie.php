<?php

    session_start();
    include('../APP/connexionPDO.php');
    if (!empty($_GET['filmid'])) // On récupère l'id du film et on le supprime
    {
        $id = $_GET['filmid'];
        $statement = $bdd->prepare("DELETE FROM film WHERE id = ?");
        $statement->execute(array($id));

        // Création de la session message pour y afficher le message de confirmation
        $_SESSION['message'] = 'Suppression effectué avec succès';
        header("Location: ../mediateque.php");
    } else {
        $_SESSION['message']='Vous n\'avez pas accès à cette page';
        header('location: ../index.php');
    }

?>
</body>
</html>