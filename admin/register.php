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
      <form action="fungsi/regiscode.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Admin</h1>
        <form class="form-inline" target="_blank" method="post" action="registercetak.php">
              <button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Data</button>
        </form>
  </div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile
            </button>
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
            <th>ID </th>
            <th>Username </th>
            <th>Email </th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php

$query = mysqli_query($connection, "SELECT * FROM admin_register");
$no = 1;
while ($data = mysqli_fetch_array($query)) {
    ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data["username"]; ?></td>
            <td><?php echo $data["email"]; ?></td>
            <td><?php echo $data["password"]; ?></td>
            <td>
              <form action="regisedit.php" method="POST">
                <input type="hidden" name="edit_id" value="<?php echo $data['id']; ?>">
                <button type="submit" name="edit_btn" class="btn btn-success">Update</button>
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
            <form action="fungsi/regiscode.php" method="post">
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