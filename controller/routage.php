<?php
        if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {
                case 'voirlaclasse':
                    //action a effectuer
                    include('view/voirlaclasse.php');
                    break;
                
                case 'administrationsanction':
                    include('view/AdminSanction.php');
                    break;
                    
                case 'administrationeleve':
                    include('view/AdminEleve.php');
                    break;
             
                case 'administrationclasse':
                    include('view/AdminClasse.php');
                    break;
                        
                case 'administrationprof':
                    include('view/AdminProf.php');
                    break;
            }
        }
        ?>
