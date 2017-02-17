<?php
function create($eleve)
{
        try
        {
                $connection = new PDO("mysql:host=localhost;dbname=ppe;charset=utf8", 'root', '');
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $requete = $connection->prepare('INSERT INTO eleve(nom) VALUES(:nom), eleve(prenom) VALUES(:prenom)');
                $requete->bindValue(':nom', $eleve["nom"], ':prenom', $eleve["prenom"], PDO::PARAM_STR);
                $requete->execute();
                $connection=null;
        }
        catch (PDOException $e)
        {
                echo 'Echec lors de la création d un eleve : ' . $e->getMessage();
        }
}

function supprimer($id)
{
        try
        {
                $connection = new PDO("mysql:host=localhost;dbname=ppe;charset=utf8", 'root', '');
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