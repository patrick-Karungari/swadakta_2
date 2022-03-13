<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function __construct()
    {
        $this->data['site_title'] = "Home - Welcome to HOME";
        $this->data['wrapper'] = true;
    }
    
    public function index()
    {
       //return view('welcome_message');
        return $this->_renderPage('home/layout', $this->data);
    }
}
