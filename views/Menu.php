<?php
    require('templates/header.php');
?>

            <!-- Main content -->
            <div class="col-lg-10 main-content p-4">
                <h2 class="section-title">Gestion des Menus</h2>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Total Menus</h6>
                                        <h3 class="mb-0">24</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-book text-primary"></i></span>
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
                                        <span class="display-6"><i class="bi bi-basket text-success"></i></span>
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
                                        <h3 class="mb-0">68%</h3>
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
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Menu Populaire</h6>
                                        <h5 class="mb-0">Menu Viande</h5>
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
                            <form action="../controllers/H_menuController.php?<?="H_idCat=".$H_categorie->idCategorie?>" method="post" class="d-inline">
                                <button type="submit" class="btn btn-outline-primary" name="H_categorieMenu"><?=$H_categorie->nomCategorie?></button>
                            </form>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher un menu...">
                            <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                            <button class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#addMenuModal">
                                <i class="bi bi-plus-circle"></i> Nouvelle Categorie
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Menu Cards -->
                <div class="row">
                    <?php
                        foreach($H_listePlats as $H_plat){
                            $H_categoriePlat = F_executeRequeteSql('SELECT nomCategorie FROM categorieplat WHERE idCategorie = ?', [$H_plat->idCategorie]);
                    ?>
                    <!-- Menu Item 1 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card menu-card menu-main">
                            <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" class="menu-item-img" alt="Menu Viande">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="card-title mb-0"><?=$H_plat->nomPlat?></h5>
                                    <span class="category-badge badge-main"><?=$H_categoriePlat->nomCategorie?></span>
                                </div>
                                <p class="card-text"><?=$H_plat->descriptionPlat?></p>
                                
                                <h6 class="mt-3">Composition:</h6>
                                <ul class="ingredients-list">
                                    <?php
                                        $H_compositionPlat = F_executeRequeteSql('SELECT pi.*, i.nomIngredient FROM plat_ingredient pi INNER JOIN ingredient i USING(idIngredient) WHERE idPlat = ?', [$H_plat->idPlat]);
                                    ?>
                                    <li><?=$H_compositionPlat->nomIngredient?></li>
                                </ul>
                                
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="price-tag"><?=$H_plat->prixVentePlat?> F CFA</span>
                                        <span class="profit-margin d-block">Coût: <?=$H_plat->prixRevientPlat?> F CFA</span>
                                    </div>
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

    <!-- Add Menu Modal -->
    <div class="modal fade" id="addMenuModal" tabindex="-1" aria-labelledby="addMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMenuModalLabel">Ajouter une Nouvellr Categorie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="../controllers/H_menuController.php">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="menuName" class="form-label">Nom de la Categorie</label>
                                <input type="text" class="form-control" id="menuName" name="H_nomCategorie" required>
                            </div>
                            <!-- <div class="col-md-6 mb-3">
                                <label for="menuCategory" class="form-label">Catégorie</label>
                                <select class="form-select" id="menuCategory" required>
                                    <option value="">Choisir une catégorie...</option>
                                    <option value="appetizer">Entrée</option>
                                    <option value="main">Plat Principal</option>
                                    <option value="dessert">Dessert</option>
                                    <option value="drink">Boisson</option>
                                    <option value="combo">Menu Complet</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="menuDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="menuDescription" rows="2"></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="costPrice" class="form-label">Prix de Revient (F CFA)</label>
                                <input type="number" step="0.01" class="form-control" id="costPrice" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="sellingPrice" class="form-label">Prix de Vente (F CFA)</label>
                                <input type="number" step="0.01" class="form-control" id="sellingPrice" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Composition (ingrédients et quantités)</label>
                            <div class="input-group mb-2">
                                <select class="form-select">
                                    <option selected>Choisir un ingrédient...</option>
                                    <option>Poulet</option>
                                    <option>Boeuf</option>
                                    <option>Poisson</option>
                                    <option>Riz</option>
                                    <option>Crème fraîche</option>
                                </select>
                                <input type="number" step="0.1" class="form-control" placeholder="Quantité (kg)">
                                <button class="btn btn-outline-secondary" type="button">Ajouter</button>
                            </div>
                            <div class="form-text">Liste des ingrédients ajoutés...</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="menuImage" class="form-label">Image du Menu</label>
                            <input class="form-control" type="file" id="menuImage">
                        </div> -->
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary" name="Creer">Créer la Categorie</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    require('templates/footer.php');
?>