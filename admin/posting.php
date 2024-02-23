<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="fungsi/postingcode.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Title </label>
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label>Sub Title</label>
                <input type="text" name="subtitle" class="form-control" placeholder="Enter Sub Title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter Description">
            </div>
            <div class="form-group">
                <label>Links</label>
                <input type="text" name="links" class="form-control" placeholder="Enter Links">
            </div>
            <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="posting_btn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Posting Page
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Posting Artikel
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
            <th>No </th>
            <th>Title </th>
            <th>Description </th>
            <th>Ubah </th>
            <th>Hapus </th>
          </tr>
        </thead>
        <tbody>
<?php
$query = mysqli_query($connection, "SELECT * FROM posting");
$no = 1;
while ($data = mysqli_fetch_array($query)) {
    ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data["title"]; ?></td>
            <td><?php echo $data["description"]; ?></td>
            <td>
              <form action="postingedit.php" method="POST">
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
            <form action="fungsi/postingcode.php" method="post">
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

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>
