<?php

namespace App\Controllers;

use App\Models\Bilet;

class BiletController extends BaseController
{
    public function index()
    {
        return view('bilet_sorgula');
    }

    public function sorgula()
    {
        $request = $this->request;

        $pnrKodu = $request->getVar('pnr_kodu');

        $biletModel = new Bilet();

        $bilet = $biletModel->where('PNRKodu', $pnrKodu)->first();

        if ($bilet) {
            // PNR koduyla eşleşen bilet bulundu, bilgileri göster
            return view('bilet_detay', ['bilet' => $bilet]);
        } else {
            // PNR koduyla eşleşen bilet bulunamadı
            return view('bilet_bulunamadi');
        }
    }
}
