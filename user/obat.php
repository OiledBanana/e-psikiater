<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Obat
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NO </th>
            <th>ID Diagnosa </th>
            <th>Nama </th>
            <th>ID Obat </th>
            <th>Nama Obat </th>
            <th>Harga Obat </th>
            <th>Jumlah Kebutuhan </th>
            <th>Total Harga </th>
          </tr>
        </thead>
        <tbody>
          <?php

$query = mysqli_query($connection, " SELECT b.id, CONCAT('D-EP-',d.id) 'id_diagnosa', a.nama, CONCAT('O-EP-',j.id) 'id_obat', j.nama_obat, j.harga_obat, b.jumlah 'butuh', SUM(b.jumlah*j.harga_obat) 'total' FROM beli_obat b join diagnosa d ON b.id_diagnosa = d.id JOIN konsultasi k ON d.id_konsultasi = k.id JOIN anggota a ON k.id_anggota = a.id JOIN jenis_obat j ON b.id_obat = j.id WHERE username = '".$_SESSION['username']."' GROUP BY b.id ;  ");
$no = 1;
while ($data = mysqli_fetch_array($query)) {
    ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data["id_diagnosa"]; ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["id_obat"]; ?></td>
            <td><?php echo $data["nama_obat"]; ?></td>
            <td><?php echo $data["harga_obat"]; ?></td>
            <td><?php echo $data["butuh"]; ?></td>
            <td><?php echo $data["total"]; ?></td>
          </tr>
          <?php
$no++;
}
?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>