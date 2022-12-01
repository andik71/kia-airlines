<?php 
  $model = new Penerbangan();
  $data_penerbangan = $model->dataPenerbangan();
  ?>
  
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
      <div class="container py-5">
          <h2>Penerbangan</h2>
      </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Pricing Section ======= -->
  <section id="flights" class="flights">
      <div class="container" data-aos="fade-up">

      <table class="table table-bordered table-hover data" id="myTable"> 
        <thead class="bg-dark text-light">
            <tr>
                <th>#</th>
                <th>No. Penerbangan</th>
                <th>No. Pesawat</th>
                <th>Tujuan Penerbangan</th>
                <th>Keberangkatan</th>
                <th>Tanggal</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($data_penerbangan as $row) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['flight_no'] ?></td>
                <td><?= $row['plane_id'] ?></td>
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