<?php

namespace App\Models;

use CodeIgniter\Model;

class Bilet extends Model
{
    protected $table = 'biletler';
    protected $primaryKey = 'BiletID';
    protected $allowedFields = ['SeferID', 'KullaniciEposta', 'KullaniciAdi', 'KullaniciSoyadi', 'KalkisNoktasi', 'VarisNoktasi', 'KalkisSaati', 'KoltukNumarasi', 'BiletFiyati', 'PNRKodu', 'SatinAlmaTarihiSaati'];
}
