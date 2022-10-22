<?php

namespace App\Controllers;

use App\Models\PertanyaanModels;

class Peneliti extends BaseController
{
    protected $pertanyaanModel;

    public function __construct()
    {
        $this->pertanyaanModel = new PertanyaanModels();
    }

    public function dashboard_peneliti()
    {
        $dapat_session = [
            'login' => true,
            'halaman' => 'peneliti'
        ];
        $this->session->set($dapat_session);
        return view('peneliti/dashboard_peneliti');
    }

    public function pilih_instrumen()
    {
        return view('peneliti/pilih_instrumen');
    }

    public function detail_instrumen()
    {
        return view('peneliti/detail_instrumen');
    }
}
