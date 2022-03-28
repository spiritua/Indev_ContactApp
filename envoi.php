<?php

// Connexion à la base de données
require_once("connexionbd.php");
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO contact (nom, prenom)
VALUES(?, ?)');
$req->execute(array($_POST['nom'], $_POST['prenom']));
// Redirection du visiteur vers la page du minichat
header('Location: formulaire.php');
include("repertoire.php");
?>