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
if(isset($_SESSION['message'])) {
    ?>
    <div class="alert alert-primary offset-4 col-md-4 " role="alert">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['message']; ?>        <button onclick="alertRemove()" type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    </div>
    <?php
    unset($_SESSION['message']);
    echo '<br>';
}
?>
<?php
include('APP/connexionPDO.php');
if(!empty($_GET['filmid']))
{
    $id = $_GET['filmid'];
    $_SESSION['filmid'] = $id;
    $statement = $bdd->prepare("SELECT film.id, film.nom, film.duree, film.resume, film.realisateur, film.img, categorie.categorie AS categorie FROM film INNER JOIN categorie ON film.RefCat = categorie.RefCat WHERE film.id = '$id'");
    $statement->execute();
    $result = $statement->fetch(2); ?>
<?php
}

?>

<center><form method="post" action="Traitement/editMovie-process.php" style="text-align: center">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6">
        <div class="form-group">
            <label>Nom du film</label>
            <input type="text" name="nom" class="form-control" value="<?php echo $result['nom'];?>">
        </div>
            </div>
            <div class="col-md-6">
        <div class="form-group">
            <label>Durée</label>
            <input type="number" name="duree" class="form-control" value="<?php echo $result['duree'];?>">
        </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Résumé</label>
                    <input type="text" name="resume" class="form-control" value="<?php echo $result['resume'];?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Réalisateur</label>
                    <input type="text" name="realisateur" class="form-control" value="<?php echo $result['realisateur'];?>">
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
                            if($row['categorie'] == $result['categorie']) {
                                echo '<option selected="selected" value="' . $row['RefCat'] . '">' . $row['categorie'] . '</option>';
                            } else {
                                echo '<option value="' . $row['RefCat'] . '">' . $row['categorie'] . '</option>';

                            }
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
                    <input type="text" name="image" class="form-control" value="<?php echo $result['img'];?>">
                </div>
            </div>
        </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form></center>

</html>

<?php } ?>
