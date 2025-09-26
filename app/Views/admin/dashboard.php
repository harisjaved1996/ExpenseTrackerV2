<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="row">
    <!-- Stats Cards -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stats-card border-left-primary shadow h-100 py-2" style="border-left: 0.25rem solid #4e73df;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Expenses</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalExpenses">Loading...</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-receipt text-primary" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Monthly Expenses Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stats-card border-left-success shadow h-100 py-2" style="border-left: 0.25rem solid #1cc88a;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Amount</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalAmount">$0.00</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-currency-dollar text-success" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Average Expense Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stats-card border-left-info shadow h-100 py-2" style="border-left: 0.25rem solid #36b9cc;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Average Expense</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="averageAmount">$0.00</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-graph-up text-info" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stats-card border-left-warning shadow h-100 py-2" style="border-left: 0.25rem solid #f6c23e;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Quick Actions</div>
                        <a href="<?= base_url('admin/expenses/create') ?>" class="btn btn-warning btn-sm">
                            <i class="bi bi-plus-circle me-1"></i>Add Expense
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-lightning-charge text-warning" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Expenses -->
<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="card shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Recent Expenses</h6>
                <a href="<?= base_url('admin/expenses') ?>" class="btn btn-sm btn-primary">
                    View All <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="recentExpensesTable">
                        <thead class="table-light">
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3" class="text-center">
                                    <div class="spinner-border spinner-border-sm me-2" role="status"></div>
                                    Loading recent expenses...
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <!-- Welcome Card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Welcome Back!</h6>
            </div>
            <div class="card-body text-center">
                <div class="mb-3">
                    <i class="bi bi-person-circle text-primary" style="font-size: 4rem;"></i>
                </div>
                <h5 class="card-title"><?= $admin_name ?? 'Administrator' ?></h5>
                <p class="card-text text-muted">Welcome to your admin dashboard. Manage your expenses efficiently.</p>
                <div class="row text-center mt-3">
                    <div class="col">
                        <a href="<?= base_url('admin/expenses') ?>" class="btn btn-primary btn-sm">
                            <i class="bi bi-receipt me-1"></i>Manage Expenses
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">System Info</h6>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="text-muted">Current Time:</span>
                    <span id="currentTime" class="fw-bold"></span>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="text-muted">Session:</span>
                    <span class="badge bg-success">Active</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted">Last Login:</span>
                    <span class="fw-bold">Now</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
// Update current time
function updateTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString();
    document.getElementById('currentTime').textContent = timeString;
}

// Update time every second
setInterval(updateTime, 1000);
updateTime(); // Initial call

// Load dashboard data
document.addEventListener('DOMContentLoaded', function() {
    loadDashboardStats();
    loadRecentExpenses();
});

// Load dashboard statistics
function loadDashboardStats() {
    // Simulate loading (replace with actual AJAX call)
    setTimeout(() => {
        document.getElementById('totalExpenses').textContent = '0';
        document.getElementById('totalAmount').textContent = '$0.00';
        document.getElementById('averageAmount').textContent = '$0.00';
    }, 1000);
}

// Load recent expenses
function loadRecentExpenses() {
    const tbody = document.querySelector('#recentExpensesTable tbody');
    
    // Simulate loading (replace with actual AJAX call)
    setTimeout(() => {
        tbody.innerHTML = `
            <tr>
                <td colspan="3" class="text-center text-muted">
                    <i class="bi bi-inbox me-2"></i>
                    No expenses found. <a href="<?= base_url('admin/expenses/create') ?>" class="text-decoration-none">Add your first expense</a>
                </td>
            </tr>
        `;
    }, 1500);
}
</script>
<?= $this->endSection() ?>