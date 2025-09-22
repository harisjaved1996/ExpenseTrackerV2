<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
   public function __construct()
    {
        // Load session library
        $this->session = \Config\Services::session();
        // Check if the user is already logged in
        if ($this->session->get('is_logged_in')) {
            // Redirect to admin/home if logged in
            return redirect()->to('/admin/home');
        }
    }

   

    public function login()
    {
        return view('admin/login');
        // Dummy login logic (You should replace this with your actual login validation)
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Assuming you have a simple check for the credentials
        if ($username == 'admin' && $password == 'password') {
            // Set session data on successful login
            $this->session->set('is_logged_in', true);

            // Redirect to home page
            return redirect()->to('/admin/home');
        } else {
            // Redirect to login page with error
            return redirect()->to('/admin/login')->with('error', 'Invalid login credentials.');
        }
    }

    public function logout()
    {
        // Destroy session on logout
        $this->session->destroy();

        // Redirect to login page
        return redirect()->to('/admin/login');
    }
}
