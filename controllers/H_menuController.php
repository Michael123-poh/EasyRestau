<?php
    session_start();
    $currentPage = basename($_SERVER['PHP_SELF']); 
    // 1. Connexion à la BD
    require_once('../models/H_databaseConnection.php');
    $H_dbConnect = F_databaseConnection("localhost", "resto_manage", "root", "");
    require('../models/H_functionsModels.php');

        $H_nbrePlats = F_executeRequeteSql('SELECT COUNT(*) AS nbrePlat FROM plat');
        $H_listeCategorie = F_executeRequeteSql('SELECT * FROM categorieplat');
        $H_listePlats = F_executeRequeteSql('SELECT p.* FROM plat p ORDER BY p.dateCreatePlat DESC');

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
        header("Location: ../controllers/H_menuController.php");
        exit();
    }
    if(isset($_POST['H_categorieMenu'])) {
        $H_idCat = $_GET['H_idCat'];
        $H_listePlats = F_executeRequeteSql('SELECT p.* FROM plat p WHERE p.idCategorie = ? ORDER BY p.dateCreatePlat DESC', [$H_idCat]);
        
    }
    require('../views/Menu.php');
?>