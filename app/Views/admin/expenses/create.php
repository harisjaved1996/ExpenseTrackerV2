<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="h4 mb-1">Add New Expense</h2>
        <p class="text-muted mb-0">Create a new expense record</p>
    </div>
    <div>
        <a href="<?= base_url('admin/expenses') ?>" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>Back to Expenses
        </a>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="bi bi-plus-circle me-2"></i>Expense Details
                </h5>
            </div>
            <div class="card-body">
                <?= form_open('admin/expenses/store', ['class' => 'needs-validation', 'novalidate' => true]) ?>
                
                    <!-- Date Field -->
                    <div class="mb-4">
                        <label for="date" class="form-label fw-bold">
                            <i class="bi bi-calendar-event me-1 text-primary"></i>Date *
                        </label>
                        <input type="date" 
                               class="form-control form-control-lg <?= ($validation && $validation->hasError('date')) ? 'is-invalid' : '' ?>" 
                               id="date" 
                               name="date" 
                               value="<?= old('date', date('Y-m-d')) ?>" 
                               required>
                        <?php if ($validation && $validation->hasError('date')): ?>
                            <div class="invalid-feedback">
                                <?= $validation->getError('date') ?>
                            </div>
                        <?php else: ?>
                            <div class="form-text">
                                <i class="bi bi-info-circle me-1"></i>Select the date when this expense occurred
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Description Field -->
                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold">
                            <i class="bi bi-card-text me-1 text-primary"></i>Description *
                        </label>
                        <textarea class="form-control form-control-lg <?= ($validation && $validation->hasError('description')) ? 'is-invalid' : '' ?>" 
                                  id="description" 
                                  name="description" 
                                  rows="3" 
                                  placeholder="Enter expense description (e.g., Office supplies, Transportation, etc.)"
                                  required><?= old('description') ?></textarea>
                        <?php if ($validation && $validation->hasError('description')): ?>
                            <div class="invalid-feedback">
                                <?= $validation->getError('description') ?>
                            </div>
                        <?php else: ?>
                            <div class="form-text">
                                <i class="bi bi-info-circle me-1"></i>Provide a clear description of what this expense was for
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Amount Field -->
                    <div class="mb-4">
                        <label for="amount" class="form-label fw-bold">
                            <i class="bi bi-currency-dollar me-1 text-primary"></i>Amount *
                        </label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text">$</span>
                            <input type="number" 
                                   class="form-control <?= ($validation && $validation->hasError('amount')) ? 'is-invalid' : '' ?>" 
                                   id="amount" 
                                   name="amount" 
                                   value="<?= old('amount') ?>" 
                                   step="0.01" 
                                   min="0.01" 
                                   placeholder="0.00"
                                   required>
                            <?php if ($validation && $validation->hasError('amount')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('amount') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if (!($validation && $validation->hasError('amount'))): ?>
                            <div class="form-text">
                                <i class="bi bi-info-circle me-1"></i>Enter the amount in USD (e.g., 25.99)
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Form Actions -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?= base_url('admin/expenses') ?>" class="btn btn-outline-secondary btn-lg">
                            <i class="bi bi-x-circle me-1"></i>Cancel
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-save me-1"></i>Save Expense
                        </button>
                    </div>

                <?= form_close() ?>
            </div>
        </div>

        <!-- Quick Tips Card -->
        <div class="card mt-4">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="bi bi-lightbulb text-warning me-1"></i>Quick Tips
                </h6>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <i class="bi bi-check-circle text-success me-2"></i>
                        Use descriptive names for better tracking (e.g., "Lunch at Restaurant ABC")
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle text-success me-2"></i>
                        Enter the exact date when the expense occurred for accurate records
                    </li>
                    <li class="mb-0">
                        <i class="bi bi-check-circle text-success me-2"></i>
                        Double-check the amount before saving to avoid errors
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
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

// Auto-format amount field
document.getElementById('amount').addEventListener('input', function() {
    let value = parseFloat(this.value);
    if (!isNaN(value)) {
        // Optional: You can add formatting logic here
    }
});

// Auto-focus on first field
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('date').focus();
});

// Confirm navigation away if form has changes
let formModified = false;
const form = document.querySelector('form');
const inputs = form.querySelectorAll('input, textarea');

inputs.forEach(input => {
    input.addEventListener('input', () => {
        formModified = true;
    });
});

window.addEventListener('beforeunload', function(e) {
    if (formModified) {
        e.preventDefault();
        e.returnValue = 'You have unsaved changes. Are you sure you want to leave?';
        return e.returnValue;
    }
});

// Remove warning when form is submitted
form.addEventListener('submit', function() {
    formModified = false;
});
</script>
<?= $this->endSection() ?>