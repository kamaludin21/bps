<?php

class KabupatenModel {
    
    private $table = 'kabupaten';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKab()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getKabupaten()
    {
        $query = "SELECT kabupaten.id, kabupaten.nama, COUNT(users.username) as jumlah_user FROM kabupaten LEFT OUTER JOIN users ON kabupaten.id = users.idKab GROUP BY nama";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    
    public function countKabupaten()
    {
        $this->db->query('SELECT COUNT(id) FROM '.$this->table);
        return $this->db->single();
    }

    public function getDataKabById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getKabupatenById()
    {
        $id = $_SESSION['idKab'];
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getKabUser()
    {
        $id = $_SESSION["idKab"];
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();

    }

    public function tambahDataKab($data)
    {
        $query = "INSERT INTO kabupaten VALUES (
            '', 
            :nama,
            CURRENT_TIMESTAMP
            )";
 
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();

        return $this->db->rowCount();

    }

    

    public function editDataKab($data)
    {
        $query = "UPDATE kabupaten SET nama = :nama WHERE id = :id";
 
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();

        return $this->db->rowCount();

    }

    

}