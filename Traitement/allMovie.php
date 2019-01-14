<?php
// Requête SQL pour afficher toute la base de données film
$query = $bdd->prepare("SELECT film.id, film.nom, film.duree, film.resume, film.realisateur, film.img, categorie.categorie AS categorie FROM film INNER JOIN categorie ON film.RefCat = categorie.RefCat");
$query->execute();
$result = $query->fetchAll(2); ?>