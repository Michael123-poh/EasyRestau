<?php
    session_start();
    $currentPage = basename($_SERVER['PHP_SELF']); 
    // 1. Connexion à la BD
    require_once('../models/H_databaseConnection.php');
    $H_dbConnect = F_databaseConnection("localhost", "resto_manage", "root", "");
    require('../models/H_functionsModels.php');

    $H_listePlats = F_executeRequeteSql('SELECT p.* FROM plat p ORDER BY p.dateCreatePlat DESC');
    $H_nbrePlats = F_executeRequeteSql('SELECT COUNT(*) AS nbrePlat FROM plat');
    $H_listeCategorie = F_executeRequeteSql('SELECT * FROM categorieplat');
    $H_listeIngredients = F_executeRequeteSql('SELECT * FROM ingredient');

    if(isset($_POST['CreerPlat'])) {
        
        extract($_POST);
        // ---------------------------------------------------- Dans la table plat ------------------------------------------
         //on recupere le dernier id plat enregistré dans la bd
        $H_resultatLastplat = F_executeRequeteSql('SELECT * FROM plat ORDER BY idPlat DESC LIMIT 1');
        if (empty($H_resultatLastplat)) {
            $H_idplat = null; // Initialiser la variable si le résultat est vide
        }    
        else {
            foreach($H_resultatLastplat as $H_plat)
            {
                 $H_idplat = $H_plat->idPlat;
                                                                   
            }                                              
        }
        //s'il n'y'a aucune plat on initiale la 1ere plat Si oui on ajoute un nouveau plat
        $H_newIdplat = F_genereMatricule($H_idplat, 'PLT00001'); //sinon on incremente le nième plat

        // 3. Insertion dans la BD
        $H_QueryPlat = "INSERT INTO plat (idPlat, nomPlat, descriptionPlat, prixRevientPlat, prixVentePlat, idCategorie, dateCreatePlat) VALUES (?, ?, ?, ?, ?, ?, NOW())";
        $H_stmtPlat = F_executeRequeteSql($H_QueryPlat, [$H_newIdplat, $H_nomPlat, $H_descriptionPlat, $H_prixRevientPlat, $H_prixVentePlat, $H_idCategorie]);
        
        $H_QueryPlatIngredient = "INSERT INTO plat_ingredient (idPlat, idIngredient, qteNecessaire, dateCreatePlatIngredient) VALUES (?, ?, ?, NOW())";
        $H_stmtPlatIngredient = F_executeRequeteSql($H_QueryPlatIngredient, [$H_newIdplat, $H_idIngredient, $H_qteNecessaire]);

        
        // Redirection vers la page du Plat après l'insertion
        header("Location: ../controllers/H_platController.php");
        exit();
    }
    require('../views/Plat.php');
?>