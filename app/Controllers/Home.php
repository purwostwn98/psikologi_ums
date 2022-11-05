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
        dd($_POST);

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
            CURLOPT_POSTFIELDS => 'answer_1=3&answer_2=2&answer_3=4&answer_4=2&answer_5=2&answer_6=3&answer_7=4&answer_8=2&answer_9=2&answer_10=2&answer_11=2&answer_12=2&answer_13=2&answer_14=3&answer_15=1&answer_16=2&answer_17=3&answer_18=4&answer_19=2&answer_20=2&answer_21=3&answer_22=3&answer_23=2&answer_24=3&answer_25=2&answer_26=3',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjEzNTY5OTk1MjQsIm5iZiI6MTM1NzAwMDAwMCwidWlkIjoiMjAiLCJlbWFpbCI6Inp1bGZhZmFsYWgzQGdtYWlsLmNvbSJ9.5TWX_Wgz431orddWeaXcXVytsyZOQgEKBD0bjZg00Uk',
                'Content-Type: application/x-www-form-urlencoded'
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
