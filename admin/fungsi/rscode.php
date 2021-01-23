<?php
include 'keamanan.php';

if (isset($_POST['rsbtn'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO rs (nama,email,alamat) VALUES ('$nama','$email','$alamat')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../rs.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../rs.php');
    }

}

if (isset($_POST['updatebtn'])) {

    $id = $_POST['edit_id'];
    $nama = $_POST['edit_nama'];
    $email = $_POST['edit_email'];
    $alamat = $_POST['edit_alamat'];

    $query = "UPDATE rs SET nama='$nama', email='$email', alamat='$alamat' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil diupdate";
        header('Location: ../rs.php');
    } else {
        $_SESSION['status'] = "Gagal diupdate";
        header('Location: ../rs.php');
    }

}

if (isset($_POST['delete_btn'])) {

    $id = $_POST['delete_id'];

    $query = "DELETE FROM rs WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil dihapus";
        header('Location: ../rs.php');
    } else {
        $_SESSION['status'] = "Gagal dihapus";
        header('Location: ../rs.php');
    }

}
