<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class ViewController extends BaseController
{
    private function view(string $viewName, string $pageTitle,)
    {
        return view($viewName, [
            'viewName'  => $viewName,
            'pageTitle' => $pageTitle,
            
        ]);
    }
    public function root()
    {
        return redirect()->to('/home');
    }

    public function home()
    {
        return $this->view('home', 'Home');
    }

    public function shop()
    {
        return $this->view('shop', 'Shop');
    }

    public function blog()
    {
        return $this->view('blog', 'Blog');
    }
    public function about()
    {
        return $this->view('about', 'About');
    }

    public function contact()
    {
        return $this->view('contact', 'Contact');
    }

    public function cart()
    {
        return $this->view('cart', 'Cart');
    }
    
}
