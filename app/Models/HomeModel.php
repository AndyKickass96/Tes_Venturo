<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $useTimestamps = true;

    public function getMenu()
    {
        $data = file_get_contents('https://tes-web.landa.id/intermediate/menu');
        return $data;
    }

    public function getTransaksi($tahun = '')
    {
        $data = file_get_contents('https://tes-web.landa.id/intermediate/transaksi?tahun=', $tahun);
        return $data;
    }
}
