<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Formulaire de contact</h2>

<form method="post" action="envoi.php">
  <label for="nom">Nom:</label><br>
  <input type="text" id="nom" name="nom" ><br>
  <label for="prenom">Prénom:</label><br>
  <input type="text" id="prenom" name="prenom"><br><br>
  <input type="submit" value="Enregistrer" >
</form> 
<br/>
<br/>
<br/>
<?php include("repertoire.php"); ?>
</body>
</html>

