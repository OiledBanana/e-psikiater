<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container-fluid">

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Pilih Dokter </h6>
	</div>
	<div class="card-body">

		<?php

if (isset($_POST['dkt_btn'])) {
    $id = $_POST['dkt_id'];
    $rs = $_POST['dkt_rs'];

    $query = "SELECT * FROM booking WHERE id='$id'";
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

		<form action="fungsi/bookingcode.php" method="post">
				<input type="hidden" name="dkt_id_booking" value="<?php echo $data['id'] ?>">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" readonly name="dkt_nama" value="<?php echo $data['nama'] ?>" class="form-control" placeholder="Enter Nama">
                </div>

<?php

$rs = "SELECT * FROM dokter WHERE id_rs = '$rs' ";
$rs_run = mysqli_query($connection,$rs);

?>

            <div class="form-group">
                <label>Dokter</label>
                <select name="dkt_id_dokter" id="" class="form-control">
                <option value="">Pilih Dokter</option>
                <?php
                foreach($rs_run as $row){
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></option>
                <?php } ?>
                </select>
            </div>

				<button type="submit" name="dokterbtn" class="btn btn-primary">Save</button>
				<a href="booking.php" class="btn btn-danger">Cancel</a>

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