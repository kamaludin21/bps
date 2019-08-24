<?php

class KomoditasModel {
    
    private $table = 'komoditas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKomoditas()
    {
        $this->db->query('SELECT DISTINCT komoditas FROM komoditas');
        return $this->db->resultSet();
    }

    // Row result
    public function getKomoditasByKabId($id)
    {
    
        $this->db->query('SELECT DISTINCT
        komoditas.komoditas, 
        kabupaten.nama
        from komoditas
        INNER JOIN kabupaten on komoditas.idKab = kabupaten.id 
       WHERE idKab = :id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
        return $this->db->single();

    }

    public function getKomoditasByToken($token) 
    {
        $this->db->query('SELECT * FROM komoditas WHERE token=:token');
        $this->db->bind('token', $token);
        return $this->db->resultSet();

    }

    public function ubahDataKomoditas($data) 
    {
        $query = "UPDATE komoditas SET 
            
        komoditas = :komoditas,
        item1 = :item1,
        item2 = :item2,
        item3 = :item3,
        item4 = :item4,
        item5 = :item5,
        item6 = :item6,
        item7 = :item7,
        item8 = :item8,
        item9 = :item9
        
        WHERE 
        
        id = :id";

        $this->db->query($query);

        $this->db->bind('id', $data['id']);
        $this->db->bind('komoditas', $data['komoditas']);
        $this->db->bind('item1', $data['item1']);
        $this->db->bind('item2', $data['item2']);
        $this->db->bind('item3', $data['item3']);
        $this->db->bind('item4', $data['item4']);
        $this->db->bind('item5', $data['item5']);
        $this->db->bind('item6', $data['item6']);
        $this->db->bind('item7', $data['item7']);
        $this->db->bind('item8', $data['item8']);
        $this->db->bind('item9', $data['item9']);

        $this->db->execute();

        return $this->db->rowCount();

    }

}