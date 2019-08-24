<?php

class Komoditas extends controller {

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
        $data['title'] = "Komoditas";
        $data['statuskom'] = "active";
        $data['laporan'] = $this->model('LaporanModel')->getLaporanGrafik();

        $this->view('layout/header', $data);
        $this->view('komoditas/index', $data);
        $this->view('layout/footer');
    }

    public function getLaporanGrafik()
    {
        $token = $_POST['token'];
        $data['title'] = "Komoditas";
        $data['statuskom'] = "active";
        $data['choice'] = $this->model('LaporanModel')->getLaporanGrafik();

        $data['laporan'] = $this->model('LaporanModel')->getLaporanGrafikByToken($token);
        $data['komoditas'] = $this->model('KomoditasModel')->getKomoditasByToken($token);
        $this->view('layout/header', $data);
        $this->view('komoditas/grafik', $data);
        $this->view('layout/footer');
    }

    

    public function getall()
    {
        $data['title'] = "Komoditas";
        $data['statuskom'] = "active";
        $data['komoditas'] = $this->model('KomoditasModel')->getKomoditas();
        $data['kab'] = $this->model('KabupatenModel')->getKabupaten();

        $this->view('layout/header', $data);
        $this->view('komoditas/all', $data);
        $this->view('layout/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Komoditas";
        $data['statuskom'] = "active";
        $data['komoditas'] = $this->model('KomoditasModel')->getKomoditasByKabId($id);
        $data['kab'] = $this->model('KabupatenModel')->getDataKabById($id);

        $this->view('layout/header', $data);
        $this->view('komoditas/detail', $data);
        $this->view('layout/footer');
    }

    public function addLaporan()
    {
        if($this->model('LaporanModel')->createLaporan($_POST) > 0){
                
            Flasher::setFlash('data berhasil', 'ditambahkan', 'success');
            header('Location: '.BASE_URL.'/Home');
            exit();

        } else {
            Flasher::setFlash('data gagal', 'ditambahkan', 'danger');
            header('Location: '.BASE_URL.'/Home');
            exit();
        }
    }

    public function editKomoditas()
    {
        $token = $_POST['token'];
        if($this->model('KomoditasModel')->ubahDataKomoditas($_POST) > 0){
                
            Flasher::setFlash('data berhasil', 'diubah', 'success');
            header('Location: '.BASE_URL.'/Komoditas/edit/'.$token);
            exit();

        } else {
            Flasher::setFlash('data gagal', 'diubah', 'danger');
            header('Location: '.BASE_URL.'/Komoditas/edit/'.$token);
            exit();
        }
    }

    public function edit($token)
    {

        $data['title'] = "Komoditas";
        $data['statuskom'] = "active";
        $data['laporan'] = $this->model('LaporanModel')->getLaporanKomoditas($token);
        $data['komoditas'] = $this->model('KomoditasModel')->getKomoditasByToken($token);

        $this->view('layout/header', $data);
        $this->view('komoditas/edit', $data);
        $this->view('layout/footer');
        

    }
    
}