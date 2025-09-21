<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        //
    }
    public function create()
    {
        
        $error = false;
        $message = 'Operation Successfull!';
        $data = null;
        $userModel = new UserModel();

        // Get input (POST/JSON). For demo, we’ll hardcode your given values.
        $name     = $this->request->getPost('name') ?? 'Sharjeel Khalid';
        $email    = $this->request->getPost('email') ?? 'sharjeel@gmail.com';
        $password = $this->request->getPost('password') ?? 'nccs@sharjeel';

        // 1) Validate (uses rules from the model)
        $data = [
            'name'     => $name,
            'email'    => $email,
            'password' => $password, // raw here—will hash next line
        ];
        if (!$userModel->validate($data)) {
            $error = true;
            $message = 'Operation Failed!';
            $data = json_encode($userModel->errors());
        }
        // 2) Hash the password before insert
        $data['password'] = password_hash($password, PASSWORD_BCRYPT);
die('haris1');
        // 3) Insert
        $userId = $userModel->insert($data);
die('haris');
        if ($userId === false) {
            $error = true;
            $message = 'Operation Failed!';
            $data = json_encode($userModel->errors());
        }
        $payload = [ 'error'=>$error,'message'=>$message,'data'=>$data];
        die('haris1');
        return redirect()->to('/login')->with('response', $payload);
    }
}
