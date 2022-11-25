<?php

namespace App\Controllers;


class Admin extends BaseController
{
    protected $pertanyaanModel;

    public function __construct()
    {
        

    }


    public function dashboard_adm()
    {

        $year = $this->ApiHelper->get("/api/get-jumlah-respondent?filter=year", true);
        $today = $this->ApiHelper->get("/api/get-jumlah-respondent?filter=today", true);
        $month = $this->ApiHelper->get("/api/get-jumlah-respondent?filter=month", true);
        $all = $this->ApiHelper->get("/api/get-jumlah-respondent?filter=all", true);
        $statistik_respondent = $this->ApiHelper->get("/api/get-statistik-respondent", true);
        $statistik_peneliti = $this->ApiHelper->get("/api/get-statistik-peneliti", true);
        $data = [
            'year' => $year->data,
            'today' => $today->data,
            'month' => $month->data,
            'all' => $all->data,
            'statistik_respondent' => $statistik_respondent->data,
            'statistik_peneliti' => $statistik_peneliti->data,
        ];
        
        return view('admin/dashboard_admin', $data);
    }


    public function daftar_responden()
    {        

        $data_respondent = $this->ApiHelper->get('/api/list-instrumen-respondent', true);
        $data = [
            'data_respondents' => $data_respondent->data
        ];

        return view('admin/daftar_responden', $data);
    }


    public function daftar_responden_2()
    {
        echo $this->session->get('token');
        $endpoint = "/api/list-respondent?instrument=".$this->request->getVar('instrument');
        $respondent_by_instrument = $this->ApiHelper->get($endpoint, true);
        print_r($respondent_by_instrument);
        $data = [
            'data' => $respondent_by_instrument->data
        ];
        
        return view('admin/daftar_responden_2', $data);
    }


    public function detail_responden()
    {
        $instrument = $this->request->getVar('instrument');
        $user = $this->request->getVar('user');
        $take_on = $this->request->getVar('take_on');
        $take_on = str_replace(" ","%20",$take_on);
        $endpoint = "/api/detail-respondent?instrument=$instrument&user=$user&take_on=$take_on";
        $detail_respondent = $this->ApiHelper->get($endpoint, true);
        $data = [
            'data' => $detail_respondent->data
        ];
        
        return view('admin/detail_survei_responden', $data);
    }


    public function data_instrumen()
    {
        $data_instrument = $this->ApiHelper->get('/api/id/list-instrument', True);
        $data = [
            'data_instrument' => $data_instrument->data
        ];
        return view('admin/data_instrumen', $data);
    }


    public function detail_instrumen()
    {
        if($_POST){
            $data_instrument = $_POST;
            $data_instrument =  http_build_query($data_instrument, '', '&', PHP_QUERY_RFC3986);
            $endpoint = "/api/edit-instrument?instrument=".$this->request->getVar('instrument');
            $result = $this->ApiHelper->put($endpoint, $data_instrument);
            if($result){
                session()->setFlashData('success', $result['messages']['success']);
            }
       
        }

        $endpoint = "/api/id/detail-instrument?instrument=".$this->request->getVar('instrument');
        $detail_instrument = $this->ApiHelper->get($endpoint, True);

        $data = [
            'detail_instrument' => $detail_instrument->data
        ];
        
        return view('admin/detail_instrumen', $data);
    }

    
    public function data_pertanyaan()
    {
        if ($_POST) {
            $endpoint = "/api/tambah-pertanyaan?instrument=".$this->request->getVar('instrument');
            $data =  array('soal' => $this->request->getVar('soal'), 'soal_eng' => $this->request->getVar('soal_eng'));
            $result = $this->ApiHelper->post($endpoint, $data);
            session()->setFlashData('success', $result['messages']['success']);
            $url = '/id/admin/data-pertanyaan?instrument='.$this->request->getVar('instrument').'&language=id';
            return redirect()->to(base_url($url));

        }
        $endpoint = "/api/id/list-pertanyaan?instrument=".$this->request->getVar('instrument');
        $data_pertanyaan = $this->ApiHelper->get($endpoint, true);
        $data = [
            'data' => $data_pertanyaan->data
        ];
        return view('admin/data_pertanyaan', $data);
    }

