<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Saran</h1>
        <form class="form-inline" target="_blank" method="post" action="sarancetak.php">
              <button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Data</button>
        </form>
  </div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NO </th>
            <th>Nama </th>
            <th>Email </th>
            <th>Pesan </th>
            <th>Delete </th>
          </tr>
        </thead>
        <tbody>
          <?php

$query = mysqli_query($connection, " SELECT * FROM saran ");
$no = 1;
while ($data = mysqli_fetch_array($query)) {
    ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["email"]; ?></td>
            <td><?php echo $data["pesan"]; ?></td>
            <td>
            <form action="fungsi/sarancode.php" method="post">
            <input type="hidden" name="delete_id" value="<?php echo $data['id']; ?>">
            <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
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