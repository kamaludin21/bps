
<?php

class LaporanModel {

    private $table = 'laporan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLaporan()
    {
        $this->db->query('SELECT 

        laporan.id as idLaporan, 
        laporan.idRekap, 
        laporan.idKab,
        laporan.token,
        laporan.createDate, 
        rekap.id,
        rekap.tahun,
        rekap.periode,
        kabupaten.id,
        kabupaten.nama

        FROM laporan
        INNER JOIN rekap on laporan.idRekap = rekap.id
        INNER JOIN kabupaten on laporan.idKab = kabupaten.id ORDER BY laporan.id DESC');

        return $this->db->resultSet();
    }

    public function getLaporanById($id)
    {
        $this->db->query('SELECT DISTINCT
        laporan.idRekap, 
        laporan.idKab, 
        laporan.token, 
        kabupaten.nama, 
        rekap.tahun, 
        rekap.periode
        from laporan
        INNER JOIN rekap on laporan.idRekap = rekap.id 
        INNER JOIN kabupaten on laporan.idKab = kabupaten.id 
        INNER JOIN komoditas on laporan.token = komoditas.token 
        WHERE idRekap = :id');

        $this->db->bind('id', $id);

        return $this->db->resultSet();

    }

    // for grafik
    public function getLaporanGrafik()
    {
        // $token = $_POST['token'];
        $this->db->query('SELECT DISTINCT
        laporan.idRekap, 
        laporan.idKab, 
        laporan.token, 
        kabupaten.nama, 
        rekap.tahun, 
        rekap.periode
        from laporan
        INNER JOIN rekap on laporan.idRekap = rekap.id 
        INNER JOIN kabupaten on laporan.idKab = kabupaten.id 
        INNER JOIN komoditas on laporan.token = komoditas.token');

        return $this->db->resultSet();

    }

    // for grafik 2
    public function getLaporanGrafikByToken()
    {
        $token = $_POST['token'];
        $this->db->query('SELECT
        laporan.idRekap, 
        laporan.idKab, 
        laporan.token, 
        kabupaten.nama, 
        rekap.tahun, 
        rekap.periode
        from laporan
        INNER JOIN rekap on laporan.idRekap = rekap.id 
        INNER JOIN kabupaten on laporan.idKab = kabupaten.id 
        INNER JOIN komoditas on laporan.token = komoditas.token WHERE laporan.token=:token');

        $this->db->bind('token', $token);

        return $this->db->single();

    }

    public function getKabLaporan()
    {
        $this->db->query('SELECT 
        laporan.id, 
        laporan.idKab, 
        kabupaten.nama 
        FROM laporan 
        INNER JOIN kabupaten ON laporan.idKab = kabupaten.id');

        return $this->db->resultSet();
    }

    public function getLaporanByKabUser()
    {
        $idkab = $_SESSION["idKab"];

        $this->db->query('SELECT 
        laporan.id, 
        laporan.idRekap, 
        laporan.idKab, 
        rekap.id,
        rekap.tahun,
        rekap.periode,
        kabupaten.id,
        kabupaten.nama
        FROM laporan 
        INNER JOIN rekap on laporan.idRekap = rekap.id
        INNER JOIN kabupaten on laporan.idKab = kabupaten.id WHERE laporan.idKab=:id ORDER BY laporan.id DESC');
        $this->db->bind('id', $idkab);

        return $this->db->resultSet();
    }

    public function getLaporanByKab()
    {
        $id = $_SESSION['idKab'];
        
        $this->db->query('SELECT 
        laporan.id, 
        laporan.idRekap, 
        laporan.idKab,
        laporan.token, 
        rekap.id,
        rekap.tahun,
        rekap.periode,
        kabupaten.id,
        kabupaten.nama
        FROM laporan 
        INNER JOIN rekap on laporan.idRekap = rekap.id
        INNER JOIN kabupaten on laporan.idKab = kabupaten.id WHERE laporan.idKab=:id ORDER BY laporan.id DESC');
        
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    // single result
    public function getLaporanKomoditas($token)
    {
        $this->db->query('SELECT 
        laporan.id, 
        laporan.idRekap, 
        laporan.idKab,
        laporan.token, 
        rekap.id,
        rekap.tahun,
        rekap.periode,
        kabupaten.id,
        kabupaten.nama,
        komoditas.id,
        komoditas.token,
        komoditas.komoditas,
        komoditas.item1,
        komoditas.item2,
        komoditas.item3,
        komoditas.item4,
        komoditas.item5,
        komoditas.item6,
        komoditas.item7,
        komoditas.item8,
        komoditas.item9
        FROM laporan 
        INNER JOIN rekap on laporan.idRekap = rekap.id
        INNER JOIN kabupaten on laporan.idKab = kabupaten.id
        INNER JOIN komoditas on laporan.token = komoditas.token
        WHERE laporan.token=:token');

        $this->db->bind('token', $token);
        return $this->db->single();

    }

    // create data laporan + komoditas with 1 same token
    public function createLaporan($data)
    {
        $query = "INSERT INTO laporan VALUES (
            '',
            :idRekap,
            :idKab,
            :token,
            CURRENT_TIMESTAMP
            )";
 
        $this->db->query($query);
        $this->db->bind('idRekap', $data['idRekap']);
        $this->db->bind('idKab', $data['idKab']);
        $this->db->bind('token', $data['token']);
        $this->db->execute();

        // tambah komoditas
        $token = $data['token'];
        $komoditas = $data['komoditas'];
        $item1 = $data['item1'];
        $item2 = $data['item2'];
        $item3 = $data['item3'];
        $item4 = $data['item4'];
        $item5 = $data['item5'];
        $item6 = $data['item6'];
        $item7 = $data['item7'];
        $item8 = $data['item8'];
        $item9 = $data['item9'];
        $idKab = $data['idKab'];

        $i = count($komoditas);
        
        for( $x=0; $x < $i; $x++ ) {
        
            $x.$query = "INSERT INTO komoditas VALUES (
                '',
                '$token', 
                '$komoditas[$x]',
                '$item1[$x]',
                '$item2[$x]',
                '$item3[$x]',
                '$item4[$x]',
                '$item5[$x]',
                '$item6[$x]',
                '$item7[$x]',
                '$item8[$x]',
                '$item9[$x]',
                '$idKab'
                )";
                
            $this->db->query($query);
            $this->db->execute();
        }
        return $this->db->rowCount();
    }
}