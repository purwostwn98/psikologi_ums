<?php

namespace App\Libraries;

use GeneratingResult;

class ApiHelper
{
    private static $instance = null;

    public function __construct()
    {
        $this->host_api = 'api.assessme.puslogin.com';
        $this->session = \Config\Services::session();
        $this->curl = curl_init();

    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new ApiHelper();
        }

        return self::$instance;
    }


    public function post($endpoint, $data)
    {

        curl_setopt_array($this->curl, array(
            CURLOPT_URL => $this->host_api . $$endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer ".$this->session->get('token'),
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return json_decode($response);
    }


    public function get($endpoint)
    {
        # code...
    }


    public function put($endpoint)
    {
        # code...
    }

    
    public function delete($endpoint)
    {
        # code...
    }

}
