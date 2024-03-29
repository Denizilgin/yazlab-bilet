<?php

namespace App\Controllers;

class dashboard extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }

}
