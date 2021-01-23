<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- 404 Error Text -->
          <div class="text-center">
            <h1 class="display-4" style="color:#0fad00">Success</h1>
            <p><img src="https://icon-library.net/images/success-icon-png/success-icon-png-8.jpg" width="5%" height="5%"></p>
<?php
$query = mysqli_query($connection, "SELECT * FROM anggota WHERE username = '".$_SESSION['username']."' ");
while ($data = mysqli_fetch_array($query)) {
?>
            <p><h3>Teruntuk, <?php echo $data['nama']; ?></h3></p>
<?php
}
?>
            <p style="font-size:20px;color:#5C5C5C;">Terima kasih telah melakukan pembayaran, obatmu sedang diproses</p>
            <a href="index.php">&larr; Back to Dashboard</a>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>

    
