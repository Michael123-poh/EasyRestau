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
                                        <h3 class="mb-0">36</h3>
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
                            <button type="button" class="btn btn-outline-primary">Entrées</button>
                            <button type="button" class="btn btn-outline-primary">Plats Principaux</button>
                            <button type="button" class="btn btn-outline-primary">Desserts</button>
                            <button type="button" class="btn btn-outline-primary">Boissons</button>
                            <button type="button" class="btn btn-outline-primary">Menus Complets</button>
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
                    <!-- Menu Item 1 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card menu-card menu-main">
                            <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" class="menu-item-img" alt="Menu Viande">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="card-title mb-0">Menu Viande</h5>
                                    <span class="category-badge badge-main">Plat Principal</span>
                                </div>
                                <p class="card-text">Steak de bœuf avec frites et salade, accompagné d'une sauce au choix.</p>
                                
                                <h6 class="mt-3">Composition:</h6>
                                <ul class="ingredients-list">
                                    <li>300g de boeuf</li>
                                    <li>200g de pommes de terre</li>
                                    <li>100g de salade verte</li>
                                    <li>50g de sauce</li>
                                </ul>
                                
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="price-tag">21,50 €</span>
                                        <span class="profit-margin d-block">+14,30 € (66%)</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Menu Item 2 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card menu-card menu-appetizer">
                            <img src="https://images.unsplash.com/photo-1619894991209-32b8fb1d5ce3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" class="menu-item-img" alt="Salade César">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="card-title mb-0">Salade César</h5>
                                    <span class="category-badge badge-appetizer">Entrée</span>
                                </div>
                                <p class="card-text">Salade fraîche avec poulet grillé, croûtons et parmesan, sauce césar.</p>
                                
                                <h6 class="mt-3">Composition:</h6>
                                <ul class="ingredients-list">
                                    <li>150g de laitue</li>
                                    <li>100g de poulet</li>
                                    <li>30g de croûtons</li>
                                    <li>20g de parmesan</li>
                                    <li>40g de sauce césar</li>
                                </ul>
                                
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="price-tag">9,90 €</span>
                                        <span class="profit-margin d-block">+5,90 € (59%)</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Menu Item 3 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card menu-card menu-dessert">
                            <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" class="menu-item-img" alt="Gâteau au Chocolat">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="card-title mb-0">Gâteau Chocolat</h5>
                                    <span class="category-badge badge-dessert">Dessert</span>
                                </div>
                                <p class="card-text">Gâteau au chocolat fondant avec cœur coulant, servi avec une boule de glace vanille.</p>
                                
                                <h6 class="mt-3">Composition:</h6>
                                <ul class="ingredients-list">
                                    <li>120g de chocolat</li>
                                    <li>80g de beurre</li>
                                    <li>60g de sucre</li>
                                    <li>50g de glace vanille</li>
                                </ul>
                                
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="price-tag">7,50 €</span>
                                        <span class="profit-margin d-block">+4,50 € (60%)</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Menu Item 4 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card menu-card menu-combo">
                            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" class="menu-item-img" alt="Menu Complet">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="card-title mb-0">Menu Complet</h5>
                                    <span class="category-badge badge-combo">Menu</span>
                                </div>
                                <p class="card-text">Entrée + Plat + Dessert + Boisson. Parfait pour découvrir notre cuisine.</p>
                                
                                <h6 class="mt-3">Composition:</h6>
                                <ul class="ingredients-list">
                                    <li>Salade César (entrée)</li>
                                    <li>Menu Viande (plat)</li>
                                    <li>Gâteau Chocolat (dessert)</li>
                                    <li>Boisson au choix</li>
                                </ul>
                                
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="price-tag">32,90 €</span>
                                        <span class="profit-margin d-block">+19,80 € (60%)</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Menu Item 5 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card menu-card menu-drink">
                            <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" class="menu-item-img" alt="Cocktail Maison">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="card-title mb-0">Cocktail Maison</h5>
                                    <span class="category-badge badge-drink">Boisson</span>
                                </div>
                                <p class="card-text">Notre cocktail signature à base de fruits frais, rhum et menthe.</p>
                                
                                <h6 class="mt-3">Composition:</h6>
                                <ul class="ingredients-list">
                                    <li>60ml de rhum</li>
                                    <li>100ml de jus de fruits</li>
                                    <li>20g de sucre de canne</li>
                                    <li>Feuilles de menthe</li>
                                    <li>Glaçons</li>
                                </ul>
                                
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="price-tag">8,50 €</span>
                                        <span class="profit-margin d-block">+5,50 € (65%)</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Menu Item 6 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card menu-card menu-main">
                            <img src="https://images.unsplash.com/photo-1598214886806-c87b84b7078b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" class="menu-item-img" alt="Menu Poisson">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="card-title mb-0">Menu Poisson</h5>
                                    <span class="category-badge badge-main">Plat Principal</span>
                                </div>
                                <p class="card-text">Filet de saumon grillé avec riz basmati et légumes de saison.</p>
                                
                                <h6 class="mt-3">Composition:</h6>
                                <ul class="ingredients-list">
                                    <li>250g de saumon</li>
                                    <li>150g de riz basmati</li>
                                    <li>100g de légumes de saison</li>
                                    <li>30g de sauce hollandaise</li>
                                </ul>
                                
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="price-tag">24,50 €</span>
                                        <span class="profit-margin d-block">+15,20 € (62%)</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                            </div>
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
                                <label for="costPrice" class="form-label">Prix de Revient (€)</label>
                                <input type="number" step="0.01" class="form-control" id="costPrice" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="sellingPrice" class="form-label">Prix de Vente (€)</label>
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