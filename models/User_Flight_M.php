<?php

class UserFlight
{
    // Variabel
    private $koneksi;
    public function __construct()
    {
        global $dbh; // Instance Object di Database.php
        $this->koneksi = $dbh;
    }

    // CRUD Method
    public function dataBooking()
    {
        $sql = "SELECT f.flight_no, u.name, u.phone, p.code, p.type, t.seat, f.arrival, f.departure, f.date, f.time FROM user_flights t
        INNER JOIN flights f ON f.id = t.flight_id
        INNER JOIN users u on u.id = t.user_id
        INNER JOIN planes p on p.id = f.plane_id
        ORDER BY t.id DESC";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getBooking($id)
    {
        $sql = "SELECT f.flight_no, u.name, u.phone, p.code, p.type, t.seat, f.arrival, f.departure, f.date, f.time FROM user_flights t
        INNER JOIN flights f ON f.id = t.flight_id
        INNER JOIN users u on u.id = t.user_id
        INNER JOIN planes p on p.id = f.plane_id
        WHERE t.id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
}
