<?php
include 'keamanan.php';

if (isset($_POST['bookingbtn'])) {

    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $id_rs = $_POST['id_rs'];
    $tanggal = $_POST['tanggal'];

    if($tanggal < date('Y-m-d')){
        echo "<script>alert('Tanggal tidak boleh sebelum tanggal sekarang');window.location='../booking.php';</script>";
    }else{

    $query = "INSERT INTO booking (id_anggota,nama,alamat,id_rs,tanggal) VALUES ('$id_anggota','$nama','$alamat','$id_rs','$tanggal')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../booking.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../booking.php');
    }

    }

}

if (isset($_POST['dokterbtn'])) {

    $id_booking = $_POST['dkt_id_booking'];
    $id_dokter = $_POST['dkt_id_dokter'];
    $id_rs = $_POST['dkt_id_rs'];


    $query = "INSERT INTO booking_dokter (id_booking,id_dokter,id_rs) VALUES ('$id_booking','$id_dokter','$id_rs')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../booking.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../booking.php');
    }

}

if (isset($_POST['updatebtn'])) {

    $id = $_POST['edit_id'];
    $nama = $_POST['edit_nama'];
    $alamat = $_POST['edit_alamat'];
    $id_rs = $_POST['edit_id_rs'];
    $tanggal = $_POST['edit_tanggal'];

    if($tanggal < date('Y-m-d')){
        echo "<script>alert('Tanggal tidak boleh sebelum tanggal sekarang');window.location='../booking.php';</script>";
    }else{

    $query = "UPDATE booking SET id_rs='$id_rs', nama='$nama', alamat='$alamat', tanggal='$tanggal' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil diupdate";
        header('Location: ../booking.php');
    } else {
        $_SESSION['status'] = "Gagal diupdate";
        header('Location: ../booking.php');
    }
}

}

if (isset($_POST['delete_btn'])) {

    $id = $_POST['delete_id'];

    $query = "DELETE FROM booking WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil dihapus";
        header('Location: ../booking.php');
    } else {
        $_SESSION['status'] = "Gagal dihapus";
        header('Location: ../booking.php');
    }

}
