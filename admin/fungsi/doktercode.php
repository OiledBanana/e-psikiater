<?php
include 'keamanan.php';

if (isset($_POST['dokterbtn'])) {

    $nama = $_POST['nama'];
    $rs = $_POST['id_rs'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO dokter (id_rs,nama,alamat) VALUES ('$rs','$nama','$alamat')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../dokter.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../dokter.php');
    }

}

if (isset($_POST['updatebtn'])) {

    $id = $_POST['edit_id'];
    $nama = $_POST['edit_nama'];
    $rs = $_POST['edit_id_rs'];
    $alamat = $_POST['edit_alamat'];

    $query = "UPDATE dokter SET nama='$nama', id_rs='$rs', alamat='$alamat' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil diupdate";
        header('Location: ../dokter.php');
    } else {
        $_SESSION['status'] = "Gagal diupdate";
        header('Location: ../dokter.php');
    }

}

if (isset($_POST['delete_btn'])) {

    $id = $_POST['delete_id'];

    $query = "DELETE FROM dokter WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil dihapus";
        header('Location: ../dokter.php');
    } else {
        $_SESSION['status'] = "Gagal dihapus";
        header('Location: ../dokter.php');
    }

}
