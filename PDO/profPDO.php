<?php
function createAdmin($titre,$description){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('INSERT INTO sujet(nom,prenom,login,pwd) VALUES(:nom,:prenom,:login,:pwd)');
        $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
        $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $requete->bindValue(':login', $login, PDO::PARAM_STR);
        $requete->bindValue(':pwd', $pwd, PDO::PARAM_STR);
        $requete->execute();
        $connection=null;
    }
        catch (PDOException $e)
        {
                echo 'Echec lors de la création d une classe : ' . $e->getMessage();
        }
        }