<?php     
if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {             
                case 'adminsanction':
                    $lesCritSanction = getAllCritSanction();
                    $lesCritColle =  getAllCritColle();
                    include('view/sanction/adminSanction.php');
                    break;
                case 'creatSanct':
                    try
                                    {
                        createCritSanction($_POST["nomCritSanct"], $_POST["description"]);
                                    }
                                    catch (PDOException $e) {
                                    echo 'Échec lors de la récupération des sujets : ' . $e->getMessage();
                                    }
                    header('Location: index.php?controller=sanction&action=adminsanction');
                    break;
                case 'del':
                    
                    deleteCritSanction($_GET["id"]);
                    header('Location: index.php?controller=sanction&action=adminsanction');
                
                    
                    
                break;
            case 'modifierSanction':
                ChangeCritSanction($_GET["id"],$_POST["nomCritSanct"], $_POST["description"]);
                header('Location: index.php?controller=sanction&action=adminsanction');
                break;
            case 'creatColle':
                    try
                                    {
                        createCritColle($_POST["nomCritSanct"], $_POST["description"]);
                                    }
                                    catch (PDOException $e) {
                                    echo 'Échec lors de la récupération des sujets : ' . $e->getMessage();
                                    }
                    header('Location: index.php?controller=sanction&action=adminsanction');
                    break;        
            }
        }
?>