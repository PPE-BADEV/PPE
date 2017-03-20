<?php     
if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {                
                    case 'checkLogin':
                        $prof["login"] = $_POST["login"];
                        $prof["pwd"] = sha1($_POST["pwd"]);
                        $res = checkLog($prof);
                        $statut =checkStatut($prof);
                        if ($res==0)
                        {
                            $erreur = "login/mot de passe éroné";
                            header('location:connexion.php');
                        }
                        else
                        {
                            $_SESSION["Statut"]= $statut;
                            $_SESSION["User"]=$_POST["login"];
                            header('location:index.php');
                        }
                        break;
                    case 'logout' :                        
                        session_destroy();
                        header("location:index.php");
                        break;
            }
        }