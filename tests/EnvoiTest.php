<?php
require_once 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class EnvoiTest extends TestCase
{
    public function test_envoi(){
        $bdd = new PDO('mysql:host=localhost;dbname=indev', 'root', '');

        $req = $bdd->prepare('INSERT INTO contact (nom, prenom)
        VALUES(?, ?)');
        $req->execute(array($_POST['nom'], $_POST['prenom']));
    }
    
}

?>