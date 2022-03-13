<?php

namespace App\Controllers;

class Contact extends BaseController
{

    public function __construct()
    {
        $this->data['site_title'] = "Home - Welcome to HOME";
        $this->data['wrapper'] = false;
    }

    public function index()
    {
        //return view('welcome_message');
        return $this->_renderPage('home/Contact/index', $this->data);
    }
}
