<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Obat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="fungsi/obatcode.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>ID Diagnosa</label>
                <input list="diagnosas" name="id_diagnosa" class="form-control" placeholder="Enter ID Diagnosa">
                <datalist id="diagnosas">
<?php

$diagnosas = "SELECT * FROM diagnosa";
$diagnosas_run = mysqli_query($connection,$diagnosas);

?>

                <?php
                foreach($diagnosas_run as $row){
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['diagnosa']; ?></option>
                <?php } ?>
                </datalist>
            </div>
            <div class="form-group">
                <label>ID Obat</label>
                <input list="obats" name="id_obat" class="form-control" placeholder="Enter ID Obat">
                <datalist id="obats">
<?php

$obats = "SELECT * FROM jenis_obat";
$obats_run = mysqli_query($connection,$obats);

?>

                <?php
                foreach($obats_run as $row){
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['nama_obat']; ?></option>
                <?php } ?>
                </datalist>
            </div>
            <div class="form-group">
                <label>Jumlah Kebutuhan</label>
                <input type="number" name="jumlah" class="form-control" placeholder="Enter Jumlah Kebutuhan">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="obatbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Obat
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Obat
            </button>
    </h6>
  </div>

  <div class="card-body">

    <?php
if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
    echo '<h4> ' . $_SESSION['success'] . ' </h4>';
    unset($_SESSION['success']);
}

if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    echo '<h4 class="bg-info"> ' . $_SESSION['status'] . ' </h4>';
    unset($_SESSION['status']);
}
?>

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
            <th>Butuh </th>
            <th>Total Harga </th>
            <th>Ubah </th>
            <th>Hapus </th>
          </tr>
        </thead>
        <tbody>
          <?php

$query = mysqli_query($connection, " SELECT b.id, d.id 'id_diagnosa', a.nama, j.id 'id_obat', j.nama_obat, j.harga_obat, b.jumlah 'butuh', SUM(b.jumlah*j.harga_obat) 'total' FROM beli_obat b join diagnosa d ON b.id_diagnosa = d.id JOIN konsultasi k ON d.id_konsultasi = k.id JOIN anggota a ON k.id_anggota = a.id JOIN jenis_obat j ON b.id_obat = j.id GROUP BY b.id; ");
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
            <td>
              <form action="obatedit.php" method="POST">
                <input type="hidden" name="edit_id" value="<?php echo $data['id']; ?>">
                <button type="submit" name="edit_btn" class="btn btn-success">Ubah</button>
              </form>
            </td>
            <td>
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
            <form action="fungsi/obatcode.php" method="post">
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