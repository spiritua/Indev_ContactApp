<?php
require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
/**
 * * @covers connexionbd.php
 *
 * @internal
 */
class ModificationTest extends TestCase
{
    public function testmodification(){
        
        require_once("connexionbd.php");
        $req = $bdd->query("UPDATE contact SET nom = 'boss' ,
        prenom = 'lion' WHERE nom = 'arnaur'");
        $req->execute();

        $req = $bdd->query('SELECT * from contact WHERE nom = "boss"');
        $res = $req->fetchAll();
        $this->assertEquals( 1, count($res)); 
    }
}
?>