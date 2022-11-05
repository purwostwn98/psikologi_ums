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
        $response = api($this->host_api . "/api/list-instrument", "GET");
        $data = [
            'instrumen' => $response['data']
        ];
        return view('front/index', $data);
    }

    public function quiz()
    {
        $a = $this->request->getVar('instrument');
        if ($this->session->get('login') != true) {
            return redirect()->to("/auth/hal_muasok/$a");
        } else {
            $data1 = api($this->host_api . "/api/id/list-pertanyaan-survei?instrument=$a", 'GET');
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
        $a = $this->request->getVar('instrument');
        $response = api($this->host_api . "/api/detail-instrument?instrument=$a", "GET");
        $data = [
            "deskripsi" => $response['data']['deskripsi_instrument'],
            "id_instrument" => $a
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
