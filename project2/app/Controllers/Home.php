<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('v_portfolio');#buat mengarahkan ke file v_portfolio
    }
}
