<?php

namespace App\Models;

use CodeIgniter\Model;

class KoltukModel extends Model
{
    protected $table      = 'koltuk_durumu';
    protected $primaryKey = 'KoltukID';

    protected $table2 = 'seferler';
    protected $primaryKey2 = 'SeferID';


    protected $allowedFields = ['KoltukNumarasi', 'SeferID', 'DoluMu'];

    public function getDoluKoltuklar($seferID)
    {
        return $this->where('SeferID', $seferID)
                    ->where('DoluMu', 1)
                    ->findAll();
    }

    public function azaltKoltukSayisi($seferID,$kisi_sayisi)
    {
        $builder = $this->db->table($this->table2);
        $builder->where('SeferID', $seferID);
        $builder->set('KoltukSayisi', 'KoltukSayisi - ' . $kisi_sayisi, FALSE); // FALSE: to prevent CI from protecting the column names
        $builder->update();
        
    }
}
