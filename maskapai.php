  <?php 
  $model = new Maskapai();
  $data_maskapai = $model->dataMaskapai();
  ?>
  
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
      <div class="container py-5">
          <h2>Maskapai</h2>
      </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Pricing Section ======= -->
  <section id="planes" class="planes">
      <div class="container" data-aos="fade-up">

      <table class="table table-bordered table-hover" id="myTable"> 
        <thead class="bg-dark text-light">
            <tr>
                <th>#</th>
                <th>Kode Pesawat</th>
                <th>Tipe Pesawat</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($data_maskapai as $row) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['code'] ?></td>
                <td><?= $row['type'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
      </table>

      </div>
  </section><!-- End Pricing Section -->
