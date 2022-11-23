<?php
$model = new UserFlight();
$data_booking = $model->dataBooking();
?>

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
    <div class="container py-5">
        <h2>Transaksi</h2>
    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Pricing Section ======= -->
<section id="transactions" class="transactions">
    <div class="container" data-aos="fade-up">

        <!-- Jika user yang login sebagai Admin -->
        <a class="btn btn-primary btn-sm mb-3" href="" role="button" title="Tambah Data">
            Tambah Data
        </a>

        <table class="table table-bordered table-hover" id="myTable">
            <thead class="bg-dark text-light">
                <tr>
                    <th>#</th>
                    <th>No. Penerbangan</th>
                    <th>Nama</th>
                    <th>No. Telp</th>
                    <th>Kode Pesawat</th>
                    <th>Tipe Pesawat</th>
                    <th>Tempat Duduk</th>
                    <th>Keberangkatan</th>
                    <th>Tujuan Penerbangan</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data_booking as $row) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['flight_no'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['code'] ?></td>
                        <td><?= $row['type'] ?></td>
                        <td><?= $row['seat'] ?></td>
                        <td><?= $row['arrival'] ?></td>
                        <td><?= $row['departure'] ?></td>
                        <td><?= $row['date'] ?></td>
                        <td><?= $row['time'] ?></td>
                    </tr>

                    <?php } ?>

            </tbody>
        </table>

    </div>
</section><!-- End Pricing Section -->