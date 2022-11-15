<?php

namespace App\Controllers;

use App\Models\PertanyaanModels;
use Google_Client;

class Auth extends BaseController
{
    protected $pertanyaanModel;

    public function __construct()
    {
        $this->pertanyaanModel = new PertanyaanModels();
    }

    public function login()
    {
        $clientID = '890274412815-aj1cfgo2mmjp5v7himj1fa2ijr41tvrb.apps.googleusercontent.com';
        $clientSecret = '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';
        $redirectUri = 'http://localhost:8080'; //Harus sama dengan yang kita daftarkan
                
        $google_client = new Google_Client();
        $google_client->setClientId($clientID);
        $google_client->setClientSecret($clientSecret);
        $google_client->setRedirectUri($redirectUri);
        $google_client->addScope("email");
        $google_client->addScope("profile");
        $data = [
            'google_auth_url' => $google_client->createAuthUrl(),
            'a' => 1
            
        ];
        return view('auth/login_oauth', $data);
    }
    
    public function login_google()
    {
        $clientID = '890274412815-aj1cfgo2mmjp5v7himj1fa2ijr41tvrb.apps.googleusercontent.com';
        $clientSecret = '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';
        $redirectUri = 'http://localhost:8080'; //Harus sama dengan yang kita daftarkan
                
        $google_client = new Google_Client();
        $google_client->setClientId($clientID);
        $google_client->setClientSecret($clientSecret);
        $google_client->setRedirectUri($redirectUri);
        $google_client->addScope("email");
        $google_client->addScope("profile");
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
    
        print_r($token);
        die;
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

    public function login_cas()
    {
        echo 1;
    }
}
