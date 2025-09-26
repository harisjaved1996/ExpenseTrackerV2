<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Login' ?></title>
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
        .login-container {
            max-width: 400px;
            margin: 0 auto;
        }
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 1rem 1rem 0 0 !important;
            text-align: center;
            padding: 2rem 1rem 1rem;
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 0.5rem;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
            transform: translateY(-2px);
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        <i class="bi bi-shield-lock me-2"></i>
                        Admin Login
                    </h3>
                    <p class="mb-0 mt-2 opacity-75">Please sign in to continue</p>
                </div>
                <div class="card-body p-4">
                    <!-- Flash Messages -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle me-2"></i>
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <?= form_open('admin/login', ['class' => 'needs-validation', 'novalidate' => true]) ?>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <i class="bi bi-envelope me-1"></i>Email Address
                            </label>
                            <input type="email" 
                                   class="form-control <?= ($validation && $validation->hasError('email')) ? 'is-invalid' : '' ?>" 
                                   id="email" 
                                   name="email" 
                                   value="<?= old('email') ?>" 
                                   placeholder="Enter your email"
                                   required>
                            <?php if ($validation && $validation->hasError('email')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                <i class="bi bi-lock me-1"></i>Password
                            </label>
                            <div class="input-group">
                                <input type="password" 
                                       class="form-control <?= ($validation && $validation->hasError('password')) ? 'is-invalid' : '' ?>" 
                                       id="password" 
                                       name="password" 
                                       placeholder="Enter your password"
                                       required>
                                <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">
                                    <i class="bi bi-eye" id="password-icon"></i>
                                </button>
                                <?php if ($validation && $validation->hasError('password')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-box-arrow-in-right me-2"></i>
                                Sign In
                            </button>
                        </div>

                    <?= form_close() ?>

                    <!-- Demo Credentials -->
                    <div class="mt-4 p-3 bg-light rounded">
                        <h6 class="text-muted mb-2">Demo Credentials:</h6>
                        <small class="text-muted">
                            Email: <strong>admin@example.com</strong><br>
                            Password: <strong>admin123</strong>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Password toggle functionality
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('password-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.className = 'bi bi-eye-slash';
            } else {
                passwordInput.type = 'password';
                passwordIcon.className = 'bi bi-eye';
            }
        }

        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);

        // Form validation
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                const forms = document.getElementsByClassName('needs-validation');
                Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>