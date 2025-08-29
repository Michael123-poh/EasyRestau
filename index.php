<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Menus - Restaurant</title>
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
            --menu-appetizer: #FF9AA2;
            --menu-main: #FFB7B2;
            --menu-dessert: #FFDAC1;
            --menu-drink: #B5EAD7;
            --menu-combo: #C7CEEA;
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
        
        .menu-card {
            height: 100%;
        }
        
        .menu-appetizer {
            border-top: 4px solid var(--menu-appetizer);
        }
        
        .menu-main {
            border-top: 4px solid var(--menu-main);
        }
        
        .menu-dessert {
            border-top: 4px solid var(--menu-dessert);
        }
        
        .menu-drink {
            border-top: 4px solid var(--menu-drink);
        }
        
        .menu-combo {
            border-top: 4px solid var(--menu-combo);
        }
        
        .category-badge {
            padding: 0.5em 1em;
            border-radius: 20px;
            font-weight: 500;
        }
        
        .badge-appetizer {
            background-color: var(--menu-appetizer);
            color: #000;
        }
        
        .badge-main {
            background-color: var(--menu-main);
            color: #000;
        }
        
        .badge-dessert {
            background-color: var(--menu-dessert);
            color: #000;
        }
        
        .badge-drink {
            background-color: var(--menu-drink);
            color: #000;
        }
        
        .badge-combo {
            background-color: var(--menu-combo);
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
        
        .menu-item-img {
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

    <div class="main-content justify-center">
        <a href="views/Menu.php" class="btn btn-success ms-2 rounded text-white">Commencer-></a>
    </div>

</body>
</html>