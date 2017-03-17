<?php
        if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {
                case 'voirlaclasse':
                    //action a effectuer
                    include('view/voirlaclasse.php');
                    break;
                
                case 'AdminSanction':
                    include('view/AdminSanction.php');
                    break;
                    
                case 'AdminEleve':
                    include('view/AdminEleve.php');
                    break;
             
                case 'AdminClasse':
                    include('view/AdminClasse.php');
                    break;
               
                case 'AdminProf':
                    include('view/AdminProf.php');
                    break;
        }
        }
?>
