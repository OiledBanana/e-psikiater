<?php
include '../../fungsi/keamanan.php';

if (isset($_POST['saranbtn'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    

    $query = "INSERT INTO saran (nama,email,pesan) VALUES ('$nama','$email','$pesan')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../../index.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../../index.php');
    }

}

?>
