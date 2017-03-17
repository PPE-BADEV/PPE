<?php

function getAllProf(){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM prof');
        $Profs=$response->fetchAll();
        return $Profs;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des profs : ' . $e->getMessage();
    }
}

function createCompte($nom,$prenom,$login,$pwd,$is_admin){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('INSERT INTO prof(nom,prenom,login,pwd,is_admin) VALUES(:nom,:prenom,:login,:pwd,:is_admin)');
        $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
        $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $requete->bindValue(':login', $login, PDO::PARAM_STR);
        $requete->bindValue(':pwd', $pwd, PDO::PARAM_STR);
        $requete->bindValue(':is_admin', $is_admin, PDO::PARAM_STR);
        $requete->execute();
        $connection=null;
    }
        catch (PDOException $e)
        {
                echo 'Echec lors de la création d une classe : ' . $e->getMessage();
        }
}
function supprimeProf($id){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('DELETE FROM `prof` WHERE `prof`.`id` = :id');
        $requete->bindValue(':id',$id);
        $requete->execute();
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la création d un prof : ' . $e->getMessage();
    }
}
function modifierProf($id,$nom,$prenom,$login,$pwd,$is_admin){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('UPDATE prof SET nom=:nom , prenom = :prenom , login = :login , pwd = :pwd , is_admin = :is_admin WHERE id= :id');
        $requete->bindValue(':id', $id);
        $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
        $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $requete->bindValue(':login', $login, PDO::PARAM_STR);
        $requete->bindValue(':pwd', $pwd, PDO::PARAM_STR);
        $requete->bindValue(':is_admin', $is_admin, PDO::PARAM_STR);
        $requete->execute();
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la création d un prof : ' . $e->getMessage();
    }
}
       function getOneProf($id){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM prof WHERE prof.id = '.$id);
        $unProf=$response->fetch();
        $connection=null;
        return $unProf;
         
        }
    catch (PDOException $e) {
        echo 'Échec lors de la création d un prof : ' . $e->getMessage();
    }
}