<?php
// Requête SQL pour afficher toute la base de données film selon le tri de la personne
$tricategorie = $_POST['categorie'];
$query = $bdd->prepare("SELECT film.id, film.nom, film.duree, film.resume, film.realisateur, film.img, categorie.categorie AS categorie FROM film INNER JOIN categorie ON film.RefCat = categorie.RefCat WHERE categorie.Refcat = '$tricategorie'");
$query->execute();
$result = $query->fetchAll(2);
?>