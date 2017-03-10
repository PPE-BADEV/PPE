<?php     
if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {             
                case 'adminsanction':
                    $lesCritSanction = getAllCritSanction();
                    
                    include('view/sanction/adminSanction.php');
                    break;
                case 'creatSanct':
                    try
                                    {
                        createCritSanction($_POST["nomCritSanct"], $_POST["Description"],"1");
                                    }
                                    catch (PDOException $e) {
                                    echo 'Échec lors de la récupération des sujets : ' . $e->getMessage();
                                    }
                    header('Location: index.php?controller=sanction&action=adminsanction');
                    break;
                    
            }
        }
?>