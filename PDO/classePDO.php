<?php

function readAll()
    {
        try
        {
                $connection = new PDO("mysql:host=localhost;dbname=ppe;charset=utf8", 'root', '');
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $response=$connection->query('SELECT * FROM classe ');
                $lesClasses=$response->fetchAll();
                return $lesClasses;
                $connection=null;
        }
        catch (PDOException $e) 
        {
        echo 'Echec lors de la récupération des sujets : ' . $e->getMessage();
        }
    }		

   
function create($classe)
{
        try
        {
                $connection = new PDO("mysql:host=localhost;dbname=ppe;charset=utf8", 'root', '');
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $requete = $connection->prepare('INSERT INTO classe(nom) VALUES(:nom)');
                $requete->bindValue(':nom', $classe["nom"], PDO::PARAM_STR);
                $requete->execute();
                $connection=null;
        }
        catch (PDOException $e)
        {
                echo 'Echec lors de la création d une classe : ' . $e->getMessage();
        }
}