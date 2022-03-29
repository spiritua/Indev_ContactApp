<?php
require_once 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class ConnexionTest extends TestCase
{
    public function test_connexion(){
        try{
            $fichierDb='indev.db';
            $bdd=new PDO('sqlite:'.$fichierDb);
        }
        catch(Exception $e)
        {
            die ('Erreur: '.$e->getMessage());
        }
    }
    
}

?>