<?php

class Home extends Controller{

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

        // admin
        if ($_SESSION['level'] == '1')
        {
            $data['title'] = "Beranda";
            $data['home'] = "active";
            $data['laporan'] = $this->model('LaporanModel')->getLaporan();
        
            $this->view('layout/header', $data);
            $this->view('home/index', $data);
            $this->view('layout/footer');
            exit();

        // kab user
        } if ($_SESSION['level'] == '2') {

            $data['title'] = "Beranda";
            $data['home'] = "active";
            $data['laporan'] = $this->model('RekapModel')->getRekapByLaporan();
            $data['kab'] = $this->model('KabupatenModel')->getKabUser();
            
            $this->view('layout/header', $data);
            $this->view('home/daerah', $data);
            $this->view('layout/footer');
            exit();
        }

    }


}