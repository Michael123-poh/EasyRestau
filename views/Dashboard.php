<?php
    require('templates/header.php');
?>

            <!-- Main content -->
            <div class="col-lg-10 main-content p-4">
                <h2 class="section-title">Tableau de Bord</h2>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card stats-primary">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Chiffre d'Affaires (Jour)</h6>
                                        <h3 class="mb-0">1 245 €</h3>
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
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Commandes Aujourd'hui</h6>
                                        <h3 class="mb-0">42</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-cart-check text-success"></i></span>
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
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Taux d'Occupation</h6>
                                        <h3 class="mb-0">72%</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-people text-warning"></i></span>
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
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Produits en Rupture</h6>
                                        <h3 class="mb-0">3</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-exclamation-triangle text-danger"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Charts and Main Content -->
                <div class="row mb-4">
                    <!-- Revenue Chart -->
                    <div class="col-lg-8 mb-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Chiffre d'Affaires Hebdomadaire</h5>
                            </div>
                            <div class="card-body">
                                <div class="chart-container d-flex align-items-center justify-content-center">
                                    <!-- This would be a chart in a real application -->
                                    <div class="text-center text-muted">
                                        <i class="bi bi-bar-chart-line display-4"></i>
                                        <p>Graphique d'évolution du chiffre d'affaires</p>
                                        <div class="mt-3">
                                            <span class="badge bg-primary me-2">Lun: 1 150 €</span>
                                            <span class="badge bg-primary me-2">Mar: 980 €</span>
                                            <span class="badge bg-primary me-2">Mer: 1 320 €</span>
                                            <span class="badge bg-primary me-2">Jeu: 1 450 €</span>
                                            <span class="badge bg-primary me-2">Ven: 1 245 €</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Order Status -->
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Statut des Commandes</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>En Attente</span>
                                        <span>8</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>En Préparation</span>
                                        <span>12</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 37.5%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Prêtes à Servir</span>
                                        <span>5</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 15.6%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Facturées</span>
                                        <span>7</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 21.9%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Orders and Popular Dishes -->
                <div class="row mb-4">
                    <!-- Recent Orders -->
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Commandes Récentes</h5>
                                <a href="#" class="btn btn-sm btn-outline-primary">Voir toutes</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th># Commande</th>
                                                <th>Client</th>
                                                <th>Montant</th>
                                                <th>Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>#CMD-0087</strong></td>
                                                <td>Table 4</td>
                                                <td>87,50 €</td>
                                                <td><span class="status-badge status-waiting">En attente</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>#CMD-0086</strong></td>
                                                <td>À emporter</td>
                                                <td>32,00 €</td>
                                                <td><span class="status-badge status-progress">En préparation</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>#CMD-0085</strong></td>
                                                <td>Table 2</td>
                                                <td>45,50 €</td>
                                                <td><span class="status-badge status-ready">Prête</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>#CMD-0084</strong></td>
                                                <td>Table 7</td>
                                                <td>112,00 €</td>
                                                <td><span class="status-badge status-billed">Facturée</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Popular Dishes -->
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Plats les Plus Populaires</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Menu Poulet Grillée
                                        <span class="badge bg-primary rounded-pill">42 commandes</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Menu Poisson du Jour
                                        <span class="badge bg-primary rounded-pill">38 commandes</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Salade César
                                        <span class="badge bg-primary rounded-pill">35 commandes</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Menu Vegan
                                        <span class="badge bg-primary rounded-pill">28 commandes</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Tiramisu
                                        <span class="badge bg-primary rounded-pill">25 commandes</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Stock Alerts and Tables Status -->
                <div class="row">
                    <!-- Stock Alerts -->
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Alertes de Stock</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>Produit</th>
                                                <th>Stock Actuel</th>
                                                <th>Seuil d'Alerte</th>
                                                <th>Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="low-stock">
                                                <td>Crème Fraîche</td>
                                                <td>0.0 kg</td>
                                                <td>2.0 kg</td>
                                                <td><span class="badge bg-danger">Rupture</span></td>
                                            </tr>
                                            <tr class="low-stock">
                                                <td>Poulet</td>
                                                <td>1.2 kg</td>
                                                <td>5.0 kg</td>
                                                <td><span class="badge bg-danger">Critique</span></td>
                                            </tr>
                                            <tr class="low-stock">
                                                <td>Riz</td>
                                                <td>3.5 kg</td>
                                                <td>10.0 kg</td>
                                                <td><span class="badge bg-warning">Faible</span></td>
                                            </tr>
                                            <tr>
                                                <td>Boeuf</td>
                                                <td>12.8 kg</td>
                                                <td>5.0 kg</td>
                                                <td><span class="badge bg-success">OK</span></td>
                                            </tr>
                                            <tr>
                                                <td>Poisson</td>
                                                <td>8.3 kg</td>
                                                <td>4.0 kg</td>
                                                <td><span class="badge bg-success">OK</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary mt-2">Gérer les stocks</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tables Status -->
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">État des Tables</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 col-md-3 mb-3 text-center">
                                        <div class="bg-success rounded-circle p-3 mx-auto" style="width: 60px; height: 60px;">
                                            <h5 class="mb-0 text-white">8</h5>
                                        </div>
                                        <p class="mt-2 mb-0">Libres</p>
                                    </div>
                                    <div class="col-6 col-md-3 mb-3 text-center">
                                        <div class="bg-primary rounded-circle p-3 mx-auto" style="width: 60px; height: 60px;">
                                            <h5 class="mb-0 text-white">5</h5>
                                        </div>
                                        <p class="mt-2 mb-0">Occupées</p>
                                    </div>
                                    <div class="col-6 col-md-3 mb-3 text-center">
                                        <div class="bg-warning rounded-circle p-3 mx-auto" style="width: 60px; height: 60px;">
                                            <h5 class="mb-0 text-white">3</h5>
                                        </div>
                                        <p class="mt-2 mb-0">Réservées</p>
                                    </div>
                                    <div class="col-6 col-md-3 mb-3 text-center">
                                        <div class="bg-secondary rounded-circle p-3 mx-auto" style="width: 60px; height: 60px;">
                                            <h5 class="mb-0 text-white">2</h5>
                                        </div>
                                        <p class="mt-2 mb-0">Nettoyage</p>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <button class="btn btn-sm btn-outline-primary">Voir plan des tables</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    require('templates/footer.php');
?>