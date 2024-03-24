<?php

namespace App\Controllers;
use App\Models\KoltukModel;
class Seferdetay extends BaseController
{
    public function index()
    {
        $request = service('request');
        $seferID = $request->getVar('seferID');
        
        $koltukModel = new KoltukModel();
        $doluKoltuklar = $koltukModel->getDoluKoltuklar($seferID);

        

        $koltukNumaralari = array_map('intval', array_column($doluKoltuklar, 'KoltukNumarasi'));
        
        $data = [
            'doluKoltuklar' => $doluKoltuklar,
            'koltukNumaralari' => $koltukNumaralari
        ];
    
        echo view('seferdetay_v', $data);
    }
    
    
    
    public function aktar() {
        // Veri işleme işlemini gerçekleştir
        $veri = json_decode(file_get_contents("php://input"), true);

        // Verileri işleme
        $name = $veri['name'];
        $email = $veri['email'];
        $date = $veri['date'];
        $tc = $veri['tc'];
        $durum = $veri['durum'];
        $totalPrice = $veri['totalPrice'];

        // Veritabanına kaydetme veya başka bir işlem gerçekleştirme
        // Örnek olarak ekrana yazdırıyoruz:
        echo "Ad: " . $name . "<br>";
        echo "E-posta: " . $email . "<br>";
        echo "Doğum Tarihi: " . $date . "<br>";
        echo "TC Kimlik: " . $tc . "<br>";
        echo "Durum: " . $durum . "<br>";
        echo "Toplam Fiyat: " . $totalPrice . "<br>";

    }

    public function azalt()
    {
        $request = service('request');
        $seferID = $request->getVar('seferID');

    }
}
