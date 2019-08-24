<?php

class Auth extends Controller {
    
    public function index()
    {
        
        if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) 
        {
            $this->view('auth/login');
            exit;
        }

        header('Location: '.BASE_URL.'/Home');
        exit;
    }

    public function validate()
    {
        
        if($this->model('UsersModel')->getUserByUsername($_POST) > 0)
        {
            
            $data['user'] =  $this->model('UsersModel')->getUserByUsername($_POST);
            
            if (password_verify($_POST["password"], $data["user"]["password"]))
            {
            
                $_SESSION["login"] = true;
                $_SESSION["id"] = $data["user"]["id"];
                $_SESSION["username"] = $data["user"]["username"];
                $_SESSION["level"] = $data["user"]["level"];
                $_SESSION["idKab"] = $data["user"]["idKab"];
                
                header('Location: '.BASE_URL.'/Home');
                exit();
                
            } 
            
            Flasher::setFlash('Password', 'Salah', 'danger');
            header('Location: '.BASE_URL.'/Auth');
            exit();
            
        } else {
            
            Flasher::setFlash('pengguna', 'tidak ditemukan', 'danger');
            header('Location: '.BASE_URL.'/Auth');
            exit();
        }
        
    }

    // Edit password by user
    public function editPassword()
    {
        // ambil password lama
        $data['user'] =  $this->model('UsersModel')->getUserById();
        
        // cek cocok password lama
        if (password_verify($_POST["passwordLama"], $data["user"]["password"])) {
            
            if($this->model('UsersModel')->editPassword($_POST) > 0){
                Flasher::setFlash('password user, berhasil', 'diubah', 'success');
                header('Location: '.BASE_URL.'/Users/password');
                exit();
            } else {
                Flasher::setFlash('password user, gagal', 'diubah', 'danger');
                header('Location: '.BASE_URL.'/Users/password');
                exit();
            }
            
        } else {
            Flasher::setFlash('password lama', 'salah', 'warning');
            header('Location: '.BASEURL.'/Users/password');
            exit();    
        }
        
    }
    
    public function logout()
    {
        $_SESSION = [];
        session_unset();
        session_destroy();
        header('Location: '.BASE_URL.'/Auth');
        exit;
    }
    

}