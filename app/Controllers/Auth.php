<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\IncomingRequest;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function doLogin()
    {
        $session = session();
        $request = service('request');
        $username = $request->getPost('username');
        $password = $request->getPost('password');

        // Contoh autentikasi sederhana
        if ($username === 'admin' && $password === 'admin123') {
            $session->set('isLoggedIn', true);
            $session->set('username', $username);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
