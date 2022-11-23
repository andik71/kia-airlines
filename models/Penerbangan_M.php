<?php 

class Penerbangan{
    // Variabel
    private $koneksi;
    public function __construct()
    {
        global $dbh; // Instance Object di Database.php
        $this->koneksi = $dbh;   
    }
    
    // CRUD Method
    public function dataPenerbangan()
    {
        $sql = "SELECT * FROM flights ORDER BY id DESC";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getPenerbangan($id){
        $sql = "SELECT * FROM flights WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetchAll();
        return $rs;
    }
}



