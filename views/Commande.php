<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Commandes - Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #3a506b;
            --secondary: #5bc0be;
            --success: #6a994e;
            --warning: #fca311;
            --danger: #e63946;
            --light: #f8f9fa;
            --dark: #1f2421;
            --waiting: #ffdd99;
            --progress: #99ccff;
            --ready: #99ff99;
            --billed: #cccccc;
        }
        
        body {
            background-color: #f5f7fb;
            color: #333;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary), #2c3e50);
        }
        
        .sidebar {
            background: linear-gradient(180deg, var(--primary), #2c3e50);
            min-height: 100vh;
            color: white;
        }
        
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 0.8rem 1rem;
            margin: 0.2rem 0;
            border-radius: 0.3rem;
        }
        
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .sidebar .nav-link i {
            margin-right: 0.5rem;
        }
        
        .card {
            border-radius: 0.8rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border: none;
            transition: transform 0.2s;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .status-badge {
            padding: 0.5em 1em;
            border-radius: 20px;
            font-weight: 500;
        }
        
        .status-waiting {
            background-color: var(--waiting);
            color: #856404;
        }
        
        .status-progress {
            background-color: var(--progress);
            color: #004085;
        }
        
        .status-ready {
            background-color: var(--ready);
            color: #155724;
        }
        
        .status-billed {
            background-color: var(--billed);
            color: #383d41;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .btn-primary:hover {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }
        
        .btn-success {
            background-color: var(--success);
            border-color: var(--success);
        }
        
        .btn-warning {
            background-color: var(--warning);
            border-color: var(--warning);
            color: white;
        }
        
        .btn-danger {
            background-color: var(--danger);
            border-color: var(--danger);
        }
        
        .order-card {
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .order-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
        }
        
        .table-hover tbody tr:hover {
            background-color: rgba(91, 192, 190, 0.1);
        }
        
        .stats-card {
            border-left: 4px solid;
        }
        
        .stats-waiting {
            border-left-color: var(--warning);
        }
        
        .stats-progress {
            border-left-color: var(--primary);
        }
        
        .stats-ready {
            border-left-color: var(--success);
        }
        
        .stats-billed {
            border-left-color: var(--dark);
        }
        
        .main-content {
            background-color: #f5f7fb;
        }
        
        .section-title {
            border-left: 4px solid var(--secondary);
            padding-left: 10px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="bi bi-cup-hot-fill me-2"></i>
                RestoManager
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-bell"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-gear"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i> Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Paramètres</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-2 sidebar px-0">
                <div class="d-flex flex-column p-3">
                    <hr class="text-light">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="bi bi-speedometer2"></i>
                                Tableau de bord
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link active">
                                <i class="bi bi-cart"></i>
                                Commandes
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">
                                <i class="bi bi-book"></i>
                                Menus
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">
                                <i class="bi bi-basket"></i>
                                Plats
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">
                                <i class="bi bi-box-seam"></i>
                                Stock
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">
                                <i class="bi bi-currency-euro"></i>
                                Facturation
                            </a>
                        </li>
                    </ul>
                    <hr class="text-light">
                    <div class="text-center">
                        <div class="btn-group">
                            <button class="btn btn-sm btn-outline-light"><i class="bi bi-printer"></i> Imprimer</button>
                            <button class="btn btn-sm btn-outline-light"><i class="bi bi-question-circle"></i> Aide</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="col-lg-10 main-content p-4">
                <h2 class="section-title">Gestion des Commandes</h2>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card stats-waiting">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">En Attente</h6>
                                        <h3 class="mb-0">8</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="status-badge status-waiting"><i class="bi bi-clock"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card stats-progress">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">En Préparation</h6>
                                        <h3 class="mb-0">12</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="status-badge status-progress"><i class="bi bi-arrow-repeat"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card stats-ready">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Prêtes</h6>
                                        <h3 class="mb-0">5</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="status-badge status-ready"><i class="bi bi-check-circle"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card stats-billed">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Facturées</h6>
                                        <h3 class="mb-0">24</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="status-badge status-billed"><i class="bi bi-receipt"></i></span>
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
                            <button type="button" class="btn btn-outline-primary active">Aujourd'hui</button>
                            <button type="button" class="btn btn-outline-primary">Cette semaine</button>
                            <button type="button" class="btn btn-outline-primary">Ce mois</button>
                        </div>
                        <div class="btn-group ms-2" role="group">
                            <button type="button" class="btn btn-outline-secondary">Tous</button>
                            <button type="button" class="btn btn-outline-warning">En attente</button>
                            <button type="button" class="btn btn-outline-primary">En cours</button>
                            <button type="button" class="btn btn-outline-success">Prêtes</button>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher une commande...">
                            <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
                
                <!-- Orders Table -->
                <div class="card mb-4">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste des Commandes</h5>
                        <button class="btn btn-sm btn-primary"><i class="bi bi-plus-circle"></i> Nouvelle Commande</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th># Commande</th>
                                        <th>Client / Table</th>
                                        <th>Contenu</th>
                                        <th>Statut</th>
                                        <th>Total</th>
                                        <th>Heure</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>#CMD-0087</strong></td>
                                        <td>Table 4 (6 pers.)</td>
                                        <td>2x Menu Viande, 1x Menu Poisson, 3x Eau</td>
                                        <td><span class="status-badge status-waiting">En attente</span></td>
                                        <td>87,50 €</td>
                                        <td>12:45</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success me-1" title="Valider"><i class="bi bi-check-lg"></i></button>
                                            <button class="btn btn-sm btn-outline-primary me-1" title="Modifier"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" title="Annuler"><i class="bi bi-x-lg"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#CMD-0086</strong></td>
                                        <td>À emporter - Martin</td>
                                        <td>1x Menu Vegan, 2x Dessert Chocolat</td>
                                        <td><span class="status-badge status-progress">En préparation</span></td>
                                        <td>32,00 €</td>
                                        <td>12:30</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success me-1" title="Valider"><i class="bi bi-check-lg"></i></button>
                                            <button class="btn btn-sm btn-outline-primary me-1" title="Modifier"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" title="Annuler"><i class="bi bi-x-lg"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#CMD-0085</strong></td>
                                        <td>Table 2 (2 pers.)</td>
                                        <td>2x Menu du Jour, 1x Vin Rouge</td>
                                        <td><span class="status-badge status-ready">Prête à servir</span></td>
                                        <td>45,50 €</td>
                                        <td>12:15</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success me-1" title="Valider"><i class="bi bi-check-lg"></i></button>
                                            <button class="btn btn-sm btn-outline-primary me-1" title="Modifier"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" title="Annuler"><i class="bi bi-x-lg"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#CMD-0084</strong></td>
                                        <td>Table 7 (4 pers.)</td>
                                        <td>4x Menu Poulet, 2x Soda, 1x Café</td>
                                        <td><span class="status-badge status-billed">Facturée</span></td>
                                        <td>112,00 €</td>
                                        <td>11:55</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-info me-1" title="Voir facture"><i class="bi bi-receipt"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Imprimer"><i class="bi bi-printer"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#CMD-0083</strong></td>
                                        <td>Livraison - Dupont</td>
                                        <td>3x Pizza, 2x Salade, 1x Tiramisu</td>
                                        <td><span class="status-badge status-progress">En préparation</span></td>
                                        <td>68,50 €</td>
                                        <td>11:40</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success me-1" title="Valider"><i class="bi bi-check-lg"></i></button>
                                            <button class="btn btn-sm btn-outline-primary me-1" title="Modifier"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" title="Annuler"><i class="bi bi-x-lg"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                
                <!-- Order Details Card (Example) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Détails de la Commande #CMD-0087</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Client:</div>
                                    <div class="col-sm-8">Table 4 (6 personnes)</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Serveur:</div>
                                    <div class="col-sm-8">Sophie</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Heure:</div>
                                    <div class="col-sm-8">12:45</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Statut:</div>
                                    <div class="col-sm-8"><span class="status-badge status-waiting">En attente</span></div>
                                </div>
                                
                                <h6 class="mt-4 mb-3">Contenu de la commande:</h6>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        2x Menu Viande
                                        <span>42,00 €</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        1x Menu Poisson
                                        <span>24,50 €</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        3x Eau Minérale
                                        <span>9,00 €</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Service
                                        <span>12,00 €</span>
                                    </li>
                                    <li class="list-group-item list-group-item-light d-flex justify-content-between align-items-center fw-bold">
                                        Total
                                        <span>87,50 €</span>
                                    </li>
                                </ul>
                                
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                    <button class="btn btn-warning me-md-2"><i class="bi bi-arrow-repeat"></i> Changer statut</button>
                                    <button class="btn btn-success"><i class="bi bi-check-circle"></i> Valider commande</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Statistiques du Jour</h5>
                            </div>
                            <div class="card-body">
                                <div class="row text-center mb-4">
                                    <div class="col-6">
                                        <div class="h4">49</div>
                                        <div class="text-muted">Commandes</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="h4">1 245,75 €</div>
                                        <div class="text-muted">Chiffre d'affaires</div>
                                    </div>
                                </div>
                                
                                <h6 class="mb-3">Plats les plus commandés:</h6>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Menu Viande</h6>
                                            <small>21 commandes</small>
                                        </div>
                                        <small class="text-muted">Plat principal</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Menu Poisson</h6>
                                            <small>18 commandes</small>
                                        </div>
                                        <small class="text-muted">Plat principal</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Tiramisu</h6>
                                            <small>15 commandes</small>
                                        </div>
                                        <small class="text-muted">Dessert</small>
                                    </a>
                                </div>
                                
                                <div class="mt-4">
                                    <h6>Répartition des commandes:</h6>
                                    <div class="progress mb-2" style="height: 20px;">
                                        <div class="progress-bar bg-warning" style="width: 20%">En attente</div>
                                        <div class="progress-bar bg-primary" style="width: 40%">En cours</div>
                                        <div class="progress-bar bg-success" style="width: 25%">Prêtes</div>
                                        <div class="progress-bar bg-secondary" style="width: 15%">Facturées</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>