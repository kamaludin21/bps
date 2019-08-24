<?php

class Users extends Controller{

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
        $data['statuser'] = "active";
        $data['user'] = $this->model('UsersModel')->getUsers();
        $data['kab'] = $this->model('KabupatenModel')->getKabupaten();

        $this->view('layout/header', $data);
        $this->view('users/index', $data);
        $this->view('layout/footer');

    }

    public function addUsers()
    {
        if($this->model('UsersModel')->addUser($_POST) > 0) {
            Flasher::setFlash('pengguna berhasil', 'ditambahkan', 'success');
            header('Location: '.BASE_URL.'/Users');
            exit();
        } else {
            Flasher::setFlash('pengguna gagal', 'ditambahkan', 'danger');
            header('Location: '.BASE_URL.'/Users');
            exit();
        }
    }

    public function edit()
    {
        if($this->model('UsersModel')->ubahDataDaerahUser($_POST) > 0){
            Flasher::setFlash('daerah pengguna berhasil', 'diubah', 'success');
            header('Location: '.BASE_URL.'/Users');
            exit();
        }
        else {
            Flasher::setFlash('daerah pengguna gagal', 'diubah', 'danger');
            header('Location: '.BASE_URL.'/Users');
            exit();
        }
    }

    public function profil()
    {
        $data['title'] = "Profil User";
        $data['user'] = $this->model('UsersModel')->getUserById();
        $data['kab'] = $this->model('KabupatenModel')->getAllKab();

        $this->view('layout/header', $data);
        $this->view('users/profil', $data);
        $this->view('layout/footer');
    }


    public function editUser($id)
    {
        $data['title'] = "Edit User";
        $data['user'] = $this->model('UsersModel')->getUserProfil($id);
        $data['kab'] = $this->model('KabupatenModel')->getAllKab();

        $this->view('layout/header', $data);
        $this->view('users/edit', $data);
        $this->view('layout/footer');
    }


    public function password()
    {
        $data['title'] = "Manajemen Password";

        $this->view('layout/header', $data);
        $this->view('users/password');
        $this->view('layout/footer');
    }

}
