<?php

class UsersModel {

    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUserData()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getUsers()
    {
        $this->db->query('SELECT 

        users.id, 
        users.username,
        users.idKab,        
        kabupaten.id as idKab,
        kabupaten.nama
        
        FROM users 
        INNER JOIN kabupaten on users.idKab = kabupaten.id');

        return $this->db->resultSet();
    }

    public function getUserById()
    {
        $id = $_SESSION['id'];

        $this->db->query('SELECT * FROM '.$this->table.' WHERE id = :id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function getUserProfil($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id = :id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function addUser($data)
    {
 
        $query = "INSERT INTO users VALUES (
            '', 
            :username, 
            :password, 
            :level,
            :idKab, 
            CURRENT_TIMESTAMP
            )";
            
        $this->db->query($query);
        
        $key = "12345678";
        $pass = password_hash($key, PASSWORD_DEFAULT);
        $level = 2;
        
        $this->db->bind('username', $data['username']);
        $this->db->bind('idKab', $data['idKab']);
        $this->db->bind('password', $pass);
        $this->db->bind('level', $level);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // For login

    public function getUserByUsername($data)
    {
        $query = "SELECT * FROM ".$this->table." WHERE username = :username";
        
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        
        return $this->db->single();
        
        return $this->db->rowCount();
        
    }

    // edit daerah user
    public function ubahDataDaerahUser($data)
    {

        $query = "UPDATE users SET idKab = :idKab WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('idKab', $data['idKab']);
        $this->db->execute();
        
        return $this->db->rowCount();

    }

    // Edit Password by user
    public function editPassword($data)
    {
        $query = "UPDATE users SET password = :password WHERE id = :id";
        
        // Encrypt new password
        $pass = password_hash($data['passwordBaru'], PASSWORD_DEFAULT);
            
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('password', $pass);
        $this->db->execute();
        
        return $this->db->rowCount();
        
    }

}