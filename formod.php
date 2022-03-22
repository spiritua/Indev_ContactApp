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

<form method="post" action="modification.php">
<label for="nom">Id:</label><br>
  <input type="number" id="id" name="id" ><br>
  <label for="nom">Nom:</label><br>
  <input type="text" id="nom" name="nom" ><br>
  <label for="prenom">Prénom:</label><br>
  <input type="text" id="prenom" name="prenom"><br><br>
  <input type="submit" value="Enregistrer" >
</form> 
<?php include("search.php"); ?>
<br/>
<br/>
<br/>
<a href="http://localhost/indev/index.php">Accueil</a> 
</body>
</html>