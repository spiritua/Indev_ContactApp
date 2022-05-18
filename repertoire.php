<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="repertoire.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
try{
  $fichierDb='indev.db';
  $bdd=new PDO('sqlite:'.$fichierDb);
}
catch(Exception $e)
{
  die ('Erreur: '.$e->getMessage());
}
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table jeux_video

$reponse = $bdd->query('SELECT * FROM contact');
?>
<br/>
<br/>
<br/>
<a href="http://localhost/indev/formod.php">Modifier un contact</a> 
<table id ='contact1'>
  <tr>
    <th>ID</th>
    <th>NOM</th>
    <th>PRENOM</th>
  </tr>
</table>
<?php

while ($donnees = $reponse->fetch())
{
?>

<table id ='contact2'>
  <tr>
    <td><?php echo $donnees['id'];?></td>
    <td><?php echo $donnees['nom']; ?></td>
    <td><?php echo $donnees['prenom'];?></td>
  </tr>
</table>
<form method="post" action="suppression.php">
    <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>"/>
  <input type="submit" value="supprimer" >
</form>


<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
</body>
</html>






  
  