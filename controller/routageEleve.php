<?php     
if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {             
                case 'admineleve':
                    $lesEleves= getAllEleve();
                    include('view/eleve/AdminEleve.php');
                    break;
                 case "createEleve":
                    include ('view/eleve/createEleve.php');
                    break;
                case "supprimerEleve":
                    supprimer($_GET["id"]);
                    $lesEleves= getAllEleve();
                    include ('view/eleve/AdminEleve.php');
                    break;
                case "modifi":
                    $eleve=modifier($_GET["id"]);
                     include 'public/modifi.php';
                     break;
                case "modifier":
                                    try
                                {
                                    change($_GET["id"],$_POST["nom"],$_POST["prenom"]);
                                }
                                catch (PDOException $e) {
                                    echo 'echec lors de la recuperation des eleves:'.$e->getmessage();
                                }
                                header('location: index.php?action=AdminEleve');
                                    break;
            }
        }
?>