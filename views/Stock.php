<?php
    require('templates/header.php');
?>

            <!-- Main content -->
            <div class="col-lg-10 main-content p-4">
                <h2 class="section-title">Gestion des Stocks</h2>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card stats-primary">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Valeur Totale</h6>
                                        <h3 class="mb-0">3 845 €</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-currency-euro text-primary"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card stats-success">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Produits en Stock</h6>
                                        <h3 class="mb-0">42</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-box-seam text-success"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card stats-warning">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Stock Faible</h6>
                                        <h3 class="mb-0">8</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-exclamation-triangle text-warning"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card stats-danger">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Rupture de Stock</h6>
                                        <h3 class="mb-0">3</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-x-circle text-danger"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Alerts Section -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card alert-section">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-exclamation-triangle-fill text-danger me-2"></i>Alertes Stock</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-droplet-fill text-danger fs-4"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Crème Fraîche</h6>
                                                <small class="text-muted">Rupture de stock</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-droplet-fill text-danger fs-4"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Poulet</h6>
                                                <small class="text-muted">Stock critique: 1.2kg</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-droplet-fill text-danger fs-4"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Riz</h6>
                                                <small class="text-muted">Stock faible: 3.5kg</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end mt-3">
                                    <button class="btn btn-sm btn-outline-primary">Commander des produits</button>
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
                            <button type="button" class="btn btn-outline-primary">Viandes</button>
                            <button type="button" class="btn btn-outline-primary">Poissons</button>
                            <button type="button" class="btn btn-outline-primary">Légumes</button>
                            <button type="button" class="btn btn-outline-primary">Produits Laitiers</button>
                            <button type="button" class="btn btn-outline-primary">Boissons</button>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher un produit...">
                            <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                            <button class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#addStockModal">
                                <i class="bi bi-plus-circle"></i> Nouveau Produit
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Stock Table -->
                <div class="card mb-4">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">État des Stocks</h5>
                        <div>
                            <button class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-file-earmark-text"></i> Exporter</button>
                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-plus-circle"></i> Réapprovisionner</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover stock-table">
                                <thead>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Catégorie</th>
                                        <th>Stock Actuel</th>
                                        <th>Seuil d'Alerte</th>
                                        <th>Unité</th>
                                        <th>Prix Unitaire</th>
                                        <th>Valeur</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="stock-critical">
                                        <td><strong>Crème Fraîche</strong></td>
                                        <td><span class="category-badge badge-dairy">Laitier</span></td>
                                        <td>0.0</td>
                                        <td>2.0</td>
                                        <td>kg</td>
                                        <td>4.50 €</td>
                                        <td>0.00 €</td>
                                        <td><span class="badge bg-danger">Rupture</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-cart-plus"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="stock-critical">
                                        <td><strong>Poulet</strong></td>
                                        <td><span class="category-badge badge-meat">Viande</span></td>
                                        <td>1.2</td>
                                        <td>5.0</td>
                                        <td>kg</td>
                                        <td>8.70 €</td>
                                        <td>10.44 €</td>
                                        <td><span class="badge bg-danger">Critique</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-cart-plus"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="stock-low">
                                        <td><strong>Riz</strong></td>
                                        <td><span class="category-badge badge-vegetable">Légume</span></td>
                                        <td>3.5</td>
                                        <td>10.0</td>
                                        <td>kg</td>
                                        <td>2.50 €</td>
                                        <td>8.75 €</td>
                                        <td><span class="badge bg-warning">Faible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-cart-plus"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="stock-low">
                                        <td><strong>Saumon</strong></td>
                                        <td><span class="category-badge badge-fish">Poisson</span></td>
                                        <td>4.8</td>
                                        <td>8.0</td>
                                        <td>kg</td>
                                        <td>12.50 €</td>
                                        <td>60.00 €</td>
                                        <td><span class="badge bg-warning">Faible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-cart-plus"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="stock-good">
                                        <td><strong>Boeuf</strong></td>
                                        <td><span class="category-badge badge-meat">Viande</span></td>
                                        <td>12.8</td>
                                        <td>5.0</td>
                                        <td>kg</td>
                                        <td>15.00 €</td>
                                        <td>192.00 €</td>
                                        <td><span class="badge bg-success">Bon</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-cart-plus"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="stock-good">
                                        <td><strong>Pommes de Terre</strong></td>
                                        <td><span class="category-badge badge-vegetable">Légume</span></td>
                                        <td>25.8</td>
                                        <td>10.0</td>
                                        <td>kg</td>
                                        <td>1.20 €</td>
                                        <td>30.96 €</td>
                                        <td><span class="badge bg-success">Bon</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-cart-plus"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="stock-good">
                                        <td><strong>Eau Minérale</strong></td>
                                        <td><span class="category-badge badge-drink">Boisson</span></td>
                                        <td>120</td>
                                        <td>30</td>
                                        <td>bouteilles</td>
                                        <td>0.80 €</td>
                                        <td>96.00 €</td>
                                        <td><span class="badge bg-success">Bon</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-cart-plus"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Stock Charts and Details -->
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Niveaux de Stock</h5>
                            </div>
                            <div class="card-body">
                                <!-- Stock Progress Bars -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Crème Fraîche</span>
                                        <span>0.0/2.0 kg</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Poulet</span>
                                        <span>1.2/5.0 kg</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 24%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Riz</span>
                                        <span>3.5/10.0 kg</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 35%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Saumon</span>
                                        <span>4.8/8.0 kg</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Boeuf</span>
                                        <span>12.8/5.0 kg</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Valeur par Catégorie</h5>
                            </div>
                            <div class="card-body">
                                <div class="consumption-chart d-flex align-items-center justify-content-center">
                                    <!-- This would be a chart in a real application -->
                                    <div class="text-center text-muted">
                                        <i class="bi bi-pie-chart display-4"></i>
                                        <p>Graphique de répartition de la valeur du stock</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Viandes</span>
                                        <span>202.44 €</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Poissons</span>
                                        <span>60.00 €</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Légumes</span>
                                        <span>39.71 €</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Laitiers</span>
                                        <span>0.00 €</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Boissons</span>
                                        <span>96.00 €</span>
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

    <!-- Add Stock Modal -->
    <div class="modal fade" id="addStockModal" tabindex="-1" aria-labelledby="addStockModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addStockModalLabel">Ajouter un Nouveau Produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="productName" class="form-label">Nom du Produit</label>
                            <input type="text" class="form-control" id="productName" required>
                        </div>
                        <div class="mb-3">
                            <label for="productCategory" class="form-label">Catégorie</label>
                            <select class="form-select" id="productCategory" required>
                                <option value="">Choisir une catégorie...</option>
                                <option value="meat">Viande</option>
                                <option value="fish">Poisson</option>
                                <option value="vegetable">Légume</option>
                                <option value="dairy">Produit Laitier</option>
                                <option value="drink">Boisson</option>
                                <option value="other">Autre</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="currentStock" class="form-label">Stock Actuel</label>
                                <input type="number" step="0.1" class="form-control" id="currentStock" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="alertThreshold" class="form-label">Seuil d'Alerte</label>
                                <input type="number" step="0.1" class="form-control" id="alertThreshold" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="unit" class="form-label">Unité</label>
                                <select class="form-select" id="unit" required>
                                    <option value="kg">kg</option>
                                    <option value="g">g</option>
                                    <option value="L">L</option>
                                    <option value="mL">mL</option>
                                    <option value="unité">Unité</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="unitPrice" class="form-label">Prix Unitaire (€)</label>
                                <input type="number" step="0.01" class="form-control" id="unitPrice" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="supplier" class="form-label">Fournisseur</label>
                            <input type="text" class="form-control" id="supplier">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Ajouter le Produit</button>
                </div>
            </div>
        </div>
    </div>

<?php
    require('templates/footer.php');
?>