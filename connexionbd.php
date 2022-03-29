<?php
// Connexion à la base de données

try{
    $fichierDb='indev.db';
    $bdd=new PDO('sqlite:'.$fichierDb);
}
catch(Exception $e)
{
    die ('Erreur: '.$e->getMessage());
}




/*try
{
$bdd = new PDO('mysql:host=localhost;dbname=indev', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}*/
?>