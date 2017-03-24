<?php     
if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {
             
                case 'adminclasse':
                    $lesClasses = readAllClasse();
                    include('view/classe/AdminClasse.php');
                    break;                
                case 'ajoutClasse':  
                    include 'view/classe/ajoutClasse.php';
                    break;
                case 'createClasse':
                    $classe["nom"]=$_POST["nom"];
                    $res = checkClasse($classe);
                    if ($res==1)
                    {
                    $erreur="Il y a déjà une classe avec ce nom là";
                    $lesClasses = readAllClasse();
                    include 'view/classe/AdminClasse.php';
                    }
                    else
                    {
                    $classe["nom"]=$_POST['nom'];
                    createClasse($classe);
                    $lesClasses = readAllClasse();
                    include('view/classe/AdminClasse.php');
                    }
                    break;
                case 'delete':
                    deleteClasse($_GET["id"]);
                    $lesClasses = readAllClasse();
                    include('view/classe/AdminClasse.php');
                    break;
                case 'renommer':
                    $uneClasse = readOneClasse($_GET["id"]);
                    include 'view/classe/renommerClasse.php';
                    break;
                case 'confRenommer':
                    $classe["nom"]=$_POST["newname"];
                    $res = checkClasse($classe);
                    if ($res == 0)
                    {
                    renameClasse($_POST["newname"], $_POST["id"]);
                    $lesClasses = readAllClasse();
                    include('view/classe/AdminClasse.php');
                    }
                    else
                    {
                    $erreur="Une classe ce nomme déjà comme cela";
                    $lesClasses = readAllClasse();
                    include('view/classe/AdminClasse.php');
                    }
                    break;
            }
        }
?>