<?php

namespace App\Controllers;

use App\Models\PertanyaanModels;

class Peneliti extends BaseController
{
    protected $pertanyaanModel;

    public function __construct()
    {
        $this->pertanyaanModel = new PertanyaanModels();
    }

    public function dashboard_peneliti()
    {
        if ($_POST) {
            $endpoint = "/api/edit_survei".$this->request->getVar('edit_endpoint');

            $time = strtotime($this->request->getVar('start_date'));
            $newFormatStartDate = date('Y-m-d',$time);    
            $data = [
                'start_date' => $newFormatStartDate,
                'end_date' => $this->request->getVar('end_date')
            ];
            
            $data = http_build_query($data, '', '&', PHP_QUERY_RFC3986);
            $result = $this->ApiHelper->put($endpoint, $data);
            session()->setFlashData('success', $result['messages']['success']);
            return redirect()->to(base_url($this->locale."/peneliti"));
        }
        
        $endpoint = "/api/list-survei-peneliti";
        $data_survei = $this->ApiHelper->get($endpoint, true);
        
        $data = [
            'data_survei' => $data_survei->data
        ];
        return view('peneliti/dashboard_peneliti', $data);
    }


    public function pilih_instrumen()
    {
        $data_instrument_survei = $this->ApiHelper->get('/api/list-instrument-survei', true);
        $data = [
            'data' => $data_instrument_survei->data
        ];
        return view('peneliti/pilih_instrumen', $data);
    }


    public function detail_instrumen()
    {
        if ($_POST) {
            $instrument = $this->request->getVar('instrument');
            $code_survei = $this->request->getVar('code_survei');

            $endpoint = "/api/create-survei?instrument=$instrument&code_survei=$code_survei";
            $data = [
                'start_date' => $this->request->getVar('start_date'),
                'end_date' => $this->request->getVar('end_date'),
                'language' => $this->request->getVar('language'),
            ];
            $result = $this->ApiHelper->post($endpoint, $data);
            session()->setFlashData('success', $result['messages']['success']);
            return redirect()->to(base_url("$this->locale/peneliti"));
         
        }
        $endpoint = "/api/detail-instrument-survei?instrument=".$this->request->getVar('instrument');
        $detail_instrument = $this->ApiHelper->get($endpoint, true);

        $endpoint_list_soal = "/api/en/list-pertanyaan?instrument=".$this->request->getVar('instrument');
        $list_soal = $this->ApiHelper->get($endpoint_list_soal, true);
        
        $data = [
            'data' => $detail_instrument->data,
            'data_soal' => $list_soal->data->data_pertanyaan
        ];
        
        return view('peneliti/detail_instrumen', $data);
    }


    public function daftar_responden_survei()
    {
        $instrument = $this->request->getVar('instrument');
        $code_survei = $this->request->getVar('code_survei');
        $endpoint = "/api/detail-survei-peneliti?instrument=$instrument&code_survei=$code_survei";
        $respondent_by_survei = $this->ApiHelper->get($endpoint, true);
        $data = [
            'data' => $respondent_by_survei->data
        ];
        
        return view('peneliti/daftar_responden_survei', $data);
    }
    
    
    public function detail_responden_survei()
    {
        $instrument = $this->request->getVar('instrument');
        $user = $this->request->getVar('user');
        $take_on = $this->request->getVar('take_on');
        $take_on = str_replace(" ","%20",$take_on);
        $code_survei = $this->request->getVar('code_survei');
        $endpoint = "/api/detail-respondents-survei-peneliti?instrument=$instrument&user=$user&take_on=$take_on&code_survei=$code_survei";
        $result = $this->ApiHelper->get($endpoint, true);
        $data = [
            'data' => $result->data
        ];
        return view('peneliti/detail_survei_responden.php', $data);
        
    }

    public function delete_survey()
    {
        $code_survei = $this->request->getVar('code_survei');
        $endpoint = "/api/delete-survey?code_survei=$code_survei";
        $result = $this->ApiHelper->delete($endpoint);
        if($result['status'] == 200){
            session()->setFlashData('success', $result['messages']['success']);
            return redirect()->to(base_url("$this->locale/peneliti"));
         
        }else{
            session()->setFlashData('error', $result['messages']['error']);
            return redirect()->to(base_url("$this->locale/peneliti"));
        }
    }
}
