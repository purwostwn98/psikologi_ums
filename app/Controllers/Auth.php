<?php

namespace App\Controllers;

use App\Models\PertanyaanModels;

class Auth extends BaseController
{
    protected $pertanyaanModel;

    public function __construct()
    {
        $this->pertanyaanModel = new PertanyaanModels();
    }

    public function login($a)
    {
        $data = [
            'a' => $a
        ];
        return view('auth/login', $data);
    }

    public function cek_user()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'api.assessme.puslogin.com/api/auth/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('email' => $this->request->getVar('username'), 'password' => $this->request->getVar('password')),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response_data = json_decode($response, true);

        if ($response_data['status'] == 200) {
            $dapat_session = [
                'login' => true,
                'token' => $response_data['data']['token'],
                'email' => $this->request->getVar('username'),
                'nama_user' => $response_data['data']['nama_lengkap'],
                'level_user' => $response_data['data']['level_user']
            ];
            $this->session->set($dapat_session);

            if ($response_data['data']['level_user'] == 'peneliti') {
                $msg = [
                    'berhasil' => [
                        'link' => '/peneliti',
                        'pesan' => 'You have successfully logged in as a researcher'
                    ]
                ];
            } elseif ($response_data['data']['level_user'] == 'admin') {
                $msg = [
                    'berhasil' => [
                        'link' => '/admin',
                        'pesan' => 'You have successfully logged in as a administrator'
                    ]
                ];
            } else {
                $a = $this->request->getVar('a');
                if ($a == 0) {
                    $msg = [
                        'berhasil' => [
                            'link' => '/',
                            'pesan' => 'You have successfully logged in'
                        ]
                    ];
                } else {
                    $msg = [
                        'berhasil' => [
                            'link' => "/home/quiz?instrument=" . $a,
                            'pesan' => 'You have successfully logged in'
                        ]
                    ];
                }
            }
        } elseif ($response_data['status'] == 404) {
            $msg = [
                'gagal' => [
                    'link' => '/',
                    'pesan' => 'You failed to login'
                ]
            ];
        }
        echo json_encode($msg);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }
}
