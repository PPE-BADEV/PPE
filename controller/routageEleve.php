<?php     
if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {             
                case 'admineleve':
                    include('view/eleve/adminEleve.php');
                    break;
            }
        }
?>