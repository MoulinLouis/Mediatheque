<!DOCTYPE html>
<html lang="fr">
<?php include "style.php" ?>

<?php include "navbar.php" ?>


<?php
if(empty($_COOKIE['id'])) {
    $_SESSION['message']='Veuillez vous inscrire ou vous connecter pour accéder à cette rubrique';
    header('location: inscription.php');
} else {
session_start();
if(isset($_SESSION['message'])) { // Si il y a un quelconque message dans le $_SESSION, on l'affiche
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



<form  method="post" action="Traitement/ajoutMovie-process.php" style="text-align: center">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6">
        <div class="form-group">
            <label>Nom du film</label>
            <input type="text" name="nom" class="form-control" placeholder="Entrer le nom du film">
        </div>
            </div>
            <div class="col-md-6">
        <div class="form-group">
            <label>Durée</label>
            <input type="number" name="duree" class="form-control" placeholder="Entrer la durée du film">
        </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Résumé</label>
                    <input type="text" name="resume" class="form-control" placeholder="Entrer le résumé du film">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Réalisateur</label>
                    <input type="text" name="realisateur" class="form-control" placeholder="Entrer le nom du réalisateur du film">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category">Catégorie:</label>
                    <select class="form-control" name="categorie" id="category" name="category">
                        <?php
                        include "APP/connexionPDO.php";

                        $query = $bdd->query('SELECT * FROM categorie');
                        $result2 = $query -> fetchAll();

                        foreach ($result2 as $row)
                        {
                            echo '<option value="'. $row['RefCat'] .'">'. $row['categorie'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

        </div>
        <div class="row">
        <div class="col-md-12">
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" name="image" class="form-control" placeholder="Entrer l'url de votre image">
                </div>
            </div>
        </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

</html>

<?php } ?>