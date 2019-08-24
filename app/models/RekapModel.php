<?php

class RekapModel {
    
    private $table = 'rekap';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getRekap()
    {
        $this->db->query('SELECT * FROM '.$this->table.' ORDER BY id DESC');
        return $this->db->resultSet();
    }

    /* UPDATE
    * GET REKAP AND COUNT DAERAH 
    *
    */

    public function getRekapAndKab()
    {
        $query = "SELECT rekap.id as id_rekap, rekap.tahun as tahun, rekap.periode as periode, COUNT(laporan.idKab) as jumlah_kab FROM rekap LEFT OUTER JOIN laporan ON rekap.id = laporan.idRekap LEFT OUTER JOIN kabupaten ON laporan.idKab = kabupaten.id GROUP BY rekap.id ORDER BY rekap.id DESC";
        $this->db->query($query);
        return $this->db->resultSet();

    }

    public function getRekapById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getRekapByLaporan()
    {
        $idkab = $_SESSION["idKab"];

        $query = "SELECT * FROM rekap WHERE NOT EXISTS (SELECT * FROM laporan WHERE laporan.idRekap = rekap.id and idKab = $idkab) ORDER BY id DESC";
        $this->db->query($query);
        return $this->db->resultSet();

    }

    public function getTahunPeriode($data)
    {
        $query = "SELECT * FROM ".$this->table." WHERE tahun = :tahun AND periode = :periode";
        
        $this->db->query($query);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('periode', $data['periode']);
        $this->db->execute();
    
        return $this->db->rowCount();

    }

    public function tambahDataRekap($data)
    {
        $query = "INSERT INTO rekap VALUES (
            '',
            :tahun,
            :periode, 
            CURRENT_TIMESTAMP
            )";
 
        $this->db->query($query);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('periode', $data['periode']);
        $this->db->execute();

        return $this->db->rowCount();

    }


}