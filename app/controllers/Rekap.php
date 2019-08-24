<?php

class Rekap extends controller {

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
        $data['title'] = "Rekapitulasi Data";
        $data['statusrekap'] = "active";
        $data['rekap'] = $this->model('RekapModel')->getRekap();

        $this->view('layout/header', $data);
        $this->view('rekap/index', $data);
        $this->view('layout/footer');
    }
// tambahDataRekap
    public function addRekap() {

        if($this->model('RekapModel')->getTahunPeriode($_POST) > 0)
        {
            
            Flasher::setFlash('rekap', ' sudah ada', 'danger');
            header('Location: '.BASE_URL.'/Rekap');
            exit();

        } else {
            
            if($this->model('RekapModel')->tambahDataRekap($_POST) > 0){

                Flasher::setFlash('berhasil', ' ditambah', 'success');
                header('Location: '.BASE_URL.'/Rekap');
                exit();

            } else {

                Flasher::setFlash('gagal', ' ditambah', 'danger');
                header('Location: '.BASE_URL.'/Rekap');
                exit();

            }
        
        }
    }

    public function formLaporan($id)
    {
        $data['title'] = "Buat Laporan";
        
        $data['rekap'] = $this->model('RekapModel')->getRekapById($id);
        
        $this->view('layout/header', $data);
        $this->view('form/index', $data);
        $this->view('layout/footer');

    }

    public function detailRekap() {

        $data['title'] = "Rekapitulasi Data";
        $data['statusrekap'] = "active";
        $data['kab'] = $this->model('KabupatenModel')->getKabupaten();
        
        $this->view('layout/header', $data);
        $this->view('rekap/detail', $data);
        $this->view('layout/footer');

    }
    
}