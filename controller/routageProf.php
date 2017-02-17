<?php     
if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {             
                case 'adminprof':
                    include('view/prof/adminProf.php');
                    break;
            }
        }
?>