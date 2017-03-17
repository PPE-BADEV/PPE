<?php

if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {             
        case 'AdminProf':
                $lesProfs= getAllProf();
                include('view/prof/AdminProf.php');
                break;
        
        case 'createAdminProf':
                include('view/prof/createAdminProf.php');
                break;

        case "createCompte":
                createCompte($_POST["nom"], $_POST["prenom"],$_POST["login"],$_POST["pwd"],0);
                $lesProfs= getAllProf();
                include('view/prof/AdminProf.php');
                break;
        
        case "supprimeProf":
                                    supprimeProf($_GET["id"]);
                                    $lesProfs= getAllProf();
                                    include 'view/prof/AdminProf.php';
                                    break;
        case "modifierProf":
                                    $leProf= getOneProf($_GET["id"]);
                                    include 'view/prof/modifier.php';
                                    break;
        Case "modifierStore":
                                    modifierProf ($_GET["id"],$_POST["nom"], $_POST["prenom"],$_POST["login"],$_POST["pwd"],0);
                                    $lesProfs=getAllProf();
                                    include 'view/prof/AdminProf.php';
                                    break;
            }
        }  
        
?>