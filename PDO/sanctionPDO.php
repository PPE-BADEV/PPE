<?php

 function deleteCritSanction($id){
        try{
            $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8",USER_BD,PWD_BD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $requete = $connection->prepare('DELETE FROM critere where critere.id='.$id);
            $requete->execute();
            $connection=null;
        }
        catch (PDOException $e) {
        echo 'Échec de suppression du critere de sanction  ' . $e->getMessage();
    }
}
function createCritSanction($nomCritSanct,$description){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('INSERT INTO critere(nom, description, type) VALUES(:nom,:description,:type)');
        $requete->bindValue(':nom', $nomCritSanct, PDO::PARAM_STR);
        $requete->bindValue(':description', $description, PDO::PARAM_STR);
        $requete->bindValue(':type', 1, PDO::PARAM_STR);
        $requete->execute();
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la création d un critere de sanction : ' . $e->getMessage();
    }
}

function getAllCritSanction(){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM critere where type= 1');
        $lesCritSanction=$response->fetchAll();
        return $lesCritSanction;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des Criteres de sanction : ' . $e->getMessage();
    }
}
function ChangeCritSanction($id,$nomCritSanct,$description){
    try{
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8",USER_BD,PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('UPDATE critere set nom=:nom , description=:description  where critere.id='.$id);
        $requete->bindValue(':nom', $nomCritSanct, PDO::PARAM_STR);
        $requete->bindValue(':description', $description, PDO::PARAM_STR);
       
        $requete->execute();
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la modification: ' . $e->getMessage();
    }
}
function createCritColle($nomCritSanct,$description){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('INSERT INTO critere(nom, description, type) VALUES(:nom,:description,:type)');
        $requete->bindValue(':nom', $nomCritSanct, PDO::PARAM_STR);
        $requete->bindValue(':description', $description, PDO::PARAM_STR);
        $requete->bindValue(':type', 0, PDO::PARAM_STR);
        $requete->execute();
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la création d un critere de sanction : ' . $e->getMessage();
    }
}
function getAllCritColle(){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM critere where type= 0');
        $lesCritColle=$response->fetchAll();
        return $lesCritColle;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des Criteres de sanction : ' . $e->getMessage();
    }
}
