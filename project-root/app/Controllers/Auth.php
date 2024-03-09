<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index(): string
    {
        echo "Merhaba Dünya";
        return view('Panel/Login_v');
    }

}
