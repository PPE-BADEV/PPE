<?php

function readAllClasse()
    {
        try
        {
                $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
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

   
function createClasse($classe)
{
        try
        {
                $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
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

function deleteClasse($id)
{
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete=$connection->query('DELETE FROM classe WHERE id='.$id);
        $connection=null;
    }
    catch (PDOException $e) 
    {
    echo 'Echec lors de la suppression d un sujet : ' . $e->getMessage();
    }
} 

function checkClasse($classe)
{
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
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

function renameClasse($nom , $id)
{
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('UPDATE classe SET nom ="'.$nom.'" WHERE id ='.$id);
        $connection=null;
    } 
    catch (Exception $e) 
    {
        echo 'Echec lors de la modification d un sujet : ' . $e->getMessage();
    }
}

function readOneClasse($id)
    {
        try
        {
                $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $response=$connection->query('SELECT * FROM classe where id='.$id);
                $laClasse=$response->fetch();
                return $laClasse;
                $connection=null;
        }
        catch (PDOException $e) 
        {
        echo 'Echec lors de la récupération d une classe : ' . $e->getMessage();
        }
    }	