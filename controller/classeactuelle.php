<?php
        if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {
                case 'voirlaclasse':
                    //action a effectuer
                    include('pages/voirlaclasse.php');
                   
                    break;
                case 'administrationsanction':
                    include('pages/AdministrationSanction.php');
                    break;
                    
                break;
                case 'administrationeleve':
                    include('pages/AdministrationEleve.php');
                    break;
                 break;
                case 'administrationclasse':
                    include('pages/administrationClasse.php');
                    break;
                        
                 break;
                case 'administrationprof':
                    include('pages/AdminProf.php');
                    break;
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
            }
        }
        ?>