<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        


        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-3.1.1.js"></script>

        <link href="assets/css/business-casual.css" rel="stylesheet">
        <link href="assets/css/justified-nav.css" rel="stylesheet">   

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">



    </head>
    <<title>PPE</title>
    
    <?php
        session_start();
    ?>
 
        <div class="address-bar" >
            <?php
                if (isset($_SESSION["User"])== true)                                                                        
                {
            ?>   
            <div class="row">
                <div class="col-md-5"></div> 
                <div class="col-md-2"></div>  
                <div class="col-md-3">
                    <font size="1">Bonjour <?= $_SESSION["User"] ?> <?= $_SESSION["Name"] ?> </font> 
                    <a href="index.php?controller=connection&action=logout"><span class="glyphicon glyphicon-off"></span></a>
                </div>
            </div>
            <?php
                }
            ?>
            <div class="row">
                <div class="col-md-5"></div> 
                <div class="col-md-2">
                    <div class="address-bar">
                        <a href="index.php"><button type="button" class="btn btn-success">Accueil</button></a>
                    </div>
                </div>  
                <div class="col-md-3"></div>  
                <div class="col-md-3">
            <font size="1">Mon compte </font><span class="glyphicon glyphicon-user"></span>
            <font size="1">| A propos de ... </font><span class="glyphicon glyphicon-question-sign"></span>
                </div>
            </div>

<div class="container">
            
    <div class="masthead">
        <nav>
            <ul class="nav nav-justified">
                <li>
                    <a href="index.php?controller=classeactuelle&action=voirlaclasse"><font size=1>Classe Actuelle </font><span class="glyphicon glyphicon-briefcase"></a>
                </li>
                <li>
                    <a href="histocolles"><font size=1>Historique des Colles </font><span class="glyphicon glyphicon-thumbs-down"></a>
                </li>
                <li>
                    <a href="index.php?controller=eleve&action=admineleve"><font size=1>Admin Eleves </font><span class="glyphicon glyphicon-education"></a>
                </li>
                <li>
                    <a href="index.php?controller=classe&action=adminclasse"><font size=1>Admin Classes </font><span class="glyphicon glyphicon-duplicate"></a>
                </li>
                <li>
                    <a href="index.php?controller=sanction&action=adminsanction"><font size=1>Admin Sanctions </font><span class="glyphicon glyphicon-alert"></a>
                </li>
                <li>
                    <a href="index.php?controller=prof&action=AdminProf"><font size=1>Admin Professeurs </font><span class="glyphicon glyphicon-king"></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
        
        <body>
            
            <div class="container" style= "margin-top:40px">
            <div class="row">
                <div class="col-md-1"></div>
                   <div class="col-md-10">
    <?php
        if(isset($erreur))
        {
    ?>
        <div class="alert alert-danger" role="alert"><?= $erreur ?></div>
    <?php
        }
    ?>
                       
        
                        <?php
                        
                        if (isset($_SESSION["User"])== true)                                                                        
                        {  
                            
                        }
                        else
                        {
                            $erreur = "Mot de passe / login incorrect!";
                            header("location:connexion.php");
                        }
                        require('PDO/classePDO.php');
                        require('PDO/elevePDO.php');
                        include ('resources/config.php');
                        require('PDO/profPDO.php');
                        require('PDO/sanctionPDO.php');
                        require('PDO/connectionPDO.php');
                        if (isset($_GET["controller"]))
                            {
                            $controller = $_GET["controller"];
                            switch ($controller)
                                {
                                case 'classeactuelle':
                                    include('controller/routage.php');
                                    break;
                                case 'classe':
                                    include 'controller/routageClasse.php';
                                    break;
                                case 'eleve':
                                    include 'controller/routageEleve.php';
                                    break;
                                case 'prof':
                                    if ($_SESSION["Statut"]==1)
                                    {
                                    include 'controller/routageProf.php';                                        
                                    }
                                    else
                                    {
                                        $erreur = "Vous n'êtes pas admin";
                                        header("location:index.php");
                                    }
                                    break;
                                case 'sanction':
                                    include 'controller/routageSanction.php';
                                    break;
                                case 'connection':
                                    include 'controller/routageConnection.php';
                                    break;
                                }
                            }
                            else 
                            {
                            ?>
                   </div>   
                <div class="col-md-1"></div> 
    
    


        <div class="container">

            <div class="row">
                <div class="box">
                    <div class="col-lg-12 text-center">
                        <div id="carousel-example-generic" class="carousel slide">
                            <h2 class="brand-before">

                            </h2>
                            <h1 class="brand-name">Gestionnaire De Sanctions</h1>
                            <hr class="tagline-divider">
                            <h2>
                                <small>
                                    By Badev 
                                </small>
                                
    
                                </body>
                                </html>
        <?php  
        }
        ?>

   
