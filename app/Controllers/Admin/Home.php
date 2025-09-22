<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function __construct()
    {
        // Load session library
        $this->session = \Config\Services::session();
        if(!$this->session->get('is_logged_in') && !$this->session->get('user')=='admin'){
            return redirect()->to('/admin/login');
            
        }
    }

    public function home()
    {
        return view('admin/home');
    }
}



