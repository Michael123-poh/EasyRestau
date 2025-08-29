<?php
    require('templates/header.php');
?>

            <!-- Main content -->
            <div class="col-lg-10 main-content p-4">
                <h2 class="section-title">Gestion des Factures</h2>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card stats-primary">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Chiffre d'Affaires (Mois)</h6>
                                        <h3 class="mb-0">12 845 €</h3>
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
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Factures Payées</h6>
                                        <h3 class="mb-0">124</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-check-circle text-success"></i></span>
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
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Factures en Attente</h6>
                                        <h3 class="mb-0">18</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-clock-history text-warning"></i></span>
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
                                        <h6 class="text-uppercase text-muted fw-bold mb-0">Factures Annulées</h6>
                                        <h3 class="mb-0">7</h3>
                                    </div>
                                    <div class="col-auto">
                                        <span class="display-6"><i class="bi bi-x-circle text-danger"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Filters and Actions -->
                <div class="row mb-4 no-print">
                    <div class="col-md-8">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary active">Aujourd'hui</button>
                            <button type="button" class="btn btn-outline-primary">Cette semaine</button>
                            <button type="button" class="btn btn-outline-primary">Ce mois</button>
                        </div>
                        <div class="btn-group ms-2" role="group">
                            <button type="button" class="btn btn-outline-secondary">Tous</button>
                            <button type="button" class="btn btn-outline-success">Payées</button>
                            <button type="button" class="btn btn-outline-warning">En attente</button>
                            <button type="button" class="btn btn-outline-danger">Annulées</button>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher une facture...">
                            <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                            <button class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#createInvoiceModal">
                                <i class="bi bi-plus-circle"></i> Nouvelle Facture
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Invoices Table -->
                <div class="card mb-4 no-print">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste des Factures</h5>
                        <div>
                            <button class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-file-earmark-text"></i> Exporter</button>
                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-printer"></i> Imprimer</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover invoice-table">
                                <thead>
                                    <tr>
                                        <th># Facture</th>
                                        <th>Client</th>
                                        <th>Date</th>
                                        <th>Montant</th>
                                        <th>Statut</th>
                                        <th>Méthode de Paiement</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>#FAC-2023-087</strong></td>
                                        <td>Martin Dupont (Table 4)</td>
                                        <td>12/06/2023</td>
                                        <td>87,50 €</td>
                                        <td><span class="status-badge badge-paid">Payée</span></td>
                                        <td>Carte Bancaire</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-success me-1"><i class="bi bi-printer"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#FAC-2023-086</strong></td>
                                        <td>Sophie Leroy (À emporter)</td>
                                        <td>12/06/2023</td>
                                        <td>32,00 €</td>
                                        <td><span class="status-badge badge-pending">En attente</span></td>
                                        <td>Espèces</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-success me-1"><i class="bi bi-printer"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#FAC-2023-085</strong></td>
                                        <td>Table 2</td>
                                        <td>12/06/2023</td>
                                        <td>45,50 €</td>
                                        <td><span class="status-badge badge-paid">Payée</span></td>
                                        <td>Carte Bancaire</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-success me-1"><i class="bi bi-printer"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#FAC-2023-084</strong></td>
                                        <td>Table 7</td>
                                        <td>12/06/2023</td>
                                        <td>112,00 €</td>
                                        <td><span class="status-badge badge-cancelled">Annulée</span></td>
                                        <td>-</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-success me-1"><i class="bi bi-printer"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#FAC-2023-083</strong></td>
                                        <td>Jean Moreau (Livraison)</td>
                                        <td>11/06/2023</td>
                                        <td>68,50 €</td>
                                        <td><span class="status-badge badge-paid">Payée</span></td>
                                        <td>En ligne</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-success me-1"><i class="bi bi-printer"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Invoice Details -->
                <div class="invoice-details">
                    <div class="invoice-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Facture #FAC-2023-087</h2>
                                <p class="text-muted">Date: 12/06/2023<br>
                                Référence commande: #CMD-0087</p>
                            </div>
                            <div class="col-md-6 text-end">
                                <h3>Restaurant Le Bon Goût</h3>
                                <p class="text-muted">
                                    25 Rue de la Gastronomie<br>
                                    75000 Paris<br>
                                    Tél: 01 23 45 67 89<br>
                                    contact@restaurantlebongout.fr
                                </p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h5>Client:</h5>
                                <p>
                                    Martin Dupont<br>
                                    30 Avenue des Délices<br>
                                    75000 Paris<br>
                                    martin.dupont@email.com<br>
                                    Tél: 06 12 34 56 78
                                </p>
                            </div>
                            <div class="col-md-6 text-end">
                                <h5>Informations de Paiement:</h5>
                                <p>
                                    <strong>Statut:</strong> <span class="status-badge badge-paid">Payée</span><br>
                                    <strong>Méthode de paiement:</strong> Carte Bancaire<br>
                                    <strong>Date de paiement:</strong> 12/06/2023 14:30
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="invoice-items">
                        <h5>Détails de la commande:</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Article</th>
                                        <th class="text-center">Quantité</th>
                                        <th class="text-end">Prix Unitaire</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Menu Viande</td>
                                        <td class="text-center">2</td>
                                        <td class="text-end">21,50 €</td>
                                        <td class="text-end">43,00 €</td>
                                    </tr>
                                    <tr>
                                        <td>Menu Poisson</td>
                                        <td class="text-center">1</td>
                                        <td class="text-end">24,50 €</td>
                                        <td class="text-end">24,50 €</td>
                                    </tr>
                                    <tr>
                                        <td>Eau Minérale (50cl)</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">3,00 €</td>
                                        <td class="text-end">9,00 €</td>
                                    </tr>
                                    <tr>
                                        <td>Café</td>
                                        <td class="text-center">2</td>
                                        <td class="text-end">2,50 €</td>
                                        <td class="text-end">5,00 €</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end">Service</td>
                                        <td class="text-end">6,00 €</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="invoice-totals">
                        <div class="row justify-content-end">
                            <div class="col-md-4">
                                <table class="table">
                                    <tr>
                                        <td>Sous-total:</td>
                                        <td class="text-end">81,50 €</td>
                                    </tr>
                                    <tr>
                                        <td>Service (10%):</td>
                                        <td class="text-end">6,00 €</td>
                                    </tr>
                                    <tr class="total-row">
                                        <td>Total:</td>
                                        <td class="text-end">87,50 €</td>
                                    </tr>
                                    <tr class="total-row">
                                        <td>TVA (10%):</td>
                                        <td class="text-end">7,95 €</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="invoice-actions no-print">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-muted">
                                    <strong>Conditions de paiement:</strong> Paiement à réception de facture<br>
                                    <strong>Retard de paiement:</strong> Taux d'intérêt légal en vigueur
                                </p>
                            </div>
                            <div class="col-md-6 text-end">
                                <button class="btn btn-primary me-2"><i class="bi bi-send"></i> Envoyer par email</button>
                                <button class="btn btn-success me-2" onclick="window.print()"><i class="bi bi-printer"></i> Imprimer</button>
                                <button class="btn btn-outline-secondary"><i class="bi bi-download"></i> Télécharger PDF</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="print-only text-center mt-4">
                        <p>Merci pour votre visite ! À bientôt au Restaurant Le Bon Goût</p>
                        <p>Facture émise électroniquement - valable sans signature</p>
                    </div>
                </div>
                
                <!-- Pagination -->
                <nav aria-label="Page navigation" class="no-print">
                    <ul class="pagination justify-content-center mt-4">
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

    <!-- Create Invoice Modal -->
    <div class="modal fade no-print" id="createInvoiceModal" tabindex="-1" aria-labelledby="createInvoiceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createInvoiceModalLabel">Créer une Nouvelle Facture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="clientName" class="form-label">Client</label>
                                <input type="text" class="form-control" id="clientName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="invoiceDate" class="form-label">Date de facturation</label>
                                <input type="date" class="form-control" id="invoiceDate" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Articles</label>
                            <div class="input-group mb-2">
                                <select class="form-select">
                                    <option selected>Choisir un article...</option>
                                    <option>Menu Viande - 21,50 €</option>
                                    <option>Menu Poisson - 24,50 €</option>
                                    <option>Menu Vegan - 19,90 €</option>
                                    <option>Eau Minérale - 3,00 €</option>
                                    <option>Café - 2,50 €</option>
                                </select>
                                <input type="number" class="form-control" placeholder="Quantité" value="1">
                                <button class="btn btn-outline-secondary" type="button">Ajouter</button>
                            </div>
                            <div class="form-text">Liste des articles ajoutés...</div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="serviceCharge" class="form-label">Frais de service (%)</label>
                                <input type="number" class="form-control" id="serviceCharge" value="10">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="paymentMethod" class="form-label">Méthode de paiement</label>
                                <select class="form-select" id="paymentMethod">
                                    <option>Espèces</option>
                                    <option>Carte Bancaire</option>
                                    <option>Chèque</option>
                                    <option>En ligne</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="notes" class="form-label">Notes</label>
                            <textarea class="form-control" id="notes" rows="2"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#previewInvoiceModal">Aperçu</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Créer la Facture</button>
                </div>
            </div>
        </div>
    </div>

<?php
    require('templates/footer.php');
?>