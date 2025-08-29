<?php
    session_start();
    $currentPage = basename($_SERVER['PHP_SELF']); 
    // 1. Connexion à la BD
    require_once('../models/H_databaseConnection.php');
    $H_dbConnect = F_databaseConnection("localhost", "resto_manage", "root", "");
    require('../models/H_functionsModels.php');

    $H_listeCategorie = F_executeRequeteSql('SELECT * FROM categorieplat');

    if(isset($_POST['Creer'])) {
        
    

        // Redirection vers la page du Plat après l'insertion
        header("Location: ../views/Plat.php");
        exit();
    }
    require('../views/Plat.php');
?>