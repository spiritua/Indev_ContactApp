<?php

// Connexion à la base de données
require_once("connexionbd.php");
}
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom']
echo "suppression de :".$id;
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('UPDATE contact SET nom = :nom,
prenom = :prenom WHERE id = :id');
$req->execute(array(
    'id' => $id,
    'nom' => $nom,
    'prenom' => $prenom
    ));
// Redirection du visiteur vers la page du minichat
header('Location: formulaire.php');
?>