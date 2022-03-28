<?php
require_once("connexionbd.php");

$allcontacts = $bdd->query('SELECT nom, prenom FROM contact ORDER BY id  DESC');
if(isset($_GET['s']) AND !empty($_GET['s'])){
    $recherche = htmlspecialchars($_GET['s']);
    
    $allcontacts = $bdd->prepare("SELECT nom, prenom FROM contact WHERE nom LIKE ? OR prenom like ?  ORDER BY id DESC");
    $allcontacts->execute(['%'.$recherche.'%', '%'.$recherche.'%']);
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <input type="search" name="s" placeholder="Rechercher un utilisateur" autocomplete="on">
        <input type="submit" name="envoyer">
    </form>

    <section class="afficher contact">
        <?php
            if($allcontacts->rowCount() > 0){
                while($contact = $allcontacts->fetch()){
              ?>
              <p><?= $contact['nom']; ?> <?= $contact['prenom']; ?></p>
              <?php  
                }
            }else{
                ?>
                <p>Aucun contact trouvé</p>
                <?php
            }
        ?>

        
    </section>

  

</body>
</html>