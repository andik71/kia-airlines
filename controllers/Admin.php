<?php
session_start();
include_once '../core/database.php';
include_once '../models/Admin_M.php';
//step 1 tangkap request form login
$username = $_POST['username'];
$password = $_POST['password'];

//step 2 simpan ke array
$data = [
    $username, // ? 1
    $password, // ? 2
];
//step 3 proses otentikasi user
$model = new Admin();
$rs = $model->cekLogin($data);
if(!empty($rs)){ //sukses login
    $_SESSION['ADMIN'] = $rs;
    //diarahkan ke suatu halaman
    header('Location:../index.php');
}
else{ //gagal login
    echo '<script>alert("User/Password Anda Salah!!!");history.back();</script>';
}