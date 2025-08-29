<?php
    session_start();
    $currentPage = basename($_SERVER['PHP_SELF']); 
    // 1. Connexion à la BD
    require_once('../models/H_databaseConnection.php');
    $H_dbConnect = F_databaseConnection("localhost", "resto_manage", "root", "");
    require('../models/H_functionsModels.php');

    if(isset($_POST['Creer'])) {
        $H_nomCategorie = $_POST['H_nomCategorie'];

        // ---------------------------------------------------- Dans la table categorieplat ------------------------------------------
         //on recupere le dernier id categorieplat enregistré dans la bd
        $H_resultatLastcategorieplat = F_executeRequeteSql('SELECT * FROM categorieplat ORDER BY idCategorie DESC LIMIT 1');
                                                
        foreach($H_resultatLastcategorieplat as $H_categorieplat)
        {
             $H_idcategorieplat = $H_categorieplat->idCategorie;
                                                               
            }
                                                        
        //s'il n'y'a aucune categorieplat on initiale la 1ere categorieplat Si oui on ajoute un nouveau categorieplat
        $H_newIdcategorieplat = F_genereMatricule($H_idcategorieplat, 'CAT00001'); //sinon on incremente le nième categorieplat

        // 3. Insertion dans la BD
        $H_QueryCategorie = "INSERT INTO categorieplat (idCategorie, nomCategorie, dateCreateCategorie) VALUES (?, ?, NOW())";
        $H_stmtCategorie = F_executeRequeteSql($H_QueryCategorie, [$H_newIdcategorieplat, $H_nomCategorie]);

    

        // Redirection vers la page du menu après l'insertion
        header("Location: ../views/Menu.php");
        exit();
    }
    require('../views/Menu.php');
?>