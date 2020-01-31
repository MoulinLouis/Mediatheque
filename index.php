<!DOCTYPE html>

<html lang="fr">

<?php include "style.php" ?>

<?php include "navbar.php" ?>

<div class="container">
abc
<?php
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
    <main role="main">

<!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">PRESENTATION</h2>
                    <p class="lead">Bienvenue sur le site de la médiathèque de Tremblay-en-france. Le catalogue en ligne de la médiathèque vous permet d'effectuer des recherches pour connaître les derniers livres, CD ou DVD disponibles, mais aussi de consulter votre compte personnel, de suivre l'état de vos réservations, ou de vérifier la liste de vos documents empruntés.</p>
                </div>
                <div class="col-md-5">
                    <img src="http://mediatheque.tremblayenfrance.fr/images/articles/infospratiques/mediatheque1.jpg">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">HORAIRE</span></h2>
                    <p>Nouveaux horaires à la médiathèque</p>
                    <p>Mardi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14h-18h</p>
                    <p>Mercredi 10h-18h</p>
                    <p>Vendredi 14h-19h</p>
                    <p>Samedi&nbsp;&nbsp; 10h-18h</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="https://www.particulier-employeur-zen.com/wp-content/uploads/compteur_dheures-300x200.jpg">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">INFO PRATIQUE</span></h2>
                    <p>Nom de la Médiathèque : Médiathèque Boris Vian<br><br>Adresse : 24 boulevard de l’Hôtel de Ville 93290 TREMBLAY-EN-FRANCE<br><br>Téléphone : 01.49.63.69.61<br><br>Fax : 01.49.63.70.72<br><br>E-mail général : <a href="mailto:mediatheque.boris-vian@tremblayenfrance.fr">mediatheque.boris-vian@tremblayenfrance.fr</a></p>                </div>
                <div class="col-md-5">
                    <img width="500px" height="200px" src="http://mediatheque.tremblayenfrance.fr/images/logos-banniere/logo-mediatheque-tremblay.png">
                </div>
            </div>

            <hr class="featurette-divider">


        </div>

    </main>

<?php include "footer.php" ?>


</div>
</html>