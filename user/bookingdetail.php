<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container-fluid">

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Data Booking </h6>
	</div>
	<div class="card-body">

		<?php

if (isset($_POST['detail_btn'])) {
    $id = $_POST['detail_id'];

    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h4> ' . $_SESSION['success'] . ' </h4>';
        unset($_SESSION['success']);
    }

    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h4 class="bg-info"> ' . $_SESSION['status'] . ' </h4>';
        unset($_SESSION['status']);
    }

    $sql = " SELECT CONCAT('B-EP-',bk.id_booking) id_booking, a.nama nama_pasien, b.tanggal, d.nama nama_dokter, r.nama rumah_sakit, r.alamat alamat_rs FROM booking_dokter bk JOIN dokter d ON bk.id_dokter = d.id JOIN booking b ON bk.id_booking = b.id JOIN anggota a ON b.id_anggota = a.id JOIN rs r ON r.id = b.id_rs WHERE bk.id_booking ='$id' ; ";
    $result = $connection->query($sql);
    while ($data = $result->fetch_assoc()) {
        ?>

		<form action="fungsi/diagnosacode.php" method="post">
				<input type="hidden" name="edit_id" value="<?php echo $data['id'] ?>">
				<div class="form-group">
					<label> ID Booking </label>
					<input type="text" name="diagnosa_id_konsultasi" value="<?php echo $data['id_booking'] ?>" class="form-control" readonly>
				</div>
                <div class="form-group">
					<label>Nama Pasien </label>
					<input type="text" name="diagnosa_nama" value="<?php echo $data['nama_pasien'] ?>" class="form-control" readonly>
				</div>
                <div class="form-group">
					<label>Tanggal </label>
					<input type="text" name="diagnosa_username" value="<?php echo $data['tanggal'] ?>" class="form-control" readonly>
				</div>
                <div class="form-group">
					<label>Nama Dokter </label>
					<input type="text" name="diagnosa_email" value="<?php echo $data['nama_dokter'] ?>" class="form-control" readonly>
				</div>  
				<div class="form-group">
					<label>Rumah Sakit </label>
					<input type="text" name="diagnosa_hasil" value="<?php echo $data['rumah_sakit'] ?>" class="form-control" readonly>
				</div>
                <div class="form-group">
					<label>Alamat Rumah Sakit </label>
					<input type="text" name="diagnosa_hasil" value="<?php echo $data['alamat_rs'] ?>" class="form-control" readonly>
				</div>
		</form>
				<form action="beli_obat.php" method="POST">
					<a href="booking.php" class="btn btn-primary">Back</a>
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