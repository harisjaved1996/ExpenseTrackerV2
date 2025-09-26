<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function login()
    {
        $session = session();
        
        // Check if admin is already logged in
        if ($session->get('admin_logged_in')) {
            return redirect()->to('/admin/dashboard');
        }

        $data = [
            'title' => 'Admin Login',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/login', $data);
    }

    public function authenticate()
    {
        $session = session();
        
        // Check if admin is already logged in
        if ($session->get('admin_logged_in')) {
            return redirect()->to('/admin/dashboard');
        }

        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ];

        if (!$this->validate($rules)) {
            return view('admin/login', [
                'title' => 'Admin Login',
                'validation' => $this->validator
            ]);
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Simple admin credentials check (in production, use database)
        // You should create an admin table and use proper password hashing
        $adminEmail = 'admin@example.com';
        $adminPassword = 'admin123'; // In production, use password_hash()
        $adminName = 'Administrator';

        if ($email === $adminEmail && $password === $adminPassword) {
            // Set session data
            $sessionData = [
                'admin_id' => 1,
                'admin_name' => $adminName,
                'admin_email' => $email,
                'admin_logged_in' => true
            ];

            $session->set($sessionData);
            $session->setFlashdata('success', "Welcome {$adminName}!");
            
            return redirect()->to('/admin/dashboard');
        } else {
            $session->setFlashdata('error', 'Invalid email or password!');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        $session = session();
        
        // Destroy admin session
        $session->remove(['admin_id', 'admin_name', 'admin_email', 'admin_logged_in']);
        $session->setFlashdata('success', 'You have been logged out successfully.');
        
        return redirect()->to('/admin/login');
    }
}