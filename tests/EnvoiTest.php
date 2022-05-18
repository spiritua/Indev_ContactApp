<?php
require_once 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class EnvoiTest extends TestCase
{
    public function testenvoi(){
       $fichierDb='indev.db';
        $bdd = new PDO('sqlite:'.$fichierDb);
        $bdd->query('DELETE from contact');
        $req = $bdd->prepare('INSERT INTO contact (nom, prenom)
        VALUES(?, ?)');
        $req->execute(array('arnaur', 'boris'));

        $req = $bdd->query('SELECT * from contact WHERE nom = "arnaur"');
        $res = $req->fetchAll();
        $this->assertEquals( 1, count($res)); 
    }

    
}

?>