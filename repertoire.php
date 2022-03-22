<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=indev', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM contact');
?>
<br/>
<br/>
<br/>
<a href="http://localhost/indev/formod.php">Modifier un contact</a> 
<table>
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

<table>
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






  
  