<?php
$model = new UserFlight();
$data_booking = $model->dataBooking();
?>

<!-- ======= Login Section ======= -->
<section id="transactions" class="login bg-light" data-aos="fade-in">
  <div class="container py-5" data-aos="fade-up">

    <p class="text-muted small">
      Note: username and password <br>
      <b>admin - admin</b> or you can use <b>user - user</b>
    </p>

    <div class="container py-5 mt-5">
      <h2 class="text fw-bold">Please Login</h2>
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-7 col-lg-12 col-xl-12">
          <form method="POST" action="controllers/Admin.php">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" name="username" id="form1Example13" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example13">Username</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example23">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-success col-12 btn-block btn-lg">Login</button>

          </form>
        </div>
      </div>
    </div>


  </div>
</section><!-- End Login Section -->