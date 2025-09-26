<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ExpenseModel;

class Expenses extends BaseController
{
    protected $expenseModel;

    public function __construct()
    {
        $this->expenseModel = new ExpenseModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $search = $this->request->getGet('search') ?? '';
        $perPage = 10;
        $page = $this->request->getGet('page') ?? 1;
        $offset = ($page - 1) * $perPage;

        $expenses = $this->expenseModel->getExpenses($perPage, $offset, $search);
        $totalRecords = $this->expenseModel->getTotalExpenses($search);
        $statistics = $this->expenseModel->getStatistics();

        $pager = \Config\Services::pager();
        $pager->store('default', $page, $perPage, $totalRecords);

        $data = [
            'title' => 'Manage Expenses',
            'expenses' => $expenses,
            'pager' => $pager,
            'search' => $search,
            'statistics' => $statistics,
            'currentPage' => $page,
            'totalRecords' => $totalRecords
        ];

        return view('admin/expenses/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add New Expense',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/expenses/create', $data);
    }

    public function store()
    {
        $rules = [
            'date' => 'required|valid_date',
            'description' => 'required|min_length[3]|max_length[255]',
            'amount' => 'required|numeric|greater_than[0]'
        ];

        if (!$this->validate($rules)) {
            return view('admin/expenses/create', [
                'title' => 'Add New Expense',
                'validation' => $this->validator
            ]);
        }

        $data = [
            'date' => $this->request->getPost('date'),
            'description' => trim($this->request->getPost('description')),
            'amount' => floatval($this->request->getPost('amount'))
        ];

        if ($this->expenseModel->insert($data)) {
            session()->setFlashdata('success', 'Expense added successfully!');
            return redirect()->to('/admin/expenses');
        } else {
            session()->setFlashdata('error', 'Failed to add expense. Please try again.');
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $expense = $this->expenseModel->find($id);
        
        if (!$expense) {
            session()->setFlashdata('error', 'Expense not found!');
            return redirect()->to('/admin/expenses');
        }

        $data = [
            'title' => 'Edit Expense',
            'expense' => $expense,
            'validation' => \Config\Services::validation()
        ];

        return view('admin/expenses/edit', $data);
    }

    public function update($id)
    {
        $expense = $this->expenseModel->find($id);
        
        if (!$expense) {
            session()->setFlashdata('error', 'Expense not found!');
            return redirect()->to('/admin/expenses');
        }

        // Handle method override for forms
        $method = $this->request->getPost('_method');
        if ($method !== 'PUT' && $this->request->getMethod() !== 'put') {
            // Only allow POST method for updates via forms
        }

        $rules = [
            'date' => 'required|valid_date',
            'description' => 'required|min_length[3]|max_length[255]',
            'amount' => 'required|numeric|greater_than[0]'
        ];

        if (!$this->validate($rules)) {
            return view('admin/expenses/edit', [
                'title' => 'Edit Expense',
                'expense' => $expense,
                'validation' => $this->validator
            ]);
        }

        $data = [
            'date' => $this->request->getPost('date'),
            'description' => trim($this->request->getPost('description')),
            'amount' => floatval($this->request->getPost('amount'))
        ];

        if ($this->expenseModel->update($id, $data)) {
            session()->setFlashdata('success', 'Expense updated successfully!');
            return redirect()->to('/admin/expenses');
        } else {
            session()->setFlashdata('error', 'Failed to update expense. Please try again.');
            return redirect()->back()->withInput();
        }
    }

    public function delete($id)
    {
        $expense = $this->expenseModel->find($id);
        
        if (!$expense) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Expense not found!'
            ]);
        }

        if ($this->expenseModel->delete($id)) {
            session()->setFlashdata('success', 'Expense deleted successfully!');
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Expense deleted successfully!'
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Failed to delete expense!'
            ]);
        }
    }
}