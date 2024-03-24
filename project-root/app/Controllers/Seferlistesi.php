<?php

namespace App\Controllers;

class Seferlistesi extends BaseController
{
    public function index(): string
    {
        echo "Merhaba Dünya";
        return view('seferlistesi_v');
    }

}
