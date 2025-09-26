<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Simple home page that redirects to admin
        $data = [
            'title' => 'Welcome'
        ];
        
        return view('welcome', $data);
    }
}