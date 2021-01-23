
<!-- Portfolio Modals -->



  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
 
<?php

$connection = mysqli_connect('localhost','root','','epsikolog');
$query = "SELECT * FROM posting WHERE id='1';";
$query_run = mysqli_query($connection,$query);

foreach($query_run as $data){
?>
 
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $data['title'];?></h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-leaf"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/a1.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"><?php echo $data['description'];?></p>
<?php
}
?>
                
                
                <a href="commentsection.php?id=<?php echo $data['id']?>"><button type="submit" name="lihat" class="btn btn-primary"> Lihat Komentar</button></a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->

<?php

$query = "SELECT * FROM posting WHERE id='2';";
$query_run = mysqli_query($connection,$query);

foreach($query_run as $data){
?>

                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $data['title'];?></h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-leaf"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/a2.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"><?php echo $data['description'];?></p>
<?php
}
?>
                <a href="commentsection.php?id=<?php echo $data['id']?>"><button type="submit" name="lihat" class="btn btn-primary"> Lihat Komentar</button></a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->

<?php

$query = "SELECT * FROM posting WHERE id='3';";
$query_run = mysqli_query($connection,$query);

foreach($query_run as $data){
?>

                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $data['title'];?></h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-leaf"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/a3.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"><?php echo $data['description'];?></p>
<?php
}
?>
                <a href="commentsection.php?id=<?php echo $data['id']?>"><button type="submit" name="lihat" class="btn btn-primary"> Lihat Komentar</button></a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
   <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModa4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->

<?php

$query = "SELECT * FROM posting WHERE id='4';";
$query_run = mysqli_query($connection,$query);

foreach($query_run as $data){
?>

                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $data['title'];?></h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-leaf"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/a4.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"><?php echo $data['description'];?></p>
<?php
}
?>
                <a href="commentsection.php?id=<?php echo $data['id']?>"><button type="submit" name="lihat" class="btn btn-primary"> Lihat Komentar</button></a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->

<?php

$query = "SELECT * FROM posting WHERE id='5';";
$query_run = mysqli_query($connection,$query);

foreach($query_run as $data){
?>

                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $data['title'];?></h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-leaf"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/a5.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"><?php echo $data['description'];?></p>
<?php
}
?>
                <a href="commentsection.php?id=<?php echo $data['id']?>"><button type="submit" name="lihat" class="btn btn-primary"> Lihat Komentar</button></a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->

<?php

$query = "SELECT * FROM posting WHERE id='6';";
$query_run = mysqli_query($connection,$query);

foreach($query_run as $data){
?>

                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $data['title'];?></h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-leaf"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/a6.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"><?php echo $data['description'];?></p>
<?php
}
?>
                <a href="commentsection.php?id=<?php echo $data['id']?>"><button type="submit" name="lihat" class="btn btn-primary"> Lihat Komentar</button></a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>