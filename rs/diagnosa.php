<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Diagnosa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="fungsi/diagnosacode.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>ID Konsultasi</label>
                <input list="anggotas" name="id_konsultasi" class="form-control" placeholder="Enter ID Konsultasi">
                <datalist id="anggotas">
<?php

$anggotas = "SELECT k.id, k.id_anggota, a.nama 'nama', k.keluhan FROM konsultasi k JOIN anggota a ON k.id_anggota = a.id;";
$anggotas_run = mysqli_query($connection,$anggotas);

?>

                <?php
                foreach($anggotas_run as $row){
                ?>
                <option value="<?php echo $row['id']." "; ?>"><?php echo $row['nama']." | "; ?><?php echo $row['keluhan']; ?></option>
                <?php } ?>
                </datalist>
            </div>
            <div class="form-group">
                <label>Diagnosa</label>
                <input type="text" name="diagnosa" class="form-control" placeholder="Enter Diagnosa">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="diagnosabtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Diagnosa
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Diagnosa
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
            <th>ID Konsultasi </th>
            <th>Nama </th>
            <th>Username </th>
            <th>Email </th>
            <th>Diagnosa </th>
            <th>Ubah </th>
            <th>Hapus </th>
          </tr>
        </thead>
        <tbody>
          <?php

$query = mysqli_query($connection, " SELECT d.id, d.id_konsultasi, a.nama, a.username, a.email, d.diagnosa FROM diagnosa d JOIN konsultasi k ON d.id_konsultasi = k.id JOIN anggota a ON k.id_anggota = a.id; ");
$no = 1;
while ($data = mysqli_fetch_array($query)) {
    ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data["id_konsultasi"]; ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["username"]; ?></td>
            <td><?php echo $data["email"]; ?></td>
            <td><?php echo $data["diagnosa"]; ?></td>
            <td>
              <form action="diagnosaedit.php" method="POST">
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
            <form action="fungsi/diagnosacode.php" method="post">
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