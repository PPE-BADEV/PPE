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
        
        
function createEleve($eleve)
{
        try
        {
                $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $requete = $connection->prepare('INSERT INTO eleve(nom) VALUES(:nom), eleve(prenom) VALUES(:prenom)');
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