<?php
include 'keamanan.php';

if (isset($_POST['konsulbtn'])) {

    $id_anggota = $_POST['id_anggota'];
    $keluhan = $_POST['keluhan'];

    $query = "INSERT INTO konsultasi (id_anggota,keluhan) VALUES ('$id_anggota','$keluhan')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../konsultasi.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../konsultasi.php');
    }

}

if (isset($_POST['updatebtn'])) {

    $id = $_POST['edit_id'];
    $id_anggota = $_POST['edit_id_anggota'];
    $keluhan = $_POST['edit_keluhan'];

    $query = "UPDATE konsultasi SET id_anggota='$id_anggota', keluhan='$keluhan' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil diupdate";
        header('Location: ../konsultasi.php');
    } else {
        $_SESSION['status'] = "Gagal diupdate";
        header('Location: ../konsultasi.php');
    }

}

if (isset($_POST['delete_btn'])) {

    $id = $_POST['delete_id'];

    $query = "DELETE FROM konsultasi WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil dihapus";
        header('Location: ../konsultasi.php');
    } else {
        $_SESSION['status'] = "Gagal dihapus";
        header('Location: ../konsultasi.php');
    }

}
