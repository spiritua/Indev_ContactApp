<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testconnexionbd()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=indev', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        
    }
}