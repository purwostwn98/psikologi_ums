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
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.assessme.puslogin.com/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $data1 = json_decode($response, true);
        // $query = $this->pertanyaanModel->where('kode_instrumen', 'SEKS01')->findAll();
        // print_r($query) ;
        // die;
        $data =
            [
                "pertanyaan" => $data1['data']
            ];
        return view('front/quiz', $data);
    }

    public function instrument_detail()
    {
        $data =
            [
                "pertanyaan" => 'data'
            ];
        return view('front/instrument_detail', $data);
    }

    public function hasil_survei()
    {
        $data =
            [
                "pertanyaan" => 'data'
            ];
        return view('front/hasil_survei', $data);
    }

    public function riwayat_netizen()
    {
        $data =
            [
                "pertanyaan" => 'data'
            ];
        return view('front/riwayat_netizen', $data);
    }
}
