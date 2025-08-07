<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $user;

    function index()
    {
        return view('pages/v_login');
    }

    function __construct()
    {
        helper('form');
        $this->user=new UserModel();
    }
    
    public function login()
{
    if ($this->request->getPost()) {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = $this->user->where(['username' => $username])->first();

        if ($dataUser) {
	        if (password_verify($password, $dataUser['password'])) {
                session()->set([
                    'user_id' => $dataUser['id'], // ← tambahkan ini
                    'username' => $dataUser['username'],
                    'role' => $dataUser['role'],
                    'isLoggedIn' => TRUE
                ]);

                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('failed', 'Username & Password Salah');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashdata('failed', 'Username Tidak Ditemukan');
            return redirect()->to(base_url('login'));
        }
    } else {
        return view('pages/v_login');
    }
}
public function logout()
{
    session()->destroy();
    return redirect()->to(base_url('login'));
}
}
