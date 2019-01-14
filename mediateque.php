<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


<?php include "style.php" ?>
    <?php include "navbar.php" ?>

    <body>
    <?php
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
    <?php if(empty($_COOKIE['id'])) { // Redirection si la personne n'est pas connecté
        $_SESSION['message']='Veuillez vous inscrire ou vous connecter pour accéder à cette rubrique';
        header('location: inscription.php');
    } else { // Si la personne est connectée on lui affiche la page ?>
    <div class="container"></br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="submit" class="btn btn-secondary" value="A" name="alphabet">A</button>
                    <button type="submit" class="btn btn-secondary" value="B" name="alphabet">B</button>
                    <button type="submit" class="btn btn-secondary" value="C" name="alphabet">C</button>
                    <button type="submit" class="btn btn-secondary" value="D" name="alphabet">D</button>
                    <button type="submit" class="btn btn-secondary" value="E" name="alphabet">E</button>
                    <button type="submit" class="btn btn-secondary" value="F" name="alphabet">F</button>
                    <button type="submit" class="btn btn-secondary" value="G" name="alphabet">G</button>
                    <button type="submit" class="btn btn-secondary" value="H" name="alphabet">H</button>
                    <button type="submit" class="btn btn-secondary" value="I" name="alphabet">I</button>
                    <button type="submit" class="btn btn-secondary" value="J" name="alphabet">J</button>
                    <button type="submit" class="btn btn-secondary" value="K" name="alphabet">K</button>
                    <button type="submit" class="btn btn-secondary" value="L" name="alphabet">L</button>
                    <button type="submit" class="btn btn-secondary" value="M" name="alphabet">M</button>
                    <button type="submit" class="btn btn-secondary" value="N" name="alphabet">N</button>
                    <button type="submit" class="btn btn-secondary" value="O" name="alphabet">O</button>
                    <button type="submit" class="btn btn-secondary" value="P" name="alphabet">P</button>
                    <button type="submit" class="btn btn-secondary" value="Q" name="alphabet">Q</button>
                    <button type="submit" class="btn btn-secondary" value="R" name="alphabet">R</button>
                    <button type="submit" class="btn btn-secondary" value="S" name="alphabet">S</button>
                    <button type="submit" class="btn btn-secondary" value="T" name="alphabet">T</button>
                    <button type="submit" class="btn btn-secondary" value="U" name="alphabet">U</button>
                    <button type="submit" class="btn btn-secondary" value="V" name="alphabet">V</button>
                    <button type="submit" class="btn btn-secondary" value="W" name="alphabet">W</button>
                    <button type="submit" class="btn btn-secondary" value="X" name="alphabet">X</button>
                    <button type="submit" class="btn btn-secondary" value="Y" name="alphabet">Y</button>
                    <button type="submit" class="btn btn-secondary" value="Z" name="alphabet">Z</button>
                </div>

            </div>
        </form></br>
<div class="row">
        <a href="ajoutMovie.php" class="btn btn-primary"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Ajouter un film</a>

    <form class="form-inline offset-1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input class="form-control " name="search" placeholder="Rechercher...">
    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
    </form>
</div></br>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div>
        <input type="radio" name="tri" value="titre" >
        <label>Titre</label>
    </div>
    <div>
        <input type="radio" name="tri" value="genre">
        <label>Genre</label>
    </div>
    <div>
        <input type="radio" name="tri" value="reset">
        <label>Réinitialiser</label>
    </div>
    <button class="btn btn-primary" type="submit"><i class="fas fa-sort"></i>&nbsp;&nbsp;Trier</button>

</form></br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="category">Catégorie:</label>
                <div class="col-md-2">
                    <select class="form-control" name="categorie" id="category">
                        <div class="col-md-2">
                            <?php
                            include "APP/connexionPDO.php";

                            $query = $bdd->query('SELECT * FROM categorie');
                            $result2 = $query -> fetchAll();

                            foreach ($result2 as $row)
                            {
                                echo '<option value="'. $row['RefCat'] .'">'. $row['categorie'] . '</option>';
                            }
                            ?>

                        </div>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit"><i class="fas fa-sort"></i>&nbsp;&nbsp;Trier</button>
        </form>


<?php
include "APP/ConnexionPDO.php";
if(empty($_POST['search']) AND empty($_POST['tri']) AND empty($_POST['categorie']) AND empty($_POST['alphabet'])) { // Affiche tous les film s'il n'y a pas de recherche
    $test = TRUE;
    include "Traitement/allMovie.php";
} elseif(isset($_POST['search'])) { // Affiche le résultat de la recherche si la recherche n'est pas vide
    $test = TRUE;
    include "Traitement/searchMovie.php";
} elseif(isset($_POST['tri'])) {
    if($_POST['tri'] == 'titre') {
        $test = TRUE;
        $query = $bdd->prepare("SELECT film.id, film.nom, film.duree, film.resume, film.realisateur, film.img, categorie.categorie AS categorie FROM film INNER JOIN categorie ON film.RefCat = categorie.RefCat ORDER BY nom");
        $query->execute();
        $result = $query->fetchAll(2);
    } elseif($_POST['tri'] == 'genre'){
        $test = TRUE;
        $query = $bdd->prepare("SELECT film.id, film.nom, film.duree, film.resume, film.realisateur, film.img, categorie.categorie AS categorie FROM film INNER JOIN categorie ON film.RefCat = categorie.RefCat ORDER BY categorie.categorie");
        $query->execute();
        $result = $query->fetchAll(2);
    } elseif($_POST['tri'] == 'reset') {
        $test = TRUE;
        include "Traitement/allMovie.php";
    }
} elseif(isset($_POST['categorie'])) {
$test = TRUE;
include "Traitement/triMovie.php";
} elseif(isset($_POST['alphabet'])) {
    $test = TRUE;
    $trialphabet = $_POST['alphabet'];
    $query = $bdd->prepare("SELECT film.id, film.nom, film.duree, film.resume, film.realisateur, film.img, categorie.categorie AS categorie FROM film INNER JOIN categorie ON film.RefCat = categorie.RefCat WHERE nom LIKE '$trialphabet%'");
    $query->execute();
    $result = $query->fetchAll(2);
}

if(empty($result) AND empty($_POST['tri']) AND empty($_POST['categorie'])) { // Message d'erreur si la recherche ne donne aucun résultat
    $test = FALSE;
    echo '<h3 style="text-align: center;">Pas de résultat trouvé</h3>';
}
if($test == TRUE) {
?>
<div class="row">
<?php
foreach ($result as $film) { ?>
            <div class="col-md-4" style="padding-top: 10px;">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $film['img']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $film['nom']; ?></h5>
                        <p class="card-text"><?php echo $film['resume']; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Durée : <?php echo $film['duree']; ?> minutes</li>
                        <li class="list-group-item">Réalisateur : <?php echo $film['realisateur']; ?></li>
                        <li class="list-group-item">Genre : <?php echo $film['categorie']; ?></li>
                    </ul>
                    <div class="card-body">
                        <a href="editMovie.php?filmid=<?php echo $film['id']; ?>" class="card-link">Modifier</a>
                        <a href="Traitement/deleteMovie.php?filmid=<?php echo $film['id']; ?>" class="card-link">Supprimer</a>
                    </div>
                </div>
            </div>
<?php } } }?>

        </div>
    </div>

    </body>
</html>
