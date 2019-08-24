<?php

class Laporan extends controller {

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

        // For percentage
        $data['kab'] = $this->model('KabupatenModel')->countKabupaten();
         
        $data['title'] = "Laporan";
        $data['statuslap'] = "active";
        $data['rekap'] = $this->model('RekapModel')->getRekapAndKab();

        $this->view('layout/header', $data);
        $this->view('laporan/index', $data);
        $this->view('layout/footer');
        
        } if ($_SESSION['level'] == '2') {
        
        $data['title'] = "Laporan";
        $data['statuslap'] = "active";

        $data['kab'] =  $this->model('KabupatenModel')->getKabupatenById();
        $data['laporan'] = $this->model('LaporanModel')->getLaporanByKab();

        $this->view('layout/header', $data);
        $this->view('laporan/daerah', $data);
        $this->view('layout/footer');

        } 
    }

    public function detail($id)
    {
        $data['title'] = "Laporan";
        $data['statuslap'] = "active";
        $data['laporan'] = $this->model('LaporanModel')->getLaporanById($id);

        $this->view('layout/header', $data);
        $this->view('laporan/detail', $data);
        $this->view('layout/footer');
    }

    public function komoditas($token)
    {
        $data['title'] = "Laporan";
        $data['statuslap'] = "active";
        $data['laporan'] = $this->model('LaporanModel')->getLaporanKomoditas($token);
        $data['komoditas'] = $this->model('KomoditasModel')->getKomoditasByToken($token);

        $this->view('layout/header', $data);
        $this->view('laporan/komoditas', $data);
        $this->view('layout/footer');
    }

    public function cetak($token)
    {
        
        $data['laporan'] = $this->model('LaporanModel')->getLaporanKomoditas($token);
        $data['komoditas'] = $this->model('KomoditasModel')->getKomoditasByToken($token);

        $this->view('laporan/cetak', $data);


    }

    public function formLaporan($id)
    {
        $data['title'] = "Buat Laporan";
        
        $data['rekap'] = $this->model('RekapModel')->getRekapById($id);
        
        $this->view('layout/header', $data);
        $this->view('laporan/form', $data);
        $this->view('layout/footer');

    }

    public function addLaporan()
    {
        if($this->model('LaporanModel')->createLaporan($_POST) > 0){
                
            Flasher::setFlash('laporan berhasil', 'ditambahkan', 'success');
            header('Location: '.BASE_URL.'/Home');
            exit();

        } else {
            Flasher::setFlash('laporan gagal', 'ditambahkan', 'danger');
            header('Location: '.BASE_URL.'/Home');
            exit();
        }
    }
    
}