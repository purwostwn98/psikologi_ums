<?php

namespace App\Controllers;

use App\Models\PertanyaanModels;

class Admin extends BaseController
{
    protected $pertanyaanModel;

    public function __construct()
    {
        $this->pertanyaanModel = new PertanyaanModels();
    }

    public function dashboard_adm()
    {
        return view('admin/dashboard_admin');
    }
    public function daftar_responden()
    {
        return view('admin/daftar_responden');
    }
    public function daftar_responden_2()
    {
        return view('admin/daftar_responden_2');
    }
    public function detail_responden()
    {
        return view('admin/detail_survei_responden');
    }
    public function data_instrumen()
    {
        return view('admin/data_instrumen');
    }
    public function detail_instrumen()
    {
        return view('admin/detail_instrumen');
    }
    public function data_pertanyaan()
    {
        return view('admin/data_pertanyaan');
    }
    public function tambah_instrumen()
    {
        return view('admin/tambah_instrumen');
    }
    public function manajemen_user()
    {
        return view('admin/tabel_user');
    }
}
