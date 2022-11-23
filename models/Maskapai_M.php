<?php 

class Maskapai{
    // Variabel
    private $koneksi;
    public function __construct()
    {
        global $dbh; // Instance Object di Database.php
        $this->koneksi = $dbh;   
    }
    
    // CRUD Method
    public function dataMaskapai()
    {
        $sql = "SELECT * FROM planes ORDER BY id DESC";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getMaskapai($id){
        $sql = "SELECT * FROM planes WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetchAll();
        return $rs;
    }
}



