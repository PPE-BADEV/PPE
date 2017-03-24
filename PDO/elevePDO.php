<?php
function getAllEleve()
{

    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM eleve');
        $lesEleves=$response->fetchAll();
        return $lesEleves;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des Eleves : ' . $e->getMessage();
    }
}      
        
        
function createEleve($nom, $prenom)
{
        try
        {
                $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $requete = $connection->prepare('INSERT INTO eleve(nom, prenom) VALUES(:nom,:prenom)');
                $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
                $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
                $requete->execute();
                $connection=null;
        }
        catch (PDOException $e)
        {
                echo 'Echec lors de la création d un eleve : ' . $e->getMessage();
        }
}

function supprimerEleve ($id)
{
        try
        {
               $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $requete = $connection->prepare('DELETE FROM eleve WHERE id='.$id);
                $requete->execute();
                $connection=null;
        }
        catch (PDOException $e)
        {
                echo 'Echec lors de la suppression d un eleve : ' . $e->getMessage();
        }
}
function modifier($id) {
    try
    {
    
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response= $connection->query('SELECT id, nom, prenom FROM eleve WHERE eleve.id='.$id);
        $lesEleves=$response->fetch();
        return $lesEleves;
        $connection=null;
    }
 catch (PDOException $e) {
        echo 'Échec lors de la recuperation d un eleve : ' . $e->getMessage();
    }   
}
function change($id, $nom, $prenom) {
    try
    {
    
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare( 'UPDATE eleve set nom=:nom, prenom=:prenom where eleve.id='.$id);
        $requete ->bindValue(':nom',$nom, PDO::PARAM_STR);
        $requete ->bindValue(':prenom',$prenom, PDO::PARAM_STR);
        $requete ->execute();
        $connection=null;
    }
 catch (PDOException $e) {
        echo 'Échec lors de l action modification d un eleve : ' . $e->getMessage();
    }   
}