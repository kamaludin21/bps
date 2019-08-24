<?php

class Daerah extends Controller{

    public function __construct() 
    {
        if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) 
        {
            header('Location: '.BASE_URL.'/Auth');
            exit;
        }
    }
    
    public function index()
    {

        $data['title'] = "Data Daerah";
        $data['statuskab'] = "active";
        $data['kab'] = $this->model('KabupatenModel')->getKabupaten();

        $this->view('layout/header', $data);
        $this->view('kabupaten/index', $data);
        $this->view('layout/footer');

    }

    public function detail($id)
    {
        $data['title'] = "Data Daerah";
        $data['statuskab'] = "active";
        $data['kab'] = $this->model('KabupatenModel')->getDataKabById($id);

        $this->view('layout/header', $data);
        $this->view('kabupaten/detail', $data);
        $this->view('layout/footer');;

    }

    public function addKab()
    {
        if($this->model('KabupatenModel')->tambahDataKab($_POST) > 0){
                
            Flasher::setFlash('daerah berhasil', 'ditambahkan', 'success');
            header('Location: '.BASE_URL.'/Daerah');
            exit();

        } else {
            Flasher::setFlash('daerah gagal', 'ditambahkan', 'danger');
            header('Location: '.BASE_URL.'/Daerah');
            exit();
        }
    }

    public function edit()
    {
        if($this->model('KabupatenModel')->editDataKab($_POST) > 0){
                
            Flasher::setFlash('daerah berhasil', 'diubah', 'success');
            header('Location: '.BASE_URL.'/Daerah');
            exit();

        } else {
            Flasher::setFlash('daerah gagal', 'diubah', 'danger');
            header('Location: '.BASE_URL.'/Daerah');
            exit();
        }
    }

    public function komoditas($token) 
    {

        $data['laporan'] = $this->model('LaporanModel')->getLaporanKomoditas($token);
        $data['komoditas'] = $this->model('LaporanModel')->getKomoditasByToken($token);
        $data['title'] = "data kabupaten";
        $data['statuskab'] = "active";
        
        $this->view('layout/header', $data);
        $this->view('kabupaten/komoditas', $data);
        $this->view('layout/footer');
    }



}