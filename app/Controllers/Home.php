<?php

namespace App\Controllers;

use App\Libraries\ApiHelper;
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
        $locale = $this->request->getLocale();
        $response = $this->ApiHelper->get("/api/$locale/list-instrument");
        $data = [
            'instrumen' => $response['data']
        ];
        
        return view('front/index', $data);
    }

    public function quiz()
    {
        $instrument = $this->request->getVar('instrument');
        $locale = $this->request->getLocale();
        if ($this->session->get('login') != true) {
            return redirect()->to("$locale/auth/login");
        } else {
            $data1 = api($this->host_api . "/api/id/list-pertanyaan-survei?instrument=$instrument", 'GET');
            $data =
                [
                    "pertanyaan" => $data1['data']['data_result'],
                    "jumlah_pilihan" => $data1['data']['jumlah_pilihan']
                ];
            return view('front/quiz', $data);
        }
    }

    public function simpan_survei()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->host_api . '/api/submit-quiz/1?survei=VqSYDk',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $_POST,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer ".$this->session->get('token'),
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function instrument_detail()
    {
        $instrument = $this->request->getVar('instrument');
        $locale = $this->request->getLocale();
        $response = $this->ApiHelper->get("/api/$locale/detail-instrument?instrument=$instrument");
        $data = [
            "data_instrument" => $response['data'],
            "id_instrument" => $instrument
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