    public function detele_pertanyaan()
    {
        $id_pertanyaan = $this->request->getVar('id_pertanyaan');

        $endpoint = "/api/detele-pertanyaan".$id_pertanyaan;
        $result = $this->ApiHelper->delete($endpoint);
        if ($result['status'] == 200) {
            session()->setFlashData('success', $result['messages']['success']);
            $url = 'id/admin/data-pertanyaan?instrument='.$this->request->getVar('instrument')."&language=id";
            return redirect()->to(base_url($url));
        }else{
            session()->setFlashData('error', 'Detele data pertanyaan error');
            $url = 'id/admin/data-pertanyaan?instrument='.$this->request->getVar('instrument')."&language=id";
            return redirect()->to(base_url($url));
        }
    }

    public function edit_pertanyaan()
    {
        $id_pertanyaan = $this->request->getVar('id_pertanyaan');
        $instrument = $this->request->getVar('instrument');
        $data =  array('soal' => $this->request->getVar('soal'), 'soal_eng' => $this->request->getVar('soal_eng'));
        $data = http_build_query($data, '', '&', PHP_QUERY_RFC3986);
        $endpoint = "/api/edit-pertanyaan".$id_pertanyaan;
        $result = $this->ApiHelper->put($endpoint, $data);
        if ($result['status'] == 200) {
            session()->setFlashData('success', $result['messages']['success']);
            $url = '/id/admin/data-pertanyaan?instrument='.$this->request->getVar('instrument').'&language=id';;
            return redirect()->to(base_url($url));
        }else{
            session()->setFlashData('error', 'Detele data pertanyaan error');
            $url = '/id/admin/data-pertanyaan?instrument='.$this->request->getVar('instrument').'&language=id';;
            return redirect()->to(base_url($url));
        }
    }


    public function tambah_instrumen()
    {
        if ($_POST) {
            $data = $this->request->getVar();
            $result = $this->ApiHelper->post('/api/tambah-instrument', $data);
            if($result){
                session()->setFlashData('success', $result['messages']['success']);
                return redirect()->to(base_url('/id/admin/data-instrumen'));
            }
        }

        return view('admin/tambah_instrumen');
    }


    public function manajemen_user()
    {
        if ($_POST) {
            $endpoint = "/api/auth/edit-user/".$this->request->getVar('user');
            $data = [
                'level_user' => $this->request->getVar('level_user')
            ];
            $data = http_build_query($data, '', '&', PHP_QUERY_RFC3986);
            $result = $this->ApiHelper->put($endpoint, $data);
            if($result['status'] == 200){
                session()->setFlashData('success', $result['messages']['success']);
            }else{
                session()->setFlashData('error', $result['messages']['error']);    
            }
            return redirect()->to(base_url('/id/admin/manajemen-user'));
            
        }
        $endpoint = "/api/auth/list-user";
        $data_user = $this->ApiHelper->get($endpoint, true);
        $data = [
            'data_user' => $data_user->data
        ];
        return view('admin/tabel_user', $data);
    }
    
    public function list_req_peneliti()
    {
        if ($_POST) {
            $endpoint = "/api/auth/edit-peneliti/".$this->request->getVar('user');
            $data = [
                'level_user' => $this->request->getVar('level_user'),
                'status' => $this->request->getVar('status')
            ];
            $data = http_build_query($data, '', '&', PHP_QUERY_RFC3986);
            $result = $this->ApiHelper->put($endpoint, $data);
            if($result){
                session()->setFlashData('success', $result['messages']['success']);
                return redirect()->to(base_url('/id/admin/manajemen-user'));
            }
            
        }
        $endpoint = "/api/auth/list-peneliti";
        $data_peneliti= $this->ApiHelper->get($endpoint, true);
        $data = [
            'data_user' => $data_peneliti->data
        ];
        return view('admin/tabel_req_peneliti', $data);
        
    }
}
