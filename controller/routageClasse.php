<?php     
if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {
             
                case 'adminclasse':
                    $lesClasses = readAll();
                    include('view/classe/AdminClasse.php');
                    break;
                
                case 'ajoutClasse':  
                    include 'view/classe/ajoutClasse.php';
                    break;
                case 'createClasse':                  
                    $classe["nom"]=$_POST['nom'];
                    create($classe);
                    $lesClasses = readAll();
                    include('view/classe/AdminClasse.php');
                    break;
            }
        }
?>