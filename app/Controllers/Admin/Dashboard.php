<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        
        $data = [
            'title' => 'Admin Dashboard',
            'admin_name' => $session->get('admin_name')
        ];

        return view('admin/dashboard', $data);
    }
}