<?php

function api($end_point, $method)
{
    $session = \Config\Services::session();
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $end_point,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer " . $session->get('token')
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $response = json_decode($response, true);
    return $response;
}
