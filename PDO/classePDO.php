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

function delete($id)
{
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=ppe;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete=$connection->query('DELETE FROM classe WHERE id='.$id);
        $connection=null;
    }
    catch (PDOException $e) 
    {
    echo 'Echec lors de la suppression d un sujet : ' . $e->getMessage();
    }
} 

function checkclasse($classe)
{
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=ppe;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->prepare('SELECT count(*) as nb FROM classe WHERE nom = :nom');
        $response->bindValue(':nom', $classe["nom"], PDO::PARAM_STR);
        $response->execute();
        $connection = null;
        $resultat = $response->fetch();
        return $resultat["nb"];
    }
    catch (PDOException $e)
    {
        echo 'Echec lors de la suppression d un sujet : ' . $e->getMessage();
    }
}