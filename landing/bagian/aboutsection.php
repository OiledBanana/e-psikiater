 <!-- About Section -->
 <section class="page-section bg-primary text-white mb-0" id="layanan">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">Layanan</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-leaf"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <?php

      $connection = mysqli_connect('localhost','root','','epsikolog');
      $query = "SELECT * FROM layanan WHERE id='1';";
      $query_run = mysqli_query($connection,$query);

      foreach($query_run as $data){
      ?>


    <div class="row">
      <div class="col-lg-6">
        <p class="lead"><a href="../user/konsultasi.php" class="text-white"><b><?php echo $data['nama'];?></b></a></p>
        <p class="masthead-subheading font-weight-light mb-0"><?php echo $data['deskripsi'];?></p>
      </div>

      <?php
        }
      ?>

      <?php

      $connection = mysqli_connect('localhost','root','','epsikolog');
      $query = "SELECT * FROM layanan WHERE id='2';";
      $query_run = mysqli_query($connection,$query);

      foreach($query_run as $data){
      ?>

      <div class="col-lg-6">
        <p class="lead"><a href="../user/booking.php" class="text-white"><b><?php echo $data['nama'];?></b></a></p>
        <p class="masthead-subheading font-weight-light mb-0"> <?php echo $data['deskripsi'];?></p>
      </div>
        
        <?php
        }
      ?>
        


  </section>