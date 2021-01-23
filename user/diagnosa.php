<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container-fluid">

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Data Diagnosa </h6>
	</div>
	<div class="card-body">

		<?php

if (isset($_POST['diagnosa_btn'])) {
    $id = $_POST['diagnosa_id'];

    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h4> ' . $_SESSION['success'] . ' </h4>';
        unset($_SESSION['success']);
    }

    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h4 class="bg-info"> ' . $_SESSION['status'] . ' </h4>';
        unset($_SESSION['status']);
    }

    $sql = " SELECT d.id, CONCAT('K-EP-',d.id_konsultasi) id_konsultasi, a.nama, a.username, a.email, d.diagnosa FROM diagnosa d JOIN konsultasi k ON d.id_konsultasi = k.id JOIN anggota a ON k.id_anggota = a.id WHERE d.id_konsultasi='$id' ; ";
    $result = $connection->query($sql);
    while ($data = $result->fetch_assoc()) {
        ?>

		<form action="fungsi/diagnosacode.php" method="post">
				<input type="hidden" name="edit_id" value="<?php echo $data['id'] ?>">
				<div class="form-group">
					<label> ID Konsultasi </label>
					<input type="text" name="diagnosa_id_konsultasi" value="<?php echo $data['id_konsultasi'] ?>" class="form-control" readonly>
				</div>
                <div class="form-group">
					<label>Nama </label>
					<input type="text" name="diagnosa_nama" value="<?php echo $data['nama'] ?>" class="form-control" readonly>
				</div>
                <div class="form-group">
					<label>Username </label>
					<input type="text" name="diagnosa_username" value="<?php echo $data['username'] ?>" class="form-control" readonly>
				</div>
                <div class="form-group">
					<label>Email </label>
					<input type="text" name="diagnosa_email" value="<?php echo $data['email'] ?>" class="form-control" readonly>
				</div>  
				<div class="form-group">
					<label>Diagnosa </label>
					<input type="text" name="diagnosa_hasil" value="<?php echo $data['diagnosa'] ?>" class="form-control" readonly>
				</div>
		</form>
				<form action="beli_obat.php" method="POST">
					<input type="hidden" name="beli_obat_id" value="<?php echo $data['id']; ?>">
					<button type="submit" name="beli_obat_btn" class="btn btn-primary">Beli Obat</button>
					<a href="konsultasi.php" class="btn btn-danger">Cancel</a>
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