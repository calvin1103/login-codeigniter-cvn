<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        helper(['form']);
        echo view('login');
    }

public function doLogin()
{
    helper(['form']);
    $session = session();
    $model = new UserModel();

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $user = $model->where('email', $email)->first();

    if ($user) {

        if (password_verify($password, $user['password'])) {
            $ses_data = [
                'id' => $user['id'],
                'email' => $user['email'],
                'name' => $user['name'],
                'isLoggedIn' => true
            ];
            $session->set($ses_data);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('error', 'Password salah.');
            return redirect()->to('/login');
        }
    } else {
        $session->setFlashdata('error', 'Email tidak ditemukan.');
        return redirect()->to('/login');
    }
}




    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
