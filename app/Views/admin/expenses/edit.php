<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="h4 mb-1">Edit Expense</h2>
        <p class="text-muted mb-0">Update expense record details</p>
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
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square me-2"></i>Edit Expense Details
                </h5>
            </div>
            <div class="card-body">
                <?= form_open('admin/expenses/update/' . $expense['id'], ['class' => 'needs-validation', 'novalidate' => true, 'method' => 'post']) ?>
                
                    <!-- Hidden method field for PUT request -->
                    <input type="hidden" name="_method" value="post">
                    
                    <!-- Expense Info -->
                    <div class="alert alert-info mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <small class="text-muted d-block">Created</small>
                                <strong><?= date('M d, Y g:i A', strtotime($expense['created_at'])) ?></strong>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted d-block">Last Updated</small>
                                <strong><?= date('M d, Y g:i A', strtotime($expense['updated_at'])) ?></strong>
                            </div>
                        </div>
                    </div>

                    <!-- Date Field -->
                    <div class="mb-4">
                        <label for="date" class="form-label fw-bold">
                            <i class="bi bi-calendar-event me-1 text-primary"></i>Date *
                        </label>
                        <input type="date" 
                               class="form-control form-control-lg <?= ($validation && $validation->hasError('date')) ? 'is-invalid' : '' ?>" 
                               id="date" 
                               name="date" 
                               value="<?= old('date', $expense['date']) ?>" 
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
                                  placeholder="Enter expense description"
                                  required><?= old('description', $expense['description']) ?></textarea>
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
                                   value="<?= old('amount', number_format($expense['amount'], 2, '.', '')) ?>" 
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
                        <button type="button" class="btn btn-info btn-lg" onclick="resetForm()">
                            <i class="bi bi-arrow-clockwise me-1"></i>Reset
                        </button>
                        <button type="submit" class="btn btn-warning btn-lg">
                            <i class="bi bi-save me-1"></i>Update Expense
                        </button>
                    </div>

                <?= form_close() ?>
            </div>
        </div>

        <!-- Change History Card -->
        <div class="card mt-4">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="bi bi-clock-history text-info me-1"></i>Change History
                </h6>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div>
                        <strong>Original Entry</strong>
                        <br>
                        <small class="text-muted"><?= date('M d, Y g:i A', strtotime($expense['created_at'])) ?></small>
                    </div>
                    <span class="badge bg-success">Created</span>
                </div>
                <?php if ($expense['updated_at'] !== $expense['created_at']): ?>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <strong>Last Modified</strong>
                        <br>
                        <small class="text-muted"><?= date('M d, Y g:i A', strtotime($expense['updated_at'])) ?></small>
                    </div>
                    <span class="badge bg-info">Updated</span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
// Store original values for reset functionality
const originalValues = {
    date: '<?= $expense['date'] ?>',
    description: '<?= addslashes($expense['description']) ?>',
    amount: '<?= number_format($expense['amount'], 2, '.', '') ?>'
};

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

// Reset form to original values
function resetForm() {
    if (confirm('Are you sure you want to reset all changes?')) {
        document.getElementById('date').value = originalValues.date;
        document.getElementById('description').value = originalValues.description;
        document.getElementById('amount').value = originalValues.amount;
        
        // Remove validation classes
        const form = document.querySelector('form');
        form.classList.remove('was-validated');
        
        // Reset modified flag
        formModified = false;
    }
}

// Track form modifications
let formModified = false;
const form = document.querySelector('form');
const inputs = form.querySelectorAll('input, textarea');

inputs.forEach(input => {
    // Store initial value
    input.dataset.initialValue = input.value;
    
    input.addEventListener('input', () => {
        // Check if any field has changed from original
        let hasChanges = false;
        inputs.forEach(inp => {
            if (inp.value !== inp.dataset.initialValue) {
                hasChanges = true;
            }
        });
        formModified = hasChanges;
        
        // Update button state
        updateSaveButton();
    });
});

// Update save button state based on changes
function updateSaveButton() {
    const saveBtn = document.querySelector('button[type="submit"]');
    if (formModified) {
        saveBtn.classList.remove('btn-warning');
        saveBtn.classList.add('btn-success');
        saveBtn.innerHTML = '<i class="bi bi-save me-1"></i>Save Changes';
    } else {
        saveBtn.classList.remove('btn-success');
        saveBtn.classList.add('btn-warning');
        saveBtn.innerHTML = '<i class="bi bi-save me-1"></i>Update Expense';
    }
}

// Confirm navigation away if form has changes
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

// Auto-focus on first field
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('date').focus();
});
</script>
<?= $this->endSection() ?>