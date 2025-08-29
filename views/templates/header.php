<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Plats - Restaurant</title>
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
            --appetizer: #FF9AA2;
            --main: #FFB7B2;
            --dessert: #FFDAC1;
            --drink: #B5EAD7;
            --vegan: #C7CEEA;
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
        
        .dish-card {
            height: 100%;
        }
        
        .dish-appetizer {
            border-top: 4px solid var(--appetizer);
        }
        
        .dish-main {
            border-top: 4px solid var(--main);
        }
        
        .dish-dessert {
            border-top: 4px solid var(--dessert);
        }
        
        .dish-drink {
            border-top: 4px solid var(--drink);
        }
        
        .dish-vegan {
            border-top: 4px solid var(--vegan);
        }
        
        .category-badge {
            padding: 0.5em 1em;
            border-radius: 20px;
            font-weight: 500;
        }
        
        .badge-appetizer {
            background-color: var(--appetizer);
            color: #000;
        }
        
        .badge-main {
            background-color: var(--main);
            color: #000;
        }
        
        .badge-dessert {
            background-color: var(--dessert);
            color: #000;
        }
        
        .badge-drink {
            background-color: var(--drink);
            color: #000;
        }
        
        .badge-vegan {
            background-color: var(--vegan);
            color: #000;
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
        
        .main-content {
            background-color: #f5f7fb;
        }
        
        .section-title {
            border-left: 4px solid var(--secondary);
            padding-left: 10px;
            margin: 20px 0;
        }
        
        .dish-img {
            height: 180px;
            object-fit: cover;
            border-top-left-radius: 0.8rem;
            border-top-right-radius: 0.8rem;
        }
        
        .price-tag {
            font-weight: bold;
            color: var(--primary);
        }
        
        .profit-margin {
            font-size: 0.85rem;
            color: var(--success);
            font-weight: 500;
        }
        
        .ingredients-list {
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .stock-info {
            font-size: 0.9rem;
        }
        
        .low-stock {
            color: var(--danger);
            font-weight: 500;
        }
        
        .good-stock {
            color: var(--success);
        }
        
        .recipe-table th {
            background-color: var(--primary);
            color: white;
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
                            <a href="../controllers/Y_dashboardController.php" class="nav-link">
                                <i class="bi bi-speedometer2"></i>
                                Tableau de bord
                            </a>
                        </li>
                        <li>
                            <a href="../controllers/Y_commandeController.php" class="nav-link">
                                <i class="bi bi-cart"></i>
                                Commandes
                            </a>
                        </li>
                        <li>
                            <a href="../controllers/H_menuController.php" class="nav-link">
                                <i class="bi bi-book"></i>
                                Menus
                            </a>
                        </li>
                        <li>
                            <a href="../controllers/H_platController.php" class="nav-link active">
                                <i class="bi bi-basket"></i>
                                Plats
                            </a>
                        </li>
                        <li>
                            <a href="../controllers/Y_stockController.php" class="nav-link">
                                <i class="bi bi-box-seam"></i>
                                Stock
                            </a>
                        </li>
                        <li>
                            <a href="../controllers/H_facturationController.php" class="nav-link">
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