<?php
function checkLog($prof)
{
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8",USER_BD,PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->prepare('SELECT count(*) as nb FROM prof WHERE login= :login AND pwd= :pwd');
        $response->bindValue(':login', $prof["login"], PDO::PARAM_STR);
        $response->bindValue(':pwd', $prof["pwd"], PDO::PARAM_STR); 
        $response->execute();
        $connection = null;
        $resultat = $response->fetch();
        return $resultat["nb"];
    }
    catch (PDOException $e)
    {
        echo 'Echec lors de la connection : ' . $e->getMessage();
    }
}

function checkStatut($prof)
{
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8",USER_BD,PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->prepare('SELECT is_admin FROM prof WHERE login= :login AND pwd= :pwd');
        $response->bindValue(':login', $prof["login"], PDO::PARAM_STR);
        $response->bindValue(':pwd', $prof["pwd"], PDO::PARAM_STR); 
        $response->execute();
        $connection = null;
        $resultat = $response->fetch();
        return $resultat["statut"];
    }
    catch (PDOException $e)
    {
        echo 'Echec lors de la suppression d un sujet : ' . $e->getMessage();
    }
}