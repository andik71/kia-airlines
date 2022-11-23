<?php
session_start(); //memulai session
// Koneksi Database
include_once 'core/database.php';
// Models
include_once 'models/Maskapai_M.php';
include_once 'models/Penerbangan_M.php';
include_once 'models/User_Flight_M.php';
// Routing
include_once 'header.php'; // Template Start

if ($_REQUEST) {
    if (isset($_REQUEST['page'])) {
        $page = $_REQUEST['page'];
        // Jika ada request dari nav di URL maka ditampilkan $page sesuai halaman
        if (!empty($page)) {
            include_once $page . '.php';
        } else {
            // Jika tidak ada request dari nav URL maka halaman yang ditampilkan adalah home.php
            include_once 'home.php';
        }
    }
} else {
    // Jika tidak ada request dari nav URL maka halaman yang ditampilkan adalah home.php
    $page = 'home';
    include_once $page .'.php';
}

include_once 'footer.php'; // End Template