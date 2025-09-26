<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="h4 mb-1">Manage Expenses</h2>
        <p class="text-muted mb-0">Track and manage all your expenses</p>
    </div>
    <div>
        <a href="<?= base_url('admin/expenses/create') ?>" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i>Add New Expense
        </a>
    </div>
</div>

<!-- Statistics Cards -->
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card border-primary">
            <div class="card-body text-center">
                <i class="bi bi-receipt text-primary mb-2" style="font-size: 2rem;"></i>
                <h5 class="card-title"><?= number_format($statistics['total_records']) ?></h5>
                <p class="card-text text-muted">Total Records</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-success">
            <div class="card-body text-center">
                <i class="bi bi-currency-dollar text-success mb-2" style="font-size: 2rem;"></i>
                <h5 class="card-title">$<?= number_format($statistics['total_amount'], 2) ?></h5>
                <p class="card-text text-muted">Total Amount</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-info">
            <div class="card-body text-center">
                <i class="bi bi-graph-up text-info mb-2" style="font-size: 2rem;"></i>
                <h5 class="card-title">$<?= number_format($statistics['average_amount'], 2) ?></h5>
                <p class="card-text text-muted">Average Amount</p>
            </div>
        </div>
    </div>
</div>

<!-- Filters and Search -->
<div class="card mb-4">
    <div class="card-body">
        <?= form_open(base_url('admin/expenses'), ['method' => 'GET', 'class' => 'row g-3']) ?>
            <div class="col-md-8">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text" 
                           class="form-control" 
                           name="search" 
                           value="<?= esc($search) ?>" 
                           placeholder="Search by description, date, or amount...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="bi bi-search me-1"></i>Search
                    </button>
                    <?php if ($search): ?>
                        <a href="<?= base_url('admin/expenses') ?>" class="btn btn-outline-secondary">
                            <i class="bi bi-x-circle me-1"></i>Clear
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?= form_close() ?>
    </div>
</div>

<!-- Expenses Table -->
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">
            <i class="bi bi-table me-1"></i>Expenses List 
            <?php if ($search): ?>
                <span class="badge bg-primary">Search: "<?= esc($search) ?>"</span>
            <?php endif; ?>
        </h6>
        <small class="text-muted">
            Showing <?= count($expenses) ?> of <?= $totalRecords ?> records
        </small>
    </div>
    <div class="card-body p-0">
        <?php if (empty($expenses)): ?>
            <div class="text-center py-5">
                <i class="bi bi-inbox text-muted mb-3" style="font-size: 3rem;"></i>
                <h5 class="text-muted">No Expenses Found</h5>
                <p class="text-muted">
                    <?php if ($search): ?>
                        No expenses match your search criteria.
                    <?php else: ?>
                        You haven't added any expenses yet.
                    <?php endif; ?>
                </p>
                <a href="<?= base_url('admin/expenses/create') ?>" class="btn btn-primary">
                    <i class="bi bi-plus-circle me-1"></i>Add First Expense
                </a>
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="15%">Date</th>
                            <th width="50%">Description</th>
                            <th width="15%">Amount</th>
                            <th width="20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($expenses as $expense): ?>
                        <tr>
                            <td>
                                <span class="fw-bold"><?= date('M d, Y', strtotime($expense['date'])) ?></span>
                                <br>
                                <small class="text-muted"><?= date('l', strtotime($expense['date'])) ?></small>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <span class="fw-semibold"><?= esc($expense['description']) ?></span>
                                    <small class="text-muted">
                                        <i class="bi bi-clock me-1"></i>
                                        Added <?= date('M d, Y g:i A', strtotime($expense['created_at'])) ?>
                                        <?php if ($expense['updated_at'] !== $expense['created_at']): ?>
                                            • Updated <?= date('M d, Y g:i A', strtotime($expense['updated_at'])) ?>
                                        <?php endif; ?>
                                    </small>
                                </div>
                            </td>
                            <td>
                                <span class="fw-bold text-success fs-5">
                                    $<?= number_format($expense['amount'], 2) ?>
                                </span>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="<?= base_url('admin/expenses/edit/' . $expense['id']) ?>" 
                                       class="btn btn-outline-primary" 
                                       title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button type="button" 
                                            class="btn btn-outline-danger" 
                                            title="Delete"
                                            onclick="deleteExpense(<?= $expense['id'] ?>, '<?= esc($expense['description']) ?>')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <?php if ($pager->getPageCount() > 1): ?>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-muted">
                            Page <?= $currentPage ?> of <?= $pager->getPageCount() ?>
                        </div>
                        <div>
                            <?= $pager->links('default', 'bootstrap_pagination') ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="bi bi-exclamation-triangle me-2"></i>Confirm Delete
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this expense?</p>
                <div class="alert alert-warning">
                    <i class="bi bi-info-circle me-2"></i>
                    <strong id="deleteExpenseName"></strong>
                    <br>
                    <small>This action cannot be undone.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x me-1"></i>Cancel
                </button>
                <button type="button" class="btn btn-danger" id="confirmDelete">
                    <i class="bi bi-trash me-1"></i>Delete
                </button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
let deleteExpenseId = null;

function deleteExpense(id, description) {
    deleteExpenseId = id;
    document.getElementById('deleteExpenseName').textContent = description;
    
    const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
    modal.show();
}

document.getElementById('confirmDelete').addEventListener('click', function() {
    if (deleteExpenseId) {
        // Show loading state
        this.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span>Deleting...';
        this.disabled = true;
        
        fetch(`<?= base_url('admin/expenses/delete') ?>/${deleteExpenseId}`, {
            method: 'DELETE',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Close modal and reload page
                bootstrap.Modal.getInstance(document.getElementById('deleteModal')).hide();
                location.reload();
            } else {
                alert('Error: ' + data.message);
                // Reset button state
                this.innerHTML = '<i class="bi bi-trash me-1"></i>Delete';
                this.disabled = false;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while deleting the expense.');
            // Reset button state
            this.innerHTML = '<i class="bi bi-trash me-1"></i>Delete';
            this.disabled = false;
        });
    }
});

// Reset modal state when hidden
document.getElementById('deleteModal').addEventListener('hidden.bs.modal', function() {
    deleteExpenseId = null;
    const deleteBtn = document.getElementById('confirmDelete');
    deleteBtn.innerHTML = '<i class="bi bi-trash me-1"></i>Delete';
    deleteBtn.disabled = false;
});
</script>
<?= $this->endSection() ?>