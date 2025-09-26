<?php

namespace App\Models;

use CodeIgniter\Model;

class ExpenseModel extends Model
{
    protected $table            = 'expenses';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    
    protected $allowedFields    = [
        'date',
        'description', 
        'amount'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'date'        => 'required|valid_date',
        'description' => 'required|min_length[3]|max_length[255]',
        'amount'      => 'required|numeric|greater_than[0]'
    ];
    
    protected $validationMessages   = [
        'date' => [
            'required' => 'Date is required.',
            'valid_date' => 'Please enter a valid date.'
        ],
        'description' => [
            'required' => 'Description is required.',
            'min_length' => 'Description must be at least 3 characters long.',
            'max_length' => 'Description cannot exceed 255 characters.'
        ],
        'amount' => [
            'required' => 'Amount is required.',
            'numeric' => 'Amount must be a valid number.',
            'greater_than' => 'Amount must be greater than 0.'
        ]
    ];
    
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    /**
     * Get expenses with pagination and search
     */
    public function getExpenses($limit = 10, $offset = 0, $search = '')
    {
        $builder = $this->builder();
        
        if ($search) {
            $builder->groupStart()
                    ->like('description', $search)
                    ->orLike('date', $search)
                    ->orLike('amount', $search)
                    ->groupEnd();
        }
        
        return $builder->limit($limit, $offset)
                      ->orderBy('date', 'DESC')
                      ->get()
                      ->getResultArray();
    }

    /**
     * Get total count of expenses
     */
    public function getTotalExpenses($search = '')
    {
        $builder = $this->builder();
        
        if ($search) {
            $builder->groupStart()
                    ->like('description', $search)
                    ->orLike('date', $search)
                    ->orLike('amount', $search)
                    ->groupEnd();
        }
        
        return $builder->countAllResults();
    }

    /**
     * Get expense statistics
     */
    public function getStatistics()
    {
        $builder = $this->builder();
        
        $result = $builder->selectSum('amount', 'total_amount')
                         ->selectCount('id', 'total_records')
                         ->get()
                         ->getRowArray();
        
        return [
            'total_amount' => $result['total_amount'] ?: 0,
            'total_records' => $result['total_records'] ?: 0,
            'average_amount' => $result['total_records'] > 0 ? 
                              round($result['total_amount'] / $result['total_records'], 2) : 0
        ];
    }
}