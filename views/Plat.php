<?php
    require('templates/header.php');
?>

            <!-- Main content -->
            <div class="col-lg-10 main-content p-4">
                <h2 class="section-title">Gestion des Plats</h2>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Total Plats</h6>
                                        <h3 class="mb-0">
                                            <?php
                                                foreach($H_nbrePlats as $H_nbrePlat){
                                                    echo $H_nbrePlat->nbrePlat;
                                                }
                                            ?>
                                        </h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-basket text-primary"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Plats Actifs</h6>
                                        <h3 class="mb-0">
                                            <?php
                                                foreach($H_nbrePlats as $H_nbrePlat){
                                                    echo $H_nbrePlat->nbrePlat;
                                                }
                                            ?>
                                        </h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-check-circle text-success"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Moyenne Marge</h6>
                                        <h3 class="mb-0">65%</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-graph-up text-warning"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Plat Populaire</h6>
                                        <h5 class="mb-0">Steak Frites</h5>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-star-fill text-info"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Filters and Actions -->
                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary active">Tous</button>
                            <?php
                                foreach($H_listeCategorie as $H_categorie){
                            ?>
                            <button type="button" class="btn btn-outline-primary"><?=$H_categorie->nomCategorie?></button>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher un plat...">
                            <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                            <button class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#addDishModal">
                                <i class="bi bi-plus-circle"></i> Nouveau Plat
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Dishes Cards -->
                <div class="row">
                    <?php
                        foreach($H_listePlats as $H_plat){
                            $H_categoriePlat = F_executeRequeteSql('SELECT nomCategorie FROM categorieplat WHERE idCategorie = ?', [$H_plat->idCategorie]);
                    ?>
                    <!-- Dish Item 1 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card dish-card dish-main">
                            <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" class="dish-img" alt="Steak Frites">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="card-title mb-0"><?=$H_plat->nomPlat?></h5>
                                    <span class="category-badge badge-main"><?=$H_categoriePlat->nomCategorie?></span>
                                </div>
                                <p class="card-text"><?=$H_plat->descriptionPlat?></p>
                                
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <span class="price-tag"><?=$H_plat->prixVentePlat?> F CFA</span>
                                        <div class="profit-margin">Coût: <?=$H_plat->prixRevientPlat?> F CFA</div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <span class="stock-info good-stock">En stock</span>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="badge bg-success">Marge: 66%</span>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }                    
                    ?>
                  
                <!-- Recipe Details Section -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Détails de Composition - Steak Frites</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered recipe-table">
                                <thead>
                                    <tr>
                                        <th>Ingrédient</th>
                                        <th>Quantité</th>
                                        <th>Coût Unitaire</th>
                                        <th>Coût Total</th>
                                        <th>Stock Actuel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Steak de bœuf</td>
                                        <td>300 g</td>
                                        <td>15,00 FCFA/kg</td>
                                        <td>4,50 FCFA</td>
                                        <td class="good-stock">12,5 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Pommes de terre</td>
                                        <td>200 g</td>
                                        <td>2,50 FCFA/kg</td>
                                        <td>0,50 FCFA</td>
                                        <td class="good-stock">25,8 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Salade verte</td>
                                        <td>50 g</td>
                                        <td>4,00 FCFA/kg</td>
                                        <td>0,20 FCFA</td>
                                        <td class="low-stock">2,3 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Sauce</td>
                                        <td>50 g</td>
                                        <td>8,00 FCFA/kg</td>
                                        <td>0,40 FCFA</td>
                                        <td class="good-stock">8,7 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Assaisonnement</td>
                                        <td>20 g</td>
                                        <td>10,00 FCFA/kg</td>
                                        <td>0,20 FCFA</td>
                                        <td class="good-stock">5,2 kg</td>
                                    </tr>
                                    <tr class="table-light">
                                        <td colspan="3" class="fw-bold">Total</td>
                                        <td class="fw-bold">5,80 FCFA</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Précédent</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Add Dish Modal -->
    <div class="modal fade" id="addDishModal" tabindex="-1" aria-labelledby="addDishModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDishModalLabel">Ajouter un Nouveau Plat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="../controllers/H_platController.php">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="dishName" class="form-label">Nom du Plat</label>
                                <input type="text" class="form-control" id="dishName" name="H_nomPlat" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dishCategory" class="form-label">Catégorie</label>
                                <select class="form-select" id="dishCategory" name="H_idCategorie" required>
                                    <option value="">Choisir une catégorie...</option>
                                    <?php foreach($H_listeCategorie as $H_categorie){?>
                                    <option value="<?=$H_categorie->idCategorie?>"><?=$H_categorie->nomCategorie?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="dishDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="dishDescription" name="H_descriptionPlat" rows="2"></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="costPrice" class="form-label">Prix de Revient (FCFA)</label>
                                <input type="number" step="0.01" class="form-control" name="H_prixRevientPlat" id="costPrice" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="sellingPrice" class="form-label">Prix de Vente (FCFA)</label>
                                <input type="number" step="0.01" class="form-control" name="H_prixVentePlat" id="sellingPrice" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Composition (ingrédients et quantités)</label>
                            <div class="input-group mb-2">
                                <select class="form-select" name="H_idIngredient">
                                    <option selected>Choisir un ingrédient...</option>
                                    <?php foreach($H_listeIngredients as $H_ingredient){?>
                                    <option value="<?=$H_ingredient->idIngredient?>"><?=$H_ingredient->nomIngredient?></option>
                                  
                                    <?php }?>
                                </select>
                                <input type="number" step="0.1" name="H_qteNecessaire" class="form-control" placeholder="Quantité (kg)">
                                <button class="btn btn-outline-secondary" type="button">Ajouter</button>
                            </div>
                            <div class="form-text">Liste des ingrédients ajoutés...</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="dishImage" class="form-label">Image du Plat</label>
                            <input class="form-control" type="file" id="dishImage" name="H_imagePlat">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary" name="CreerPlat">Créer le Plat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  <?php
    require('templates/footer.php');
  ?>