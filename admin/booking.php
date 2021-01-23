<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>




<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="fungsi/bookingcode.php" method="POST">

        <div class="modal-body">

          <div class="form-group">
                <label>ID Anggota</label>
                <input list="anggotas" name="id_anggota" class="form-control" placeholder="Enter ID Anggota">
                <datalist id="anggotas">
<?php

$anggotas = "SELECT * FROM anggota";
$anggotas_run = mysqli_query($connection,$anggotas);

?>

                <?php
                foreach($anggotas_run as $row){
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></option>
                <?php } ?>
                </datalist>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Enter Nama">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Enter Alamat">
            </div>
<?php

$rs = "SELECT * FROM rs";
$rs_run = mysqli_query($connection,$rs);

?>

            <div class="form-group">
                <label>Rumah Sakit</label>
                <select name="rs" id="" class="form-control">
                <option value="">Pilih Rumah Sakit</option>
                <?php
                foreach($rs_run as $row){
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></option>
                <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="datetime-local" name="tanggal" class="form-control">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="bookingbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>




<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Booking</h1>
        <form class="form-inline" target="_blank" method="post" action="bookingcetak.php">
              <button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Data</button>
        </form>
  </div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Booking
            </button>
<?php
if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h4> ' . $_SESSION['success'] . ' </h4>';
        unset($_SESSION['success']);
    }

    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h4 class="bg-danger"> ' . $_SESSION['status'] . ' </h4>';
        unset($_SESSION['status']);
    }
?>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NO </th>
            <th>Nama </th>
            <th>Alamat </th>
            <th>Rumah Sakit </th>
            <th>Tanggal </th>
            <th>Ubah </th>
            <th>Hapus </th>
          </tr>
        </thead>
        <tbody>
          <?php

$query = mysqli_query($connection, " SELECT b.id, b.id_rs 'id_rs', b.nama 'nama_orang', b.alamat, r.nama 'rs', b.tanggal FROM anggota a JOIN booking b ON a.id = b.id_anggota JOIN rs r on b.id_rs = r.id; ");
$no = 1;
while ($data = mysqli_fetch_array($query)) {
    ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data["nama_orang"]; ?></td>
            <td><?php echo $data["alamat"]; ?></td>
            <td><?php echo $data["rs"]; ?></td>
            <td><?php echo $data["tanggal"]; ?></td>
            <td>
              <form action="bookingedit.php" method="POST">
                <input type="hidden" name="edit_id" value="<?php echo $data['id']; ?>">
                <button type="submit" name="edit_btn" class="btn btn-success">Ubah</button>
              </form>
            </td>
            <td>
            <form action="fungsi/bookingcode.php" method="post">
            <input type="hidden" name="delete_id" value="<?php echo $data['id']; ?>">
            <button type="submit" name="delete_btn" class="btn btn-danger">Hapus</button>
            </form>
            </td>
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