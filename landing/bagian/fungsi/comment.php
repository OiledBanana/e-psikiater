<?php
include '../../fungsi/keamanan.php';

if (isset($_POST['btnkomen'])) {
    $id_artikel = $_GET['id'];

    $nama = $_POST['nama'];
    $isi = $_POST['isi'];
    $tanggal = date("Y-m-d H:i:s");
    

    $query = "INSERT INTO komentar VALUES ('','$id_artikel','$nama','$isi','$tanggal')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../../index.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../../index.php');
    }
    echo "fghjk";

}

?>
