<?php
// Requête SQL pour afficher toute la base de données film selon la recherche de la personne
$search = $_POST['search'];
$search = strtoupper($search);
$query = $bdd->prepare("SELECT film.id, film.nom, film.duree, film.resume, film.realisateur, film.img, categorie.categorie AS categorie FROM film INNER JOIN categorie ON film.RefCat = categorie.RefCat WHERE UPPER(nom) LIKE '%$search%'");
$query->execute();
$result = $query->fetchAll(2);
?>