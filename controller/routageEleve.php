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
            }
        }
?>