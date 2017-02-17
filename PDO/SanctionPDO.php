<?php

 function deleteCritSanction($id){
        try{
            $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8",USER_BD,PWD_BD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $requete = $connection->prepare('DELETE FROM Sanction where sujet.id='.$id);
            $requete->execute();
            $connection=null;
        }
        catch (PDOException $e) {
        echo 'Échec de suppression du critere de sanction  ' . $e->getMessage();
    }
}
function createCritSanction($nomCritSanct,$Description){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('INSERT INTO Sanction(nom, description) VALUES(:nom,:description)');
        $requete->bindValue(':nom', $nomCritSanct, PDO::PARAM_STR);
        $requete->bindValue(':description', $Description, PDO::PARAM_STR);
        $requete->execute();
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la création d un critere de sanction : ' . $e->getMessage();
    }
}
function deleteSanction($id){
        try{
            $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8",USER_BD,PWD_BD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $requete = $connection->prepare('DELETE FROM punition where sujet.id='.$id);
            $requete->execute();
            $connection=null;
        }
        catch (PDOException $e) {
        echo 'Échec de suppression de la sanction ' . $e->getMessage();
    }
}
function getAllCritSanction(){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM sanction');
        $lesCritSanction=$response->fetchAll();
        return $lesCritSanction;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des Criteres de sanction : ' . $e->getMessage();
    }
}
function ChangeCritSanction($id,$nom,$description){
    try{
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8",USER_BD,PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('UPDATE sanction set  VALUES(:id,:titre,:description) where sujet.id='.$id);
        $requete->bindValue(':id',$id,PDO::PARAM_STR);
        $requete->bindValue(':titre', $nom, PDO::PARAM_STR);
        $requete->bindValue(':description', $description, PDO::PARAM_STR);
       
        $requete->execute();
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la modification: ' . $e->getMessage();
    }
}
