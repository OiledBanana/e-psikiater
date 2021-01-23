<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container-fluid">

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Edit Anggota </h6>
	</div>
	<div class="card-body">

    <?php

if (isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM anggota WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h4> ' . $_SESSION['success'] . ' </h4>';
        unset($_SESSION['success']);
    }

    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h4 class="bg-info"> ' . $_SESSION['status'] . ' </h4>';
        unset($_SESSION['status']);
    }

    foreach ($query_run as $data) {
        ?>

		<form action="fungsi/anggotacode.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="edit_id" value="<?php echo $data['id'] ?>">
				<div class="form-group">
                    <label> Name </label>
                    <input type="text" name="edit_nama" class="form-control" placeholder="Enter Name" value="<?php echo $data['nama']; ?>" >
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="edit_username" class="form-control" placeholder="Enter Username" value="<?php echo $data['username']; ?>" >
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="edit_email" class="form-control" placeholder="Enter Email" value="<?php echo $data['email']; ?>" >
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="edit_password" class="form-control" placeholder="Enter Password" value="<?php echo $data['password']; ?>" >
                </div>
                <div class="form-group">
                    <label>Profile Picture</label>
                    <input type="file" name="profile_picture" id="profile_picture" class="form-control" value="<?php echo $data['profile_picture']; ?>" >
                </div>
				<button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
				<a href="anggota.php" class="btn btn-danger">Cancel</a>

		</form>

        <?php
}

}
?>

	</div>
</div>
</div>

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>