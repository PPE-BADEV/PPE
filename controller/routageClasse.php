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
                    $classe["nom"]=$_POST["nom"];
                    $res = checkclasse($classe);
                    if ($res==1)
                    {
                    $erreur="Il y a déjà une classe avec ce nom là";
                    include 'view/classe/ajoutClasse.php';
                    }
                    else
                    {
                    $classe["nom"]=$_POST['nom'];
                    createClasse($classe);
                    $lesClasses = readAll();
                    include('view/classe/AdminClasse.php');
                    }
                    break;
                case 'delete':
                    delete($_GET["id"]);
                    $lesClasses = readAll();
                    include('view/classe/AdminClasse.php');
                    break;
                case 'renommer':
                    $uneClasse = readOne($_GET["id"]);
                    include 'view/classe/renommerClasse.php';
                    break;
                case 'confRenommer':
                    $classe["nom"]=$_POST["newname"];
                    $res = checkclasse($classe);
                    if ($res == 0)
                    {
                    renommer($_POST["newname"], $_POST["id"]);
                    $lesClasses = readAll();
                    include('view/classe/AdminClasse.php');
                    }
                    else
                    {
                    $erreur="Une classe ce nomme déjà comme cela";
                    $uneClasse = readOne($_POST["id"]);
                    include 'view/classe/renommerClasse.php';   
                    }
                    break;
            }
        }
?>