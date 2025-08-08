<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index(): \CodeIgniter\HTTP\ResponseInterface
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return $this->response->setBody(view('dashboard'));
    }

    public function dashboard(): \CodeIgniter\HTTP\ResponseInterface
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return $this->response->setBody(view('dashboard'));
    }
}
