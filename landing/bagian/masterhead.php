<!-- Masthead -->

<?php
      $connection = mysqli_connect('localhost','root','','epsikolog');
      $query = "SELECT * FROM hlm_utama";
      $query_run = mysqli_query($connection,$query);

      foreach($query_run as $data){
      ?>

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0"><?php echo $data['nama'];?></h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-leaf"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0 "><?php echo $data['deskripsi'];?></p>
<?php 
      }
      ?>
    </div>
  </header>