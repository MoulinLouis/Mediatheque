<!DOCTYPE html>
<html lang="fr">
<?php include "style.php" ?>
<?php include "navbar.php" ?>

<?php
if(isset($_COOKIE['id'])) {
    $_SESSION['message']='Vous êtes déjà connecté';
    header('location: index.php');
} else {
session_start();
if(isset($_SESSION['message'])) {
    ?>
    <div class="row">
        <div class="alert alert-primary offset-4 col-md-4 " role="alert">
            <?php echo $_SESSION['message']; ?>
        </div>
    </div>
    <?php
    unset($_SESSION['message']);
    echo '<br>';
}
?>


<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Inscription</h5>
                    <form class="form-signin" method="post" action="Traitement/traitementInscription.php">
                        <div class="form-label-group">
                            <label>Adresse email</label>
                            <input type="email" name="mail" class="form-control" placeholder="Entrer votre adresse mail" required autofocus>
                        </div>

                        <div class="form-label-group">
                            <label>Mot de passe</label>
                            <input type="password" name="mdp" class="form-control" placeholder="Au moins 6 caractères" required>
                        </div>

                        <div class="form-label-group">
                            <label>Entrer le mot de passe à nouveau</label>
                            <input type="password" name="mdp2" class="form-control" required>
                        </div></br>

                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Vous inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php } ?>