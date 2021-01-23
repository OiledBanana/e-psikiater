<?php
session_start();
include 'includes/header.php';
?>

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="fungsi/registercode.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                  <input type="hidden" name="profile_picture" class="form-control" required>
                </div>
                <button type="submit" name="anggota_btn" class="btn btn-primary btn-user btn-block">Daftar</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php
include 'includes/scripts.php';
?>