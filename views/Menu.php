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
                            <a href="#" class="nav-link">
                                <i class="bi bi-cart"></i>
                                Commandes
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link active">
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
                                <i class="bi bi-plus-circle"></i> Nouveau Menu
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
                    <h5 class="modal-title" id="addMenuModalLabel">Ajouter un Nouveau Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="menuName" class="form-label">Nom du Menu</label>
                                <input type="text" class="form-control" id="menuName" required>
                            </div>
                            <div class="col-md-6 mb-3">
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
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Créer le Menu</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>