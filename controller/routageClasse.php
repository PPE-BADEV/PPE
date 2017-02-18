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
                    create($classe);
                    $lesClasses = readAll();
                    include('view/classe/AdminClasse.php');
                    }
                    break;
                case 'delete':
                    delete($_GET["id"]);
                    $lesClasses = readAll();
                    include('view/classe/AdminClasse.php');
                    break;
            }
        }
?>