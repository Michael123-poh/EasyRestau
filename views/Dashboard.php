<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Restaurant</title>
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
        
        .card-dashboard {
            height: 100%;
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
        
        .stats-card {
            border-left: 4px solid;
        }
        
        .stats-primary {
            border-left-color: var(--primary);
        }
        
        .stats-success {
            border-left-color: var(--success);
        }
        
        .stats-warning {
            border-left-color: var(--warning);
        }
        
        .stats-danger {
            border-left-color: var(--danger);
        }
        
        .main-content {
            background-color: #f5f7fb;
        }
        
        .section-title {
            border-left: 4px solid var(--secondary);
            padding-left: 10px;
            margin: 20px 0;
        }
        
        .progress {
            height: 8px;
        }
        
        .chart-container {
            height: 250px;
            position: relative;
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
        
        .low-stock {
            background-color: #ffcccc;
        }
        
        .bg-waiting {
            background-color: var(--waiting);
        }
        
        .bg-progress {
            background-color: var(--progress);
        }
        
        .bg-ready {
            background-color: var(--ready);
        }
        
        .bg-billed {
            background-color: var(--billed);
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
                            <a href="#" class="nav-link active" aria-current="page">
                                <i class="bi bi-speedometer2"></i>
                                Tableau de bord
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>