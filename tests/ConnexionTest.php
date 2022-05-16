<?php
require_once 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

final class ConnexionTest extends TestCase
{
    private static $bdd;

    public function testsetUpBeforeClass()
    {
       // $connexion = new connexionTest();
        $fichierDb='indev.db';
        self::$bdd=new PDO('sqlite:');
        $this->expectException(Exception::class);
        throw new Exception("erreur",0);
    }

    public function testtearDownAfterClass()
    {
        $bdd = null;
        $this->assertEquals(null, $bdd);
    }
}