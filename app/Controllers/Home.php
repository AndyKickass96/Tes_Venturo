<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->homeModel = new HomeModel();
    }

    public function index()
    {

        return view('home');
    }
    public function transaksi()
    {
        $tahun = $_GET;
        $data = [
            'menu' => json_decode($this->homeModel->getMenu(), true),
            'transaksi' => json_decode($this->homeModel->getTransaksi($tahun['tahun']), true),
            'tahun' => $tahun['tahun']
        ];

        return view('home', $data);
    }
}
