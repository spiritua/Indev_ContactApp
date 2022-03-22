<?php

// Connexion à la base de données
require_once("connexionbd.php");
$id = $_POST['id'];
echo "suppression de :".$id;
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('DELETE FROM contact WHERE id = ?');
$req->execute([$id]);
// Redirection du visiteur vers la page du minichat
header('Location: formulaire.php');
?>