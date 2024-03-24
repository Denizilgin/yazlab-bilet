<?php
namespace App\Controllers;
use App\Models\KoltukModel;
class Odeme extends BaseController {

    public function index() {
        // POST isteğiyle gelen veriyi al
       

        $request = service('request');
        $seferID = $request->getVar('seferID');
        $kisi_sayisi = $request->getVar('person_count');
        
        $koltukModel = new KoltukModel();
        $koltukModel->azaltKoltukSayisi($seferID,$kisi_sayisi);

        echo view('odeme_v');
    }
}