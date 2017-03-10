<?php     
if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {             
                case 'admineleve':
                    include('view/eleve/adminEleve.php');
                    break;
                 case "create":
                    include ('view/eleve/AdminEleve.php');
                    break;
                case "supprimer":
                    supprimer($_GET["id"]);
                    $lesEleves= getAllEleve();
                    include ('view/eleve/AdminEleve.php');
                    break;
            }
        }
?>