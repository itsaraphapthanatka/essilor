<?php namespace App\filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null)
    {
        // if user not logged in
        if (!session()->get('logged_in')) {
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // do someting
    }
}