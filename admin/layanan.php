<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Layanan
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
            <th>No </th>
            <th>Title </th>
            <th>Description </th>
            <th>Ubah </th>
          </tr>
        </thead>
        <tbody>
<?php
$query = mysqli_query($connection, "SELECT * FROM layanan");
$no = 1;
while ($data = mysqli_fetch_array($query)) {
    ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["deskripsi"]; ?></td>
            <td>
              <form action="layananedit.php" method="POST">
                <input type="hidden" name="edit_id" value="<?php echo $data['id']; ?>">
                <button type="submit" name="edit_btn" class="btn btn-success">Ubah</button>
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

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>
