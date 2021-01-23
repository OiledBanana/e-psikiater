<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Kosultasi</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <?php

$query = "SELECT k.id FROM konsultasi k JOIN anggota a ON k.id_anggota = a.id  WHERE username = '".$_SESSION['username']."' ORDER BY id";
$query_run = mysqli_query($connection, $query);

$data = mysqli_num_rows($query_run);

echo '<h4> Konsultasi : ' . $data . '</h4>';
?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Diagnosa</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <?php

$query = " SELECT d.id FROM diagnosa d JOIN konsultasi k ON d.id_konsultasi = k.id JOIN anggota a ON k.id_anggota = a.id  WHERE username = '".$_SESSION['username']."' ORDER BY id";
$query_run = mysqli_query($connection, $query);

$data = mysqli_num_rows($query_run);

echo '<h4> Diagnosa : ' . $data . '</h4>';
?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Booking</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <?php

$query = "SELECT b.id FROM booking b JOIN anggota a ON b.id_anggota = a.id WHERE username = '".$_SESSION['username']."' ORDER BY id";
$query_run = mysqli_query($connection, $query);

$data = mysqli_num_rows($query_run);

echo '<h4> Booking : ' . $data . '</h4>';
?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Obat</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <?php

$query = "SELECT b.id FROM beli_obat b join diagnosa d ON b.id_diagnosa = d.id JOIN konsultasi k ON d.id_konsultasi = k.id JOIN anggota a ON k.id_anggota = a.id JOIN jenis_obat j ON b.id_obat = j.id WHERE username = '".$_SESSION['username']."' ORDER BY b.id";
$query_run = mysqli_query($connection, $query);

$data = mysqli_num_rows($query_run);

echo '<h4> Obat : ' . $data . '</h4>';
?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->








  <?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>