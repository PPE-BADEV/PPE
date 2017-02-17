<?php     
if (isset($_GET["action"])) {

            $action = $_GET["action"];

            switch ($action) {             
                case 'adminsanction':
                    include('view/sanction/adminSanction.php');
                    break;
            }
        }
?>