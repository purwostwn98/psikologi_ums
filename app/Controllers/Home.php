<?php

namespace App\Controllers;

use App\Models\PertanyaanModels;

class Home extends BaseController
{
    protected $pertanyaanModel;

    public function __construct()
    {
        $this->pertanyaanModel = new PertanyaanModels();
    }

    public function index()
    {
        return view('front/index');
    }

    public function quiz()
    {
        $data =
            [
                "pertanyaan" => $this->pertanyaanModel->where('kode_instrumen', "SEKS01")->findAll()
            ];
        return view('front/quiz', $data);
    }
}
