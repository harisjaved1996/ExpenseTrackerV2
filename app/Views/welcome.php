<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Welcome' ?> - Expense Manager</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .welcome-card {
            max-width: 500px;
            margin: 0 auto;
        }
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-card">
            <div class="card">
                <div class="card-body text-center p-5">
                    <div class="mb-4">
                        <i class="bi bi-wallet2 text-primary" style="font-size: 4rem;"></i>
                    </div>
                    <h2 class="card-title mb-3">Welcome to Expense Manager</h2>
                    <p class="card-text text-muted mb-4">
                        Manage your expenses efficiently with our comprehensive admin dashboard.
                    </p>
                    
                    <div class="d-grid gap-2">
                        <a href="<?= base_url('admin') ?>" class="btn btn-primary btn-lg">
                            <i class="bi bi-speedometer2 me-2"></i>
                            Access Admin Dashboard
                        </a>
                        <a href="<?= base_url('admin/login') ?>" class="btn btn-outline-primary">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            Admin Login
                        </a>
                    </div>
                    
                    <hr class="my-4">
                    
                    <div class="row text-center">
                        <div class="col-4">
                            <i class="bi bi-shield-check text-success mb-2" style="font-size: 1.5rem;"></i>
                            <small class="d-block text-muted">Secure</small>
                        </div>
                        <div class="col-4">
                            <i class="bi bi-lightning-charge text-warning mb-2" style="font-size: 1.5rem;"></i>
                            <small class="d-block text-muted">Fast</small>
                        </div>
                        <div class="col-4">
                            <i class="bi bi-gear text-info mb-2" style="font-size: 1.5rem;"></i>
                            <small class="d-block text-muted">Easy</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>