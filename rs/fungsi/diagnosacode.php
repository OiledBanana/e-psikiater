<?php
include 'keamanan.php';

if (isset($_POST['diagnosabtn'])) {

    $id_konsultasi = $_POST['id_konsultasi'];
    $diagnosa = $_POST['diagnosa'];

    $query = "INSERT INTO diagnosa (id_konsultasi,diagnosa) VALUES ('$id_konsultasi','$diagnosa')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../diagnosa.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../diagnosa.php');
    }

}

if (isset($_POST['updatebtn'])) {

    $id = $_POST['edit_id'];
    $id_konsultasi = $_POST['edit_id_konsultasi'];
    $diagnosa = $_POST['edit_diagnosa'];

    $query = "UPDATE diagnosa SET id_konsultasi='$id_konsultasi', diagnosa='$diagnosa' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil diupdate";
        header('Location: ../diagnosa.php');
    } else {
        $_SESSION['status'] = "Gagal diupdate";
        header('Location: ../diagnosa.php');
    }

}

if (isset($_POST['delete_btn'])) {

    $id = $_POST['delete_id'];

    $query = "DELETE FROM diagnosa WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil dihapus";
        header('Location: ../diagnosa.php');
    } else {
        $_SESSION['status'] = "Gagal dihapus";
        header('Location: ../diagnosa.php');
    }

}
