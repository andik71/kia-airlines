<?php 
if (isset($_SESSION['ADMIN'])) {
    $sesi = $_SESSION['ADMIN'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>myTickets - Booking Tiket Pesawat</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- DATA TABLE JQUERY -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <!-- =======================================================
* Template Name: Mentor - v4.9.1
* Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">myTickets</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="<?php if ($_REQUEST && $_REQUEST['page'] == 'home') : ?>active<?php endif; ?>" href="index.php">Home</a></li>
                    <li><a class="<?php if ($_REQUEST && $_REQUEST['page'] == 'ticket') echo 'active' ?>" href="index.php?page=ticket">Buy Ticket</a></li>
                    <li><a class="<?php if ($_REQUEST && $_REQUEST['page'] == 'about') echo 'active' ?>" href="index.php?page=about">About</a></li>
                    <li><a class="<?php if ($_REQUEST && $_REQUEST['page'] == 'contact') echo 'active' ?>" href="index.php?page=contact">Contact</a></li>
                    <!-- Authentications -->
                    <?php
                    if (isset($sesi)) {
                    ?>
                        <li class="dropdown"><a href="#"><span>Master Data</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a class="<?php if ($_REQUEST && $_REQUEST['page'] == 'penerbangan') : ?>active<?php endif; ?>" href="index.php?page=penerbangan">Flights</a></li>
                                <li><a class="<?php if ($_REQUEST && $_REQUEST['page'] == 'maskapai') : ?>active<?php endif; ?>" href="index.php?page=maskapai">Planes</a></li>
                                <li><a class="<?php if ($_REQUEST && $_REQUEST['page'] == 'transaksi') : ?>active<?php endif; ?>" href="index.php?page=transaksi">Transaction</a></li>
                                <li><a href="index.php?page=logout">Log Out</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!-- Authentications -->
            <?php
            if (!isset($sesi)) {
            ?>
                <a href="index.php?page=login" class="get-started-btn">Login</a>
            <?php } else { ?>
                <a class="get-started-btn"><?= $sesi['fullname'] ?></a>
            <?php } ?>

        </div>
    </header><!-- End Header -->