<?php
        if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {
                case 'voirlaclasse':
                    //action a effectuer
                    include('pages/voirlaclasse.php');
                    break;
                
                case 'administrationsanction':
                    include('pages/AdminSanction.php');
                    break;
                    
                case 'administrationeleve':
                    include('pages/AdminEleve.php');
                    break;
             
                case 'administrationclasse':
                    include('pages/AdminClasse.php');
                    break;
                        
                case 'administrationprof':
                    include('pages/AdminProf.php');
                    break;
            }
        }
        ?>
